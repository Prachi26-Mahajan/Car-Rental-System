<?php
$email = $_REQUEST["email"];
$pass = $_REQUEST["password"];
$cpass = $_REQUEST["cpassword"];
$ownername = $_REQUEST["ownername"];
$mobileno = $_REQUEST["mobileno"];
$gstno = $_REQUEST["gstno"];
$panno = $_REQUEST["panno"];
$address = $_REQUEST["address"];
$state = $_REQUEST["state"];
$city = $_REQUEST["city"];

include "connection.php";

$query = "select * from restaurant";

$flag = 0;

$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_array($result)) {
    if ($row[0] == $email) {
        $flag = 1;
        break;
    }

}

if ($flag == 1) {
    echo "username already exists";
} else {
    if ($pass == $cpass) {
        include "connection.php";
        $s = "insert into restaurant values ('$email','$pass','$ownername','$mobileno','$gstno','$panno','$address','$state','$city','pending')";

        $result = mysqli_query($conn, $s);

        echo "Sign Up successfull";

    } else {

        echo "Password and Confirm Password does not matches";


    }
}


?>