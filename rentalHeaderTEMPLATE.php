<?php
session_start();
if (!isset($_SESSION["rental_email"])) {
    header("location:rental_login.php");
} else {
    $email = $_SESSION["rental_email"];
    $rental_id = $_SESSION["rental_id"];
}
?>

<!-- banner -->
<div id="home">
    <!-- header -->
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
                    <h4>
                        <a href="index.html">
                            <span class="logo-c" style="color:#f5af02;">C</span>
                            <i class="fa fa-car" aria-hidden="true"></i> R Fusion
                        </a>
                        <p class="sub-cap">Drive to Any where</p></h4>
                </div>
                <!-- navbar-header -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="rentalhome.php" class="hvr-underline-from-center active"><span
                                        class="glyphicon glyphicon-home"></span></a></li>
                        <li><a href="view_bookings.php" class="hvr-underline-from-center active">Bookings</a></li>
                        <li><a href="view_report.php" class="hvr-underline-from-center active">Report</a></li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                MANAGE <span class="fa fa-car"></span>
                                <i class="fas fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="mycars.php">Add Cars</a></li>
                                <li><a href="rentalMycars.php">View Cars</a></li>
                            </ul>
                        </li>

                        <li><a href="areas_choose.php" class="hvr-underline-from-center ">Choose Areas</a></li>

                        <li>
                            <a href="blacklist_rentalcars.php" class="hvr-underline-from-center ">
                                BlackList <span class="fa fa-car"></span>
                            </a>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fas fa-user-cog"></i> <i class="fas fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="rental_changepassword.php">Change Password</a></li>
                                <li><a href="rental_logout.php">Logout <i class="fas fa-power-off"></i></a></li>
<!--                                <li><a href="rental_logout.php">Logout --><?php //echo $_SESSION['rental_email']; ?><!--</a></li>-->
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </nav>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      referrerpolicy="no-referrer"/>
