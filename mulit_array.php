<?php


$cars = array(
    array("بي ام دبليو", 1990, 5), // المصفوفة 0
    array("كيا", 1994, 1) // المصفوفة 1
);

echo "نوع السيارة: " . $cars[0][0] . "- صُنعت سنة: " . $cars[0][1] . " - تُصنف عالميا برقم: " . $cars[0][2];
echo "<br>";
echo "نوع السيارة: " . $cars[1][0] . "- صنعت سنة: " . $cars[1][1] . " - تصنف عالميا برقم: " . $cars[1][2];
