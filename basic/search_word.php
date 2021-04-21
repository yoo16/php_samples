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

//pregmatch
$pattern = '/^([a-zA-Z0-9]*)@([a-zA-Z0-9_-]*)([a-zA-Z0-9\._-]+)+$/';
preg_match($pattern, $email, $maches);
var_dump($maches);