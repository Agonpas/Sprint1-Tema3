<?php
/*creamos array*/
$arrayNumeros = array(2, 4, 7, 11, 8);

/*hacemos una función que eleva al cubo*/
function elevarAlCubo($numero) {
    return $numero ** 3;
}
/*con array_map aplicamos la función a todos los elementos del array*/
$arrayAlCubo = array_map('elevarAlCubo', $arrayNumeros);
/* mostramos los arrays*/
echo "Array original: \n";
print_r($arrayNumeros);
echo "Array al cubo: \n";
print_r($arrayAlCubo);

?>