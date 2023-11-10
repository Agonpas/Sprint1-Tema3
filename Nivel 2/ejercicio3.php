<?php
/* creamos un array con números enteros*/
$arrayEnteros = array(2, 3, 4, 5, 7, 9, 13, 15);
/*hacemos un función que nos identifique los números primos*/
function numerosPrimos($numero) {
    if ($numero == 1 || $numero == 2) {
        return true;
    } else {
        for ($i = 2; $i < $numero; $i++) {
            if ($numero % $i == 0) {
                return false;
            }
        }
        return true;
    }
}
/* usamos array_reduce para sumar los numeros primos que contiene el array*/
$sumaPrimos = array_reduce ($arrayEnteros, function($carry, $numero) { /*la función $carry acumulamos los valores del array reducido*/
    if (numerosPrimos($numero)) { /*llamamos a la función si el numero es primo lo añadimos a $carry*/
        return $carry + $numero;
    }
    return $carry;
},0);/* aqui indicamos el valor inicial del acumulador $carry*/
/*visualizamos los resultados*/
echo "\n";
echo "Array original: " . implode(", ", $arrayEnteros) . "\n"; /*implode muestra el contenido de un array de forma ordenada*/
echo "\n";
echo "Suma de los elementos: " . $sumaPrimos . "\n";
?>