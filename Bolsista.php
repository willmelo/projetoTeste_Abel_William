<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Bolsista
 *
 * @author microsoft
 */


/*
 * Um bolsista é um tipo de aluno que pode não pagar mensalidade, 
 * ou pode pagar somente uma parte dela
 */

require_once 'Aluno.php';

class Bolsista extends Aluno{
    private $nbolsa, $tipo;//Número da bolsa
    
    
    public function getNbolsa()
    {
        return $this->nbolsa;
    }
    
    public function setNbolsa($n)
    {
        $this->nbolsa = $n;
    }
    
    public function getTipo()
    {
        return $this->tipo;
    }
    
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }
    
    public function __construct() {
        if ($this->getTipo() == 100)
        {
            $this->mensalidade = 0;
        } else{
            if ($this->getTipo() == 50)
            {
                $this->mensalidade = 250;
            } else{
                $this->mensalidade = 125;
            }
        }
    }
}
