<?php
include "connection.php";

if (isset($_POST['tbstatus'])) {
    $tbstatus = $_POST['tbstatus'];
    echo $tbstatus . "<br>";
    $delete = "delete from blacklist_cars where id_blacklist_cars=$tbstatus";
    mysqli_query($conn, $delete);
    echo $delete;
    header("location:blacklist_rentalcars.php");

} else {
    session_start();

    $mycar_id = $_POST['mycar_id'];
    $remarks = $_POST['remarks'];

    date_default_timezone_set("Asia/Kolkata");
    $date = date("Y-m-d");
    $time = date("h:i A");

    $insert_blacklist = "insert into blacklist_cars VALUES (NULL ,$mycar_id,'$date','$remarks','" . $_SESSION["rental_id"] . "')";
    echo $insert_blacklist;
    mysqli_query($conn, $insert_blacklist);
    header("location:blacklist_rentalcars.php");

}