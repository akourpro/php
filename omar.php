<?php

$con = mysqli_connect("localhost", "root", "", "data");



if (isset($_POST["Insert"])) {
    $data = htmlspecialchars($_POST["Insert"]);
    if (!empty($data)) {
        $num = $con->query("SELECT * FROM information where `name`='$data' limit 1");
        if ($num->num_rows == 0) {
            $con->query("INSERT INTO information (`name`) VALUES ('$data')");
            echo "تم الاضافة بنجاح";
        } else {
            echo "البيانات موجودة بالافعل ";
        }
    }
}
if (isset($_POST["Delete"])) {
    $data = htmlspecialchars($_POST["Delete"]);
    if (!empty($data)) {
        $num = $con->query("SELECT * from information where name='$data' limit 1");
        if ($num->num_rows == 1) {
            $con->query("DELETE from information where name='$data'");
        } else {
            echo "البيانات ليست موجودة بالفعل";
        }
    }
}
if (isset($_POST["Update"])) {
    $data = htmlspecialchars($_POST["Update"]);
    if (!empty($datat)) {
        $num = $con->query("SELECT * from information where name='$data' limit 1");
        if ($num->num_rows == 1) {
            $con->query("UPDATE information set(name='$data') where id=1");
        } else {
            echo "البيانات ليست موجودة بالافعل";
        }
    }
}




?>
<form action="omar.php" method="post">
    <input type="text" name="email" placeholder="Enter your name">

    <br>

    <input type="submit" name="Insert" value="Insert">

    <input type="submit" name="Delete" value="Delete">

    <input type="submit" name="Update" value="Update">



</form>