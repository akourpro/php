<?php
// PMA = Php My Admin
// DB = Database

// Hostname , Username , Password , DB name
// localhost

// قاعدة البيانات > جداول > خلايا > أسطر

$host = "localhost"; // Host name
$user = "root"; // Username for database
$pass = ""; // Password for database
$db_name = "omar"; // Database name

$con = mysqli_connect($host, $user, $pass, $db_name);

if (!$con) {
    die("فشل الاتصال ");
}

// echo "تم الاتصال";

// $createDB = "CREATE DATABASE omar";
// mysqli_query($con, "CREATE DATABASE omar");

$con->query("CREATE DATABASE shahad");

echo "تم انشاء قاعدة البيانات";

// * = All
// تحديد خلايا من جدول
$con->query("SELECT * FROM users");

// الادراج الفردي في قاعدة البيانات
$con->query("INSERT INTO users(username) VALUES('Mohammad')");


// الادراج المتعدد في قاعدة البيانات
$insert = "INSERT INTO users(username) VALUES ('Shahad') ";
$con->query($insert);
$insert = "INSERT INTO users(username) VALUES ('Reem') ";
$con->query($insert);
$insert = "INSERT INTO users(username) VALUES ('Osama') ";
$con->query($insert);
echo "تم ادراج جميع البيانات بنجاح";


// تعديل بيانات في قاعدة البيانات
$con->query("UPDATE users SET username='ريم' WHERE id = 4 LIMIT 1");
echo 'تم تحديث البيانات';

// الحذف من قاعدة البيانات
$con->query("DELETE FROM users WHERE id = 4");
echo 'تم الحذف من قاعدة البيانات';
