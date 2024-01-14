<?php

// الاخفاء من المصفوفة
$names = array("Ahmad", "Ali", "Osama");
unset($names[1]);

print_r($names);

echo "<hr>";

// الحذف الكلي من المصفوفة
$names = array("Ahmad", "Ali", "Osama");

// Array , Start , Count
array_splice($names, 1, 1);

print_r($names);
