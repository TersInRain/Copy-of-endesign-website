
<?php
// Получаем значения переменных из пришедших данных
$text = $_POST['text'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$pol = $_POST['pol'];
$usl = $_POST['usl'];
$comment = $_POST['comment'];

$name = htmlspecialchars($name);
$email = htmlspecialchars($email);
$tel = htmlspecialchars($tel);
$pol = htmlspecialchars($pol);
$usl = htmlspecialchars($usl);
$comment = trim($comment);

 
$name = urldecode($name);
$email = urldecode($email);
$tel = urldecode($tel);
$pol = urldecode($pol);
$usl = urldecode($usl);
$comment = trim($comment);

$name = trim($name);
$email = trim($email);
$tel = trim($tel);
$pol = trim($pol);
$usl = trim($usl);
$comment = trim($comment);


if (email("admin@mail.ru",
	"Новое письмо с сайта",
	"text: ".$text."\n".
	"email: ".$email."\n".
	"tel: ".$tel."\n".
	"pol: ".$pol."\n".
	"usl: ".$usl."\n".
	"comment: ".$comment."\n".
	"From: no-reply@mydomain.ru \r\n")
	
	) {
		echo('Письмо ');
	}
	else {
		echo('Есть ');
	}
?>