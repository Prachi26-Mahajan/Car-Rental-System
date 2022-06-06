<?php
include "connection.php";

    if(isset($_REQUEST["ch"]))
    {
        $allch=$_REQUEST["ch"];


        foreach ($allch as $val)
        {
            $query="update rental_signup set Status='active' where ID=$val";
            echo $query;
            if(mysqli_query($conn,$query))
            {

            }


        }


    }