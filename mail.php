<?php 

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';


$name = $_POST['contactName'];
$phone = $_POST['contactPhone'];
$age = $_POST['contactAge'];
$nationality = $_POST['contactNationality'];
$language = $_POST['contactLanguage'];

/*
 *
 */

//$mail->SMTPDebug = 3;

$mail->isSMTP();
$mail->Host = 'smtp.mail.ru';  																							// Specify main and backup SMTP servers
$mail->SMTPAuth = true;
$mail->Username = 'welcomeabroad016@mail.ru';
$mail->Password = '65aL65rod1965';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;

$mail->setFrom('welcomeabroad016@mail.ru');
$mail->addAddress('welcomeabroad016@gmail.com');
//$mail->addAddress('ellen@example.com');
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');
$mail->isHTML(true);

$mail->Subject = 'Заявка с сайта';
$mail->Body    = 'Name: ' .$name .'<br>' .
    ' Phone:  ' .$phone. '<br>' .
    'Age:  '.$age. '<br>' .
    'Nationality: ' .$nationality.'<br>' .
    'Language: ' .$language. '';
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Error';
} else {
    header('location: index.html');
}