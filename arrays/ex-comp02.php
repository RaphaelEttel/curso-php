<?php
  $vetor = array(2, 3, 4, 5);

  $multiplicacao = 1;

  foreach ($vetor as $numero) {
    $multiplicacao *= $numero;
  }

  $produto = array();

  for($i = 0;$i < count($vetor); $i++){
    $produto[$i] = $multiplicacao / $vetor[$i];
  }
  print_r($vetor);
  print_r($produto);
 ?>
