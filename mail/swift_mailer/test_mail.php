<?php
use Dotenv\Dotenv;

require_once './vendor/autoload.php';

$dotenv =Dotenv::createImmutable(__DIR__);
$dotenv->load();

$smtp = $_ENV['MAIL_SMTP'];
$port = $_ENV['MAIL_PORT'];
$encrypt = $_ENV['MAIL_ENCRYPTION'];
$user_name = $_ENV['MAIL_USERNAME'];
$password = $_ENV['MAIL_PASSWORD'];
$from = $_ENV['MAIL_FROM_ADDRESS'];
$from_name = $_ENV['MAIL_FROM_NAME'];
$to = $_ENV['MAIL_TO'];

//mail
$subject = 'Hello!';
$text = "Hello,\nThis is sending Swift Mailer!";
$html = '<html>
<head></head>
<body>
<p style="color:red;">
HTMLメールです
</p>
</body>
</html>';
$from_address = [$from => $from_name];
$to_address = [$to];

// 送信設定
$transport = new Swift_SmtpTransport($smtp, $port, $encrypt);
$transport->setUsername($user_name);
$transport->setPassword($password);

$mailer = new Swift_Mailer($transport);

// メール作成
$message = new Swift_Message($subject);
$message->setFrom($from_address);
$message->setTo($to_address);
$message->setBody($text);
$message->setBody($html, 'text/html');
$message->addPart($text, 'text/plain');

//メール送信
if ($mailer->send($message)) {
    echo 'メールを送信しました。';
}
