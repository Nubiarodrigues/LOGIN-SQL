<?php

if (!isset($_SESSION)){
    session_start();
}

session_destroy(); //destruir

header("Location: ../Acesso/login.php");

//redirecionar

?>