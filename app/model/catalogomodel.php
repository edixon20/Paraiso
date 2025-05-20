<?php

    namespace App\Paraiso\model;

    class CatalogoModel {

        private $nombre;
        private $correo;
        private $curso;
        private $nota;

        public function getUser($nombre, $correo, $curso, $nota){
           
            $this->nombre = $nombre;
            $this->correo = $correo;
            $this->curso = $curso;
            $this->nota = $nota;
        }

        public function validar(){


            if($this->nota < 10){

                return $nota = "Esta Reprobado";
            }else{
                return $nota = "Usted Aprobo";
            }

        }
    }
?>