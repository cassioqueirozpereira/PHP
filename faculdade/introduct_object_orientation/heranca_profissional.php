<?php 
    require_once "classe_pessoa.php";

    class Profissional extends Pessoa {
        private $profissao;
        function __construct($nome = "", $idade = 0, $profissao = "")
        {
            parent::__construct($nome, $idade);
            $this->profissao = $profissao;
        }
        public function getProfissao(){return $this->profissao;}
        public function setProfissao($profissao) {
            $this->profissao = $profissao;
        }
        public function exibirDados()
        {
            parent::exibirDados();
            echo "<h3>Trabalha como $this->profissao</h3>";
        }
    }
?>