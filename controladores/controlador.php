<?php
    include_once("modelos/mdlPersona.php");

    class ControladorPersona{
       private $persona;
       
       public function __construct()
       {
           $this->persona = new Persona();
           
       }

      
        public function crear($cedula,$nombres,$apellidos,$usuario,$clave){
                $this->persona->set("cedula", $cedula);
                $this->persona->set("nombres", $nombres);
                $this->persona->set("apellidos", $apellidos);
                $this->persona->set("usuario", $usuario);
                $this->persona->set("clave", $clave);


                $resultado = $this->persona->crear();
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

        public function index() {
            return $this->persona->listar(); // Llama al método listar() del modelo Persona
        }

        public function editar($id, $nombres, $apellidos, $usuario)
        {
            $this->persona->set("id", $id);
            $this->persona->set("nombres", $nombres);
            $this->persona->set("apellidos", $apellidos);
            $this->persona->set("usuario", $usuario);
            $this->persona->editar();
        }



    }
?>