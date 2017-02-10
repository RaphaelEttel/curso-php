<?php
  require_once 'Gerente.php';
  require_once 'Telefonista.php';
  require_once 'Secretario.php';

  $gerente = new Gerente;
  $gerente->nome = "Rafael Cosentino";
  $gerente->salario = 2000;
  $gerente->usuario = "rafael.cosentino";
  $gerente->senha = "12345";

  $telefonista = new Telefonista;
  $telefonista->nome = "Carolina Mello";
  $telefonista->salario = 1000;
  $telefonista->estacaoDeTrabalho = 13;

  $secretario = new Secretario;
  $secretario->nome = "Tatiane Andrade";
  $secretario->salario = 1500;
  $secretario->ramal = 198;
 ?>
