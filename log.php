<?php
include 'config.php';
session_start();


if (isset($_POST['login'])) {
    $username = htmlspecialchars($_POST['username']);
    $password = $_POST['password'];
    $hash_pass = sha1($password); // تشفير كلمة المرور

    if (!empty($username) and !empty($password)) {
        // $select = $con->query("SELECT * FROM users WHERE (username = '$username' OR email = '$email') AND `password` = '$hash_pass' LIMIT 1");
        $select = $con->query("SELECT * FROM users WHERE username = '$username' AND `password` = '$hash_pass' LIMIT 1");
        if ($select->num_rows == 1) {
            while ($row = mysqli_fetch_assoc($select)) {
                $_SESSION['id'] = $row['id'];
                $_SESSION['username'] = $row['username'];
            }
            echo "تم الدخول بنجاح ! ";
            // header("Location: body.php"); // غير مستحسن
            echo '<meta http-equiv="refresh" content="0;url=body.php" />'; // مستحسن
            die();
        } else {
            echo "اسم المستخدم او كلمة المرور غير صحيحة !";
        }
    } else {
        echo "اسم المستخدم وكلمة المرور مطلوبة !";
    }
}

if (isset($_POST['logout'])) {
    if ($_SESSION['username']) {
        session_destroy();
        echo "تم الخروج بنجاح";
    }
}

if (isset($_POST['update'])) {
    $username = htmlspecialchars($_POST['username']);
    $sid = $_SESSION['id'];
    if (!empty($username)) {
        $_SESSION['username'] = $username;
        $con->query("UPDATE users SET username = '$username' WHERE id = '$sid' LIMIT 1");
        echo "تم تحديث البيانات بنجاح";
        echo '<meta http-equiv="refresh" content="0;url=log.php" />';
        die();
    }
}


echo $_SESSION['username'];
?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">

    <input type="text" name="username" placeholder="اسم المستخدم">
    <br>
    <!-- <input type="password" name="password" placeholder="كلمة المرور"> -->
    <br>
    <input type="submit" value="الدخول" name="login">
    <input type="submit" value="الخروج" name="logout">
    <input type="submit" value="تحديث الاسم" name="update">


</form>