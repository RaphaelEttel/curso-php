<?php
  require_once 'Funcionario.php';

  $funcionario = new Funcionario();
  $funcionario->nome = "Rafael Cosentino";
  $funcionario->salario = 1000;

  $dados = $funcionario->consultaDados();
  echo "USANDO FUNC(CONSULTA DADOS)-\n$dados" . PHP_EOL;
 ?>
