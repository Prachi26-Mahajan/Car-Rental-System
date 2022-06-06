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
    <h1>View Cars</h1>
    <?php


    $s = "select * from cars";
    include "connection.php";


    $ans = "<table class='table table-bordered table-responsive'>";

    $ans = $ans . "<tr>";
    $ans = $ans . "<th>SrNo</th>";
    $ans = $ans . "<th>carname</th>";
    $ans = $ans . "<th>brand</th>";
    $ans = $ans . "<th>description</th>";
    $ans = $ans . "<th>photo</th>";
    $ans = $ans . "<td colspan='2'>Controls</td>";

    $ans = $ans . "</tr>";


    $result = mysqli_query($conn, $s);

    $i = 0;
    while ($row = mysqli_fetch_array($result)) {
        $ans .= "<tr>";
        $ans .= "<td>" . ++$i . "</td>";
        $ans .= "<td>" . $row[0] . "</td>";
        $ans .= "<td>" . $row[1] . "</td>";
        $ans .= "<td>" . $row[2] . "</td>";
        $ans .= "<td><img src='" . $row[3] . "' height='50'></td>";

        $ans = $ans . '<td><a  href="cars_edit.php?q=' . $row[0] . '">Edit</a></td>';
        $ans = $ans . '<td><a onclick="return confirm(\'are you sure to delete ?\')" href="cars_delete.php?q=' . $row[0] . '">Delete</a></td>';
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
