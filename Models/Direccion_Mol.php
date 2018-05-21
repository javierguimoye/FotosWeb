<?php


    class Direccion_Mol{

        private $idDireccion=0;
        private $nombre="";
        private $lat="";
        private $long="";
        private $descripcion=0;
        private $obs=0;

        /**
         * Direccion_Mol constructor.
         * @param int $idDireccion
         * @param string $nombre
         * @param string $lat
         * @param string $long
         * @param int $descripcion
         * @param int $obs
         */
        public function __construct($idDireccion, $nombre, $lat, $long, $descripcion, $obs)
        {
            $this->idDireccion = $idDireccion;
            $this->nombre = $nombre;
            $this->lat = $lat;
            $this->long = $long;
            $this->descripcion = $descripcion;
            $this->obs = $obs;
        }


        /**
         * @return int
         */
        public function getIdDireccion()
        {
            return $this->idDireccion;
        }

        /**
         * @param int $idDireccion
         */
        public function setIdDireccion($idDireccion)
        {
            $this->idDireccion = $idDireccion;
        }

        /**
         * @return string
         */
        public function getNombre()
        {
            return $this->nombre;
        }

        /**
         * @param string $nombre
         */
        public function setNombre($nombre)
        {
            $this->nombre = $nombre;
        }

        /**
         * @return string
         */
        public function getLat()
        {
            return $this->lat;
        }

        /**
         * @param string $lat
         */
        public function setLat($lat)
        {
            $this->lat = $lat;
        }

        /**
         * @return string
         */
        public function getLong()
        {
            return $this->long;
        }

        /**
         * @param string $long
         */
        public function setLong($long)
        {
            $this->long = $long;
        }

        /**
         * @return int
         */
        public function getDescripcion()
        {
            return $this->descripcion;
        }

        /**
         * @param int $descripcion
         */
        public function setDescripcion($descripcion)
        {
            $this->descripcion = $descripcion;
        }

        /**
         * @return int
         */
        public function getObs()
        {
            return $this->obs;
        }

        /**
         * @param int $obs
         */
        public function setObs($obs)
        {
            $this->obs = $obs;
        }
    }

?>