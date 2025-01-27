<?php 
    require_once __DIR__ . '/../classes/GerenciadorTarefas.php';

    $cgerenciador = new GerenciadorTarefas();

    $id = $_GET['id'];

    $deletar = $cgerenciador->deletarTarefas($id);

    header("Location: /views/list.php");
    exit();

?>