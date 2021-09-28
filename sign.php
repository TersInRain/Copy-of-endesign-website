<?php
session_start();
require_once 'database.php';

if ($_SESSION['log']) {
    header('Location: index.php');
}

$login = $_POST['login'];
$pass = $_POST['pass'];

$check = mysqli_query($con, "SELECT * FROM `log` WHERE `login`= '$login' AND `pass`='$pass'");
// echo  mysqli_num_rows($check);

if (mysqli_num_rows($check) > 0) {
    $log = mysqli_fetch_assoc($check);
    $_SESSION['log'] = ["login" => $log['login']];
    header("Location: index.php");
} else {
    $_SESSION['messa'] = 'Неверный логин или пароль';
    header("Location: signin.php");
}

?>