
<?php


$connect = mysqli_connect ('localhost','root','','pismo');

if (!$connect){
    die('Error');
}

// Получаем значения переменных из пришедших данных
error_reporting( E_ERROR );
if (isset($_POST['name'])){$name= $_POST['name'];
if ($name == ''){unset($name);}}

if (isset($_POST['email'])){$email= $_POST['email'];
if ($email == ''){unset($email);}}

if (isset($_POST['tel'])){$tel= $_POST['tel'];
if ($tel == ''){unset($tel);}}

if (isset($_POST['pol'])){$pol= $_POST['pol'];
if ($pol == ''){unset($pol);}}

if (isset($_POST['usl'])){$usl= $_POST['usl'];
if ($usl == ''){unset($usl);}}

if (isset($_POST['comment'])){$comment= $_POST['comment'];
if ($comment == ''){unset($comment);}}
// $name = $_POST['name'];
// $email = $_POST['email'];
// $tel = $_POST['tel'];
// $pol = $_POST['pol'];
// $usl = $_POST['usl'];
// $comment = $_POST['comment'];


if (isset($name) ){
$email = htmlspecialchars($email);
$tel = htmlspecialchars($tel);
$pol = htmlspecialchars($pol);
$usl = htmlspecialchars($usl);
$comment = trim($comment);}

if (isset($name) ) {
$email = urldecode($email);
$tel = urldecode($tel);
$pol = urldecode($pol);
$usl = urldecode($usl);
$comment = trim($comment);}

if (isset($name) ){
$email = trim($email);
$tel = trim($tel);
$pol = trim($pol);
$usl = trim($usl);
$comment = trim($comment);}



$address="poupkin111@mail.ru";
// текст письма 
$note_message="Имя : $name \r\n Email : $email \r\n Телефон : \r\n Пол : $pol \r\n Улуги : $usl \r\n Комментарий : $message";

if (isset($name)  &&  isset ($email) ) {
mail($address,$note_message,"Content-type:message/plain; windows-1251"); 
// сообщение после отправки формы
    
echo "Уважаемый(ая) $name</b> Ваше письмо отправленно успешно <br>Вам скоро ответят на почту  $email</b>.";
}
else{
    echo "что-то пошло не так";
}
?>


