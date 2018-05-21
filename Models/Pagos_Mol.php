<?php

    class Pagos_Mol{

        private $idPag =0;
        private $idcli=0;
        private $monto=0;
        private $fechapago="";
        private $trasactionid="";
        private $concepto="";

        /**
         * Pagos_Mol constructor.
         * @param int $idPag
         * @param int $idcli
         * @param int $monto
         * @param string $fechapago
         * @param string $trasactionid
         * @param string $concepto
         */
        public function __construct($idPag, $idcli, $monto, $fechapago, $trasactionid, $concepto)
        {
            $this->idPag = $idPag;
            $this->idcli = $idcli;
            $this->monto = $monto;
            $this->fechapago = $fechapago;
            $this->trasactionid = $trasactionid;
            $this->concepto = $concepto;
        }

        /**
         * @return int
         */
        public function getIdPag()
        {
            return $this->idPag;
        }

        /**
         * @param int $idPag
         */
        public function setIdPag($idPag)
        {
            $this->idPag = $idPag;
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
        public function getMonto()
        {
            return $this->monto;
        }

        /**
         * @param int $monto
         */
        public function setMonto($monto)
        {
            $this->monto = $monto;
        }

        /**
         * @return string
         */
        public function getFechapago()
        {
            return $this->fechapago;
        }

        /**
         * @param string $fechapago
         */
        public function setFechapago($fechapago)
        {
            $this->fechapago = $fechapago;
        }

        /**
         * @return string
         */
        public function getTrasactionid()
        {
            return $this->trasactionid;
        }

        /**
         * @param string $trasactionid
         */
        public function setTrasactionid($trasactionid)
        {
            $this->trasactionid = $trasactionid;
        }

        /**
         * @return string
         */
        public function getConcepto()
        {
            return $this->concepto;
        }

        /**
         * @param string $concepto
         */
        public function setConcepto($concepto)
        {
            $this->concepto = $concepto;
        }



    }

?>