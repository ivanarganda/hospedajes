<?php 

// Carga todas las clases en la carpeta classes
require_once('classes/autoload.php');

$conection = new Conection();

$conn = $conection->conectDB();

// Comprueba la conexion a la base de datos
if (!$conn) {
    die("Connection failed");
}

$conn->set_charset("utf8");

$hospedajeRepository = new HospedajeRepository($conn);
$hospedajeModel = new HospedajeModel($hospedajeRepository);
$hospedajeController = new HospedajeController($hospedajeModel);

function getContent( $hospedajes , $input = false , $terminal = true ){
    $content = "";

    if (!empty($hospedajes)) {
        foreach ($hospedajes as $hospedaje) {
            $content.= $terminal ? "".$hospedaje->getDescripcion()."\n" : "<li class='list-none flex flex-row items-center justify-start border-b border-gray-300'>".str_replace( $input , "<strong>$input</strong>" , $hospedaje->getDescripcion())."</li>";
        }
    } else {
        $content = $terminal ? "No se encontraron hospedajes que coincidan con la búsqueda.\n" : "<h4 class='w-full text-gray-700 font-bold flex flex-row justify-center items-center text-2xl'>No se encontraron hospedajes que coincidan con la búsqueda</h4>";
    }

    echo $content;
}

?>