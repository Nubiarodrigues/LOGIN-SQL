<?php

include('../Protecao/protecao.php');

?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>Principal</title>
</head>
<body>
    <script>
        alert("Bem vindo a página principal, <?php echo $_SESSION["nome"]; ?>")
    </script>

    <header>

    <div class="btn-usuario">
            <button type="button" id="btn-usuario"> <img src="usuario.png" id="teste" height ="40px" width="40px" margin-right= "20px" /><?php echo $_SESSION["nome"]; ?></button>
    </div>

    <div>
       <button id="btn-sair"><a href="/LOGIN/Sair/sair.php">Sair</a></button> 
    </div>
    </header><br><br>
    <hr>

    <div class="container">
        <h1>Tarefas</h1>
        <hr id="hrTarefas">
        
        <input type="text" name="texto" id="texto" placeholder="Digite uma tarefa">

        <ul id="lista">
        
        </ul>
    
        <button id="adicionar">Adicionar</button>
    </div>
    

    <script src="script.js"></script>


    <footer>
        <p>Desenvolvido por <strong>Guilherme Marques</strong> e <strong>Núbia Maria</strong></p>
    </footer>
    
</body>
</html>

