<?php

include 'config.php';
session_start();
if (isset($_POST['submit'])) {
    $getUser = htmlspecialchars($_POST['username']);
    if (!empty($getUser)) {
        $sql = $con->query("SELECT * FROM users WHERE username = '$getUser' LIMIT 1");
        if ($sql->num_rows == 1) {
            echo "تم الدخول بنجاح";
            while ($row = mysqli_fetch_assoc($sql)) {
                echo $row['username'];
            }
            // $_SESSION['username'];
            echo "<hr>";
        } else {
            echo "اسم المستخدم غير موجود";
            echo "<hr>";
        }
    }
}
?>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">

    <label for="">Enter your name: </label>
    <br>
    <input type="text" name="username" placeholder="enter your name.." required>
    <br>
    <input type="submit" name="submit" value="Enter">


</form>