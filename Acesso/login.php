<?php

include('../Conexao/conexao.php');

if(isset($_POST["email"]) || isset($_POST["senha"])){

    if(strlen($_POST["email"]) == 0){
        echo "Preencha os campos email!!";
    }else if(strlen($_POST["senha"]) == 0) {
        echo "Preencha sua senha!!";
    }else {

        $email = $conexao->real_escape_string($_POST["email"]);
        $senha = $conexao->real_escape_string($_POST["senha"]);

        $SQL = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";

        $sql_query = $conexao->query($SQL) or die("Falha na execução do código SQL!!" . $conexao->error);

        //retorna quantas linhas esta consulta retornou//
        $quantidade = $sql_query->num_rows;

        if($quantidade == 1){
            $user = $sql_query->fetch_assoc();
            
            if(!isset($_SESSION)){
                session_start();
            }
            $_SESSION["id"] = $user['id'];
            $_SESSION['nome'] = $user['nome'];

            header("location: ../Principal/principal.php");

        }else {
        echo "Falha ao logar!! Email ou senha incorretos.";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>Conta - Login</title>
</head>
<body>

    <div class="container">
    <form action="login.php" method="POST">
        <div class="logo-tipo">
            <img src="image/login.png" alt="" id="login">
        </div>
        <label for="email">Email:</label><br>
        <input type="text" id="input-user" name="email"><br><br>

        <label for="Senha">Senha:</label><br>
        <input type="password" id="input-user" name="senha"><br><br>
        <button>Logar</button>
    </form>
    </div>
    
    
</body>
</html>