<?php
$area_id = $_REQUEST['area_id'];
$areaname = $_REQUEST['areaname'];
$city_id = $_REQUEST['city_id'];


include "connection.php";

$updateAreas = "update Areas set areaname='$areaname',city_id='$city_id' WHERE area_id='$area_id'";
mysqli_query($conn, $updateAreas);
header("location:areasview.php");