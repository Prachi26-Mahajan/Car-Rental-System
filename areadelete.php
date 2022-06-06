<?php
include "connection.php";

$areaid = $_REQUEST['areaid'];
$deleteAreas = "delete from Areas WHERE area_id='$areaid'";
mysqli_query($conn, $deleteAreas);
header("location:areasview.php");