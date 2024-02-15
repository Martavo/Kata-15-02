<?php
$numero = 546;
$cifra = 1;

$lista_numeros = [453, 1443, 377234];
$lista_cifras = [3, 7, 7];

//me ha faltado adaptar lo que funciona a un array con varios numeros y cifras


function existe_cifra($numero, $cifra)
{
    $validacion = false;

    while ($numero > 0) {
        $unidad = $numero % 10; 
        if ($unidad == $cifra) {
            $validacion = true;
        }
        $numero /= 10; 
    }

    return $validacion;
}

$validacion = existe_cifra($numero, $cifra);


if ($validacion == true) {
    echo "La cifra $cifra está dentro del número $numero";
} else {
    echo "La cifra $cifra no está dentro del número $numero";
}
?>