<?php
// hash('sha512', '');
// Don't forget strlen() 
// password_hash($password, PASSWORD_BCRYPT);
// password_verify($user_pass, $password_from_db);

$mypass = "123456";

$mypass = hash('sha512', $mypass);
$sha_pass = $mypass;
echo  $mypass;
echo "<hr>";

$mypass = password_hash($mypass, PASSWORD_BCRYPT);
echo  $mypass;
echo "<hr>";

echo password_verify($sha_pass, $mypass);

// if (strlen($mypass) != 128) {
//     echo "حدث خطأ ما";
//     die();
// } else {
//     echo "تم التشفير";
// }
