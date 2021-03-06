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
  <link rel="stylesheet" href="./assets/css/stylesresul.css" />
  <link rel="shortcut icon" type="image/png" href="./assets/img/logo.png">
</head>
<body>
  <div class="banner">
    <h1>Calculadora de doces</h1>
  </div>
  <div id="container">


    <div class="decisive">

      <h2>Para seu evento estimamos que sejam necessários:<span> <?php echo $doces['doces']; ?> doces. </span> </h2>

      <h3>Ressaltamos que esse cálculo leva em consideração nossos anos de experiência com eventos e cultura de nossa região. 
        Entretanto fatores como perfil de convidados e costumes podem alterar esse cálculo. 
        Entre em contato conosco, será um prazer adoçar seu evento!<br><br>
        <span> Sabores sugeridos com base nas suas respostas:</span> <br>
      </h3>



      <div class="lateral">
        <?php 
        if ($doces['evento'] == 'niveradulto' || $doces['evento'] == 'casamento' )
        { 

          if($doces['preferencia'] == 'option1')
            {  ?>
              <img src="./assets/img/sabores_tradicionais.png" alt="imagem de doces">
              <img src="./assets/img/sabores_tradicionais_2.png" alt="imagem de doces">
              <img src="./assets/img/sabores_tradicionais_3.png" alt="imagem de doces">
              <img src="./assets/img/sabores_tradicionais_4.png" alt="imagem de doces">
              <img src="./assets/img/sabores_tradicionais_5.png" alt="imagem de doces">
              <img src="./assets/img/sabores_tradicionais_6.png" alt="imagem de doces">
              <img src="./assets/img/sabores_tradicionais_7.png" alt="imagem de doces">
            <?php } 

            if($doces['preferencia'] == 'option2')
              {  ?>

                <img src="./assets/img/sabores_diferentes_2.png" alt="imagem de doces">
                <img src="./assets/img/sabores_diferentes_3.png" alt="imagem de doces">
                <img src="./assets/img/sabores_diferentes_4.png" alt="imagem de doces">
                <img src="./assets/img/sabores_diferentes_5.png" alt="imagem de doces">
                <img src="./assets/img/sabores_diferentes_6.png" alt="imagem de doces">
                <img src="./assets/img/sabores_diferentes_7.png" alt="imagem de doces">
                <img src="./assets/img/sabores_diferentes_8.png" alt="imagem de doces">

              <?php } 
              
              if($doces['preferencia'] == 'option3')
                {  ?>

                  <img src="./assets/img/sabores_tradicionais.png" alt="imagem de doces">
                  <img src="./assets/img/sabores_tradicionais_2.png" alt="imagem de doces">
                  <img src="./assets/img/sabores_tradicionais_3.png" alt="imagem de doces">
                  <img src="./assets/img/sabores_tradicionais_4.png" alt="imagem de doces">
                  <img src="./assets/img/sabores_diferentes_2.png" alt="imagem de doces">
                  <img src="./assets/img/sabores_diferentes_3.png" alt="imagem de doces">
                  <img src="./assets/img/sabores_diferentes_4.png" alt="imagem de doces">

                <?php }
                if($doces['idade'] == 'option2'){ ?>
                 <img src="./assets/img/acim_de_40_anos.png" alt="imagem de doces">

               <?php } 

               if($doces['idade'] == 'option1'){ ?>
                <img src="./assets/img/abaixo_de_40_anos.png" alt="imagem de doces">

                <?php
              }
            }

            ?>



            <?php 
            if ($doces['evento'] == 'infantil')
              { ?>

                <img src="./assets/img/sabores_tradicionais_3.png" alt="imagem de doces">
                <img src="./assets/img/sabores_diferentes_7.png" alt="imagem de doces">
                <img src="./assets/img/sabores_tradicionais.png" alt="imagem de doces">
                <img src="./assets/img/abaixo_de_40_anos.png" alt="imagem de doces">

                <?php 

              }
              ?>

            </div>
                <a class="envio" href="https://ceudocesfinos.com/faca-seu-pedido/">Solicitar orçamento</a>

          </div>
        </body>
        </html>