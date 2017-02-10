<?php
  require_once 'Funcionario.php';

  class Gerente extends Funcionario {
    public $usuario;
    public $senha;

    public function calculaBonificacao() {
      return $salario * 0.1;
    }
  }
 ?>
