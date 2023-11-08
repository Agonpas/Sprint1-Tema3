<?php

function contieneCaracter($palabras, $caracter) { /*la función recibe las variables $palabras y $caracter*/
    foreach ($palabras as $palabra) { /*el foreach recorre el array y almacena las varibles en $palabra*/
        if (strpos($palabra, $caracter) === false) { /*verifica si la palabra contiene el caracter*/
            return false;
        }
    }
    return true;
}
/*creamos el array y introducimos el caracter a buscar*/
$palabras = array("piedra", "tronco", "rosa");
$caracter = "r";
/*en función de si el caracter ha sido encontrado o no devolvemos el mensaje correspondiente*/
if (contieneCaracter($palabras, $caracter)) {
    echo "Todas las palabras contienen el carácter '$caracter'.";
} else {
    echo "No todas las palabras contienen el carácter '$caracter'.";
}
?>