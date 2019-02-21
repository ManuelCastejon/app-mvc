<?php

class ArticuloController
{
    function __construct()
    {
        //Creamos una instancia de nuestro mini motor de plantillas
        $this->view = new View();
    }  
     
    
    public function listado(){
        //Guardamos en un array los datos a mostrar en la vista
        $index['titulo'] = "Articulo/Listado";
        $index['texto'] = "Estas en la página de Listado de Articulo";
         //Pasamos a la vista toda la información que se desea representar
         $data['datos'] = $index;
        //Finalmente presentamos nuestra plantilla         
        $this->view->show("articulos/listado.php", $data);        
    }

    public function detalle(){
         
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





    // crear ( FORUMULARIO ) 
    public function crear(){
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

    // editar ( FORMULARIO )
    // actualizar ( obtiene los datos del Form PUT/POST )
    
    
    // eliminar
 

 
 
     
}
?>