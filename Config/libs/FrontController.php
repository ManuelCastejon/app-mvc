<?php

//Con el objetivo de no repetir nombre de clases, nuestros controladores
//terminarán todos en Controller. Por ej, la clase controladora Items, será ItemsController
// la App se ejecutará con la siguiente URL:
// index.php?controlador=xxx&accion=yyy
// donde xxx es la clase controlador correspondiente
// donde yyy es la acción/método dentro de dicha clase


class FrontController {


// método que inicia la ejecución de la App
// recibe los parámetros por la URL(GET) para saber qué controlador cargar

public static function inicio(){  

//Formamos el nombre del Controlador o en su defecto, tomamos que es el IndexController
if(! empty($_GET['controlador']))
{
    $controllerName = $_GET['controlador'] . 'Controller';
}
else
{
    $controllerName = "IndexController";
}
 
//Lo mismo sucede con las acciones, si no hay acción, tomamos index como acción
if(! empty($_GET['accion']))
{
    $actionName = $_GET['accion'];
}
else{
    $actionName = "index";
}

// obtenemos una referencia , dentro del método, del objeto que contiene nuestra configuración
global $config;

// ahora generamos la ruta y el nombre del controlador a cargar

$controllerPath = $config->get('controllersFolder') . $controllerName . '.php';

 
//Incluimos el fichero que contiene nuestra clase controladora solicitada
if(is_file($controllerPath))
{
    require $controllerPath;
}
else
{
    die('El controlador no existe - 404 not found');
}
 
//Si no existe la clase que buscamos y su acción, mostramos un error 404
if (is_callable(array($controllerName, $actionName)) == false)
{
    trigger_error ($controllerName . '->' . $actionName . '` no existe', E_USER_NOTICE);
    return false;
}
else
{
    //Si todo esta bien, creamos una instancia del controlador y llamamos a la acción
    $controller = new $controllerName();
    $controller->$actionName();
}
} // método inicio

} // clase

?>