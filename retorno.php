<?php

require_once('calculoDoces.php');

$dados = new CalculoDoces($_REQUEST['tipoFesta'], $_REQUEST['qtdConvidados'], $_REQUEST['duracaoEvento'], $_REQUEST['outrosDoces'], $_REQUEST['bebidas'], $_REQUEST['sabores'], $_REQUEST['refeicao'], $_REQUEST['idadeConvidados']) ?? null;

if (!session_id())
    session_start();

$doces = 0;

if($dados->tipoFesta = 'Casamento' || $dados->tipoFesta = 'Festa de 15 Anos')
{
    $doces = $this->calculoCasamentoAni15($dados->qtdConvidados, $dados->duracaoEvento, $dados->outrosDoces, $dados->bebidas, $dados->sabores, $dados->refeicao, $dados->idadeConvidados);
}

if($dados->tipoFesta = 'Aniversário Adulto')
{
    $doces = $this->caulculoNiverAdulto($dados->qtdConvidados, $dados->duracaoEvento, $dados->outrosDoces, $dados->bebidas, $dados->sabores, $dados->refeicao, $dados->idadeConvidados);
}

if($dados->tipoFesta = 'Aniversário Infantil' || $dados->tipoFesta = 'Batizado')
{
    $doces = $this->caulculoBatizado($dados->qtdConvidados, $dados->duracaoEvento, $dados->outrosDoces, $dados->bebidas, $dados->sabores, $dados->refeicao, $dados->idadeConvidados);
}

$id = uniqid();

$_SESSION[$id] = [
    'doces' => strtoupper($doces)
];

header('Location: view.php?__id='.$id);
    exit;

?>