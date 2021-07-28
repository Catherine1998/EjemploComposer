<?php

if (!function_exists('upper')) { //si no existe oper usalo y ya existe no lo vuelve a cargar
    function upper($value)
    {
        return Text\Format::upperText($value);
    }
}

if (!function_exists('lower')) {
    function lower($value)
    {
        return Text\Format::lowerText($value);
    }
}
