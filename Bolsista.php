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
 * Um bolsista é um tipo de aluno que não paga mensalidade
 * 
 */

require_once 'Aluno.php';

class Bolsista extends Aluno{
    private $nbolsa;//Número da bolsa
    
    
    public function getNbolsa()
    {
        return $this->nbolsa;
    }
    
    public function setNbolsa($n)
    {
        $this->nbolsa = $n;
    }
    
    public function __construct() {
        $this->mensalidade = 0;
    }
    
    public function pagarMensalidade() {
        parent::pagarMensalidade();
        echo "<script type='text/javascript'>"
        . "alert('Este aluno não paga mensalidade)"
                . "</script>";
    }


    /*
     * O bolsista também é um aluno, logo também é uma pessoa, dessa forma ele faz
     * as mesmas coisas que um aluno e uma pesoa faz com a diferença que ele não 
     * faz o pagamento de mensalidade.
     */
}
