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
        $index['titulo'] = "Categoria/Listado";
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
            $index['titulo'] = "Categoria/Detalle";
            $index['texto'] = "Estas en la página de Detalle de Categoria id $id";
            //Pasamos a la vista toda la información que se desea representar
            $data['datos'] = $index;
            //Finalmente presentamos nuestra plantilla
        }
        else
        {
            //Guardamos en un array los datos a mostrar en la vista
            $index['titulo'] = "Categoria/Detalle";
            $index['texto'] = "Error.. Categoría no encontrada";
            //Pasamos a la vista toda la información que se desea representar
            $data['datos'] = $index;  

        }         
        $this->view->show("categorias/detalle.php", $data);        
    }





    // crear ( FORUMULARIO ) 
    public function crear(){
        //Guardamos en un array los datos a mostrar en la vista
        $index['titulo'] = "Categoria/Crear";
        $index['texto'] = "Estas en la página de Crear una Categoria";
         //Pasamos a la vista toda la información que se desea representar
         $data['datos'] = $index;
        //Finalmente presentamos nuestra plantilla         
        $this->view->show("categorias/crear.php", $data);        
    }

    


    // insertar ( obtiene los datos del Form POST )
    public function insertar(){
    
 

        if(isset($_POST['Nombre']) & isset($_POST['Descripcion']))
        {        
            // se envía con el formulario
            $nombre = $_POST['Nombre'];
            $descripcion = $_POST['Descripcion'];
            //Guardamos en un array los datos a mostrar en la vista
            $index['titulo'] = "Categoria/Insertar";
            $index['texto'] = "Gracias $nombre por contactar con nosotros con su mensaje $descripcion.";
            //Pasamos a la vista toda la información que se desea representar
            $data['datos'] = $index;
            //Finalmente presentamos nuestra plantilla         
            $this->view->show("categorias/insertado.php", $data); 
        }       
    }

    // editar ( FORMULARIO )
    // actualizar ( obtiene los datos del Form PUT/POST )
    
    
    // eliminar
 

 
 
     
}
?>