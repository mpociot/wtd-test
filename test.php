<?php

$array = array(
    "emoji" => "😀 😃 😄 😁 😆",
    "Random number" => rand(100, 999),
    "PHP Version" => phpversion()
);

foreach ($array as $key => $value) {
    echo $key . "\t=>\t" . $value . "\n";
}

$now = new DateTime();
echo $now->format('Y-m-d H:i:s')