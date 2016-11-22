<?php
    class pedido{
        private $cod_ped;
        private $qtde_max_ped;
	private $qtde_min_ped;
	private $anuncio_ped;
        private $grupo_ped;

	public function __construct($cod_ped, $qtde_max_ped, $qtde_min_ped, $anuncio_ped, $grupo_ped) {
            $this->cod_ped = $cod_ped;
            $this->qtde_max_ped = $qtde_max_ped;
            $this->qtde_min_ped = $qtde_min_ped;
            $this->anuncio_ped = $anuncio_ped;
            $this->grupo_ped = $grupo_ped;
        }

        public function getCod_pedido() {
            return $this->cod_ped;
        }

        public function getQtdeMax_pedido() {
            return $this->qtde_max_ped;
        }
		
	public function getQtdeMin_pedido() {
            return $this->qtde_min_ped;
        }

        public function getAnuncio() {
            return $this->anuncio_ped;
        }

        public function getGrupo() {
            return $this->grupo_ped;
        }

        public function setCod_pedido($cod_ped) {
            $this->cod_ped = $cod_ped;
        }

        public function setQtdeMax_pedido($qtde_max_ped) {
            $this->qtde_max_ped = $qtde_max_ped;
        }
		
	public function setQtdeMin_pedido($qtde_min_ped) {
            $this->qtde_min_ped = $qtde_min_ped;
        }

        public function setAnuncio($anuncio_ped) {
            $this->anuncio_ped = $anuncio_ped;
        }

        public function setGrupo($grupo_ped) {
            $this->grupo_ped = $grupo_ped;
        }
    }
?>