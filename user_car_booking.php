<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Car Booking</title>

    <?php
    include "headerfiles.php";
    ?>

    <script src="dist/jquery.validate.js"></script>
    <script>
        $(document).ready(function () {
            $("#form1").validate();
        });
    </script>
    <script>
        $(document).ready(function () {
            // $(".bookdate").datepicker();

            $("#start_date").datepicker({
                // dateFormat: 'yy-mm-dd',
                minDate: 0,
                dateFormat: 'mm/dd/yy',
                defaultDate: new Date(),
                onClose: function (selectedDate) {
                    $("#end_date").datepicker("option", "minDate", selectedDate);
                }
            });
            $("#end_date").datepicker({
                // dateFormat: 'yy-mm-dd',
                dateFormat: 'mm/dd/yy',
                onClose: function (selectedDate) {
                    $("#start_date").datepicker("option", "maxDate", selectedDate);
                }
            });

        });
    </script>
</head>
<body>

<?php
include "userheaderTEMPLATE.php";
include "connection.php";
$sel_user_Detail = "select * from public_signUp WHERE email='$email'";
$res_user_Detail = mysqli_query($conn, $sel_user_Detail);
$row_user_detail = mysqli_fetch_array($res_user_Detail);

$mycarid = $_REQUEST['carid'];

$areaid = $_REQUEST['areaid'];

$cityid = $_REQUEST['cityid'];
?>

<div class="container">
    <div>
        <h4 class="alert alert-danger">Book Car</h4>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-lg-12">
            <form method="post" action="user_car_booking_action.php" id="form1">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-lg-4">
                        <div class="form-group">
                            <label>Customer Email</label>
                            <input type="text" readonly class="form-control" value="<?php echo $email; ?>"
                                   name="customeremail"
                                   required>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-4 col-lg-4">
                        <div class="form-group">
                            <label>Customer Name</label>
                            <input type="text" class="form-control" name="customername" required
                                   value="<?php echo $row_user_detail['fullname'] ?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-lg-4">
                        <div class="form-group">
                            <label>Mobile Number</label>
                            <input type="text" class="form-control" name="mobile_number" maxlength="10"
                                   value="<?php echo $row_user_detail['mobile']; ?>" readonly>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 col-sm-4 col-lg-4">
                        <div class="form-group">
                            <label>Car Name</label> <!--this is rental car id-->
                            <?php
                            $sel_carname = "select car_name from mycars WHERE mycar_id=$mycarid";
                            $res_carname = mysqli_query($conn, $sel_carname);
                            $row_carname = mysqli_fetch_array($res_carname);
                            ?>
                            <input type="text" class="form-control" name="mycarid"
                                   value="<?php echo $row_carname[0]; ?>"
                                   readonly>
                            <input type="hidden" class="form-control" name="mycarid" value="<?php echo $mycarid; ?>"
                                   readonly>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-lg-4">
                        <div class="form-group">
                            <?php
                            $select_city_name = "select * from cities";
                            $result_city_name = mysqli_query($conn, $select_city_name);
                            $row_city_name = mysqli_fetch_array($result_city_name);
                            ?>
                            <label>City Name</label>
                            <!--this is city id-->
                            <input type="text" class="form-control" name="cityname"
                                   value="<?php echo $row_city_name[1]; ?>" readonly>
                            <input type="hidden" class="form-control" name="cityid" value="<?php echo $cityid; ?>"
                                   readonly>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-lg-4">
                        <div class="form-group">
                            <?php
                            $select_area_name = "select * from Areas WHERE area_id=$areaid";
                            $result_area_name = mysqli_query($conn, $select_area_name);

                            $row_area_name = mysqli_fetch_array($result_area_name);
                            ?>
                            <label>Pickup Place</label><!--this is area id-->
                            <input type="text" class="form-control" name="areaname"
                                   value="<?php echo $row_area_name[1]; ?>" readonly>
                            <input type="hidden" class="form-control" name="area_id" value="<?php echo $areaid; ?>"
                                   readonly>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Driving License No.</label>
                            <input type="text" class="form-control" name="driving_license_number"
                                   data-rule-required="true"
                                   maxlength="16" data-rule-number="true">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>AadhaaNumber</label>
                            <input type="text" class="form-control" name="adhaar_number" data-rule-required="true"
                                   maxlength="12" data-rule-number="true">
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-2 col-sm-2 col-md-2">
                        <div class="form-group">
                            <label>Start Date</label>
                            <input type="text" class="form-control bookdate" name="start_date"
                                   data-rule-required="true" id="start_date">
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-2 col-md-2">
                        <div class="form-group">
                            <label>End Date</label>
                            <input type="text" class="form-control bookdate" name="end_date" data-rule-required="true"
                                   id="end_date">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Book Car">
                </div>
            </form>

            <?php
            if (isset($_GET['msg'])) {
                echo $_GET['msg'];
            }
            ?>
        </div>
    </div>
</div>

<?php
include "footertemplate.php";
?>


</body>
</html>
