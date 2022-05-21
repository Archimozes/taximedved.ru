<?php

$recepient = "jokerus@inbox.ru";
$sitename  = "Сайт https://TaxiMedved.ru/";
$subject   = "Заказ с сайта https://TaxiMedved.ru/";

$name = trim($_POST["name"]);
$phone = trim($_POST["phone"]);
$from = trim($_POST["from"]);
$to = trim($_POST["to"]);
$time = trim($_POST["time"]);
$service = trim($_POST["service"]);
$messagesite = trim($_POST["messagesite"]);

$message = "
Имя обратившегося: $name <br>
Номер телефона: $phone <br>
Подача такси: $from <br>
Куда ехать: $to <br>
День и время подачи: $time <br>
Тариф: $service";

$pagetitle = "Новая заявка с сайта \"$sitename\"";
mail($recepient, $subject, $message, "Content-type: text/html; charset=\"utf-8\"\n From: $recepient");
?>