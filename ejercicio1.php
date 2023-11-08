<?php
$numeros = array(); /*creamos array */
$numeros = [1, 3, 2, 5, 8]; /*llenamos el array */
/*ahora mostrmos los 5 valores de uno en uno */
echo $numeros [0] . "</p>";
echo $numeros [1] . "</p>";
echo $numeros [2] . "</p>";
echo $numeros [3] . "</p>";
echo $numeros [4] . "</p>";
/*mostramos toda la info del array: numero de variables, posición, tipo de variable y los valores de estas*/
echo "<pre>";
var_dump ($numeros);
echo "<pre>";
?>