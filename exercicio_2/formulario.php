<?php
session_start();

if($_POST['senha'] !== $_POST['senha_confirm']){
    header('Location: cadastrar.php?erro=1');

} else {

    $_SESSION['user'] = $_POST['user'];
    $_SESSION['senha'] = $_POST['senha_confirm'];
    
    
    header('Location: projeto2.php');

}




?>