<?php

class SPDO extends PDO
{
    protected $db;
    private static $instance = null;
 
    public function __construct()
    {
        $config = Config::singleton();

        try 
        {
            $this->db = parent::__construct('mysql:host=' . $config->get('dbhost') . ';dbname=' . $config->get('dbname'),
            $config->get('dbuser'), $config->get('dbpass'));
        }
        catch(PDOException $e)
         {
             echo "Error en la conexión: " . $e->getMessage();
         }
    }
    
        
    public static function singleton()
    {
        if( self::$instance == null )
        {
            self::$instance = new self();
        }
        return self::$instance;
    }
}
?>