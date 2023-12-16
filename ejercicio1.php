<?php
$numeros = array(); /*creamos array */
$numeros = [1, 3, 2, 5, 8]; /*llenamos el array */
/*ahora mostrmos los 5 valores de uno en uno */
echo $numeros [0] . "\n";
echo $numeros [1] . "\n";
echo $numeros [2] . "\n";
echo $numeros [3] . "\n";
echo $numeros [4] . "\n";
/*mostramos toda la info del array: numero de variables, posición, tipo de variable y los valores de estas*/
echo PHP_EOL;
var_dump ($numeros);
echo PHP_EOL;

sistemaMejor($numeros);

function sistemaMejor($numeros){
    $i = 0;
    foreach ($numeros as $i=> $numero) {
        echo "La cantidad contenida en la posición " . $i . " es de " . $numero . PHP_EOL;
        $i++;
        echo PHP_EOL;
    }
}
?>