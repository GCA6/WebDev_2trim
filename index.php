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
        <h2 class = "work-questions"> Trabalho: Questões</h2>
    </div>

    <main>
        <nav>
            <ul>
                <li><a href="questao1.php">Questão 1</a></li>
                <li><a href="questao2.php">Questão 2</a></li>
                <li><a href="questao3.php">Questão 3</a></li>
                <li><a href="questao4.php">Questão 4</a></li>
            </ul>
        </nav>
        <audio autoplay loop>
        <source src="barbie_theme.mp3" type="audio/mpeg">
        Seu navegador não suporta a reprodução de áudio.
    </audio>
    <!-- Caixa de aviso -->
    <div class="alert-box">
        <p>Para uma experiência completa, acesse as configurações <br>
            do site e permita a reprodução de áudios.
        </p>
        <button class="close-button" onclick="hideAlertBox()">Fechar</button>
    </div>

    <!-- Script para ocultar a caixa de aviso -->
    <script>
        function hideAlertBox() {
            var alertBox = document.querySelector('.alert-box');
            alertBox.style.display = 'none';
        }
    </script>
    </main>

    <footer>
        <p>GC&AT- &copy;2023  </p>
    </footer>
    
</body>
</html>
