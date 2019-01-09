<?php
class Conexion {
    private $db_host = 'localhost';
    private $db_usuario = 'root';
    private $db_contra = '';
    private $db_nombre = 'app-gallery';
    protected $conexion_db;
    public function Conexion(){
        try{
            $this->conexion_db = new PDO("mysql:host=localhost; dbname=app-gallery",'root','');
            $this->conexion_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conexion_db->exec("SET CHARACTER SET utf8");
            return $this->conexion_db;
        }catch(Exception $e){
            die("Error: ".$e->getMessage());
        }
    }
}
?>