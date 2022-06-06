<?php
$cityid = $_REQUEST['cityid'];

include "connection.php";

$delete_city = "delete from cities WHERE city_id=$cityid";
mysqli_query($conn, $delete_city);
header("location:cityview.php");