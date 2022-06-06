<?php
$email = $_REQUEST['emailaddress'];
$password = $_REQUEST['password'];
$cpassword = $_REQUEST['cpassword'];
$fullname = $_REQUEST['fullname'];
$gender = $_REQUEST['gender'];
$mobile = $_REQUEST['mobile'];

include "connection.php";

$select = "select * from public_signUp";
$result = mysqli_query($conn, $select);
$flag = 0;
while ($row = mysqli_fetch_array($result)) {
    if ($row[0] == $email) {
        $flag = 1;
        break;
    }
}

if ($flag == 1) {
    header("location:public_signUp.php?msg=Username already exist");
} else {
    if ($password == $cpassword) {
        $insert_public_signUp = "insert into public_signUp VALUES ('$email','$password','$fullname','$gender','$mobile')";
        mysqli_query($conn, $insert_public_signUp);
        echo 'done';
        echo $insert_public_signUp;
        header("location:public_signUp.php?msg=You have Sign up Successfully");
    } else {
        echo 'passwords';
        header("location:public_signUp.php?msg=Password not matched");
    }
}

