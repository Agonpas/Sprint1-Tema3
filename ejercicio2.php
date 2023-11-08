<?php
$X = array (10, 20, 30, 40, 50, 60);
/* damos el tamaño del array*/
echo "El tamaño del array es " . count($X) . "</p>";
/*borramos una posición determinada del array*/
unset($X[3]);
/*reorganizamos los indices del array*/
$X = array_values($X);
/*volvemos a mostrar el tamaño del array*/
echo "El tamaño del array es " . count($X);
?>