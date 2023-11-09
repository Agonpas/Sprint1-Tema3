<?php
$X = array (10, 20, 30, 40, 50, 60); /*creamos el array*/
/* damos el tamaño del array usando la orden count*/
echo "El tamaño del array es " . count($X) . "\n";
/*borramos una posición determinada del array en este caso la posición 3*/
unset($X[3]);
/*reorganizamos los indices del array*/
$X = array_values($X);
/*volvemos a mostrar el tamaño del array*/
echo "El tamaño del array es " . count($X);
?>