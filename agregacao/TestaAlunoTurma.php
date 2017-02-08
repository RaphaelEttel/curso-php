<?php
  require_once 'Aluno.php';
  require_once 'Turma.php';

  $turma = new Turma;
  $turma->periodo = 'Manhã';
  $turma->serie = 5;
  $turma->sigla = 'B';
  $turma->tipoDeEnsino = 'Ensino Fundamental';

  $aluno = new Aluno;
  $aluno->nome = "Rafael Cosentino";
  $aluno->dataNascimento = "30/10/1984";
  $aluno->rg = 12345678;
  $aluno->turma = $turma;

  echo "Aluno - " . PHP_EOL;
  echo "\tNome:\t\t$aluno->nome" . PHP_EOL;
  echo "\tData De Nascimento:\t\t$aluno->dataNascimento" . PHP_EOL;
  echo "\tRG:\t\t$aluno->rg" . PHP_EOL;
  echo "\tTurma:";
 ?>
