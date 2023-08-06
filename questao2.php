<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Mapa de Índice de Massa Corporal </title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/stylequestao2.css">
</head>
<body>
    <header>
        <h1>Desenvolvimento Web</h1>
    </header>
    <div>
        <h2 class = "work-questions"> Trabalho: Questão 2</h2>

    </div>

    <main>
    <h1>Mapa de Índice de Massa Corporal (IMC)</h1>
    <form method="post">
        <label for="peso"> Peso (kg): </label>
        <input type="number" name="peso" id="peso" required>
        <br>
        <label for="altura"> Altura (cm): </label>
        <input type="number" name="altura" id="altura" required>
        <br>
        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $peso = $_POST["peso"];
        $altura = $_POST["altura"] / 100;
        $imc = $peso / ($altura * $altura);
        $grau_imc = '';
        $cell_class = '';

        if ($imc < 16) {
            $grau_imc = 'Muito Grave';
            $cell_class = 'imc-muito-grave';
        } elseif ($imc >= 16 && $imc < 17) {
            $grau_imc = 'Baixo Grave';
            $cell_class = 'imc-baixo-grave';
        } elseif ($imc >= 17 && $imc < 18.5) {
            $grau_imc = 'Baixo';
            $cell_class = 'imc-baixo';
        } elseif ($imc >= 18.5 && $imc < 25) {
            $grau_imc = 'Ideal';
            $cell_class = 'imc-ideal';
        } elseif ($imc >= 25 && $imc < 30) {
            $grau_imc = 'Sobrepeso';
            $cell_class = 'imc-sobrepeso';
        } elseif ($imc >= 30 && $imc < 35) {
            $grau_imc = 'Obesidade I';
            $cell_class = 'imc-obesidade-i';
        } elseif ($imc >= 35 && $imc < 40) {
            $grau_imc = 'Obesidade II';
            $cell_class = 'imc-obesidade-ii';
        } else {
            $grau_imc = 'Obesidade III';
            $cell_class = 'imc-obesidade-iii';
        }

        echo '<br><div>Seu IMC é: ' . number_format($imc, 2) . ' - Grau: ' . $grau_imc . '</div>';
    }
    ?>

    <h2> Tabela de IMC </h2>
    <table>
        <thead>
            <tr>
                <th> Peso (kg) \ Altura (cm) </th>
                <?php
                for ($i = 46; $i <= 120; $i++) {
                    echo '<th>' . $i . '</th>';
                }
                ?>
            </tr>
        </thead>
        <tbody>
            <?php
            for ($altura = 146; $altura <= 210; $altura++) {
                echo '<tr>';
                echo '<td>' . $altura . '</td>';

                for ($peso = 46; $peso <= 120; $peso++) {
                    $imc = $peso / ($altura / 100 * $altura / 100);
                    if ($imc < 16) {
                        $cell_class = 'imc-muito-grave';
                        $grau_imc = 'Muito Grave';
                    } elseif ($imc >= 16 && $imc < 17) {
                        $cell_class = 'imc-baixo-grave';
                        $grau_imc = 'Baixo Grave';
                    } elseif ($imc >= 17 && $imc < 18.5) {
                        $cell_class = 'imc-baixo';
                        $grau_imc = 'Baixo';
                    } elseif ($imc >= 18.5 && $imc < 25) {
                        $cell_class = 'imc-ideal';
                        $grau_imc = 'Ideal';
                    } elseif ($imc >= 25 && $imc < 30) {
                        $cell_class = 'imc-sobrepeso';
                        $grau_imc = 'Sobrepeso';
                    } elseif ($imc >= 30 && $imc < 35) {
                        $cell_class = 'imc-obesidade-i';
                        $grau_imc = 'Obesidade I';
                    } elseif ($imc >= 35 && $imc < 40) {
                        $cell_class = 'imc-obesidade-ii';
                        $grau_imc = 'Obesidade II';
                    } else {
                        $cell_class = 'imc-obesidade-iii';
                        $grau_imc = 'Obesidade III';
                    }

                    echo '<td class="' . $cell_class . '">';
                    echo '<div class="detalhes">Especificação: ' . $grau_imc . '<br>Peso: ' . $peso . ' kg<br>Altura: ' . $altura . ' cm<br>IMC: ' . number_format($imc, 2) . ' - Grau: ' . $grau_imc . '</div>';
                    echo '</td>';
                }

                echo '</tr>';
            }
            ?>
        </tbody>
    </table>
    <a href="index.php"><button class = close-button>Página Inicial</button></a>   

    </main>

    <footer>
        <p>GC&AT- &copy;2023  </p>
    </footer>
    
</body>
</html>
