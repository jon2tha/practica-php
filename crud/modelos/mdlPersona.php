<?php
    include_once("connection.php");

    class Persona{
        private $id;
        private $cedula;
        private $nombres;
        private $apellidos;
        private $usuario;
        private $clave;
        private $conexion;

        public function __construct(){
            $this->conexion = new Conexion();
        }

        public function set($atributo, $contenido){
            $this->$atributo = $contenido;
        }

        public function get($atributo){
            return $this->$atributo;
        }

        public function listar(){
            $sql = "SELECT * FROM personas";
            return $this->conexion->consultaRetorno($sql);
        }

        public function ver(){
            $sql = "SELECT * FROM personas WHERE id = '{$this->id}'";
            $resultado = $this->conexion->consultaRetorno($sql);
            return mysqli_fetch_assoc($resultado);
        }

        public function eliminar(){
            $sql = "DELETE FROM personas WHERE id = '{$this->id}'";
            $this->conexion->consultaSimple($sql);
        }

        public function editar(){
            $sql = "UPDATE personas SET usuario = '{$this->usuario}', clave = '{$this->clave}' WHERE id = '{$this->id}'";
            $this->conexion->consultaSimple($sql);
        }
    }
?>