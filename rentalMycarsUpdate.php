<?php

$rental_id = $_REQUEST['rental_id'];

$tbmycar_id = $_REQUEST['tbmycar_id'];
$tbcar = $_REQUEST['tbcar'];
$modal = $_REQUEST['modal'];
$color = $_REQUEST['color'];
$condition = $_REQUEST['condition'];
$description = $_REQUEST['description'];
$regno = $_REQUEST['regno'];
$insurancevalidity = $_REQUEST['insurancevalidity'];
$rent = $_REQUEST['rent'];

/*photo upload*/
$coverphoto = $_FILES['coverphoto']['name'];
$tmp = $_FILES['coverphoto']['tmp_name'];


$ext = strtolower(pathinfo($coverphoto, PATHINFO_EXTENSION));
/*upload*/
include "connection.php";

if ($ext != 'jpg' && $ext != 'png' && $ext != 'gif' && $ext != 'jpeg') {
    header("location:rentalMycars.php?msg=1");
} else {
    $path = 'mycar/' . $coverphoto;
    move_uploaded_file($tmp, $path);
    $update_mycars = "update mycars set model='$modal',color='$color',`condition`='$condition',description='$description',
coverphoto='$path',reg_no='$regno',insurance_validity='$insurancevalidity',car_name='$tbcar',rental_id='$rental_id',rent='$rent' WHERE mycar_id=$tbmycar_id";
    mysqli_query($conn, $update_mycars);

    echo $update_mycars;
    header("location:rentalMycars.php");
}
