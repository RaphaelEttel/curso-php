<?php
  require_once 'Conta.php';

  $conta = new Conta(123,1);
  // $conta->numero = 13;

  //Depósito de 700
  $conta->deposita(700);

  echo "Saldo da Conta: $conta->saldo" . PHP_EOL;

  $resultado = $conta->saca(500);

  // var_dump($resultado);

  //Tratamento de excessões
  if ($resultado == TRUE) {
    echo "Saque efetuado com sucesso." . PHP_EOL;
  }
  else {
    echo "Saldo insuficiente." . PHP_EOL;
  }

  $resultado = $conta->saca(300);

  //Tratamento de excessões
  if ($resultado == TRUE) {
    echo "Saque efetuado com sucesso." . PHP_EOL;
  }
  else {
    echo "Saldo insuficiente." . PHP_EOL;
  }

  // echo "Saldo após saque: $conta->saldo" . PHP_EOL;
  // var_dump($conta->$extrato);
  // $extrato = $conta->imprimeExtrato();
  //
  echo "Extrato: \n{$conta->imprimeExtrato()}" . PHP_EOL;
  echo "Saldo: {$conta->consultaSaldoDisponivel()}" . PHP_EOL;

 ?>
