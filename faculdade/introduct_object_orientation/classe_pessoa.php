<?php 
    class Pessoa {
        private $nome;
        private $idade;

        public function __construct($nome = "", $idade = 0)
        {
            $this->nome = $nome;
            $this->idade = $idade;
        }

        function __destruct()
        {
            echo ("$this->nome foi removido(a).");
        }

        public function getNome() {return $this->nome;}
        public function setNome($nome) {$this->nome=$nome;}
        public function getIdade() {return $this->idade;}
        public function setIdade($idade) {$this->idade=$idade;}

        public function exibirDados() {
            echo "<h2>$this->nome tem $this->idade ano(s)</h2>";
        }
    }
?>