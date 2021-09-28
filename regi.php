<?php
session_start();

require_once 'database.php';

if ($_SESSION['log']) {
    header('Location: index.php');
}

$login = $_POST['login'];
$pass = $_POST['pass'];
$pass2 = $_POST['pass2'];

if($pass === $pass2){
    mysqli_query($con, "INSERT INTO `log` (`id`, `login`, `pass`, `pass2`) VALUES(NULL, '$login','$pass','$pass2')");
    $_SESSION['messa'] = 'Регистрация прошла успешно';
    header("Location: signin.php");
}else{
    $_SESSION['messa'] = 'Пароли не совпадают';
    header("Location: reg.php");
}
?>