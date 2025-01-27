<?php 
    require_once __DIR__ . '/../classes/GerenciadorTarefas.php';

    class Tarefas {
        private $id;
        private $titulo;
        private $descricao;
        private $date;

        public function __construct($id,$titulo,$descricao,$date) {
            $this->id = $id;
            $this->titulo = $titulo;
            $this->descricao = $descricao;
            $this->date = $date;
        }

        public function getId()
        {
            return $this->id;
        }

        public function getTitulo()
        {
            return $this->titulo;
        }

        public function getDescricao()
        {
            return $this->descricao;
        }

        public function getDate()
        {
            return $this->date;
        }
    }
?>