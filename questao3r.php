<!DOCTYPE html>
<html lang="en">
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
        <h2 class="work-questions"> Trabalho: Questão3</h2>
    </div>

    <main>
        <h2>Suas Respostas: </h2>
        <p>Questão 1: <?php echo $_GET['resp1']; ?></p>
        <p>Questão 2: <?php echo $_GET['resp2']; ?></p>
        <p>Questão 3: <?php echo $_GET['resp3']; ?></p>
        <p>Questão 4: <?php echo $_GET['resp4']; ?></p>

        <h2>Resultado Final</h2>
        <p>
            <?php
            $acertos = 0;
            if ($_GET['resp1'] == 'c') {
                $acertos++;
            }
            if ($_GET['resp2'] == 'b') {
                $acertos++;
            }
            if ($_GET['resp3'] == 'd') {
                $acertos++;
            }
            if ($_GET['resp4'] == 'd') {
                $acertos++;
            }
            echo "Você acertou $acertos questões de 4.";
            ?>
        </p>
        <a href="index.php"><button class = close-button>Página Inicial</button></a>   
    </main>

    <footer>
        <p>GC&AT- &copy;2023  </p>
    </footer>
    
</body>
</html>
