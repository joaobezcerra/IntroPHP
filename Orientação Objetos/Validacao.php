<?php

class Validacao {

    public static function protegeAtributo($atributo)
    {
        if($atributo == "titular" || $atributo == "saldo" ){
            throw new Exception("O atributo $atributo é privado");
        }
    }
}