<?php
    class pagamento{
        private $cod_pag;
        private $valor_pag;
        private $vencimento_pag;
        private $pedido_pag;
        private $grupo_pag;
        private $cliente_pag;
        
        public function __construct($cod_pag, $valor_pag, $vencimento_pag, $pedido_pag, $grupo_pag, $cliente_pag) {
            $this->cod_pag = $cod_pag;
            $this->valor_pag = $valor_pag;
            $this->vencimento_pag = $vencimento_pag;
            $this->pedido_pag = $pedido_pag;
            $this->grupo_pag = $grupo_pag;
            $this->cliente_pag = $cliente_pag;
        }

        public function getCod_pag() {
            return $this->cod_pag;
        }

        public function getValor_pag() {
            return $this->valor_pag;
        }

        public function getVencimento() {
            return $this->vencimento_pag;
        }

        public function getPedido() {
            return $this->pedido_pag;
        }

        public function getGrupo() {
            return $this->grupo_pag;
        }

        public function getCliente() {
            return $this->cliente_pag;
        }

        public function setCod_pag($cod_pag) {
            $this->cod_pag = $cod_pag;
        }

        public function setValor_pag($valor_pag) {
            $this->valor_pag = $valor_pag;
        }

        public function setVencimento($vencimento_pag) {
            $this->vencimento_pag = $vencimento_pag;
        }

        public function setPedido($pedido_pag) {
            $this->pedido_pag = $pedido_pag;
        }

        public function setGrupo($grupo_pag) {
            $this->grupo_pag = $grupo_pag;
        }

        public function setCliente($cliente_pag) {
            $this->cliente_pag = $cliente_pag;
        }
    }
?>

