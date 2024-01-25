<?php
include 'config.php';
if (isset($_POST['submit'])) {
    $user = $_POST['username'];
    $password = sha1($_POST['password']);
    $age = $_POST['age'];
    $date = date("Y-m-d H:i:s");
    if (!empty($user) and !empty($password)) {
        $con->query("INSERT INTO users(username,password,date,age) VALUES('$user','$password','$date','$age') ");
        echo "تم الادراج بنجاح";
    } else {
        echo "جميع البيانات مطلوبة!";
    }
}

?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">

    <input type="text" name="username" required placeholder="الاسم الكامل">
    <br>
    <input type="password" name="password" required placeholder="كلمة المرور">
    <br>
    <input type="date" name="age" placeholder="تاريخ الميلاد">
    <br>
    <input type="submit" value="تسجيل" name="submit">
</form>