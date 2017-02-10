<?php
  class Conta{
    public $numero;           //Att do Objeto
    public $saldo;            //Att do Objeto
    public static $contador;  //Att da Classe

    public function __construct (){
      self::$contador++;
    }

    public static function zeraContador(){
      //Envia E-mail
      self::$contador = 0;
    }

  }
 ?>
