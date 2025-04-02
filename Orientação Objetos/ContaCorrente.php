<?php

class ContaCorrente{

    private $titular;

    public $agencia;

    private $numero;

    private $saldo;

    public function __construct($titular, $agencia, $numero, $saldo)
    {
        $this->titular = $titular;
        $this->agencia = $agencia;
        $this->numero = $numero;
        $this->saldo = $saldo;
    }

    public function depositar($valor)
    {
        $this->saldo += $valor;
        return $this;
    }

    public function sacar($valor)
    {
        $this->saldo -= $valor;
        return $this;
    }

    public function transferir(float $valor, ContaCorrente $conta)
    {
        $this->sacar($valor);
        $conta->depositar($valor);
        return $this;
    }

    public function __get($atributo)
    {
        return $this->$atributo;
    }

    public function __set($atributo, $valor)
    {
        Validacao::protegeAtributo($atributo);
        $this->$atributo = $valor;
    }

    // public function getSaldo()
    // {
    //     return $this->saldo;
    // }

    // public function getTitular()
    // {
    //     return $this->titular;
    // }

    // public function setNumero($numero)
    // {
    //     $this->numero = $numero;
    // }

    private function formataSaldo()
    {
        return number_format($this->saldo, 2, ",", ".");
    }

    public function getSaldo()
    {
        return $this->formataSaldo();
    }

    public function __toString()
    {
        return "O titular da conta é $this->titular e seu saldo é $this->saldo";
    }
}