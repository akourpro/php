<?php

$text = "The rain in SPAIN falls mainly on the plains";
$omar = "#the#i";


// echo preg_match($search, $text); // البحث الواحد
// echo preg_match_all($search, $text); // البحث المتعدد
// echo preg_match_all($search, $text, $matches); // حفظ القيم داخل مصفوفة 

// if (preg_match_all($search, $text, $matches)) {
//     print_r($matches);
// }


echo preg_replace($omar, "AKOUR", $text); // استبدال نص
