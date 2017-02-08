<?php
  require_once 'Cliente.php';
  require_once 'CartaoDeCredito.php';

  $cliente = new Cliente;
  $cliente->nome = "Leroy";
  $cliente->codigo = 47;

  $cartao = new CartaoDeCredito;
  $cartao->numero = 1234;
  $cartao->dataDeValidade = "30/12/2020";
  $cartao->dono = $cliente;

  echo "Número do Cartão: $cartao->numero" . PHP_EOL;
  echo "Data de Validade: $cartao->dataDeValidade" . PHP_EOL;
  echo "Nome do Dono: {$cartao->dono->nome}" . PHP_EOL;
 ?>
