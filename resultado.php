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
  <div class="banner">
        <h1>Calculadora de doces</h1>
    </div>
    <div id="container">
    
     
      <div class="decisive">

        <h2>Para seu evento estimamos que sejam necessários: <?php echo $doces; ?> doces.</h2>

        <h3>Ressaltamos que esse cálculo leva em consideração nossos anos de experiência com eventos e cultura de nossa região. 
          Entretanto fatores como perfil de convidados e costumes podem alterar esse cálculo. 
          Entre em contato conosco, será um prazer adoçar seu evento!</h3>

          Sabores sugeridos com base nas suas respostas: 
          <img src="#" alt="imagem de doces">
          <img src="#" alt="imagem de doces">
          <img src="#" alt="imagem de doces">
        </div>
  </body>
</html>
