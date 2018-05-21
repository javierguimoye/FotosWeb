<?php

    class Pedidos_Mol{
        private $idPed=0;
        private $idcli=0;
        private $cantidadFotos=0;
        private $fecha="";
        private $iddireccion=0;
        private $carpeta="";
        private $idpago=0;

        /**
         * Pedidos_Mol constructor.
         * @param int $idPed
         * @param int $idcli
         * @param int $cantidadFotos
         * @param string $fechaPedido
         * @param int $iddireccion
         * @param string $carpeta
         * @param int $idpago
         */
        public function __construct($idPed, $idcli, $cantidadFotos, $fechaPedido, $iddireccion, $carpeta, $idpago)
        {
            $this->idPed = $idPed;
            $this->idcli = $idcli;
            $this->cantidadFotos = $cantidadFotos;
            $this->fechaPedido = $fechaPedido;
            $this->iddireccion = $iddireccion;
            $this->carpeta = $carpeta;
            $this->idpago = $idpago;
        }

        /**
         * @return int
         */
        public function getIdPed()
        {
            return $this->idPed;
        }

        /**
         * @param int $idPed
         */
        public function setIdPed($idPed)
        {
            $this->idPed = $idPed;
        }

        /**
         * @return int
         */
        public function getIdcli()
        {
            return $this->idcli;
        }

        /**
         * @param int $idcli
         */
        public function setIdcli($idcli)
        {
            $this->idcli = $idcli;
        }

        /**
         * @return int
         */
        public function getCantidadFotos()
        {
            return $this->cantidadFotos;
        }

        /**
         * @param int $cantidadFotos
         */
        public function setCantidadFotos($cantidadFotos)
        {
            $this->cantidadFotos = $cantidadFotos;
        }

        /**
         * @return string
         */
        public function getFechaPedido()
        {
            return $this->fechaPedido;
        }

        /**
         * @param string $fechaPedido
         */
        public function setFechaPedido($fechaPedido)
        {
            $this->fechaPedido = $fechaPedido;
        }

        /**
         * @return int
         */
        public function getIddireccion()
        {
            return $this->iddireccion;
        }

        /**
         * @param int $iddireccion
         */
        public function setIddireccion($iddireccion)
        {
            $this->iddireccion = $iddireccion;
        }

        /**
         * @return string
         */
        public function getCarpeta()
        {
            return $this->carpeta;
        }

        /**
         * @param string $carpeta
         */
        public function setCarpeta($carpeta)
        {
            $this->carpeta = $carpeta;
        }

        /**
         * @return int
         */
        public function getIdpago()
        {
            return $this->idpago;
        }

        /**
         * @param int $idpago
         */
        public function setIdpago($idpago)
        {
            $this->idpago = $idpago;
        }




    }

?>