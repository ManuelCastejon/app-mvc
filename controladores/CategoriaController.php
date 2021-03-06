<?php

// consulta al Modelo Categoria sobre el Listado De Todas las categorías
include __DIR__ . '/../modelos/CategoriaModel.php';
      

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

          
        // creamos un objeto del modelo CATEGORIA
        $listado = new CategoriaModel();
        // ejecutamos la función de CONSULTA a la BD
        $listado_categoria = $listado->listadoTotal();

        // le pasamos el resultado a la VISTA
        $data['listado_categoria'] = $listado_categoria;   




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

                 
            // creamos un objeto del modelo CATEGORIA
            $listado = new CategoriaModel();
            // ejecutamos la función de CONSULTA a la BD
            $detalle_categoria = $listado->detalle($id);

            // le pasamos el resultado a la VISTA
            $data['detalle_categoria'] = $detalle_categoria;   

            //
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

        if(isset($_POST['Nombre']))
        {        
            // se envía con el formulario
            $nombre = $_POST['Nombre'];
            $fecha = $_POST['Fecha'];
            //Guardamos en un array los datos a mostrar en la vista
            $index['titulo'] = "Categoria/Insertar";
            $index['texto'] = "Gracias $nombre por contactar con nosotros con su mensaje en la fecha $fecha.";
            

            // insertar los datos!!!! 
            // creamos un objeto del modelo CATEGORIA
            $categoria = new CategoriaModel();
            // ejecutamos la función de CONSULTA a la BD
             
           $NUEVO_ID_CAT = $categoria->insertar($_POST);

           

            // le pasamos el resultado a la VISTA
            $index['resultado_insert_categoria'] = $NUEVO_ID_CAT;  

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
 

 
 // Editar ( Muestro un Formulario con los Datos del Registro SQL)
    
    public function editar(){
        // index.php?controlador=categoria&accion=editar&id=33       
            if(isset($_GET['id']))
            {    
                $id = $_GET['id'];    
                //Guardamos en un array los datos a mostrar en la vista
                $index['titulo'] = "Categoria/Editar";
                $index['texto'] = "Estas en la página de Editar la Categoria id $id";
                //Pasamos a la vista toda la información que se desea representar
                $data['datos'] = $index;
                //Finalmente presentamos nuestra plantilla
    
                     
                // creamos un objeto del modelo CATEGORIA
                $listado = new CategoriaModel();
                // ejecutamos la función de CONSULTA a la BD
                $detalle_categoria = $listado->detalle($id);
    
                // le pasamos el resultado a la VISTA
                $data['detalle_categoria'] = $detalle_categoria;   
    
                //
            }
            else
            {
                //Guardamos en un array los datos a mostrar en la vista
                $index['titulo'] = "Categoria/Detalle";
                $index['texto'] = "Error.. Categoría no encontrada";
                //Pasamos a la vista toda la información que se desea representar
                $data['datos'] = $index;  
    
            }         
            $this->view->show("categorias/editar.php", $data);        
        }




          // actualizar ( obtiene los datos del Form POST y actualiza el registro en la SQL)
    public function actualizar(){ 
        // index.php?controlador=categoria&accion=actualizar desde el FORM
    
            if(isset($_POST['Nombre']))
            {                
                //Guardamos en un array los datos a mostrar en la vista
                $index['titulo'] = "Categoria/Actualizado";
                $index['texto'] = "Se ha actualizado correctamente.";
                
    
                // actualizar los datos!!!! 
                // creamos un objeto del modelo CATEGORIA
                $categoria = new CategoriaModel();
 
               // le pasamos todos los datos del FORM al modelo para ACTUALIZAR  
               $status_actualizacion = $categoria->actualizar($_POST);   
               
    
                // le pasamos el resultado a la VISTA
                $index['resultado_insert_categoria'] = $status_actualizacion;  
    
                //Pasamos a la vista toda la información que se desea representar
                $data['datos'] = $index;
    
    
                //Finalmente presentamos nuestra plantilla         
                $this->view->show("categorias/insertado.php", $data); 
            }       
        }
    



        // BORRAR Categoría según el ID
    public function borrar(){
        // index.php?controlador=categoria&accion=borrar&id=33       
            if(isset($_GET['id']))
            {    
                $id = $_GET['id'];                 
    
                     
                // creamos un objeto del modelo CATEGORIA
                $listado = new CategoriaModel();
                // ejecutamos la función de CONSULTA a la BD
                $detalle_categoria = $listado->borrar($id);                
            

                // le pasamos el resultado a la VISTA
                $data['detalle_categoria'] = $detalle_categoria; 
                
                
                //Guardamos en un array los datos a mostrar en la vista
                $index['titulo'] = "Categoria/Borrado";
                $index['texto'] = "Se ha eliminado correctamente";
                //Pasamos a la vista toda la información que se desea representar
                $data['datos'] = $index;
                //Finalmente presentamos nuestra plantilla
    
                //
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
}
?>