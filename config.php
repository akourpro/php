<?php

$hostname = "localhost";
$user = "root";
$pass = "";
$dbName = "omar";

$con = mysqli_connect($hostname, $user, $pass, $dbName);

if (!$con) {
    die("Error database");
}
