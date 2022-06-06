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

$select_Car = "select * from cars";
$result_Car = mysqli_query($conn, $select_Car);

$flag = 0;

while ($row_Cars = mysqli_fetch_array($result_Car)) {
    if ($carname == $row_Cars[0]) {
        $flag = 1;
        break;
    }

}
if ($flag == 1) {

    header("location:cars.php?msg=1");

} else {
    $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
    if ($ext != 'jpg' && $ext != 'png' && $ext != 'gif') {
//        header("location:cars.php?msg=3");
        echo $ext;
    } else {
        move_uploaded_file($tmpname, "car_photos/" . $filename);
        $insert_car = "insert into cars VALUES ('$carname','$brand','$description','car_photos/$filename')";
        mysqli_query($conn, $insert_car);
        header("location:cars.php?msg=2");

    }
}




