<?php

namespace Alura\Banco\Modelo;

/**
 * @property-read string $cidade
 * @property-read string $bairro
 * @property-read string $rua
 * @property-read string $numero
 */
class Endereco
{
    private $cidade;
    private $bairro;
    private $rua;
    private $numero;

    use AcessoPropriedades;

    public function __construct(string $cidade, string $bairro, string $rua, string $numero)
    {
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->rua = $rua;
        $this->numero = $numero;
    }

    public function recuperaCidade()
    {
        return $this->cidade;
    }

    public function alteraCidade($cidade)
    {
        $this->cidade = $cidade;
    }

    public function recuperaBairro()
    {
        return $this->bairro;
    }

    public function alteraBairro($bairro)
    {
        $this->bairro = $bairro;
    }

    public function recuperaRua()
    {
        return $this->rua;
    }

    public function alteraRua($rua)
    {
        $this->rua = $rua;
    }

    public function recuperaNumero()
    {
        return $this->numero;
    }

    public function alteraNumero($numero)
    {
        $this->numero = $numero;
    }

    public function __toString()
    {
        return "{$this->rua}, {$this->numero}, {$this->bairro}, {$this->cidade}";
    }

    public function __set($name, $value)
    {
        $metodo = 'altera' . ucfirst($name);
        $this->$metodo($value);
    }
}
