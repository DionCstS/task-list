<?php 
    require_once __DIR__ . '/../conexao/conect.php';
    require_once __DIR__ . '/../classes/Tarefas.php';

    class GerenciadorTarefas {
        private $conn;

        public function __construct() {
            global $conn;
            $this->conn = $conn;
        }

        public function adcionarTarefas($tarefa)
        {
            $stmt = $this->conn->prepare("INSERT INTO tarefas(titulo,descricao) VALUES (:titulo, :descricao)");
            $stmt->execute([
                ":titulo" => $tarefa->getTitulo(),
                 ":descricao" => $tarefa->getDescricao() 
            ]);
        }

        public function deletarTarefas($id)
        {
            $stmt = $this->conn->prepare("DELETE FROM tarefas WHERE id = :id");
            $stmt->execute([":id" => $id ]);
        }

        public function editarTarefas($id,$titulo,$descricao)
        {
            $stmt = $this->conn->prepare("UPDATE tarefas SET titulo = :titulo, descricao = :descricao WHERE id = :id");
            $stmt->execute([":id" => $id, ":titulo" => $titulo, ":descricao" => $descricao]);
        }
    }

?>