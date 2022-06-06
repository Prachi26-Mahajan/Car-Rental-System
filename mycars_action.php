<?php
session_start();

$tbcar = $_REQUEST['tbcar'];
$modal = $_REQUEST['modal'];
$color = $_REQUEST['color'];
$condition = $_REQUEST['condition'];
$description = $_REQUEST['description'];
$regno = $_REQUEST['regno'];
$insurancevalidity = $_REQUEST['insurancevalidity'];
$rent= $_REQUEST['rent'];

/*photo upload*/
$coverphoto = $_FILES['coverphoto']['name'];
$tmp = $_FILES['coverphoto']['tmp_name'];

$ext = strtolower(pathinfo($coverphoto, PATHINFO_EXTENSION));
/*upload*/
include "connection.php";
$select_mycars = "select * from mycars";
$result_mycars = mysqli_query($conn, $select_mycars);

$flag = 0;

while ($row_mycars = mysqli_fetch_array($result_mycars)) {
    if ($row_mycars[1] == $tbcar) {
        $flag = 1;
        break;
    }
}
//echo $ext;

if ($flag === 1) {
    header("location:mycars.php?msg=0");

} elseif ($ext === 'jpg' || $ext === 'png' || $ext === 'gif' || $ext === 'jpeg') {
    $rental_id = $_SESSION["rental_id"];

    $path = 'mycar/' . $coverphoto;
    move_uploaded_file($tmp, $path);
    $insert_mycars = "insert into mycars VALUES (NULL ,'$modal','$color','$condition','$description','$path',
'$regno','$insurancevalidity','$tbcar',$rental_id,$rent)";
    mysqli_query($conn, $insert_mycars);
//    echo $insert_mycars;
    header("location:mycars.php?msg=2");

//    echo $ext;
} else {
    header("location:mycars.php?msg=1");
}