<?php

class ArticuloModel
{
    // guardamos la REFERENCIA A LA CONEXIÓN 
    protected $db;
 
    public function __construct()
    {
        //Traemos la única instancia de PDO
        // estableciendo la conexión o recuperándo la conexión
        $this->db = SPDO::singleton();
    }
 // CRUD

    public function listadoTotal()
    {
        //realizamos la consulta de todos los artículos
        $consulta = $this->db->prepare('SELECT * FROM articulos');
      
        $consulta->execute();
        //devolvemos la colección para que la vista la presente.
        return $consulta;
    }


    public function detalle($id_articulo)
    {
        //realizamos la consulta de la Categoría con ID pasada como parámetro
        $consulta = $this->db->prepare('SELECT * FROM articulos WHERE idArticulo = :id');
        $consulta->execute(['id' => $id_articulo]);

        $consulta->execute();
        //devolvemos la colección para que la vista la presente.
        return $consulta;
    }

}
?>