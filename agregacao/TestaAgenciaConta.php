<?php
  require_once 'Agencia.php';
  require_once 'Conta.php';

  $agencia = new Agencia;
  $agencia->numero = 178;

  $conta = new Conta;
  $conta->numero = 123;
  $conta->saldo = 1000.0;
  $conta->limite = 500;
  $conta->agencia = $agencia;

  echo "Conta - " . PHP_EOL;
    echo "\tAgencia:{$conta->agencia->numero}" . PHP_EOL;
    echo "\tNúmero:\t$conta->numero" . PHP_EOL;
    echo "\tSaldo:\t$conta->saldo" . PHP_EOL;
    echo "\tLimite:\t$conta->limite" . PHP_EOL;
 ?>
