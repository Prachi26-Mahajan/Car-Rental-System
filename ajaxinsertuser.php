<?php

include "connection.php";

$query = "select * from admindemo";

$flag = 0;

$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_array($result)) {
    if ($row[0] == $_REQUEST["textbox1"]) {
        $flag = 1;
        break;
    }
}

if ($flag == 1) {
    echo "Email Id already exist";
} else {
    if ($_REQUEST["textbox2"] == $_REQUEST["textbox3"]) {
        $q = "insert into admindemo values('" . $_REQUEST["textbox1"] . "','" . $_REQUEST["textbox2"] . "','" . $_REQUEST["select1"] . "')";
        mysqli_query($conn, $q);
        echo "New user added sucessfully";
    } else {
        echo "Password Not Matched";
    }
}




