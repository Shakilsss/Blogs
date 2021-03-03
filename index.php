<?php


session_start();
if(@$_SESSION['id']){
    header('Location:/blog/blogger/home.php');
}


	header('Location: frontEnd/home.php');
?>