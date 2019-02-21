<?php

class CategoriaController
{
    function __construct()
    {
        //Creamos una instancia de nuestro mini motor de plantillas
        $this->view = new View();
    }  
     
    // lista Todos los artículos
    // index.php?controlador=categoria&accion=listado 
    public function listado(){
        //Guardamos en un array los datos a mostrar en la vista
        $index['titulo'] = "Categoria/Listado";
        $index['texto'] = "Estas en la página de Listado de Categoria";
         //Pasamos a la vista toda la información que se desea representar
         $data['datos'] = $index;
        //Finalmente presentamos nuestra plantilla         
        $this->view->show("categorias/listado.php", $data);        
    }

    // accede al detalle de una Categoría
    public function detalle(){
    // index.php?controlador=categoria&accion=detalle&id=33       
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

    // crear ( muestra un FORUMULARIO )
    public function crear(){
    // index.php?controlador=categoria&accion=crear
    // Guardamos en un array los datos a mostrar en la vista
        $index['titulo'] = "Categoria/Crear";
        $index['texto'] = "Estas en la página de Crear una Categoria";
         //Pasamos a la vista toda la información que se desea representar
         $data['datos'] = $index;
        //Finalmente presentamos nuestra plantilla         
        $this->view->show("categorias/crear.php", $data);        
    }   


    // insertar ( obtiene los datos del Form POST )
    public function insertar(){ 
    // index.php?controlador=categoria&accion=insertar desde el FORM

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
   
    
    // eliminar
    public function eliminar(){
        // index.php?controlador=categoria&accion=eliminar&id=33
        if(isset($_POST['id']))
        {       
            $id = $_POST['id'];
            //Guardamos en un array los datos a mostrar en la vista
            $index['titulo'] = "Eliminar Categoría";
            $index['texto'] = "Estas en la página de Eliminar la categoría con ID igual a $id";
            //Pasamos a la vista toda la información que se desea representar
            $data['datos'] = $index;
            //Finalmente presentamos nuestra plantilla         
            $this->view->show("categorias/eliminar.php", $data);   
        
        }
    }
 

 
 
     
}
?>