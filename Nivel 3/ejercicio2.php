<?php
/* creamos el array*/
$arrayPalabras = array("teclado", "camara", "raton", "pantalla", "torre");
/*generamos la función que nos identifica palabras par*/
function longitudPar($palabra) {
    return strlen($palabra) % 2 === 0; /* si la longitud de palabra es para devuelve true*/ 
}
/* con array filter creamos un nuevo array que cumpla la condición de la funcio longitudPar*/
$arrayPalabrasPar = array_filter($arrayPalabras,'longitudPar');

/* mostramos los arrays, el original y el de palabras pares*/
echo"El Array original :\n"; 
print_r($arrayPalabras);
echo "\n";
echo"El Array de palabras pares es :\n";
print_r($arrayPalabrasPar);
echo "\n"
?>