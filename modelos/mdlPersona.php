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

        public function crear(){
            $sql2 = "SELECT * FROM personas WHERE cedula='{$this->cedula}'";

            $resultado=$this->conexion->consultaRetorno($sql2);

            $filas=mysqli_num_rows($resultado);



            if($ilas == 0){
                $sql="INSERT INTO personas(cedula,nombres,apellidos,usuario,clave)
                VALUES ('{$this->cedula}','{$this->nombres}','{$this->apellidos}','{$this->usuario}', '{$this->clave}')";
                $this->conexion->consultaSimple($sql);

                return true;

            }
            else{
                return false;
            }
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
            $sql = "UPDATE personas SET nombres = '{$this->nombres}', apellidos = '{$this->apellidos}', usuario = '{$this->usuario}' WHERE id = '{$this->id}'";
            $this->conexion->consultaSimple($sql);
        }
    }
?>