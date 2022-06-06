<?php
include "connection.php";
session_start();
if (is_null($_SESSION["useremail"])) {
    header("location:public_login.php");
} else {
    $email = $_SESSION["useremail"];
}
?>
<!-- banner -->
<!--<div class="banner-w3ls" id="home">-->
<div id="home">
    <!-- header -->
    <div class="header-w3l-agile">
        <div class="header_left">
            <ul>
                <li><a><span class="glyphicon glyphicon-envelope"
                                                             aria-hidden="true"></span>komalvihu0860@gmail.com</a></li>
                <li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>+91 8146630860</li>
            </ul>
        </div>
        <!--        <div class="header_right">-->
        <!--            <div class="w3ls-social-icons">-->
        <!--                <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>-->
        <!--                <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>-->
        <!--                <a class="pinterest" href="#"><i class="fa fa-google-plus"></i></a>-->
        <!--                <a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>-->
        <!---->
        <!--            </div>-->
        <!--        </div>-->
        <div class="clearfix"></div>
    </div>
    <!-- //header -->
    <div class="container">
        <div class="header-nav">
            <nav class="navbar navbar-default">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <h4><a href="index.html"><span class="logo-c" style="color:#f5af02;">C</span><i class="fa fa-car"
                                                                                                    aria-hidden="true"></i> Fusion</a>
                        <p class="sub-cap">Drive to Any where</p></h4>
                </div>
                <!-- navbar-header -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="userhome.php" class="hvr-underline-from-center ">Home</a></li>
                        <li><a href="publichome.php" class="hvr-underline-from-center ">Search Car</a></li>
                        <li><a href="myBookings.php" class="hvr-underline-from-center ">My Bookings</a></li>
                        <li><a href="userchangepassword.php" class="hvr-underline-from-center ">Change Password</a></li>
                        <li><a href="userlogout.php" class="hvr-underline-from-center ">Logout</a></li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </nav>

        </div>
        <div class="clearfix"></div>

        <!--timer-->


        <!--//timer-->

    </div>


</div>