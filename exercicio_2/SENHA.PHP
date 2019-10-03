<?php
session_start();
if($_POST['senha_confirm'] == $_SESSION['senha']){
    header('Location: recuperar_senha.php?erro=1');

}
elseif($_POST['senha_confirm'] !== $_POST['senha']){
    header('Location: recuperar_senha.php?erro=2');

}
else {
    $_SESSION['senha'] = $_POST['senha_confirm'];
    header('Location: projeto2.php');
}

?>