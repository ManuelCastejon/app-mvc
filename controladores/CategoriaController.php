<?php

class CategoriaController
{
    function __construct()
    {
        //Creamos una instancia de nuestro mini motor de plantillas
        $this->view = new View();
    }  
     
    
    public function listado(){
        //Guardamos en un array los datos a mostrar en la vista
        $index['titulo'] = "Categoria";
        $index['texto'] = "Estas en la página de Listado de Categoria";
         //Pasamos a la vista toda la información que se desea representar
         $data['datos'] = $index;
        //Finalmente presentamos nuestra plantilla         
        $this->view->show("categorias/listado.php", $data);        
    }

    public function detalle(){
         
        if(isset($_GET['id']))
        {    
            $id = $_GET['id'];    
            //Guardamos en un array los datos a mostrar en la vista
            $index['titulo'] = "Categoria";
            $index['texto'] = "Estas en la página de Detalle de Categoria id $id";
            //Pasamos a la vista toda la información que se desea representar
            $data['datos'] = $index;
            //Finalmente presentamos nuestra plantilla
        }
        else
        {
            //Guardamos en un array los datos a mostrar en la vista
            $index['titulo'] = "Categoria";
            $index['texto'] = "Error.. Categoría no encontrada";
            //Pasamos a la vista toda la información que se desea representar
            $data['datos'] = $index;  

        }         
        $this->view->show("categorias/detalle.php", $data);        
    }






    public function crear(){
        //Guardamos en un array los datos a mostrar en la vista
        $index['titulo'] = "Categoria";
        $index['texto'] = "Estas en la página de Crear una Categoria";
         //Pasamos a la vista toda la información que se desea representar
         $data['datos'] = $index;
        //Finalmente presentamos nuestra plantilla         
        $this->view->show("categorias/crear.php", $data);        
    }

    

    // crear ( FORUMULARIO ) 
    // insertar ( obtiene los datos del Form POST )

    // editar ( FORMULARIO )
    // actualizar ( obtiene los datos del Form PUT/POST )
    
    
    // eliminar
 

 
 
     
}
?>