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
    const FESTA_MADRUGADA_SIM = -1;
    const FESTA_MADRUGADA_NAO = 0;

    /** Constantes referentes ao evento aniversario de adulto */
    const ALMOCO_ANIVERSARIO_ADULTO = 4;
    const JANTAR_ANIVERSARIO_ADULTO = 4;
    const FINGER_ANIVERSARIO_ADULTO = 6;
    const CAFE_ANIVERSARIO_ADULTO = 4;
    const COM_FESTA_ANIVERSARIO_ADULTO = 1;
    const SEM_FESTA_ANIVERSARIO_ADULTO = 0;
    const BEBIDA_ALCOLICA_SIM_ANIVERSARIO_ADULTO = 1;
    const BEBIDA_ALCOLICA_NAO_ANIVERSARIO_ADULTO = 2;
    const SOBREMESA_NAO_ADULTO = 2;
    const SOBREMESA_SIM_ADULTO = -1;

    /** Constantes referentes aos eventos anversario infantil e batizado */
    const ALMOCO_INFANTIL_BATIZADO = 3;
    const CAFE_INFANTIL_BATIZADO = 3;
    const DURACAO_ATE3_INFANTIL_BATIZADO = 0;
    const DURACAO_MAIS3_INFANTIL_BATIZADO = 1;
    const DURACAO_MAIS5_INFANTIL_BATIZADO = 2;
    const SOBREMESA_NAO_INFANTIL_BATIZADO = 1;
    const SOBREMESA_SIM_INFANTIL_BATIZADO = 0;
    const BEBIDA_SIM_INFANTIL_BATIZADO = 1;
    const BEBIDA_NAO_INFANTIL_BATIZADO = 1;
    const CONVIDADOS_CRIANÇAS = 1;
    const CONVIDADOS_ADULTOS = 0;
    const CONVIDADOS_IGUAIS = 0;

    protected $qtdConvidados;
    protected $duracaoEvento;
    protected $outrosDoces;
    protected $bebidas;
    protected $refeicao;
    protected $idadeConvidados;
    protected $festaMadrugada;

    public function __construct($qtdConvidados, $duracaoEvento, $outrosDoces, $bebidas, $refeicao, $idadeConvidados, $festaMadrugada)
    {
        $this->qtdConvidados = $qtdConvidados;
        $this->duracaoEvento = $duracaoEvento;
        $this->outrosDoces = $outrosDoces;
        $this->bebidas = $bebidas;
        $this->refeicao = $refeicao;
        $this->idadeConvidados = $idadeConvidados;
        $this->$festaMadrugada = $festaMadrugada;
    }



    public function comidaServida($refeicao, $const1 = 0, $const2 = 0, $const3 = 0, $const4 = 0, $const5=0)
    {
        if ($refeicao == 'option1') {
            $doces = $const1;
        }

        if ($refeicao == 'option2') {
            $doces = $const2;
        }

        if ($refeicao == 'option3') {
            $doces = $const3;
        }

        if ($refeicao == 'option4') {
            $doces = $const4;
        }

        if ($refeicao == 'option5') {
            $doces = $const5;
        }


        return $doces;
    }


    public function duracaoEventoCasamentoFesta15($duracaoEvento, $const1 = 0, $const2 = 0, $const3 = 0)
    {
        if ($duracaoEvento == 'option1') {
            $doces = $const1;
        }

        if ($duracaoEvento == 'option2') {
            $doces = $const2;
        }

        if ($duracaoEvento == 'option3') {
            $doces = $const3;
        }

        return $doces;
    }

    public function duracaoEventoInfantilBatizado($duracaoEvento,  $const1 = 0, $const2 = 0, $const3 = 0)
    {
        if ($duracaoEvento == 'option1') {
            $doces = $const1;
        }

        if ($duracaoEvento == 'option2') {
            $doces = $const2;
        }

        if ($duracaoEvento == 'option3') {
            $doces = $const3;
        }

        return $doces;
    }

    public function duracaoEventoAdulto($duracaoEvento, $const1 = 0, $const2 = 0)
    {
        if ($duracaoEvento == 'option1') {
            $doces = $const1;
        } else {
            $doces = $const2;
        }

        return $doces;
    }

    public function festaMadrugada($festaMadrugada, $const1 = 0, $const2 = 0)
    {
        if ($festaMadrugada == 'option1') {
            $doces = $const1;
        } else {
            $doces = $const2;
        }

        return $doces;
    }

    public function sobremesa($sobremesa, $const1 = 0, $const2 = 0)
    {
        if ($sobremesa == 'option1') {
            $doces = $const1;
        } 
        
        if ($sobremesa == 'option2') {
            $doces = $const2;
        }

        return $doces;
    }

    public function bebida($bebidas, $const1 = 0, $const2 = 0)
    {
        if ($bebidas == 'option1') {
            $doces = $const1;
        } 

        if ($bebidas == 'option2') {
            $doces = $const2;
        }

        return $doces;
    }

    public function idadeConvidadosInfantil($idadeConvidados, $const1= 0, $const2 = 0, $const3 = 0 )
    {
        if ($idadeConvidados == 'option1') {
            $doces = $const1;
        }

        if ($idadeConvidados == 'option2') {
            $doces = $const2;
        }

        if ($idadeConvidados == 'option3') {
            $doces = $const3;
        }

        return $doces;
    }

    public function calculoCasamentoAni15()
    {
        $doces = 0;

        $doces += $this->comidaServida($this->refeicao, static::ALMOCO_CASAMENTO15ANOS, static::JANTAR_CASAMENTO15ANOS, static::FINGER_CASAMENTO15ANOS);
    
        $doces += $this->duracaoEventoCasamentoFesta15($this->duracaoEvento, static::DURACAO_ATE6_CASAMENTO15ANOS, static::DURACAO_MAIS6_CASAMENTO15ANOS, static::DURACAO_MAIS10_CASAMENTO15ANOS);

        $doces += $this->sobremesa($this->outrosDoces, static::SOBREMESA_SIM_CASAMENTO15ANOS, static::SOBREMESA_NAO_CASAMENTO15ANOS);

        $doces += $this->bebida($this->bebidas, static::BEBIDA_ALCOLICA_SIM_CASAMENTO15ANOS, static::BEBIDA_ALCOLICA_NAO_CASAMENTO15ANOS);

        $doces += $this->festaMadrugada($this->festaMadrugada, static::FESTA_MADRUGADA_SIM, static::FESTA_MADRUGADA_NAO);
        
        $doces = $doces * $this->qtdConvidados;

        return $doces;
    }

    public function calculoNiverAdulto()
    {
        $doces = 0;

        $doces += $this->comidaServida($this->refeicao, static::ALMOCO_ANIVERSARIO_ADULTO, static::JANTAR_ANIVERSARIO_ADULTO, static::FINGER_ANIVERSARIO_ADULTO);

        $doces += $this->duracaoEventoCasamentoFesta15($this->duracaoEvento, static::DURACAO_ATE6_CASAMENTO15ANOS, static::DURACAO_MAIS6_CASAMENTO15ANOS, static::DURACAO_MAIS10_CASAMENTO15ANOS);

        $doces += $this->bebida($this->bebidas, static::BEBIDA_ALCOLICA_SIM_CASAMENTO15ANOS, static::BEBIDA_ALCOLICA_NAO_CASAMENTO15ANOS);

        $doces += $this->sobremesa($this->outrosDoces, static::SOBREMESA_SIM_ADULTO, static::SOBREMESA_NAO_ADULTO);

        $doces = $doces * $this->qtdConvidados;

        return $doces;
    }

    public function calculoBatizado()
    {
        $doces = 0;

        $doces += $this->comidaServida($this->refeicao, static::ALMOCO_INFANTIL_BATIZADO, 0, 0, static::CAFE_INFANTIL_BATIZADO);

        $doces += $this->duracaoEventoInfantilBatizado($this->duracaoEvento, static::DURACAO_ATE3_INFANTIL_BATIZADO, static::DURACAO_MAIS3_INFANTIL_BATIZADO, static::DURACAO_MAIS5_INFANTIL_BATIZADO);

        $doces += $this->sobremesa($this->outrosDoces, static::SOBREMESA_SIM_INFANTIL_BATIZADO, static::SOBREMESA_NAO_INFANTIL_BATIZADO);

        $doces += $this->bebida($this->bebidas, static::BEBIDA_ALCOLICA_SIM_CASAMENTO15ANOS, static::BEBIDA_NAO_INFANTIL_BATIZADO);

        $doces+=$this->idadeConvidadosInfantil($this->idadeConvidados, static::CONVIDADOS_CRIANÇAS, static::CONVIDADOS_ADULTOS, static::CONVIDADOS_IGUAIS);

        $doces = $doces * $this->qtdConvidados;

        return $doces;
    }
}
