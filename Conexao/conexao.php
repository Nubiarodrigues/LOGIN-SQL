<?php

$user = "root";
$senha = "";
$banco = "login";
$local = "localhost";

$conexao = new mysqli($local, $user, $senha, $banco);

if ($conexao->error){
    //die() -> finalizar
    die("Falha ao conectar com o Banco de Dados" . $conexao->error);
}

?>