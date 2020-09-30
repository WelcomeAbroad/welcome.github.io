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

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mail.ru';  																							// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'welcomeabroad016@mail.ru';
$mail->Password = '65aL65rod1965';
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров

$mail->setFrom('welcomeabroad016@mail.ru');
$mail->addAddress('welcomeabroad016@gmail.com');
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Заявка с тестового сайта';
$mail->Body    = '' .$name . ' Phone ' .$phone. 'Age: '.$age. 'Nationality: ' .$nationality. 'Language: ' .$language. '';
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Error';
} else {
    echo "Thank you";
}