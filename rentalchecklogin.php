<?php
@session_start();
include "connection.php";

$s = "select * from rental_signup";

$result = mysqli_query($conn, $s);
$flag = 0;
while ($row = mysqli_fetch_array($result)) {
    if ($row['Email'] == $_REQUEST["textbox1"] && $row['Password'] == $_REQUEST["textbox2"] && $row['Status'] == 'Active') {
        $flag = 1;
        $_SESSION["rental_id"] = $row[0];
        break;
    }
}

if ($flag == 1) {

    $_SESSION["rental_email"] = $_REQUEST["textbox1"];

    header("location:rentalhome.php");
} else {
    echo "Wrong user name and password";
    header("location:rental_login.php?er=1");
}






