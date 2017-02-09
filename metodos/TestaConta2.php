<?php
  require_once 'Conta.php';

  $conta = new Conta(123,1);

  $conta->deposita(1000);
  echo "Extrato:\n{$conta->imprimeExtrato()}" . PHP_EOL;

  $conta->saca(100);
  echo "Extrato:\n{$conta->imprimeExtrato()}" . PHP_EOL;
  echo "Saldo:\n{$conta->consultaSaldoDisponivel()}" . PHP_EOL;
 ?>
