<?php
use Dotenv\Dotenv;

require_once './vendor/autoload.php';

$dotenv =Dotenv::createImmutable(__DIR__);
$dotenv->load();

$smtp = $_ENV['smtp'];
$port = $_ENV['port'];
$encrypt = $_ENV['encrypt'];
$user_name = $_ENV['user_name'];
$password = $_ENV['password'];
$from = $_ENV['from'];
$from_name = $_ENV['from_name'];

//mail
$subject = 'Hello!';
$body = "Hello,\nThis is sending Swift Mailer!";
$from_address = [$from => $from_name];
$to_address = ['yohei.yoshikawa@gmail.com'];

// 送信設定
$transport = new Swift_SmtpTransport($smtp, $port, $encrypt);
$transport->setUsername($user_name);
$transport->setPassword($password);

$mailer = new Swift_Mailer($transport);

// メール作成
$message = new Swift_Message($subject);
$message->setFrom($from_address);
$message->setTo($to_address);
$message->setBody($body);

//メール送信
if ($mailer->send($message)) {
    echo 'メールを送信しました。';
}
