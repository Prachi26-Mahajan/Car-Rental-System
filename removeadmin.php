<?php
$email=$_REQUEST["email"];
include "connection.php";

$s="delete from admindemo where email='$email'";

$result=mysqli_query($conn,$s);

header("location:manageadmin.php");