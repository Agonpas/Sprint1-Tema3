<?php
echo "\n";
echo "NOTAS DE LOS ALUMNOS\n";
/*creamos un array asociativo que incluye un array con notas para cada alumno*/
$alumnosNotas = array (
    "Irene" => array (8, 7, 9, 10, 8),
    "Alberto" => array (8, 9, 10, 8, 6),
    "Montse"=> array (7, 6, 5, 8, 9),
    "José"=> array (5, 4, 7, 8, 3)
);
echo "\n";
/*vamos a recorrer el array con un foreach dentro de otro foreach para mostrar las notas de cada alumno*/
foreach ($alumnosNotas as $alumno => $notas) { /*recorremos la parte del alumno y almacenamos el array de notas en $notas*/
    echo "La notas de " . $alumno . " son : "; /* imprimimos nombre de alumno*/
    foreach ($notas as $nota) { /*extraemos del array $notas cada una de las $nota*/
        echo $nota . " "; /*imprimimos las notas almacenadas en nota*/
    }
    echo "\n"; /*añadimos un salto de linea para el siguiente alumno*/
}
/*creamos funcion que nos calcule medias de alumnos*/
function calcularMediaAlumno($notas) { /*la función recibe el array $notas*/
    $numeroNotas = count($notas); /* nos da el número de elementos en el array $notas*/
    $sumarNotas = array_sum($notas); /* nos suma todas las notas dentro de $notas*/
    return $sumarNotas / $numeroNotas; /*devolvemos la media del alumno*/
}
/*función para mostrar las medias*/
function mostrarMedias($alumnosNotas) { /*la funcion recibe el array $alumnosNotas*/
    $sumaMedias = 0; /*creo variable sumatorio de medias de los alumnos*/
    echo "\n";
    echo "MEDIAS DE CADA ALUMNO\n";
    echo "\n";
    foreach ($alumnosNotas as $alumno => $notas){
        $mediaAlumno = calcularMediaAlumno($notas); /*llmamos a la función de calculoMediaAlumno*/
        echo "La media de " . $alumno . " es de: " . $mediaAlumno . "\n"; /* mostramos la media de cada alumno*/
        $sumaMedias += $mediaAlumno; /* suamamos las medias*/
    }
    /* calculamos y mostramos las medias de la clase*/
    $mediaClase = $sumaMedias / count($alumnosNotas);
    echo "\n";
    echo "La media de la clase es de " . $mediaClase;
}
/* por últimollamamos a la función que nos muestra las medias*/
mostrarMedias($alumnosNotas);
echo "\n";
?>