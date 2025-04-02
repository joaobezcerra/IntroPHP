<?php

namespace Alura\Banco\Modelo\Conta;

abstract class Conta
{
    private $titular;
    protected $saldo;
    private static $numeroDeContas = 0;

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;

        self::$numeroDeContas++;
    }

    public function __destruct()
    {
        self::$numeroDeContas--;
    }

    public function saca(float $valorASacar): void
    {
        $tarifaSaque = $valorASacar * $this->valorTarifa();
        $valorSaque = $valorASacar + $tarifaSaque;
        if ($valorSaque > $this->saldo) {
            echo 'Saldo Indisponível!!!';
            return;
        }
        $this->saldo -= $valorSaque;
    }

    public function deposita(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            echo 'Não é possível depositar um valor negativo!!!';
            return;
        }
        $this->saldo += $valorADepositar;
    }

    public function recuperaSaldo()
    {
        return $this->saldo;
    }

    // public function defineCpfTitular(String $cpf)
    // {
    //     $this->cpfTitutar = $cpf;
    // }

    public function recuperaCpfTitular()
    {
        return $this->titular->recuperaCpf();
    }

    // public function defineNomeTitular(string $nome)
    // {
    //     $this->nomeTitular = $nome;
    // }

    public function recuperaNomeTitular()
    {
        return $this->titular->recuperaNome();
    }

    public static function recuperaNumeroDeContas()
    {
        return self::$numeroDeContas;
    }

    abstract protected function valorTarifa(): float;
}
