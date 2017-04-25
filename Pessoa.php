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
            
   protected function getCpf()
   {
       return $this->cpf;
   }
   
   protected function setCpf($cpf)
   {
       $this->cpf = $cpf;
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
   * Toda pessoa possui um nome, sobrenome e CPF dentro de uma instituição de ensino
   */
}
