<?php
// несколько получателей
$to  = 'welcomeabroad016@gmail.com' . ', ';  // обратите внимание на запятую


// тема письма
$subject = 'Заявка';

// текст письма
$message = $_POST['contactName']
    . '<br />'
    . $_POST['contactPhone'] . '<br />'
    . $_POST['contactAge']
    . '<br />' . $_POST['contactStudy']
    . '<br />' . $_POST['contactNationality']
    . '<br />' . $_POST['contactLanguage'];

// Для отправки HTML-письма должен быть установлен заголовок Content-type
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Дополнительные заголовки
$headers .= 'To: Ruslan <rodionov.off@gmail.com>' . "\r\n"; // Свое имя и email
$headers .= 'From: '  . $_POST['contactName'] . '<' . $_POST['contactPhone'] . '>' . "\r\n";


// Отправляем
mail($to, $subject, $message, $headers);