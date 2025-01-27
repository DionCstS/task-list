<?php 
    require_once __DIR__ . '/../classes/GerenciadorTarefas.php';

    $cedit = new GerenciadorTarefas();


    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $id = $_POST["id"];
        $titulo = $_POST["titulo"];
        $descricao = $_POST["descricao"];

        $cedit->editarTarefas($id,$titulo,$descricao);

        header("Location: /views/list.php");
        exit();
    }
?>