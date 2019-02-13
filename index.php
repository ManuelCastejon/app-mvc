<?php

// cargamos la configuración
require 'Config/config.php';

//Incluimos el FrontController
require 'Config/libs/FrontController.php';


try {
    //Lo iniciamos con su método estático main.
    FrontController::inicio();
} catch (Exception $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
    


?>