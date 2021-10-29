<?php

require_once('calculoDoces.php');

$dados = new CalculoDoces($_REQUEST['qtdConvidados'], $_REQUEST['duracao'], $_REQUEST['sobremesa'], $_REQUEST['bebida'],  $_REQUEST['comida']) ?? null;

if (!session_id())
    session_start();

$doces = 0;

$doces = $this->caulculoNiverAdulto($dados->qtdConvidados, $dados->duracao, $dados->sobremesa, $dados->bebida, $dados->comida);

$id = uniqid();

$_SESSION[$id] = [
    'doces' => strtoupper($doces)
];

header('Location: view.php?__id='.$id);
    exit;

?>