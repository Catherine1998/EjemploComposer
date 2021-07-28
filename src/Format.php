<?php

namespace Text; # configuracion que se puso en el composer , gripo de trabajo 
#se le asigna al espacio de text
class Format
{

    public static function upperText($value)
    {
        return strtoupper($value);
    }

    public static function lowerText($value){
        return strtolower($value);    }
}
