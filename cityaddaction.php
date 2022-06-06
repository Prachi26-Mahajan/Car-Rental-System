<?php
$cityname = $_REQUEST['cityname'];
$postalcode = $_REQUEST['postalcode'];

include "connection.php";


$select_cities = "select * from cities";
$result_cities = mysqli_query($conn, $select_cities);

$flag = 0;

while ($row_cities = mysqli_fetch_array($result_cities)) {
    if ($cityname == $row_cities[1]) {
        $flag = 1;
        break;
    }
}
if ($flag == 1) {
    header("location:cityadd.php?msg=1");
} else {
    $insert_cities = "insert into cities VALUES (NULL ,'$cityname','$postalcode')";
    mysqli_query($conn, $insert_cities);
    header("location:cityview.php");
}