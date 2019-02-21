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

//Mostramos un Formulario de contacto
    public function contacto(){
     // index.php?controlador=index&accion=contacto   

        $index['titulo'] = "HomePage";
        $index['texto'] = "Contacta con nosotros...";

         //Pasamos a la vista toda la información que se desea representar
         $data['datos'] = $index;
        //Finalmente presentamos nuestra plantilla         
        $this->view->show("contacto.php", $data); 
        
    }


// Envío los datos del FORM contacto por email

public function enviar(){ 
    // index.php?controlador=index&accion=enviar desde el FORM
    if(isset($_POST['Nombre']) & isset($_POST['Descripcion']))
    {        
        // se envía con el formulario
        $nombre = $_POST['Nombre'];
        $descripcion = $_POST['Descripcion'];
        //Guardamos en un array los datos a mostrar en la vista
        $index['titulo'] = "Enviando...";
        $index['texto'] = "Gracias $nombre por contactar con nosotros con su mensaje $descripcion.";
        
        try {
            mail('manuel.castejon@outlook.com', '$nombre', $descripcion);

        } catch (\Throwable $th) {
            //throw $th;
        }

        //Pasamos a la vista toda la información que se desea representar
        $data['datos'] = $index;
        //Finalmente presentamos nuestra plantilla         
        $this->view->show("articulos/insertado.php", $data); 
    }       
}

     
}
?>