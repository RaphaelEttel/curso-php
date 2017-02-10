<?php
  class Funcionario{
      public $nome;
      public $salario;

      public function calculaBonificacao() {
        return $salario * 0.1;
      }
  }
 ?>
