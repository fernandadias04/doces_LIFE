<?php

class CalculoDoces {

/** Constantes referentes aos eventos Casamento e Aniversarios de 15 anos*/
const ALMOCO_CASAMENTO15ANOS = 5;
const JANTAR_CASAMENTO15ANOS = 5;
const FINGER_CASAMENTO15ANOS = 7;
const DURACAO_ATE6_CASAMENTO15ANOS = 0;
const DURACAO_MAIS6_CASAMENTO15ANOS = 1;
const DURACAO_MAIS10_CASAMENTO15ANOS = 2;
const BEBIDA_ALCOLICA_SIM_CASAMENTO15ANOS = 1;
const BEBIDA_ALCOLICA_NAO_CASAMENTO15ANOS = 1;
const SOBREMESA_NAO_CASAMENTO15ANOS = 2;

/** Constantes referentes ao evento aniversario de adulto */
const ALMOCO_ANIVERSARIO_ADULTO = 4;
const JANTAR_ANIVERSARIO_ADULTO = 4;
const FINGER_ANIVERSARIO_ADULTO = 6;
const COM_FESTA_ANIVERSARIO_ADULTO = 1;
const SEM_FESTA_ANIVERSARIO_ADULTO = 0;
const BEBIDA_ALCOLICA_SIM_ANIVERSARIO_ADULTO = 1;
const BEBIDA_ALCOLICA_NAO_ANIVERSARIO_ADULTO = 2;

/** Constantes referentes aos eventos anversario infantil e batizado */
const ALMOCO_INFANTIL_BATIZADO = 4;
const CAFE_INFANTIL_BATIZADO = 4;
const DURACAO_ATE3_INFANTIL_BATIZADO = 0;
const DURACAO_MAIS3_INFANTIL_BATIZADO = 1;
const DURACAO_MAIS5_INFANTIL_BATIZADO = 2;
const SOBREMESA_NAO_INFANTIL_BATIZADO = 0;



protected $tipoFesta;
protected $qtdConvidados;
protected $duracaoEvento;
protected $outrosDoces;
protected $bebidas;
protected $sabores;
protected $refeicao;
protected $idadeConvidados;


public function __construct($tipoFesta, $qtdConvidados, $duracaoEvento, $outrosDoces, $bebidas, $sabores, $refeicao, $idadeConvidados)
{
    $this->tipoFesta = $tipoFesta;
    $this->qtdConvidados = $qtdConvidados;
    $this->duracaoEvento = $duracaoEvento;
    $this->outrosDoces = $outrosDoces;
    $this->bebidas = $bebidas;
    $this->sabores = $sabores;
    $this->refeicao = $refeicao;
    $this->idadeConvidados = $idadeConvidados;
}


/** Função que calcula doces necessarios para os eventos casamenoto ou festas de 15 anos */
function calculoDocesCasamentoAni15($qtdConvidados, $duracaoEvento, $outrosDoces, $bebidas, $sabores, $refeicao, $idadeConvidados)
{
    $doces = 0; 
    if ($duracaoEvento <= 6){

    }

}

function duracaoEvento()
{
    
}


}