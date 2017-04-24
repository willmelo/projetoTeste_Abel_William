<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Professor
 *
 * @author microsoft
 */

require_once 'Pessoa.php';

class Professor extends Pessoa{
    private $materia;//Um professor ensina uma matéria
    /*
     * Um professor é uma especialização de pessoa, um tipo especifico de pessoa.
     */
    
    public function getMateria()
    {
        return $this->materia;
    }
    
    public function setMateria($materia)
    {
        $this->materia = $materia;
    }
    
    public function setNome($nome) {
        parent::setNome($nome);
        $this->nome = $nome;
    }
    
    public function getNome() {
        parent::getNome();
        return $this->sobrenome;
    }
    
    public function getCpf() {
        parent::getCpf();
        return $this->cpf;
    }
    
    public function setCpf($cpf) {
        parent::setCpf($cpf);
        $this->cpf = $cpf;
    }
}
