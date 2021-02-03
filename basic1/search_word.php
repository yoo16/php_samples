<?php
$email = 'test@example.com';

//strpos & substr
$index = strpos($email, '@');
echo substr($email, 0, $index).PHP_EOL;
echo substr($email, $index + 1).PHP_EOL;

//explode
$results = explode('@', $email);
echo $results[0].PHP_EOL;
echo $results[1].PHP_EOL;
