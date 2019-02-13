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



    public function leer(){

        //Guardamos en un array los datos a mostrar en la vista

        $index['titulo'] = "HomePage";
        $index['texto'] = "Estas en el controlador INDEX con la acción LEER";

         //Pasamos a la vista toda la información que se desea representar
         $data['datos'] = $index;

        //Finalmente presentamos nuestra plantilla
         
        $this->view->show("index.php", $data);        
        
        
    }

// CRUD ( Create / Read / Update / Delete )
// index.php?controlador=index&accion=diaSingle
   
public function insertar(){

    //Guardamos en un array los datos a mostrar en la vista

    $index['titulo'] = "HomePage";
    $index['texto'] = "Estas en el controlador INDEX con la acción Insertar";

     //Pasamos a la vista toda la información que se desea representar
     $data['datos'] = $index;

    //Finalmente presentamos nuestra plantilla
     
    $this->view->show("index.php", $data);        
    
    
}


public function borrar(){

    $id = $_GET['id'];

    //Guardamos en un array los datos a mostrar en la vista

    $index['titulo'] = "HomePage";
    $index['texto'] = "Estas en el controlador INDEX con la acción Borrar el artículo $id";

     //Pasamos a la vista toda la información que se desea representar
     $data['datos'] = $index;

    //Finalmente presentamos nuestra plantilla
     
    $this->view->show("index.php", $data);        
    
    
}

public function actualizar(){

    //Guardamos en un array los datos a mostrar en la vista

    $index['titulo'] = "HomePage";
    $index['texto'] = "Estas en el controlador INDEX con la acción Actualizar";

     //Pasamos a la vista toda la información que se desea representar
     $data['datos'] = $index;

    //Finalmente presentamos nuestra plantilla
     
    $this->view->show("index.php", $data);        
    
    
}



public function suma(){

    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];

    $resultado = $num1 + $num2;
    

    //Guardamos en un array los datos a mostrar en la vista

    $index['titulo'] = "HomePage";
    $index['texto'] = "La suma es $resultado";

     //Pasamos a la vista toda la información que se desea representar
     $data['datos'] = $index;

    //Finalmente presentamos nuestra plantilla
     
    $this->view->show("index.php", $data);        
    
    
}

    
 
     
}
?>