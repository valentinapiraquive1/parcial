<?php

$animales = array("perro","gato","raton","vaca","elefante","conejo","paloma","tortuga");
$edades = array(18, 20, 2, 20, 70, 9, 6, 190);

print_r($animales);

array_push($animales, "perro");
array_push($animales, "gato");
array_push($animales, "raton");
array_push($animales, "vaca");
array_push($animales, "elefante");
array_push($animales, "conejo");
array_push($animales, "paloma");
array_push($animales, "tortuga");

$elemento = array_pop($animales);

$mayor = $edades[0];
$posicion = 0;

for ($i = 1; $i < count($edades); $i++) {
    if ($edades[$i] > $mayor) {
        $mayor = $edades[$i];
        $posicion = $i;
    }
}

echo "el animal más viejo es " . $animales[$posicion] . " con " .
$mayor . " años";
?>