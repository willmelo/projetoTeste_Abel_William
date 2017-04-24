<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Pessoa
 *
 * @author microsoft
 */
class Pessoa {
    private $nome, $sobrenome, $cpf;
    protected $cargo;
            
   protected function getCpf()
   {
       return $this->cpf;
   }
   
   protected function setCpf($cpf)
   {
       $this->cpf = $cpf;
   }
   
   protected function getCargo()
   {
       return $this->cargo;
   }
   
   protected function setCargo($cargo)
   {
       $this->cargo = $cargo;
   }
   
   protected function getNome()
   {
       return $this->nome;
   }
   
   protected function setNome($nome)
   {
       $this->nome = $nome;
   }
   
   protected function getSobrenome()
   {
       return $this->sobrenome;
   }
   
   protected function setSobrenome($sobrenome)
   {
       $this->sobrenome = $sobrenome;
   }


   /*
    * Toda pessoa possui um nome um sobrenome e um cargo dentro de um colégio, como 
    * a mesma é uma classe generelista(das quais serão herdadas atributos e métodos)
    * seus atributos são todos protegidos,para que as classes filhas também tenham acesso
    * aos mesmos.
    */
}
