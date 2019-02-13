<?php

class IndexController
{
    function __construct()
    {
        //Creamos una instancia de nuestro mini motor de plantillas
        $this->view = new View();
    }

    public function index(){

        //Guardamos en un array los datos a mostrar en la vista

        $index['titulo'] = "HomePage";
        $index['texto'] = "Estas en la página de inicio";

         //Pasamos a la vista toda la información que se desea representar
         $data['datos'] = $index;

        //Finalmente presentamos nuestra plantilla
         
        $this->view->show("index.php", $data);        
        
        
    }
 
     
}
?>