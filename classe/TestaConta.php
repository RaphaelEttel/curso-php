<?php
  require_once 'Conta.php';

  echo "Contador: " . PHP_EOL;

  $x = new Conta;
  $x->numero = 11;
  $x->saldo = 600;

  $y = new Conta;
  $y->numero = 12;
  $y->saldo = 130;

  Conta::zeraContador();
 ?>
