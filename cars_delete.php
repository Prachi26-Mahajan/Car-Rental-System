<?php
include "connection.php";

$car_name = $_REQUEST['q'];

$delete = "delete from cars WHERE car_name='$car_name'";
mysqli_query($conn, $delete);

header("location:view_cars.php");