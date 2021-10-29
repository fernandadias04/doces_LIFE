<?php

require_once('calculoDoces.php');

$dados = new CalculoDoces($_REQUEST['qtdConvidados'], $_REQUEST['duracao'], $_REQUEST['sobremesa'], $_REQUEST['bebida'],  $_REQUEST['comida']);


if (!session_id())
    session_start();

$doces = 0;

$doces = $dados->calculoBatizado();

$id = uniqid();

$_SESSION[$id] = [
    'doces' => strtoupper($doces)
];

header('Location: ../view.php?__id='.$id);
    exit;

?>