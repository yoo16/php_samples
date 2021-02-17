<?php

$to = "yohei.yoshikawa@gmail.com";
$subject = "TEST";
$message = "This is TEST.\r\nHow are you?";
$headers = "From: from@example.com";
mb_send_mail($to, $subject, $message, $headers); 