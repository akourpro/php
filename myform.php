<?php
include 'config.php';

/**
 * انشئ قاعدة بيانات باسم users
 * انشئ خليتين باسم id حيث ان id نوعه A_I
 * الخلية الثانية باسم email
 * 
 * انشئ جدول يمكن من خلاله اضافة / تعديل / حذف البيانات من قاعدة البيانات
 * ثم
 * انشئ صفحة اخرى تعرض فيها جميع البيانات التي في جدول users
 */


// ادراج البيانات في القاعدة
if (isset($_POST['insert'])) {
    $getUser = htmlspecialchars($_POST['username']); // تحديد البيانات القادمة وتصفيتها من اكواد HTML

    // التحقق من أن البيانات غير فارغة
    if (!empty($getUser)) {
        // البحث عن البيانات في قاعدة البيانات
        $selectUser = $con->query("SELECT * FROM users WHERE username = '$getUser' LIMIT 1 ");
        // جلب النتيجة
        if ($selectUser->num_rows == 0) {
            $con->query("INSERT INTO users(username) VALUES('$getUser') ");
            echo "تم الادراج بنجاح";
            echo "<hr>";
        } else {
            echo "الاسم موجود بالفعل !";
            echo "<hr>";
        }
    }
}

if (isset($_POST['update'])) {
    $getUser = htmlspecialchars($_POST['username']);
    if (!empty($getUser)) {
        $selectUser = $con->query("SELECT * FROM users WHERE id = 11 LIMIT 1 ");
        if ($selectUser->num_rows == 1) {
            $con->query("UPDATE users SET username = '$getUser' WHERE id = 1 ");
            echo "تم تحديث البيانات بنجاح";
            echo "<hr>";
        } else {
            echo "الاسم غير موجود";
        }
    }
}

if (isset($_POST['delete'])) {
    $getUser = htmlspecialchars($_POST['username']);
    if (!empty($getUser)) {
        $selectUser = $con->query("SELECT * FROM users WHERE username = '$getUser' LIMIT 1 ");
        if ($selectUser->num_rows == 1) {
            $con->query("DELETE FROM users WHERE username = '$getUser' ");
            echo "تم حذف البيانات بنجاح";
            echo "<hr>";
        } else {
            echo "الاسم غير موجود";
        }
    }
}

?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">

    <label for="">Enter your name: </label>
    <br>
    <input type="text" name="username" placeholder="enter your name.." required>
    <br>
    <input type="submit" name="insert" value="Insert">
    <input type="submit" name="update" value="Update">
    <input type="submit" name="delete" value="Delete">


</form>