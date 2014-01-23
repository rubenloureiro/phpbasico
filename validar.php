<?php

/* 
 * Funciones para validar formularios
 */

/**
 * Definición de constantes
 */
define('EDAD_MINIMA', 1);
define('EDAD_MAXIMA', 100);

/**
 * Si un valor es un número entero
 * @param type $valor
 */
function validarEntero($valor) {
    if (filter_var($valor, FILTER_VALIDATE_INT)) {
           return true;
    } else {
        return false;
    }
}

/**
 * 
 * @param type $valor
 * @param type $inicio
 * @param type $final
 * @return type
 */
function comprobarRango($valor, $inicio, $final) {
    return ($valor>=$inicio && $valor<=$final);
}

function validarEdad($valor) {
    if(validarEntero($valor) && comprobarRango($valor, EDAD_MINIMA, EDAD_MAXIMA));
}

function limpiarTexto ($valor) {
       if(isset($valor)) {
        $valor = htmlspecialchars($valor, ENT_QUOTES, "ISO-8859-1");
        $valor = strip_tags(trim($valor));
    } else {
        $valor = "";
    } 
    return $valor;
}
/**
 * 
 * @param type $valor
 * @return boolean
 */

function validarNombre($valor) {
   $valor= limpiartexto ($valor);
    if ($valor == "") {
        return false;
    } else {
        return true;
    }
}

/**
 * Verifica que un nombre solo tenga letras,
 * al menos una
 * @param type $valor
 */
function validarNombreEstricto ($valor) {
    $patron = "/^[[:alpha:]]+$/";
    if (preg_match($patron, $valor)) {
        return true;
    } else {
        return false;
    }
}