<?php
include 'config.php';
// XSS
if (isset($_POST['submit'])) {
    $username = htmlspecialchars($_POST['username']);
    if (!empty($username)) {

        $fetchUser = $con->query("SELECT * FROM users WHERE username = '$username' LIMIT 1 ");
        if (mysqli_num_rows($fetchUser) == 1) {
            echo "اسم المستخدم موجود بالفعل !";
            echo "<hr>";
        } else {
            $con->query("INSERT INTO users(username) VALUES ('$username')");
            echo "تم ادراج البيانات بنجاح";
            echo "<hr>";
        }
    } else {
        echo "جميع الحقول مطلوبة";
        echo "<hr>";
    }
}
?>

<form action="register.php" method="post">
    <label for="">Enter your name: </label>
    <br>
    <input type="text" name="username" placeholder="enter your name.." required>
    <br>
    <input type="submit" name="submit" value="Enter">
</form>