<?php
$name = $_POST['name'];
$telephone = $_POST['telephone'];
$address = $_POST['address'];
$main_request = $_POST['main_request'];

$name = htmlspecialchars($name);
$telephone = htmlspecialchars($telephone);
$address = htmlspecialchars($address);
$main_request = htmlspecialchars($main_request);

$name = urldecode($name);
$telephone = urldecode($telephone);
$address = urldecode($address);
$main_request = urldecode($main_request);

$name = trim($name);
$telephone = trim($telephone);
$address = trim($address);
$main_request = trim($main_request);

if (mail("asmoday2011666@mail.ru",
    "Сообщение с сайта",
    "Провайдер: ".$main_request."\nИмя: ".$name. "\nТелефон: ".$telephone. "\nАдрес:\n".$address))
{
    header("Location: /#endthx");
} else {
    echo "при отправке сообщения возникли ошибки";
}