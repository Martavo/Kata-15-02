<?php

$numero = 546;
$cifra = 1;


function existe_cifra($numero, $cifra)
{
    while ($numero > 0) {
        $unidad = $numero % 10;
        if ($unidad == $cifra) {
            return true; 
        }
        $numero = (int)($numero / 10);
    }

    return false; 
}

$validacion = existe_cifra($numero, $cifra);

if ($validacion) {
    echo "La cifra $cifra está dentro del número $numero";
} else {
    echo "La cifra $cifra no está dentro del número $numero";
}
