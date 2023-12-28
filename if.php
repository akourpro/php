<?php

if (isset($_POST['update'])) {
    $pass1 = $_POST['password'];

    $pass1 = sha1($pass1);
    $pass1 = md5($pass1);
    // $pass2 = "202cb962ac59075b964b07152d234b70"; // 123
    // $pass2 = "40bd001563085fc35165329ea1ff5c5ecbdbbeef";
    // if ($pass1 == $pass2) {
    //     echo "تم الدخول بنجاح";
    // } else {
    //     echo "كلمة المرور غير صحيحة";
    // }
    // Ctrl + Shift + G

    echo $pass1;
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo '$2y$10$g1ztogokRUkHaxdGB8.PYuIky2Ga.vBCprVRaDJoTetZyVVUtANHm';
}

?>

<form action="if.php" method="post">
    <input type="password" placeholder="Enter your Password" name="password" required>
    <input type="submit" value="Update pass" name="update">
</form>