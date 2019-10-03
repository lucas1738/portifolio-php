<?php
session_start();
$email = array('admin@globo.com','carlos@globo.com','joao@globo.com');
$senha = '123456';
$_SESSION['mail'] = $_POST['email'];

// $_POST['email'] == $email
if($_POST['email'] == 'carlos@globo.com'){
    $_SESSION['user'] = 'Carlos da Silva';
} elseif($_POST['email'] == 'joao@globo.com'){
    $_SESSION['user'] = 'João Marques';
} else {
    $_SESSION['user'] = 'Administrador';

}

if((in_array($_POST['email'], $email)) && ($_POST['senha'] == $senha)){
    $_SESSION['logou'] = 1;

}

header('Location: arearestrita.php');


?>