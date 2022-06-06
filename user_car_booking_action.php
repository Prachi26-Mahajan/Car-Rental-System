<?php

include "connection.php";

$customeremail = $_POST['customeremail'];
$area_id = $_POST['area_id'];
$cityid = $_POST['cityid'];
$mycarid = $_POST['mycarid'];

$driving_license_number = $_POST['driving_license_number'];
$adhaar_number = $_POST['adhaar_number'];

$start_date = date('Y-m-d', strtotime($_POST['start_date']));
$end_date = date('Y-m-d', strtotime($_POST['end_date']));

$booking = "insert into booking VALUES(NULL,'$customeremail','$area_id','$cityid','$mycarid','$driving_license_number',
'$adhaar_number','$start_date','$end_date')";
echo $booking;
mysqli_query($conn, $booking);
header("location:user_car_booked.php?msg");

