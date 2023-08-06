<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Simulador de investimentos financeiros</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/stylequestao4.css">
</head>
<body>
    <header>
        <h1> Desenvolvimento Web </h1>
    </header>

    <div>
        <h2 class = "work-questions"> Trabalho: Questão 4</h2>
    </div>

    <main>
    <?php
    function calcularRendimento($valorInicial, $aporteMensal, $taxaRendimento)
    {
        $rendimento = ($valorInicial + $aporteMensal) * ($taxaRendimento / 100);
        $total = $valorInicial + $aporteMensal + $rendimento;
        return array($rendimento, $total);
    }

    $valorInicial = isset($_POST['valor_inicial']) ? floatval(str_replace(',', '.', str_replace('.', '', $_POST['valor_inicial']))) : 0;
    $periodo = isset($_POST['periodo']) ? intval($_POST['periodo']) : 12;
    $taxaRendimento = isset($_POST['taxa_rendimento']) ? floatval($_POST['taxa_rendimento']) : 0.68;
    $aporteMensal = isset($_POST['aporte_mensal']) ? floatval(str_replace(',', '.', str_replace('.', '', $_POST['aporte_mensal']))) : 0;

    $valorInicial = max(0, min(999999.99, $valorInicial));
    $periodo = max(1, min(480, $periodo));
    $taxaRendimento = max(0, min(20, $taxaRendimento));
    $aporteMensal = max(0, min(999999.99, $aporteMensal));
    ?>

    <h1>Simulador de Investimentos Financeiros</h1>
    <form method="post" action="">
        <label for="valor_inicial">Valor Inicial (até R$ 999.999,99):</label>
        R$ <input type="text" name="valor_inicial" id="valor_inicial" value="<?php echo number_format($valorInicial, 2, ',', '.'); ?>"><br>
        <label for="periodo">Período (meses de 1 a 480):</label>
        <input type="number" name="periodo" id="periodo" value="<?php echo $periodo; ?>"><br>
        <label for="taxa_rendimento">Rendimento Mensal (até 20%):</label>
        <input type="number" step="0.01" name="taxa_rendimento" id="taxa_rendimento" value="<?php echo $taxaRendimento; ?>"><br>
        <label for="aporte_mensal">Aporte Mensal (até R$ 999.999,99):</label>
        R$ <input type="text" name="aporte_mensal" id="aporte_mensal" value="<?php echo number_format($aporteMensal, 2, ',', '.'); ?>"><br>
        <input type="submit" value="Simular">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        echo "<div class='table-container'>";
        echo "<h2 style='text-align: center;'>Resultado da simulação:</h2>";
        echo "<table>";
        echo "<tr><th>Mês</th><th>Valor Inicial</th><th>Aporte</th><th>Rendimento</th><th>Total</th></tr>";

        $valorInicialOriginal = $valorInicial;
        for ($mes = 1; $mes <= $periodo; $mes++) {
            $aporte = $mes === 1 ? 0 : $aporteMensal;
            list($rendimento, $total) = calcularRendimento($valorInicial, $aporte, $taxaRendimento);

            echo "<tr>";
            echo "<td>$mes</td>";
            echo "<td>R$ " . number_format($valorInicial, 2, ',', '.') . "</td>";
            echo "<td>R$ " . number_format($aporte, 2, ',', '.') . "</td>";
            echo "<td>R$ " . number_format($rendimento, 2, ',', '.') . "</td>";
            echo "<td>R$ " . number_format($total, 2, ',', '.') . "</td>";
            echo "</tr>";

            $valorInicial = $total;
        }
        echo "</table>";
        echo "</div>";
    }
    ?>
    <br>
     <a href="index.php"><button class = close-button>Página Inicial</button></a>   
    </main>

    <footer>
        <p>GC&AT- &copy;2023  </p>
    </footer>
    
</body>
</html>
