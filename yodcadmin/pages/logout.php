<?php
session_start();
if(empty($_SESSION['login'])){
    die("Nikal lo betta!");
}
else{
    session_unset();
    session_destroy();
    header('Location: /project');
}
?>