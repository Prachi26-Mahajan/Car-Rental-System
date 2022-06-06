<!Doctype>

<html>

<head>
    <link href="css/bootstrap.css" rel="stylesheet">
</head>

<body>
<div class="container">
    <?php
    include "adminheader.php";

    $s = "select * from restaurant";
    include "connection.php";


    $ans = "<table class='table table-bordered'>";

    $ans = $ans . "<tr>";
    $ans = $ans . "<th>Email Address</th>";
    $ans = $ans . "<th>Owner Name</th>";
    $ans = $ans . "<th>Mobile No.</th>";
    $ans = $ans . "<th>GST No.</th>";
    $ans = $ans . "<th>PAN No.</th>";
    $ans = $ans . "<th>Address</th>";
    $ans = $ans . "<th>State</th>";
    $ans = $ans . "<th>City</th>";
    $ans = $ans . "<th>Status</th>";
    $ans = $ans . "<td colspan='2'>Controls</td>";

    $ans = $ans . "</tr>";
    
    
    $result = mysqli_query($conn, $s);


    while ($row = mysqli_fetch_array($result)) {
        $ans.= "<tr>";
        $ans.= "<td>" . $row[0] . "</td>";
        $ans.= "<td>" . $row[2] . "</td>";
        $ans.= "<td>" . $row[3] . "</td>";
        $ans.= "<td>" . $row[4] . "</td>";
        $ans.= "<td>" . $row[5] . "</td>";
        $ans.= "<td>" . $row[6] . "</td>";
        $ans.= "<td>" . $row[7] . "</td>";
        $ans.= "<td>" . $row[8] . "</td>";
        $ans.= "<td>" . $row[9] . "</td>";
        $ans = $ans . '<td><a href="removeressignup.php?q=' . $row[0] . '">
    <img src="delete.png" style="width:25px;height:25px">
    </a></td>';
        $ans = $ans . '<td><a href="updateressignup.php?q=' . $row[0] . '">
    <img src="edit.png" style="width:25px;height:25px">
    </a></td>';


        $ans= $ans . "</tr>";

    }
    $ans = $ans . "</table>";
    mysqli_query($conn, $s);
    echo $ans;


    ?>
</div>


</body>
</html>