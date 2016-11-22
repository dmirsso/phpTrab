<?php
    class grupo{	
	private $cod_gru;
        private $qtdeAtual_gru;
        private $qtdeMin_gru;
        private $qtdeMax_gru;

        public function __construct($cod_gru, $qtdeAtual_gru, $qtdeMin_gru, $qtdeMax_gru) {
            $this->cod_gru = $cod_gru;
            $this->qtdeAtual_gru = $qtdeAtual_gru;
            $this->qtdeMin_gru = $qtdeMin_gru;
            $this->qtdeMax_gru = $qtdeMax_gru;
        }

        public function getCod_grupo() {
            return $this->cod_gru;
        }

        public function getQtdeAtual_grupo() {
            return $this->qtdeAtual_gru;
        }

        public function getQtdeMin_grupo() {
            return $this->qtdeMin_gru;
        }

        public function getQtdeMax_grupo() {
            return $this->qtdeMax_gru;
        }

        public function setCod_grupo($cod_gru) {
            $this->cod_gru = $cod_gru;
        }

        public function setQtdeAtual_grupo($qtdeAtual_gru) {
            $this->qtdeAtual_gru = $qtdeAtual_gru;
        }

        public function setQtdeMin_grupo($qtdeMin_gru) {
            $this->qtdeMin_gru = $qtdeMin_gru;
        }

        public function setQtdeMax_grupo($qtdeMax_gru) {
            $this->qtdeMax_gru = $qtdeMax_gru;
        }
    }
?>