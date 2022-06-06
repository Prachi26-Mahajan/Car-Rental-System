<?php
session_start();

include "connection.php";

$rental_email = $_SESSION["rental_email"];
$rental_id = $_SESSION["rental_id"];

$city_id = $_REQUEST['tbcity_id'];
$areas = $_POST["ch"];  /*array in this*/

foreach ($areas as $aid) {

    $sel_ = "select * from rental_areas WHERE  rental_id='$rental_id' and area_id='$aid'";

    $sresult = mysqli_query($conn, $sel_);

    if (mysqli_num_rows($sresult) == 0) {
        $insert_into_rental_areas = "insert into rental_areas VALUES (NULL ,'$aid','$city_id','$rental_id')";
        mysqli_query($conn, $insert_into_rental_areas);
    }
}

header("location:areas_choose.php");


