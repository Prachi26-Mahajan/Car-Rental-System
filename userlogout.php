<?php
session_start();
$_SESSION["useremail"]=null;
session_destroy();
header("Location:public_login.php");