<?php

include "connection.php";
$ar = $_REQUEST["arid"];
foreach ($ar as $val) {
    $s = "delete from rental_areas where rental_areas_id=$val";
    mysqli_query($conn, $s);

}
header("location:areas_choose.php");