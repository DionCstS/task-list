<?php 
    require __DIR__ . '/../classes/GerenciadorTarefas.php';

    $conected = new GerenciadorTarefas();
    $tarefas = $conected->listarTarefas();
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarefas</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/list.css"> <!-- Link para o CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <!-- <h1>Tarefas</h1> -->

    <div class="container"> <!-- Container para exibir as tarefas em formato de grid -->
        <?php foreach($tarefas as $tarefa) : ?>
            <div class="task-item"> <!-- Card de tarefa -->
                <div>
                    <div class="titulo">
                        <?php echo htmlspecialchars($tarefa['titulo']); ?>
                    </div>

                    <div class="descricao">
                        <?php echo htmlspecialchars($tarefa['descricao']); ?>
                    </div>

                    <div class="button-left">
                        <form action="../views/edit.php" method="post">

                            <input type="hidden" name="id" value="<?php echo $tarefa['id']; ?>">

                            <input type="hidden" name="titulo" value="<?php echo $tarefa['titulo']; ?>">

                            <input type="hidden" name="descricao" value="<?php echo $tarefa['descricao']; ?>">

                            <button type="submit">Editar</button>
                        </form>
                    </div>

                    <div class="button-right">
                        <form action="../views/delete.php" method="get">
                            <input type="hidden" name="id" value="<?php echo $tarefa['id']; ?>">
                            <button type="submit">Deletar</button>
                        </form>
                    </div>
                    
                </div>
            </div>
        <?php endforeach; ?>

        <div class="new-task">
            <div class="new-title">
                Nova Tarefa
            </div>
            <div class="icon-wrapper">
                <div class="icon-container">
                    <a href="./create.php"><i class="fas fa-plus"></i></a>
                </div>
            </div>
        </div>
        
    </div>

</body>
</html>

<div>


                    
                