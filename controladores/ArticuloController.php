<?php

class ArticuloController
{
    function __construct()
    {
        //Creamos una instancia de nuestro mini motor de plantillas
        $this->view = new View();
    }  
     
    // lista Todos los artículos
    // index.php?controlador=articulo&accion=listado 
    public function listado(){
        //Guardamos en un array los datos a mostrar en la vista
        $index['titulo'] = "Articulo/Listado";
        $index['texto'] = "Estas en la página de Listado de Articulo";
         //Pasamos a la vista toda la información que se desea representar
         $data['datos'] = $index;
        //Finalmente presentamos nuestra plantilla         
        $this->view->show("articulos/listado.php", $data);        
    }

    // accede al detalle del Artículo
    public function detalle(){
    // index.php?controlador=articulo&accion=detalle&id=33     
        if(isset($_GET['id']))
        {    
            $id = $_GET['id'];    
            //Guardamos en un array los datos a mostrar en la vista
            $index['titulo'] = "Artículo/Detalle";
            $index['texto'] = "Estas en la página de Detalle de Artículo id $id";
            //Pasamos a la vista toda la información que se desea representar
            $data['datos'] = $index;
            //Finalmente presentamos nuestra plantilla
        }
        else
        {
            //Guardamos en un array los datos a mostrar en la vista
            $index['titulo'] = "Artículo/Detalle";
            $index['texto'] = "Error.. Artículo no encontrada";
            //Pasamos a la vista toda la información que se desea representar
            $data['datos'] = $index;  

        }         
        $this->view->show("articulos/detalle.php", $data);        
    }





    // crear ( muestra un FORUMULARIO ) 
    public function crear(){
    // index.php?controlador=articulo&accion=crear
    //Guardamos en un array los datos a mostrar en la vista
        $index['titulo'] = "Artículo/Crear";
        $index['texto'] = "Estas en la página de Crear una Artículo";
         //Pasamos a la vista toda la información que se desea representar
         $data['datos'] = $index;
        //Finalmente presentamos nuestra plantilla         
        $this->view->show("articulos/crear.php", $data);        
    }

    


    // insertar ( obtiene los datos del Form POST )
    public function insertar(){ 
        // index.php?controlador=articulo&accion=insertar desde el FORM
        if(isset($_POST['Nombre']) & isset($_POST['Descripcion']))
        {        
            // se envía con el formulario
            $nombre = $_POST['Nombre'];
            $descripcion = $_POST['Descripcion'];
            //Guardamos en un array los datos a mostrar en la vista
            $index['titulo'] = "Artículo/Insertar";
            $index['texto'] = "Gracias $nombre por contactar con nosotros con su mensaje $descripcion.";
            //Pasamos a la vista toda la información que se desea representar
            $data['datos'] = $index;
            //Finalmente presentamos nuestra plantilla         
            $this->view->show("articulos/insertado.php", $data); 
        }       
    }

    // eliminar
    public function eliminar(){
        // index.php?controlador=articulo&accion=eliminar&id=33
        if(isset($_REQUEST['id']))
        {       
            $id = $_REQUEST['id'];
            //Guardamos en un array los datos a mostrar en la vista
            $index['titulo'] = "Eliminar Artículo";
            $index['texto'] = "Estas en la página de Eliminar Artículo con ID igual a $id";
            //Pasamos a la vista toda la información que se desea representar
            $data['datos'] = $index;
            //Finalmente presentamos nuestra plantilla         
            $this->view->show("articulos/eliminar.php", $data);   
        
        }
    }
 

 
 
     
}
?>