<?php
$carname = $_REQUEST['carname'];
$brand = $_REQUEST['brand'];
$description = $_REQUEST['description'];
//$photo = $_REQUEST['photo'];

include "connection.php";

/*photo upload code*/
$tmpname = $_FILES['photo']['tmp_name'];
$filename = $_FILES['photo']['name'];

$size = $_FILES['photo']['size'];


/*photo upload code ends*/
//echo $size;
if($tmpname !="") {

    if ($size < 900000) {

        $path = "car_photos/" . $filename;
        move_uploaded_file($tmpname, $path);
        $insert_car = " update cars set brand='$brand',desciption='$description',photo='$path' where car_name='$carname'";
        mysqli_query($conn, $insert_car);
        echo $insert_car;
        header("location:view_cars.php?msg=2");
    } else {
        header("location:cars_edit.php?msg=3");
    }
}
else{

    $insert_car = " update cars set brand='$brand',desciption='$description' where car_name='$carname'";
    mysqli_query($conn, $insert_car);
    echo $insert_car;
    header("location:view_cars.php?msg=2");
}




