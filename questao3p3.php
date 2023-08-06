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
    <h1>Questão 3</h1>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit?</p>
    <ul>
        <li><a href="questao3p4.php?resp1=<?= $_GET['resp1'] ?>&resp2=<?= $_GET['resp2'] ?>&resp3=a">Opção A</a></li>
        <li><a href="questao3p4.php?resp1=<?= $_GET['resp1'] ?>&resp2=<?= $_GET['resp2'] ?>&resp3=b">Opção B</a></li>
        <li><a href="questao3p4.php?resp1=<?= $_GET['resp1'] ?>&resp2=<?= $_GET['resp2'] ?>&resp3=c">Opção C</a></li>
        <li><a style = "color:green" href="questao3p4.php?resp1=<?= $_GET['resp1']  ?>&resp2=<?= $_GET['resp2'] ?>&resp3=d">Opção D</a></li>
        <li><a href="questao3p4.php?resp1=<?= $_GET['resp1'] ?>&resp2=<?= $_GET['resp2'] ?>&resp3=e">Opção E</a></li>
    </ul>
    </main>

    <footer>
        <p>GC&AT- &copy;2023  </p>
    </footer>
    
</body>
</html>
