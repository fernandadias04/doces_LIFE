<?php

require_once('calculoDoces.php');

$dados = new CalculoDoces($_REQUEST['qtdConvidados'], $_REQUEST['duracao'], $_REQUEST['sobremesa'], $_REQUEST['bebida'],  $_REQUEST['comida'], $_REQUEST['convidados'], $_REQUEST['lanche']);

if (!session_id())
    session_start();

$doces = 0;

    $doces = $dados->calculoCasamentoAni15();



$id = uniqid();

$_SESSION[$id] = [
    'doces' => $doces
];

header('Location: ../resultado.php?__id='.$id);
    exit;

?>