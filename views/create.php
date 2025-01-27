<?php 
    require_once   '../classes/GerenciadorTarefas.php';

    $adtarefa = new GerenciadorTarefas();


    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $titulo = $_POST["titulo"];
        $descricao = $_POST["descricao"];

        $tarefa = new Tarefas(NULL,$titulo,$descricao,NULL);

        $adtarefa->adcionarTarefas($tarefa);

        header("Location: /views/list.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Tarefa</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/create.css">
</head>
<body>

    <div class="container">
        <h1>Adicionar Tarefa</h1>
        <form action="create.php" method="post" class="form-container">
            <div class="input-box">
                <label for="titulo">Título</label>
                <input type="text" name="titulo" id="titulo" placeholder="Digite o título da tarefa" required>
            </div>

            <div class="input-box">
                <label for="descricao">Descrição</label>
                <textarea name="descricao" id="descricao" placeholder="Digite a descrição da tarefa" required></textarea>
            </div>

            <button type="submit" class="submit-button">Criar</button>
        </form>
    </div>

</body> 
</html>
