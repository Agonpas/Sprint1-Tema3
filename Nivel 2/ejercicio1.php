<?php
/*creamos dos arrays*/
$array1 = array (1, 2, 4.5, 6, 3);
$array2 = array (3.4, 5, 2, 8, 6);

/*creamos la interseccion de los dos arrays*/
$array3 = array_intersect ($array1, $array2);
echo "Intersección de los Arrays: ";
print_r ($array3); /* print_r nos imprime arrays de forma ordenado y legible*/

/*creamos la mezcla de los dos arrays usando array_merge*/
$array_mezcla = array_merge ($array1, $array2);
echo "Mezcla de los Arrays usando array_merge: \n";
print_r ($array_mezcla);

?>