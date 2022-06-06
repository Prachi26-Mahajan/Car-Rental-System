<?php
$areaname = $_REQUEST['areaname'];
$city_id = $_REQUEST['city_id'];

include "connection.php";
$select_areas = "select * from Areas";
$result_areas = mysqli_query($conn, $select_areas);

$flag = 0;

while ($row_areas = mysqli_fetch_array($result_areas)) {
    if ($areaname == $row_areas[1]) {
        $flag = 1;
        break;
    }
}
if ($flag == 1) {
    header("location:areas.php?msg=1");
} else {
    $insert_areas = "insert into Areas VALUES (NULL ,'$areaname','$city_id')";
    mysqli_query($conn, $insert_areas);
    header("location:areasview.php");
}