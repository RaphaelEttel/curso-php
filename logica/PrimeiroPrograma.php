<?php

  $nome = "Raphael";

  echo "Primeiro programa em PHP que nao roda num servidor" . PHP_EOL;
  echo "Nome : $nome" . PHP_EOL;
  echo 'Nome : $nome' . PHP_EOL;

  $resultado = 10 % 3;
  echo "\nResto da divisao de 10 por 3 = $resultado\n";

  $resultado = 5 / 2;
  echo "\nResultado 5 / 2 = $resultado\n";

  $saldo = 100;
  $saldo += 300;
  echo "\nSaldo final = $saldo\n";
  $saldo -=200;
  echo "Saldo após saque = $saldo\n";

  $a = 10;
  $b = "10";

  $resultado = $a == $b;
  echo "a == b : $resultado\n" . PHP_EOL;

  var_dump($a == $b);

  $resultado = $a === $b;
  echo "a === b : $resultado\n" . PHP_EOL;

  var_dump($a === $b);

  //---------------------------------------------//
  echo "\n------------------------------------------------------------------------------------------\n\n";
  //---------------------------------------------//

  $altura = 2.10;
  //altura mínima para entrar é 1.40
  //altura máxima para entrar é 2.00

  $resultado = $altura >= 1.40 && $altura <= 2;
  echo '$resultado = $altura >= 1.40 && $altura <= 2;' . var_dump($resultado);


  if ($altura >= 1.40 && $altura <= 2){
    echo "Pode entrar" . PHP_EOL;
  } else {
    echo "Não pode entrar" . PHP_EOL;
  }

  //---------------------------------------------//
  echo "\n------------------------------------------------------------------------------------------\n\n";
  //---------------------------------------------//

  // $contador = 0;
  // while ($contador < 10) {
  //   echo "contador = $contador\n";
  //   $contador++;
  // }

  for ($contador=0; $contador < 10 ; $contador++) {
    echo "contador = $contador\n";
  }

  ?>
