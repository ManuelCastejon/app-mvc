<?php

class UsuarioController
{
    function __construct()
    {
        //Creamos una instancia de nuestro mini motor de plantillas
        $this->view = new View();
    }

    //    index.php?controller=index&accion=index
    public function index(){
        //Guardamos en un array los datos a mostrar en la vista
        $index['titulo'] = "Usuarios";
        $index['texto'] = "Estas en la página de inicio de usuarios";
         //Pasamos a la vista toda la información que se desea representar
         $data['datos'] = $index;
        //Finalmente presentamos nuestra plantilla         
        $this->view->show("usuarios/index.php", $data);        
    }
    //   index.php?controller=index&accion=listado
    public function listado(){
        //Guardamos en un array los datos a mostrar en la vista
        $index['titulo'] = "Usuarios";
        $index['texto'] = "Estas en la página de Listado de usuarios";
        
        //Pasamos a la vista toda la información que se desea representar
        $data['datos'] = $index;

        // CONSULTAMOS AL MODELO INDEX los DATOS
        include __DIR__ . '/../modelos/UsuarioModel.php';
        // creamos un objeto del modelo INDEX
        $listado = new UsuarioModel();
        // ejecutamos la función de CONSULTA a la BD
        $listado_usuarios = $listado->listadoTotal();

        // le pasamos el resultado a la VISTA
        $data['listado_usuarios'] = $listado_usuarios;        
        
        //Finalmente presentamos nuestra plantilla         
        $this->view->show("usuarios/listado.php", $data);        
    }


    public function formulario(){
        //Guardamos en un array los datos a mostrar en la vista
        $index['titulo'] = "Usuarios";
        $index['texto'] = "Estas en la página de Listado de usuarios";
         //Pasamos a la vista toda la información que se desea representar
         $data['datos'] = $index;
        //Finalmente presentamos nuestra plantilla         
        $this->view->show("usuarios/formulario.php", $data);        
    }

 
 
     
}
?>