<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Aluno
 *
 * @author microsoft
 */

/*
 * O aluno também herda atributos da classe pessoa, posi ele tambvém é uma pessoa
 */

require_once 'Pessoa.php';

class Aluno extends Pessoa{
    protected $turma, $ano, $idade, $mensalidade;
    
    public function getIdade()
    {
        return $this->idade;
    }
    
    public function setIdade($idade)
    {
        $this->idade = $idade;
    }
    
    public function getTurma()
    {
        return $this->turma;
    }
    
    public function setTurma($turma)
    {
        $this->turma = $turma;
    }
    
    public function getAno()
    {
        return $this->ano;
    }
    
    public function setAno($ano)
    {
        $this->ano = $ano;
    }
    
    public function getMensalidade($mensalidade)
    {
        return $mensalidade;
    }
    
    public function setMensalidade($mensalidade)
    {
        $this->mensalidade = $mensalidade;
    }
    
    public function getNome() {
        parent::getNome();
        return $this->nome;
    }
    
    public function setNome($nome) {
        parent::setNome($nome);
        $this->nome = $nome;
    }
    
    public function getSobrenome() {
        parent::getSobrenome();
        return $this->sobrenome;
    }
    
    public function setSobrenome($sobrenome) {
        parent::setSobrenome($sobrenome);
        $this->sobrenome = $sobrenome;
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
