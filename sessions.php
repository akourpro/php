<?php
session_start();



$_SESSION['phone'] = 123456;
$_SESSION['name'] = "Mohammad ";
// echo "تم تعيين الجلسة بنجاح";


echo $_SESSION['name'];
