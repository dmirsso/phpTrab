<?php
    class fornecedor{
        private $cod_for;
        private $cnpj_for;
        private $nome_for;
        private $fantasia_for;
	private $end_for;
        private $tel_for;
        private $email_for;
        private $classificacao_for;
        private $cidade_for;
        private $cep_for;
        
        public function __construct($cod_for, $cnpj_for, $nome_for, $fantasia_for, $end_for, $tel_for, $email_for, $classificacao_for, $cidade_for, $cep_for) {
            $this->cod_for = $cod_for;
            $this->cnpj_for = $cnpj_for;
            $this->nome_for = $nome_for;
            $this->fantasia_for = $fantasia_for;
            $this->end_forn = $end_for;
            $this->tel_for = $tel_for;
            $this->email_for = $email_for;
            $this->classificacao_for = $classificacao_for;
            $this->cidade_for = $cidade_for;
            $this->cep_for = $cep_for;
        }
        
        public function getCod_fornecedor() {
            return $this->cod_for;
        }

        public function getCnpj_fornecedor() {
            return $this->cnpj_for;
        }

        public function getNome_fornecedor() {
            return $this->nome_for;
        }
		
	public function getFantasia_fornecedor(){
            return $this->fantasia_for;
	}

        public function getEnd_fornecedor() {
            return $this->end_forn;
        }

        public function getTel_fornecedor() {
            return $this->tel_fornecedor;
        }

        public function getEmail_fornecedor() {
            return $this->email_fornecedor;
        }

        public function getClassificacao_fornecedor() {
            return $this->classificacao_fornecedor;
        }

        public function getCidade_fornecedor() {
            return $this->cidade_fornecedor;
        }

        public function getCep_fornecedor() {
            return $this->cep_fornecedor;
        }

        public function setCod_fornecedor($cod_for) {
            $this->cod_fornecedor = $cod_for;
        }

        public function setCnpj_fornecedor($cnpj_for) {
            $this->cnpj_fornecedor = $cnpj_for;
        }

        public function setNome_fornecedor($nome_for) {
            $this->nome_fornecedor = $nome_for;
        }
		
	public function setFantasia_fornecedor($fantasia_for){
            $this->fantasia_for = $fantasia_for;
	}
		
        public function setEnd_fornecedor($end_for) {
            $this->end_fornecedor = $end_for;
        }

        public function setTel_fornecedor($tel_for) {
            $this->tel_fornecedor = $tel_for;
        }

        public function setEmail_fornecedor($email_for) {
            $this->email_fornecedor = $email_for;
        }

        public function setClassificacao_fornecedor($classificacao_for) {
            $this->classificacao_fornecedor = $classificacao_for;
        }

        public function setCidade_fornecedor($cidade_for) {
            $this->cidade_fornecedor = $cidade_for;
        }

        public function setCep_fornecedor($cep_for) {
            $this->cep_fornecedor = $cep_for;
        }
    }    
?>