<?php
include "connection.php";

$cityid = $_REQUEST['cityid'];
$cityname = $_REQUEST['cityname'];
$postalcode = $_REQUEST['postalcode'];

$update_cities = "update cities set cityname='$cityname',postalcode='$postalcode' WHERE city_id=$cityid";
mysqli_query($conn, $update_cities);
header("location:cityview.php");