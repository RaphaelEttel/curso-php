<?php
  $a = 0;
  $b = 1;

  for ($i=0; $i < 14; $i++) {
    echo "$a";

    //Imprime ", " somente entre os números
    if ($i != 13)
      echo ", ";

    //Incremento da sequência
    $aux = $b;
    $b = $a + $b;
    $a = $aux;
  }
  echo "\n";
 ?>
