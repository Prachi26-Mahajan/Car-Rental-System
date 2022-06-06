<?php
session_start();

if (is_null($_SESSION["email"])) {
    header("location: login.php");
} else {
    $email = $_SESSION["email"];
}
?>


<!-- banner -->
<!--<div class="banner-w3ls" id="home">-->
<div id="home">
    <!-- top-header -->
    <div class="header-w3l-agile">
        <div class="header_left">
            <ul>
                <li>
                    <a href="javascript:void(0);">
                        <span class="glyphicon glyphicon-envelope"
                              aria-hidden="true"></span>demo@email.com
                    </a>
                </li>
                <li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>+91 1112223330</li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
    <!-- //top-header -->

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
                    <h4>
                        <a href="index.html">
                            <span class="logo-c" style="color:#f5af02;">C</span>
                            <i class="fa fa-car" aria-hidden="true"></i> R Fusion</a>
                        <p class="sub-cap">Drive to Any where</p></h4>
                </div>
                <!-- navbar-header -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="adminhome.php" class="hvr-underline-from-center active">
                                <span class="glyphicon glyphicon-home"></span></a></li>

                        <li><a href="manageadmin.php" class="hvr-underline-from-center ">Manage Admin</a></li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Manage <span
                                        class="fa fa-car"></span><span
                                        class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="cars.php">Add Cars</a></li>
                                <li><a href="view_cars.php">view Cars</a></li>
                            </ul>
                        </li>

                        <li><a href="view_rentals.php" class="hvr-underline-from-center ">Rentals</a></li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Manage Area & City<span
                                        class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="cityadd.php">Add Cities</a></li>
                                <li><a href="cityview.php">View Cities</a></li>
                                <li><a href="areas.php">Add Area</a></li>
                                <li><a href="areasview.php">View Area</a></li>
                            </ul>
                        </li>

                        <!--                        <li><a href="managenews.php" class="hvr-underline-from-center ">Manage News</a></li>-->

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span
                                        class="glyphicon glyphicon-wrench"></span><span class="caret"></span></a>
                            <ul class="dropdown-menu">

                                <li><a href="changepassword.php">Change Password</a></li>
                                <li><a href="logout.php">Logout</a></li>
                            </ul>
                        </li>

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
