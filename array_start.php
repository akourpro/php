<?php

// $name1 = "Mohammad";
// $name2 = "Ahmad";
// $name3 = "Omar";
// $name4 = "Yasser";

// echo $name1;
// echo $name2;
// echo $name3;
// echo $name4;
$names = array("Mohammad", "Ahmad", "Omar", "Yasser");

// $names[0] = "Aya"; // استبدال
// $names[] = "Jordan"; // زيادة واحدة

array_push($names, "Jordan", "Amman", "Irbid", "Zarqa"); // زيادة متعددة

print_r($names); // طباعة المصفوفة بالكامل
// var_dump($names);
// echo $names[3]; // طباعة نص معين
