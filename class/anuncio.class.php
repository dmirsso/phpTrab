<?php
    class anuncio{
        private $cod_anu;
        private $texto_anu;
        private $valor_anu;
        private $img_anu;
        private $data_inicio_anu;
        private $data_fim_anu;
        private $fornecedor_anu;
        private $produto_anu;
        private $ativo_anu;

        public function __construct($cod_anu, $texto_anu, $valor_anu, $img_anu, $data_inicio_anu, $data_fim_anu, $fornecedor_anu, $produto_anu, $ativo_anu) {
            $this->cod_anu = $cod_anu;
            $this->texto_anu = $texto_anu;
            $this->valor_anu = $valor_anu;
            $this->img_anu = $img_anu;
            $this->data_inicio_anu = $data_inicio_anu;
            $this->data_fim_anu = $data_fim_anu;
            $this->fornecedor_anu = $fornecedor_anu;
            $this->produto_anu = $produto_anu;
            $this->ativo_anu = $ativo_anu;
        }
        public function getCod_anuncio() {
            return $this->cod_anu;
        }

        public function getTexto_anuncio() {
            return $this->texto_anu;
        }

        public function getValor_anuncio() {
            return $this->valor_anu;
        }

        public function getImg_anuncio() {
            return $this->img_anu;
        }

        public function getData_inicio() {
            return $this->data_inicio_anu;
        }

        public function getData_fim() {
            return $this->data_fim_anu;
        }

        public function getFornecedor() {
            return $this->fornecedor_anu;
        }

        public function getProduto() {
            return $this->produto_anu;
        }

        public function getAtivo() {
            return $this->ativo;
        }

        public function setCod_anuncio($cod_anu) {
            $this->cod_anu = $cod_anu;
        }

        public function setTexto_anuncio($texto_anu) {
            $this->texto_anu = $texto_anu;
        }

        public function setValor_anuncio($valor_anu) {
            $this->valor_anu = $valor_anu;
        }

        public function setImg_anuncio($img_anu) {
            $this->img_anu = $img_anu;
        }

        public function setData_inicio($data_inicio) {
            $this->data_inicio_anu = $data_inicio;
        }

        public function setData_fim($data_fim_anu) {
            $this->data_fim_anu = $data_fim_anu;
        }

        public function setFornecedor($fornecedor_anu) {
            $this->fornecedor_anu = $fornecedor_anu;
        }

        public function setProduto($produto_anu) {
            $this->produto_anu = $produto_anu;
        }

        public function setAtivo($ativo_anu) {
            $this->ativo_anu = $ativo_anu;
        }
    }
?>