<?php

class ItemsController
{
    function __construct()
    {
        //Creamos una instancia de nuestro mini motor de plantillas
        $this->view = new View();
    }

    public function index(){
       //Guardamos en un array los datos a mostrar en la vista

       $index['titulo'] = "Items Page";
       $index['texto'] = "Estas en la página INDEX de Items";

        //Pasamos a la vista toda la información que se desea representar
        $data['datos'] = $index;

       //Finalmente presentamos nuestra plantilla

        $this->view->show("index.php", $data);    
    }
 
    public function listar()
    {
        //Incluye el modelo que corresponde
        global $config;
        require $config->get('modelsFolder') .'/ItemsModel.php';
 
        //Creamos una instancia de nuestro "modelo"
        $items = new ItemsModel();
 
        //Le pedimos al modelo todos los items
        $listado = $items->listadoTotal();
 
        //Pasamos a la vista toda la información que se desea representar
        $data['listado'] = $listado;
 
        //Finalmente presentamos nuestra plantilla
        $this->view->show("listar.php", $data);
    }
 
    public function agregar()
    {
        echo 'Aquí incluiremos nuestro formulario para insertar items';
    }
}
?>