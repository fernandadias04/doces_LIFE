<?php

if (!session_id())
    session_start();

$id = $_REQUEST['__id'] ?? null;

if (!$id || !isset($_SESSION[$id])) {
    header('Location: index.php');
    exit;
}

$data = $_SESSION[$id];
$doces = $data['doces'] ?? null;

unset($_SESSION[$id]);

?>



<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Calculadora Lara</title>
    <link rel="stylesheet" href="./assets/css/styles.css" />
  </head>
  <body>
    <div id="container">
      <h1>Calculadora de doces</h1>
      <h2>Obrigada, pelas respostas.</h2>
      <div class="decisive">

        <h3>Sua festa irá necessitar de: <?php echo $doces; ?> doces.</h3>
        </div>
  </body>
</html>
