<?php

/* 
Funciones para validar formularios
 */
/**
 * Definición de constantes
 */
define('EDAD_MINIMA', 1);
define('EDAD_MAXIMA', 100);
/**
 * Indica si un valor es un número entero.
 * @param type $valor
 * @return boolean 
 */
function validarEntero($valor) {
if (filter_var($valor, FILTER_VALIDATE_INT)) {
        return true;
}else {
    return FALSE;
      }
}


function comprobarRango($valor, $inicio, $final) {
    return ($valor>=$inicio && $valor<=$final);
}

function validarEdad($valor) {
   return (validarEntero($valor)&& 
           comprobarRango($valor, EDAD_MINIMA, EDAD_MAXIMA));
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


function validarNombre ($valor) {
    $valor = limpiarTexto($valor);
    if ($valor == "") {
        return false;
    } else {
        return true;
    }
}
 
/**
 * Verifica que un nombre solo tenga letras, al menos una
 */
/**
 * 
 * @param type $valor
 * @return boolean
 */
function validarNombreEstricto ($valor) {
    $patron = "/^[[:alpha:]]+$/";
    if (preg_match($patron, $valor)) {
        return true;
    } else {
        return false;
    }
}


function resultadoCheck ($valor=NULL) {
    if (isset ($valor)){
        return true;
    } 
     }