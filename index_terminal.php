<?php

require_once("./headers.php");

echo "Ingrese las tres primeras letras: ";
$input = trim(fgets(STDIN));
file_put_contents('./inputEntry.txt',$input . PHP_EOL);

$hospedajes = $hospedajeController->buscarHospedajesPorNombre($input);

echo getContent($hospedajes);

$conn->close();



