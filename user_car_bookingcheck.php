<?php
@session_start();
$_SESSION["mycarid"] = $_GET["carid"];
$_SESSION["cityid"] = $_GET["cityid"];
$_SESSION["areaid"] = $_GET["areaid"];

header("location:public_login.php");