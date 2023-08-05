<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <h1>Desenvolvimento Web</h1>
    </header>
    <div>
        <h2 class = "work-questions"> Trabalho: Questão 1</h2>

    </div>

    <main>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <fieldset>
        <legend>Gerador de Elementos</legend>
        <label>Quantidade de elementos (1 a 15):</label>
        <input type="number" name="quantidade" min="1" max="15" value="<?php echo isset($_POST['quantidade']) ? $_POST['quantidade'] : '1'; ?>"><br><br>

        <label>Tipo de elemento:</label> <br>
        <label><input type="radio" name="tipo_elemento" value="caixa-texto" <?php echo isset($_POST['tipo_elemento']) && $_POST['tipo_elemento'] === 'caixa-texto' ? 'checked' : ''; ?>>Texto</label> <br>
        <label><input type="radio" name="tipo_elemento" value="caixa-senha" <?php echo isset($_POST['tipo_elemento']) && $_POST['tipo_elemento'] === 'caixa-senha' ? 'checked' : ''; ?>>Senha</label><br>
        <label><input type="radio" name="tipo_elemento" value="botao" <?php echo isset($_POST['tipo_elemento']) && $_POST['tipo_elemento'] === 'botao' ? 'checked' : ''; ?>>Botão</label><br>
        <label><input type="radio" name="tipo_elemento" value="radio" <?php echo isset($_POST['tipo_elemento']) && $_POST['tipo_elemento'] === 'radio' ? 'checked' : ''; ?>>Rádio</label><br>
        <label><input type="radio" name="tipo_elemento" value="caixa-selecao" <?php echo isset($_POST['tipo_elemento']) && $_POST['tipo_elemento'] === 'caixa-selecao' ? 'checked' : ''; ?>>Caixa de seleção</label><br>
        <label><input type="radio" name="tipo_elemento" value="faixa" <?php echo isset($_POST['tipo_elemento']) && $_POST['tipo_elemento'] === 'faixa' ? 'checked' : ''; ?>>Faixa</label><br>

        <button type="submit">Gerar Exemplos</button>
        </fieldset>
    </form>
    

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $quantidade = intval($_POST["quantidade"]);
        $tipo_elemento = $_POST["tipo_elemento"];
    ?>

        <h2>Exemplos Gerados:</h2>
        <?php
        for ($i = 1; $i <= $quantidade; $i++) {
            $elemento = criarElementoHTML($tipo_elemento, $i);
        ?>
            <div>
                <?php echo $elemento; ?>
                <pre><?php echo htmlspecialchars($elemento); ?></pre>
            </div>
        <?php
        }
    }
    ?>

<?php
    function criarElementoHTML($tipo, $indice)
    {
        switch ($tipo) {
            case 'caixa-texto':
                return '<input type="text" name="caixa_texto_' . $indice . '" placeholder="Texto ' . $indice . '">';
            case 'caixa-senha':
                return '<input type="password" name="caixa_senha_' . $indice . '" placeholder="Senha ' . $indice . '">';
            case 'botao':
                return '<button type="button">Botão ' . $indice . '</button>';
            case 'radio':
                return '<input type="radio" name="grupo_radio" value="radio_' . $indice . '"> Botão de rádio ' . $indice;
            case 'caixa-selecao':
                return '<input type="checkbox" name="caixa_selecao_' . $indice . '"> Caixa de seleção ' . $indice;
            case 'faixa':
                return '<input type="range" name="faixa_' . $indice . '" min="1" max="100" value="50">';
            default:
                return '';
        }
    }
    
    ?>
    <a href="index.php"><button class = close-button>Página Inicial</button></a>    


    </main>

    <footer>
        <p>GC&AT- &copy;2023  </p>
    </footer>
    
</body>
</html>
