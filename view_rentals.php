<!Doctype>

<html>

<head>
    <?php
    include "headerfiles.php";
    ?>
<!--    <link href="css/bootstrap.css" rel="stylesheet">-->
</head>

<body>
<?php
//include "adminheader.php";
include "adminheaderTEMPLATE.php";
?>
<div class="container">
    <h1>Rental View</h1>
    <?php


    $s = "select * from rental_signup";
    include "connection.php";


    $ans = "<table class='table table-bordered table-responsive'>";

    $ans = $ans . "<tr>";
    $ans = $ans . "<th>SrNo</th>";
    $ans = $ans . "<th>Name</th>";
    $ans = $ans . "<th>GSTIN</th>";
    $ans = $ans . "<th>Address</th>";
    $ans = $ans . "<th>Adhaar No.</th>";
    $ans = $ans . "<th>Mobile</th>";
    $ans = $ans . "<th>Email</th>";
    $ans = $ans . "<th>Status</th>";
    $ans = $ans . "<th colspan='2'>Controls</th>";

    $ans = $ans . "</tr>";


    $result = mysqli_query($conn, $s);

    $i=0;
    while ($row = mysqli_fetch_array($result)) {
        $ans .= "<tr>";
        $ans .= "<td>" . ++$i  . "</td>";
        $ans .= "<td>" . $row[1] . "</td>";
        $ans .= "<td>" . $row[2] . "</td>";
        $ans .= "<td>" . $row[3] . "</td>";
        $ans .= "<td>" . $row[4] . "</td>";
        $ans .= "<td>" . $row[5] . "</td>";
        $ans .= "<td>" . $row[6] . "</td>";
        $ans .= "<td>" . $row[8] . "</td>";
        if($row['Status']=='Active') {
            $ans = $ans . '<td><a  href="retal_enable.php?q=' . $row[0] . '&stat=' . $row['Status'] . '">Disable</a></td>';
        }
        else
        {
            $ans = $ans . '<td><a  href="retal_enable.php?q=' . $row[0] . '&stat=' . $row['Status'] . '">Enable</a></td>';
        }
        $ans = $ans . '<td><a onclick="return confirm(\'are you sure to delete ?\')" href="cars_delete.php?q='.$row[0].'">Delete</a></td>';
        $ans = $ans . "</tr>";
    }
    $ans = $ans . "</table>";
    mysqli_query($conn, $s);
    echo $ans;


    ?>
</div>
<?php
include "footertemplate.php";
?>

</body>
</html>