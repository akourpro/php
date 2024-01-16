<?php

$names = array(
    "Mohammad",
    "Ahmad",
    "Alaa",
    "Reem",
    "Aya"
);

$names = serialize($names); // للتشفير


$names = unserialize($names); // لفك التشفير
foreach ($names as $name) {
    echo $name . "<br>";
}
