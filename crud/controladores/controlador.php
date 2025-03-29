<?php
    include_once("modelos/mdlPersona.php");

    class ControladorPersona{
       private $persona;
       
       public function __construct()
       {
           $this->persona = new Persona();
       }

        public function index()
        {
            $resultado = $this->persona->listar();
            return $resultado;
        }

        public function ver($id)
        {
            $this->persona->set("id", $id);
            return $this->persona->ver();
        }

        public function eliminar($id)
        {
            $this->persona->set("id", $id);
            $this->persona->eliminar();
        }

        public function editar($id)
        {
            $this->persona->set("id", $id);
            $this->persona->editar();
        }
    }
?>