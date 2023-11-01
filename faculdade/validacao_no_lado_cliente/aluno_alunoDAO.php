<?php 
    require_once "basic_DAO.php";

    class Aluno {
        public $matricula;
        public $nome;
        public $entrada;

        public function __construct($matricula = "", $nome = "", $entrada = 0)
        {
            $this -> matricula = $matricula;
            $this -> nome = $nome;
            $this -> entrada = $entrada;
        }
    }

    class alunoDAO extends basicDAO {
        function obterTodos() {
            return parent::execQUERY("SELECT * FROM alunos");
        }
        function inserir(Aluno $aluno) {
            parent::execDML(
                "INSERT INTO alunos VALUES (?, ?, ?)",
                $aluno->matricula,
                $aluno->nome,
                $aluno->entrada
            );
        }
    }
?>