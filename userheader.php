<?php

@session_start();
if (is_null($_SESSION["useremail"])) {
    header("location:public_login.php");
} else {
    $email = $_SESSION["useremail"];

    $user="select * from public_signup where email='$email'";
    $user_result=mysqli_query($conn,$user);
    $user_row=mysqli_fetch_array($user_result);
}
?>


<div>
    <ul class="nav nav-pills">
        <li><a href="userhome.php">Home</a></li>
        <li><a href="publichome.php">Search Car</a></li>
        <li><a href="userchangepassword.php">Change Password</a></li>
        <li><a href="userlogout.php">Logout</a></li>

    </ul>
</div>