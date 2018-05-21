<?php

    class Pedidos_Estados_Mol{
        private $idest =0;
        private $idped=0;
        private $estado ="";
        private $fecha ="";

        /**
         * Pedidos_Estados_Mol constructor.
         * @param int $idest
         * @param int $idped
         * @param string $estado
         * @param string $fecha
         */
        public function __construct($idest, $idped, $estado, $fecha)
        {
            $this->idest = $idest;
            $this->idped = $idped;
            $this->estado = $estado;
            $this->fecha = $fecha;
        }

        /**
         * @return int
         */
        public function getIdest()
        {
            return $this->idest;
        }

        /**
         * @param int $idest
         */
        public function setIdest($idest)
        {
            $this->idest = $idest;
        }

        /**
         * @return int
         */
        public function getIdped()
        {
            return $this->idped;
        }

        /**
         * @param int $idped
         */
        public function setIdped($idped)
        {
            $this->idped = $idped;
        }

        /**
         * @return string
         */
        public function getEstado()
        {
            return $this->estado;
        }

        /**
         * @param string $estado
         */
        public function setEstado($estado)
        {
            $this->estado = $estado;
        }

        /**
         * @return string
         */
        public function getFecha()
        {
            return $this->fecha;
        }

        /**
         * @param string $fecha
         */
        public function setFecha($fecha)
        {
            $this->fecha = $fecha;
        }


    }

?>