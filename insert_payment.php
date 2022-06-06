<?php
include "phpfunction.php";
include "connection.php";
include_once 'userheader.php';
$mycar_id = $_GET['mycar_id'];
$useremail = $_GET['useremail'];
$bookingid = $_REQUEST['bookingid'];

$startdate = date('Y-m-d', strtotime($_GET['startdate']));
$enddate = date('Y-m-d', strtotime($_GET['enddate']));
$numberofdays = $_GET['numberofdays'];

$gst_percent = 12;

$grandtotal = $_GET['grandtotal'] / 100;

$user = "select * from public_signup where email='$useremail'";
$user_result = mysqli_query($conn, $user);
$user_row = mysqli_fetch_array($user_result);

date_default_timezone_set("Asia/Kolkata");
$date = date("Y-m-d");
//echo $date;
$sql = "SELECT * FROM `booking` INNER JOIN cities ON cities.city_id=booking.city_id INNER JOIN areas ON areas.area_id=booking.pickupplace INNER JOIN mycars ON mycars.mycar_id=booking.mycar_id  WHERE `email`='$useremail' and booking.booking_id='$bookingid' ORDER BY booking.booking_id DESC";
$sql_result = mysqli_query($conn, $sql);
$sql_row = mysqli_fetch_array($sql_result);


$msg = 'Thank you for Booking with us. Your Booking ID is ' . $bookingid . "\n
City Name: " . $sql_row['cityname'] . "\n
Area Name: " . $sql_row['areaname'] . "\n
Car Name: " . $sql_row['car_name'] . "\n
Model; " . $sql_row['model'] . "\n
Color; " . $sql_row['color'] . "\n
Condition; " . $sql_row['condition'] . "\n
Registration No.: " . $sql_row['reg_no'] . "\n
Insurance Validity: " . $sql_row['insurance_validity'] . "\n
Description: " . $sql_row['description'] . "\n
Driving License No.: " . $sql_row['driving_license_number'] . "\n
Aadhar No.: " . $sql_row['aadhaar_number'] . "\n
Start Date: " . $sql_row['start_date'] . "\n
End Date: " . $sql_row['end_date'] . "\n
Rent: " . $sql_row['rent'] . "\n
GST: " . $gst_percent . "%\n
Grand Total: " . $grandtotal . "\n
";
echo phpsms($msg, $user_row['mobile']);
$insert = "insert into bills VALUES (NULL ,$mycar_id,'$useremail','$startdate','$enddate',$numberofdays,12,$grandtotal,'$date','$bookingid')";
mysqli_query($conn, $insert);

header("location:view_report.php");

