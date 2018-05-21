<?php

    class Politicas_Mol{

        private $idpoliticas=0;
        private $titulo ="";
        private $decripcion ="";
        private $estado=0;

        /**
         * Politicas_Mol constructor.
         * @param int $idpoliticas
         * @param string $titulo
         * @param string $decripcion
         * @param int $estado
         */
        public function __construct($idpoliticas, $titulo, $decripcion, $estado)
        {
            $this->idpoliticas = $idpoliticas;
            $this->titulo = $titulo;
            $this->decripcion = $decripcion;
            $this->estado = $estado;
        }

        /**
         * @return int
         */
        public function getIdpoliticas()
        {
            return $this->idpoliticas;
        }

        /**
         * @param int $idpoliticas
         */
        public function setIdpoliticas($idpoliticas)
        {
            $this->idpoliticas = $idpoliticas;
        }

        /**
         * @return string
         */
        public function getTitulo()
        {
            return $this->titulo;
        }

        /**
         * @param string $titulo
         */
        public function setTitulo($titulo)
        {
            $this->titulo = $titulo;
        }

        /**
         * @return string
         */
        public function getDecripcion()
        {
            return $this->decripcion;
        }

        /**
         * @param string $decripcion
         */
        public function setDecripcion($decripcion)
        {
            $this->decripcion = $decripcion;
        }

        /**
         * @return int
         */
        public function getEstado()
        {
            return $this->estado;
        }

        /**
         * @param int $estado
         */
        public function setEstado($estado)
        {
            $this->estado = $estado;
        }




    }


?>