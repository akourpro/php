<?php

setcookie("Akour", "Mohammad Akour", 0);

if (!isset($_COOKIE["Akour"])) {
    echo "No cooike";
} else {
    echo $_COOKIE['Akour'];
}
