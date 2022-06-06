<?php


include "connection.php";
$q="insert into news values(null,'".$_REQUEST["textbox1"]."','".$_REQUEST["textbox2"]."','".$_REQUEST["textbox3"]."')";




    mysqli_query($conn,$q);
    echo "News Added  sucessfully";

