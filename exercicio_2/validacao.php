<?php
session_start();

if(($_POST['user'] == $_SESSION['user']) && ($_POST['senha'] == $_SESSION['senha'])){
    $_SESSION['logou'] = 1;
    header('Location: paineldecontrole.php');
} elseif (!isset($_SESSION['user'])) {
    header('Location: projeto2.php?erro=1');
} else {
    header('Location: projeto2.php?erro=2');
}



?>