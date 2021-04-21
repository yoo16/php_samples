<?php
$fruits = array("lemon", "orange", "banana", "apple");
sort($fruits);

foreach ($fruits as $key => $val) {
    echo "fruits[{$key}] = {$val}\n";
}
