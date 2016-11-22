<?php
    class cliente{ 
        private $cod_cli;
        private $cpf_cli;
        private $nome_cli;
        private $end_cli;
        private $tel_cli;
        private $cel_cli;
        private $email_cli; 
        private $classificacao_cli;
        private $cidade_cli;
        private $cep_cli;

        public function __construct($cod_cli, $cpf_cli, $nome_cli, $end_cli, $tel_cli, $cel_cli, $email_cli, $classificacao_cli, $cidade_cli, $cep_cli, $grupo) {
            $this->cod_cli = $cod_cli;
            $this->cpf_cli = $cpf_cli;
            $this->nome_cli = $nome_cli;
            $this->end_cli = $end_cli;
            $this->tel_cli = $tel_cli;
            $this->cel_cli = $cel_cli;
            $this->email_cli = $email_cli;
            $this->classificacao_cli = $classificacao_cli;
            $this->cidade_cli = $cidade_cli;
            $this->cep_cli = $cep_cli;
        }
        public function getCod_cliente() {
            return $this->cod_cli;
        }

        public function getCpf_cliente() {
            return $this->cpf_cli;
        }

        public function getNome_cliente() {
            return $this->nome_cli;
        }

        public function getEnd_cliente() {
            return $this->end_cli;
        }

        public function getTel_cliente() {
            return $this->tel_cli;
        }

        public function getCel_cliente() {
            return $this->cel_cli;
        }

        public function getEmail_cliente() {
            return $this->email_cli;
        }

        public function getClassificacao_cliente() {
            return $this->classificacao_cli;
        }

        public function getCidade_cliente() {
            return $this->cidade_cli;
        }

        public function getCep_cliente() {
            return $this->cep_cli;
        }

        public function setCod_cliente($cod_cli) {
            $this->cod_cli = $cod_cli;
        }

        public function setCpf_cliente($cpf_cli) {
            $this->cpf_cli = $cpf_cli;
        }

        public function setNome_cliente($nome_cli) {
            $this->nome_cli = $nome_cli;
        }

        public function setEnd_cliente($end_cli) {
            $this->end_cli = $end_cli;
        }

        public function setTel_cliente($tel_cli) {
            $this->tel_cli = $tel_cli;
        }

        public function setCel_cliente($cel_cli) {
            $this->cel_cli = $cel_cli;
        }

        public function setEmail_cliente($email_cli) {
            $this->email_cli = $email_cli;
        }

        public function setClassificacao_cliente($classificacao_cli) {
            $this->classificacao_cli = $classificacao_cli;
        }

        public function setCidade_cliente($cidade_cli) {
            $this->cidade_cli = $cidade_cli;
        }

        public function setCep_cliente($cep_cli) {
            $this->cep_cli = $cep_cli;
        }
    }	 
?>