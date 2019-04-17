<?php
$name = $_POST['name'];
$telephone = $_POST['telephone'];
$adres = $_POST['adres'];

$name = htmlspecialchars($name);
$telephone = htmlspecialchars($telephone);
$adres = htmlspecialchars($adres);

$name = urldecode($name);
$telephone = urldecode($telephone);
$adres = urldecode($adres);

$name = trim($name);
$telephone = trim($telephone);
$adres = trim($adres);

if (mail("pterekhin@mail.ru",
    "Сообщение с сайта",
    "Имя: ".$name. "\nТелефон: ".$telephone. "\nАдрес:\n".$adres))
{
    header("Location: /#endthx");
} else {
    echo "при отправке сообщения возникли ошибки";
}