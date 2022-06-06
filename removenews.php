<?php
$newsid=$_REQUEST["q"];
include "connection.php";

$s="delete from news where newsid='$newsid'";

$result=mysqli_query($conn,$s);

header("location:managenews.php");
