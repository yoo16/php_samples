<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

mb_language("japanese");
mb_internal_encoding("UTF-8");

$mail = new PHPMailer(true);
$mail->CharSet = "iso-2022-jp";
$mail->Encoding = "7bit";
$mail->setLanguage('ja', 'vendor/phpmailer/phpmailer/language/');

try {
    //サーバの設定
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host = 'smtp.mailtrap.io';
    $mail->SMTPAuth = true;
    $mail->Username = '6a385fb8aadc3a';
    $mail->Password = '4b99477d057b9a';
    //$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; //SSL
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; //TLS
    $mail->Port = 2525;

    $email = 'yohei.yoshikawa@gmail.com';
    $mail->setFrom($email, mb_encode_mimeheader('差出人名'));
    $mail->addAddress($email, mb_encode_mimeheader("受信者名"));
    //   $mail->addReplyTo($email, mb_encode_mimeheader("お問い合わせ")); 
    //   $mail->addCC('foo@example.com'); 

    $mail->isHTML(true);
    $mail->Subject = mb_encode_mimeheader('メールタイトル');
    $mail->Body  = mb_convert_encoding('メッセージ <b>BOLD</b>', "JIS", "UTF-8");
    $mail->AltBody = mb_convert_encoding('テキストメッセージ', "JIS", "UTF-8");

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
