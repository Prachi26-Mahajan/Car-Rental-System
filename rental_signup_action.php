<?php
$name = $_REQUEST['name'];
$mobile = $_REQUEST['mobile'];
$GSTIN = $_REQUEST['GSTIN'];
$Adharno = $_REQUEST['Adharno'];
$Address = $_REQUEST['Address'];
$Email = $_REQUEST['Email'];
$password = $_REQUEST['password'];
$cpassword = $_REQUEST['cpassword'];

include "connection.php";

$select = "select * from rental_signup";
$result = mysqli_query($conn, $select);
$flag = 0;
while ($row = mysqli_fetch_array($result)) {
    if ($row[0] == $Email) {
        $flag = 1;
        break;
    }
}

if ($flag == 1) {
    header("location:rental_signup.php?msg=1");
} else {
    if ($password == $cpassword) {
        $insert_public_signUp = "insert into rental_signup VALUES (null,'$name','$GSTIN','$Address','$Adharno','$mobile','$Email','$password','Pending')";
        mysqli_query($conn, $insert_public_signUp);
        header("location:rental_signup.php?msg=3");
    } else {
        header("location:rental_signup.php?msg=2");
    }
}

