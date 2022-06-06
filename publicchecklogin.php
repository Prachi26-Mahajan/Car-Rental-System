<?php

include "connection.php";

$s = "select * from public_signUp";

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
    $_SESSION["useremail"] = $_REQUEST["email"];
    if (isset($_SESSION["mycarid"])) {
        $carid = $_SESSION["mycarid"];

        $cityid = $_SESSION["cityid"];
        $areaid = $_SESSION["areaid"];

        unset($_SESSION["mycarid"]);


        unset($_SESSION["cityid"]);
        unset($_SESSION["areaid"]);

        header("location:user_car_booking.php?carid=$carid&cityid=$cityid&areaid=$areaid");
    } else {

        header("location: userhome.php");
    }
} else {
    echo "Wrong user name and password";
    header("location: public_login.php?er=1");
}






