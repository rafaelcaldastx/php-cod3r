<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="assets/css/oswald.css">
  <link rel="stylesheet" href="assets/css/styles.css">
  <link rel="stylesheet" href="assets/css/exercicio.css">
  <title>Curso PHP</title>
</head>

<body class="exercicio">
  <header class="cabecalho">
    <h1>Curso PHP</h1>
    <h2>Visualização do Exercício</h2>
  </header>
  <nav class="navegacao">
    <a href=<?= "pages/" . $_GET['d'] . "/" . $_GET['f'] . ".php" ?> class="verde">Sem formatacao</a>
    <a href="index.php" class="vermelho">Voltar</a>
  </nav>
  <main class="principal">
    <div class="conteudo">
      <?php
      include("pages/" . $_GET['d'] . "/" . $_GET['f'] . ".php");
      ?>
    </div>
  </main>
  <footer class="rodape">
    Rafael Caldas © <?= date('Y'); ?>
    <sub>Created On Cod3r Course</sub>
  </footer>
</body>

</html>