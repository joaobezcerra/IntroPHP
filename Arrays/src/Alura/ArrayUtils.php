<?php declare(strict_types=1);

namespace Alura;

class ArrayUtils
{
    public static function remover(string $elemento, array &$array)
    {
        $posicao = array_search($elemento, $array, true);
        if(is_int($posicao)){
            unset($array[$posicao]);
        } else {
            echo "<p>Não foi possível encontrar no Array!</p>";
        }
    }

    public static function encontrarPessoasComSaldoMaior(int  $saldo,array $array): array 
    {
        $correntistasComSaldoMaior = array();
    
        foreach ($array as $chave => $valor) {
            if($valor > $saldo){
                $correntistasComSaldoMaior[] = $chave;
            }
        }

        return $correntistasComSaldoMaior;
    }
}