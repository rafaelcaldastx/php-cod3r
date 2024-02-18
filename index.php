<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/oswald.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>Curso PHP</title>
</head>

<body>
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>ìndice do exercicio</h2>
    </header>
    <main class="principal">
        <div class="conteudo">
            <nav class="modulos">
                <div class="modulo verde">
                    <h3>Modulo 01</h3>
                    <ul>
                        <li><a href="exercicio.php?d=ex1&f=index">Exercicio A</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </main>
    <footer class="rodape">
        Rafael Caldas © <?= date('Y'); ?>
        <sub>Created On Cod3r Course</sub>
    </footer>
</body>

</html>