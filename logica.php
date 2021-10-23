<?php

class CalculoDoces
{

    /** Constantes referentes aos eventos Casamento e Aniversarios de 15 anos*/
    const ALMOCO_CASAMENTO15ANOS = 5;
    const JANTAR_CASAMENTO15ANOS = 5;
    const FINGER_CASAMENTO15ANOS = 7;
    const DURACAO_ATE6_CASAMENTO15ANOS = 0;
    const DURACAO_MAIS6_CASAMENTO15ANOS = 1;
    const DURACAO_MAIS10_CASAMENTO15ANOS = 2;
    const BEBIDA_ALCOLICA_SIM_CASAMENTO15ANOS = 1;
    const BEBIDA_ALCOLICA_NAO_CASAMENTO15ANOS = 2;
    const SOBREMESA_NAO_CASAMENTO15ANOS = 2;
    const SOBREMESA_SIM_CASAMENTO15ANOS = -1;

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



    public function comidaServida($refeicao, $const1 = 0, $const2 = 0, $const3 = 0, $const4 = 0)
    {
        if ($refeicao = 'Almoço') {
            $doces = $const1;
        }

        if ($refeicao = 'Jantar') {
            $doces = $const2;
        }

        if ($refeicao = 'Finger Food') {
            $doces = $const3;
        }

        if ($refeicao = 'Café') {
            $doces = $const4;
        }


        return $doces;
    }


    public function duracaoEventoCasamentoFesta15($duracaoEvento, $const1 = 0, $const2 = 0, $const3 = 0)
    {
        if ($duracaoEvento <= 6) {
            $doces = $const1;
        }

        if ($duracaoEvento > 6 && $duracaoEvento < 10) {
            $doces = $const2;
        }

        if ($duracaoEvento >= 10) {
            $doces = $const3;
        }

        return $doces;
    }

    public function duracaoEventoInfantilBatizado($duracaoEvento,  $const1 = 0, $const2 = 0, $const3 = 0)
    {
        if ($duracaoEvento <= 3) {
            $doces = $const1;
        }

        if ($duracaoEvento > 3 && $duracaoEvento < 5) {
            $doces = $const2;
        }

        if ($duracaoEvento >= 5) {
            $doces = $const3;
        }

        return $doces;
    }

    public function duracaoEventoAdulto($duracaoEvento, $const1 = 0, $const2 = 0)
    {
        if ($duracaoEvento = true) {
            $doces = $const1;
        } else {
            $doces = $const2;
        }

        return $doces;
    }

    public function sobremesa($sobremesa, $const1 = 0, $const2 = 0)
    {
        if ($sobremesa = true) {
            $doces = $const1;
        } else {
            $doces = $const2;
        }

        return $doces;
    }

    public function bebida($bebidas, $const1 = 0, $const2 = 0)
    {
        if ($bebidas = true) {
            $doces = $const1;
        } else {
            $doces = $const2;
        }

        return $doces;
    }

    public function calculoCasamentoAni15($qtdConvidados, $duracaoEvento, $outrosDoces, $bebidas, $sabores, $refeicao, $idadeConvidados)
    {
        $doces = 0;

        $doces += $this->comidaServida($refeicao, static::ALMOCO_CASAMENTO15ANOS, static::JANTAR_CASAMENTO15ANOS, static::FINGER_CASAMENTO15ANOS);

        $doces += $this->duracaoEventoCasamentoFesta15($duracaoEvento, static::DURACAO_ATE6_CASAMENTO15ANOS, static::DURACAO_MAIS6_CASAMENTO15ANOS, static::DURACAO_MAIS10_CASAMENTO15ANOS);

        $doces += $this->sobremesa($outrosDoces, static::SOBREMESA_SIM_CASAMENTO15ANOS, static::SOBREMESA_NAO_CASAMENTO15ANOS);

        $doces += $this->bebida($bebidas, static::BEBIDA_ALCOLICA_SIM_CASAMENTO15ANOS, static::BEBIDA_ALCOLICA_NAO_CASAMENTO15ANOS);

        $doces = $doces * $qtdConvidados;

        return $doces;
    }

    public function caulculoNiverAdulto($qtdConvidados, $duracaoEvento, $outrosDoces, $bebidas, $sabores, $refeicao, $idadeConvidados)
    {
        $doces = 0;

        $doces += $this->comidaServida($refeicao, static::ALMOCO_ANIVERSARIO_ADULTO, static::JANTAR_ANIVERSARIO_ADULTO, static::FINGER_ANIVERSARIO_ADULTO);
        
        $doces += $this->duracaoEventoCasamentoFesta15($duracaoEvento, static::DURACAO_ATE6_CASAMENTO15ANOS, static::DURACAO_MAIS6_CASAMENTO15ANOS, static::DURACAO_MAIS10_CASAMENTO15ANOS);

        $doces += $this->bebida($bebidas, static::BEBIDA_ALCOLICA_SIM_CASAMENTO15ANOS, static::BEBIDA_ALCOLICA_NAO_CASAMENTO15ANOS);

        $doces = $doces * $qtdConvidados;

        return $doces;
    }

    
}
