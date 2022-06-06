<?php
include "connection.php";

$mycar_id = $_REQUEST['mycar_id'];

$delete = "delete from mycars WHERE mycar_id='$mycar_id'";
mysqli_query($conn, $delete);

header("location:rentalMycars.php");