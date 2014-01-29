<?php

/**
 * Definición de constantes
 */
define('PESO_MIN', 1); //Kgs
define('PESO_MAX', 500);

/**
 * Definición de constantes
 */
define('ESTAT_MIN', 30); //cms
define('ESTAT_MAX', 300);

/**
 * Definición de errores
 */
define('MSG_ERR_PESO', 'El peso debe ser un valor ...');
define('MSG_ERR_ESTATURA', 'La estatura debe ser un valor ...');

/**Calcula el valor IMC
 *$param masa expresada en kilos [0-500]
 *$param estatura expresada en centímetros [0-300]
 *$return float resultado del cálculo IMC redondeado a dos decimales
 *$link http://es.wikipedia.org/wiki/%C3%8Dndice_de_masa_corporal 
 */

function calculoIMC ($masa, $estatura) {
   $estatura = $_REQUEST['estatura']/100; //*Centímetros a metros
   $IMC = ($masa / ($estatura*$estatura));
   return round ($IMC, 2); //*Con "round" lo que hacemos es indicarle después que nos de el IMC con una aproximación de 2 cifras
}

/**
 * Clasficación IMC
 * Calcula la clasificación...
 * $param IMC Valor válido de IMC
 * $return string Contiene clasificación según valor
 * $link http://es.wikipedia.org/wiki/%C3%8Dndice_de_masa_corporal 
 */
 
function clasificacionIMC ($IMC) {
    if ($IMC <18.5){
            $clasificacion = "Bajo peso";
        }
            elseif ($IMC>18.5 &&  $IMC<24.99){
             $clasificacion = "Normal";
         }
            elseif ($IMC>=25 && $IMC<=29.99){
             $clasificacion = "Sobrepeso";
        }
            elseif ($IMC>=30){
             $clasificacion = "Obesidad";
        }
        return $clasificacion;
       
}

/**
 * enRango
 * Indica si un valor está en un rango determinado [inicio, fin]
 * @param inicio
 * @param fin
 * @param valor
 * @return TRUE si valor está en el rango [inicio, fin] sino FALSE
 */

function enRango ($inicio, $fin, $valor) {
    return ($valor>=$inicio && $valor<=$fin);
}

/**
 * validarPeso
 * Indica si el valor de peso es correcto
 * @param masa debe ser un valor numérico en constantes [PESO_MIN, PESO_MAX]
 * @return boolean devuelve TRUE si cumple y FALSE en caso contrario
 */

function validarPeso ($masa) {
    if (filter_var($masa, FILTER_VALIDATE_INT))  {
        $resultado = enRango(PESO_MIN, PESO_MAX, $masa);
    } else {
        $resultado = FALSE;
    }
    return $resultado;
        
}

/**
 * validarEstatura
 * Indica si el valor de estatura es correcto
 * @param estatura debe ser un valor numérico entre lo definido en constantes [ESTAT_MIN, ESTAT_MAX]
 * @return boolean devuelve TRUE si cumple y FALSE en caso contrario
 */

function validarEstatura ($estatura) {
    if (filter_var($estatura, FILTER_VALIDATE_INT))  {
        $resultado = enRango(ESTAT_MIN, ESTAT_MAX, $estatura);
    } else {
        $resultado = FALSE;
    }
    return $resultado;
}
?>