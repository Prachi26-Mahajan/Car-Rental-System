<?php

$username = $_REQUEST["username"];
$oldpassword = $_REQUEST["opass"];
$newpassword = $_REQUEST["newpass"];
$confirmnewpassword = $_REQUEST["connewpass"];


include "connection.php";
$flag=0;
$sql="select * from admindemo";
$sql_result=mysqli_query($conn,$sql);
while ($sql_row=mysqli_fetch_array($sql_result))
{
    if($username==$sql_row[0] && $oldpassword==$sql_row[1])
    {
        $flag=1;
        break;
    }
}

if($flag!=1)
{
    header("Location:changepassword.php?er=1");
}
elseif ($newpassword!=$confirmnewpassword)
{
    header("Location:changepassword.php?er=2");
}
else
{
    $s="update admindemo set password='".$newpassword."' where email='".$username."'";
    mysqli_query($conn,$s);
    header("Location:changepassword.php?er=3");
}
