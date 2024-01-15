<?php 

function load_class( $classname ){

    require_once $classname . ".php";

}

spl_autoload_register("load_class");


?>