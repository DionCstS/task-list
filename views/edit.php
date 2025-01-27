<?php 
    require_once __DIR__ . '/../classes/GerenciadorTarefas.php';

    $cedit = new GerenciadorTarefas();


    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $id = $_POST["id"];
        $titulo = $_POST["titulo"];
        $descricao = $_POST["descricao"];

        // $cedit->editarTarefas($id,$titulo,$descricao);

        // header("Location: /views/list.php");
        // exit();
    }
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Tarefa</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/create.css">
</head>
<body>

    <div class="container">
        <h1>Editar Tarefa</h1>
        <form action="edit_teste.php" method="post" class="form-container">
            <div class="input-box">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <label for="titulo">Título</label>
                <input type="text" name="titulo" id="titulo" placeholder="Digite o título da tarefa" value="<?php echo $titulo ?>" required>
            </div>

            <div class="input-box">
                <label for="descricao">Descrição</label>
                <textarea name="descricao" id="descricao" placeholder="Digite a descrição da tarefa" required>
                    <?php echo $descricao; ?>
                </textarea>
            </div>

            <button type="submit" class="submit-button">Editar</button>
        </form>
    </div>

</body> 
</html>