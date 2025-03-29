<?php
    class Connection{
        private $host;
        private $usuario;
        private $clave;
        private $bd;
        private $conexion;

        public function __construct(){
            $this->host = "localhost";
            $this->usuario = "root";
            $this->clave = "";
            $this->bd = "Pruebas";

            $this->conexion = mysqli_connect($this->host, $this->usuario, $this->clave, $this->bd);  
            if(mysqli_errno($this->conexion)){
                echo "Error al conectar a la base de datos $this->bd ✖️";
            }
        }

        public function consultaRetorno($sql){
            $resultado = mysqli_query($this->conexion, $sql);
            return $resultado;
        }

        public function consultaSimple($sql){
            mysqli_query($this->conexion, $sql);
        }
    }
?>