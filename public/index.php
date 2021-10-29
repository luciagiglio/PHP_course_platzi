<?php

/*Patrón FRONT CONTROLLER: centralizar todas las peticiones en un solo lugar. Ejecutar la clase propia de la petición */ 

require __DIR__ . '/../vendor/autoload.php';

//var_dump(__DIR__.'/../vendor/autoload.php'); //dir para crear rutas absolutas y no relativas

$request = new App\Http\Request; //creo la solicitud, ruta hacia donde ejecuta el método send.
$request->send();

