<?php
  class Funcionario {
    public $nome;
    public $salario;

    function aumentaSalario($valor){
      $this->salario += $valor;
    }

    function consultaDados(){
      return "Nome:\t$this->nome\nSalário:$this->salario" . PHP_EOL;
    }
  }
 ?>
