<?php

$recepient = "jokerus@inbox.ru";
$sitename  = "Сайт https://TaxiMedved.ru/";
$subject   = "Заказ с сайта https://TaxiMedved.ru/";

$name = trim($_POST["name"]);
$phone = trim($_POST["phone"]);
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