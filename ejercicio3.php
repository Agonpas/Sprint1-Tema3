<?php

function contieneCaracter($palabras, $caracter) { /*la función recibe las variables $palabras y $caracter*/
    foreach ($palabras as $palabra) { /*el foreach recorre el array y almacena las varibles en $palabra*/
        if (strpos($palabra, $caracter) === false) { /*verifica si las palabras contiene el caracter en el caso de que una no la contenga devolvemos false*/
            return false;
        }
    }
    return true; /*en caso contrario devolvemos true*/
}
/*creamos el array y introducimos el caracter a buscar*/
$palabras = array("piedra", "tronco", "rosa");
/*solicitamos caracter*/
echo "Introduce el caracter a buscar ";
$caracter = strtolower(trim(fgets(STDIN)));

/*en función de si el caracter ha sido encontrado o no devolvemos el mensaje correspondiente*/
if (contieneCaracter($palabras, $caracter)) {
    echo "Todas las palabras contienen el carácter '$caracter'.";
} else {
    echo "No todas las palabras contienen el carácter '$caracter'.";
}
?>