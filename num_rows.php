<?php
include 'config.php';

// $selectUsers = $con->query("SELECT * FROM users");
// Order By = ASC | DESC

$selectUsers = $con->query("SELECT * FROM users ORDER BY id DESC");


if (mysqli_num_rows($selectUsers) >= 1) {

    // $row = mysqli_fetch_assoc($selectUsers);
    while ($row = mysqli_fetch_assoc($selectUsers)) {

        // echo $row['id'] . "<br>";
        echo "User ID: " . $row['id'] . ", Username: " . $row['username'];
        echo "<br>";
    }
} else {
    echo "No data";
}


// if ($selectUsers->num_rows >= 1) {
//     echo "data";
// } else {
//     echo "no data";
// }
