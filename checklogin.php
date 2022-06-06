<?php
include "connection.php";

$s = "select * from admindemo";
$result = mysqli_query($conn, $s);
$flag = 0;
while ($row = mysqli_fetch_array($result)) {
    if ($row[0] == $_REQUEST["email"] && $row[1] == $_REQUEST["textbox2"]) {
        $flag = 1;
        break;
    }
}

if ($flag == 1) {
    session_start();
    $_SESSION["email"] = $_REQUEST["email"];
    header("location: adminhome.php");
} else {
    echo "Wrong user name and password";
    header("location: login.php?er=1");
}






