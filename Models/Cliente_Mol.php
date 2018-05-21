<?php
    class Cliente_Mol{

        private $idCliente=0;
        private $estado=0;
        private $nombre="";
        private $apellido="";
        private $correo="";
        private $telefono=0;

        /**
         * Cliente_Mol constructor.
         * @param int $idCliente
         * @param int $estado
         * @param string $nombre
         * @param string $apellido
         * @param string $correo
         * @param int $telefono
         */
        public function __construct($idCliente, $estado, $nombre, $apellido, $correo, $telefono)
        {
            $this->idCliente = $idCliente;
            $this->estado = $estado;
            $this->nombre = $nombre;
            $this->apellido = $apellido;
            $this->correo = $correo;
            $this->telefono = $telefono;
        }

        /**
         * @return int
         */
        public function getIdCliente()
        {
            return $this->idCliente;
        }

        /**
         * @param int $idCliente
         */
        public function setIdCliente($idCliente)
        {
            $this->idCliente = $idCliente;
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
        public function getApellido()
        {
            return $this->apellido;
        }

        /**
         * @param string $apellido
         */
        public function setApellido($apellido)
        {
            $this->apellido = $apellido;
        }

        /**
         * @return string
         */
        public function getCorreo()
        {
            return $this->correo;
        }

        /**
         * @param string $correo
         */
        public function setCorreo($correo)
        {
            $this->correo = $correo;
        }

        /**
         * @return int
         */
        public function getTelefono()
        {
            return $this->telefono;
        }

        /**
         * @param int $telefono
         */
        public function setTelefono($telefono)
        {
            $this->telefono = $telefono;
        }




    }
?>