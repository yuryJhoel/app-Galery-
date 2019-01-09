<?php
    require('Conexion.php');
    class CreaUsuario extends Conexion{
        public function Crud(){
            parent::__construct();
        }
        public function create($sql){
            $sentencia = $this->conexion_db->prepare($sql);
            $sentencia->execute(array());
            $sentencia->closeCursor();
            $this->conexion_db = null;
        }
        public function read($sql){
            $read = $this->conexion_db->prepare($sql);
            $read->execute(array());
            $result = $read->fetch(PDO::FETCH_ASSOC);
            return $result;
            $this->conexion_db = null;
        }
        public function read2($sql){
            $read = $this->conexion_db->prepare($sql);
            $read->execute(array());
            $datos = array();
            while($result = $read->fetch(PDO::FETCH_ASSOC)){
                $datos[] = $result;
            }
            return $datos;
            $this->conexion_db = null;
        }
    }



?>