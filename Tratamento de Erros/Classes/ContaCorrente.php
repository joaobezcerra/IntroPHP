<?php

namespace Classes;

use Classes\Validacao;
use Classes\LerArquivo;
use Exceptions\SaldoInsulficienteException;
use Exceptions\OperacaoNaoRealizadaException;

class ContaCorrente
{

    private $titular;

    public $agencia;

    private $numero;

    private $saldo;

    public static $totalDeConta;

    public static $valorTaxa;

    public static $operacaoNaoRealizada;

    public function __construct($titular, $agencia, $numero, $saldo)
    {
        $this->titular = $titular;
        $this->agencia = $agencia;
        $this->numero = $numero;
        $this->saldo = $saldo;

        self::$totalDeConta++;

        try {
            if(self::$totalDeConta < 1){
                throw new \Exception("Não é possível realizar divisão por zero!!!!");
            }
            self::$valorTaxa = (30 / self::$totalDeConta);
        } catch (\Exception $erro) {
            echo $erro->getMessage();
            exit;
        }
    }

    public function depositar($valor)
    {
        $this->saldo += $valor;
        return $this;
    }

    public function sacar($valor)
    {
        Validacao::verificaNumerico($valor);
        Validacao::verificaNegativo($valor);

        if($valor > $this->saldo){
            throw new SaldoInsulficienteException("Saldo insulficiente", $valor, $this->saldo);
        }

        $this->saldo -= $valor;
        return $this;
    }

    public function transferir($valor, ContaCorrente $conta)
    {
        try {
            $leitorArquivo = new LerArquivo("logBancario.txt");

            $leitorArquivo->abrirArquivo();
            $leitorArquivo->escreverArquivo();
            

            Validacao::verificaNumerico($valor);
            Validacao::verificaNegativo($valor);
    
            $this->sacar($valor);
            $conta->depositar($valor);
            
            return $this;
        } catch (\Exception $erro) {
            ContaCorrente::$operacaoNaoRealizada++;
            throw new OperacaoNaoRealizadaException("Operação não realizada", 55, $erro);
        } finally {
            $leitorArquivo->fecharArquivo();
        }
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