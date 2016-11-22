<?php
    class produto{
        private $cod_prod; 
        private $descricao_prod; 
        private $qtdeEstoque_prod; 
		
	public function __construct($cod_prod, $descricao_prod, $qtdeEstoque_prod) {
            $this->cod_prod = $cod_prod;
            $this->descricao_prod = $descricao_prod;
            $this->qtdeEstoque_prod = $qtdeEstoque_prod;
        }
        public function getCod_prod() {
            return $this->cod_prod;
        }

        public function getDescricao_prod() {
            return $this->descricao_prod;
        }

        public function getQtdeEstoque_prod() {
            return $this->qtdeEstoque_prod;
        }

        public function setCod_prod($cod_prod) {
            $this->cod_prod = $cod_prod;
        }

        public function setDescricao_prod($descricao_prod) {
            $this->descricao_prod = $descricao_prod;
        }

        public function setQtdeEstoque_prod($qtdeEstoque_prod) {
            $this->qtdeEstoque_prod = $qtdeEstoque_prod;
        }
    }
?>