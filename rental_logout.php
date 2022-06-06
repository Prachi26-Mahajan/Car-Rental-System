<?php
session_start();
session_destroy();
header("Location:rental_login.php");
