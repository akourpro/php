<form action="index.php" method="GET">
    <input type="number" placeholder="الرقم الأول" name="number1">
    <input type="number" placeholder="الرقم الثاني" name="number2">
    <input type="submit" name="login" value="اعتماد">
</form>

<?php

if (isset($_GET['login'])) {

    $number1 = $_GET['number1'];
    $number2 = $_GET['number2'];
    if ($number1 > $number2) {
        echo "الرقم الاول اكبر";
    } elseif ($number1 < $number2) {
        echo "الرقم الثاني اكبر";
    } else {
        echo "قيمة مجهولة";
    }
}


/**
 * 
 * نموذج يطلب من المستخدم ادخال عمره
 * بشرط اذا كان عمره اكبر من 25 إطبع رائع
 * اذا كان أصغر من 25 اطبع، عد لاحقا
 * اذا كان يساوي 25، اطبع مرحبا بك
 * POST
 * 
 */
