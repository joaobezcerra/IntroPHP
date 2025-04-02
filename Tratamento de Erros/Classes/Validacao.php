<?php

namespace Classes;

class Validacao {

    public static function protegeAtributo($atributo)
    {
        if($atributo == "titular" || $atributo == "saldo" ){
            throw new \Exception("O atributo $atributo é privado");
        }
    }

    public static function verificaNegativo($valor)
    {
        if($valor < 0){
            throw new \Exception("Você não pode transferir um valor menor que zero!!!");
        }
    }

    public static function verificaNumerico($valor)
    {
        if(!is_numeric($valor)){
            throw new \InvalidArgumentException("O valor passado na variável não é um valor numerico");
        }
    }
}