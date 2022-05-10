<?php

// получение данных с формы
$name = $_POST['name'];
$tel = $_POST['tel'];
$from = $_POST['from'];
$to = $_POST['to'];
$time = $_POST['time'];
$sevice = $_post['sevice'];

// Обработка полученных данных
$name = htmlspecialchars($name);  // преобразование символов в сущности (мнемоники)
$tel = htmlspecialchars($tel);
$from = htmlspecialchars($from);
$to = htmlspecialchars($to);
$time = htmlspecialchars($time);
$service = htmlspecialchars($service);

$name = urldecode($name);  // Декодирование URL
$tel = urldecode($tel);
$from = urldecode($from);
$to = urldecode($to);
$time = urldecode($time);
$service = urldecode($service);

$name = trim($name);  // удаление пробельных символов с обоих сторон
$tel = trim($tel);
$from = trim($from);
$to = trim($to);
$time = trim($time);
$service = trim($service);

// Отправляем данные на почту
if(mail("Jokerus@inbox.ru",
        "Заказ такси с сайта TaxiMedved.ru",
        "Имя: ".$name."\n".
        "Телефон: ".$tel."\n". 
        "Адрес подачи машины: ".$from."\n". 
        "Куда ехать: ".$to."\n". 
        "День и время подачи: ".$time."\n". 
        "Тариф: ".$service. "\r \n")
){echo ('Заказ принят! В ближайшее время с Вами свяжуться наши операторы!');
}else{
    echo('Имеются ошибки! Проверьте данные...');
}

?>