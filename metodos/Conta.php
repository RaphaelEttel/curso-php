<?php
  class Conta {
    public $numero;
    public $saldo;
    public $limite;
    public $agencia;
    public $extrato;

    public function __construct($numero){
      $this->numero = $numero;
      $this->limit = 100;
      $this->extrato = "-INICIO DA CONTA-\n";
    }

    //public function deposita()
    function deposita($valor) {
        $this->saldo += $valor;
        self::logExtrato($valor,1);
    }

    function saca($valor) {
      if ($valor <= $this->saldo) {
      $this->saldo -= $valor;
      self::logExtrato($valor,2);
      return TRUE;
      }
      else {
        return FALSE;
      }
    }

    private function logExtrato($valor,$operacao) {
      if ($operacao == 1) {
        $this->extrato .= "DEPOSITO \t+$valor\n";
      }
      else {
        $this->extrato .= "SAQUE \t\t-$valor\n";
      }
    }

    function imprimeExtrato() {
      return $this->extrato;
    }

    function consultaSaldoDisponivel() {
      return $this->saldo;
    }
  }
 ?>
