<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php
    include "headerfiles.php";
    ?>
    <!--    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>-->

</head>
<body>
<?php
include "rentalHeaderTEMPLATE.php";
$booking_id = $_GET['booking_id'];
?>
<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <table class="table table-bordered">
                <tr>
                    <th>Booking ID</th>
                    <th>Car Name</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Total Days</th>
                    <th>Rent</th>
                    <th>Total Price</th>
                </tr>
                <?php
                include "connection.php";


                $mycar_id = '';
                $startdate = '';
                $enddate = '';
                $numberofdays = '';
                $useremail = '';


                $select_booking = "select * from booking WHERE booking_id=$booking_id";
                $res_booking = mysqli_query($conn, $select_booking);
                while ($bookingRow = mysqli_fetch_array($res_booking)) {
                    ?>
                    <tr>
                        <td><?php echo $bookingRow['booking_id']; ?></td>


                        <td>
                            <?php
                            $getCarName = "select * from mycars WHERE mycar_id=$bookingRow[4]";
                            $res_CarName = mysqli_query($conn, $getCarName);
                            $res_CarName = mysqli_fetch_array($res_CarName);
                            $carname = $res_CarName['car_name'];
                            $rent = $res_CarName['rent'];
                            echo $carname; ?>
                        </td>


                        <td><?php echo $bookingRow['start_date'] ?></td>


                        <td><?php echo $bookingRow['end_date'] ?></td>


                        <td>
                            <!--Calculating Days Start-->
                            <?php
                            $start_date = strtotime($bookingRow['start_date']);
                            $end_date = strtotime($bookingRow['end_date']);

                            $daysleft = $end_date - $start_date;
                            $finaldaysleft = floor($daysleft / (60 * 60 * 24));
                            echo $finaldaysleft;
                            ?>
                            <!--Calculating Days End-->
                        </td>
                        <td>&#8377; <?php echo $rent; ?></td>
                        <td>&#8377;
                            <?php
                            $totalrent = $rent * $finaldaysleft;
                            echo $totalrent;
                            ?>
                        </td>
                    </tr>
                    <?php

                    $mycar_id = $bookingRow[4];
                    $startdate = $bookingRow['start_date'];
                    $enddate = $bookingRow['end_date'];
                    $numberofdays = $finaldaysleft;
                    $useremail = $bookingRow[1];
                }
                ?>
                <tr>
                    <td rowspan="2"></td>
                    <td rowspan="2"></td>
                    <td rowspan="2"></td>
                    <td rowspan="2"></td>
                    <td rowspan="2"></td>
                    <td>GST @ 12%</td>
                    <td><?php echo($totalrent * 12 / 100); ?> </td>
                </tr>
                <tr>

                    <td><strong>Grand Total</strong></td>
                    <td><?php $grandtotal = (($totalrent * 12 / 100) + $totalrent);
                        echo $grandtotal; ?></td>
                </tr>
            </table>


        </div>
    </div>
    <div class="row">
        <div class="col-lg-10 col-md-10 col-sm-10"></div>
        <div class="col-lg-2 col-md-2 col-sm-2">
            <div class="form-group">

                <input type="hidden" id="bookingid" value="<?php echo $booking_id; ?>">
                <input type="hidden" id="useremail" value="<?php echo $useremail; ?>">
                <input type="hidden" id="numberofdays" value="<?php echo $numberofdays; ?>">
                <input type="hidden" id="startdate" value="<?php echo $startdate; ?>">
                <input type="hidden" id="enddate" value="<?php echo $enddate; ?>">
                <input type="hidden" id="mycar_id" value="<?php echo $mycar_id; ?>">
                <input type="hidden" id="grandtotal" value="<?php echo $grandtotal; ?>">

                <input type="button" class="btn btn-success" value="pay" id="rzp-button1">
            </div>
        </div>
    </div>
</div>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
    $(document).ready(function () {
        $("#rzp-button1").click(function () {
//            alert();

            var bookingid = document.getElementById('bookingid').value;
            var amount = document.getElementById('grandtotal').value * 100;
            var mycar_id = document.getElementById('mycar_id').value;
            var startdate = document.getElementById('startdate').value;
            var enddate = document.getElementById('enddate').value;
            var numberofdays = document.getElementById('numberofdays').value;
            var useremail = document.getElementById('useremail').value;

//            alert("insert_payment.php?status=success&total=" + amount)
            var options = {
                "key": "rzp_test_dRWiKHS7zr2Gki",
                "amount": amount,
                "name": "Zoom Car",
                "description": "BBK DAV College",
                "image": "http://ecourses.aec.edu.in/aditya/images/po4.png",
                "handler": function (response) {
                    //alert(response.razorpay_payment_id);
                    if (response.razorpay_payment_id == "") {
                        //alert('Failed');
                        window.location.href = "checkfees.php?status=failed";
                    }
                    else {
                        //alert('Success');
                        window.location.href = "insert_payment.php?status=success&grandtotal=" + amount +
                            "&mycar_id=" + mycar_id + "&startdate=" + startdate + "&enddate=" + enddate +
                            "&numberofdays=" + numberofdays + "&useremail=" + useremail+"&bookingid="+bookingid;
                    }
                },
                "prefill": {
//                    "name": "karan",
//                    "email": "abc@gmail.com"
                    "name": "<?php  ?>",
                    "email": useremail
                },
                "notes": {
                    "address": ""
                },
                "theme": {
                    "color": "#F37254"
                }
            };
            var rzp1 = new Razorpay(options);
            rzp1.open();
        });
    });
</script>
<?php
include "footertemplate.php"
?>
</body>
</html>