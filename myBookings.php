<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Bookings</title>

    <?php
    include "headerfiles.php";
    ?>
</head>
<body>

<?php
//include "userheader.php";
include "userheaderTEMPLATE.php";
?>

<div class="container" style="margin-top: 4rem">
        <div class="text-center">
            <h4 class="alert alert-info">My Bookings</h4>
        </div>

    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th>Sr No.</th>
                        <th>Booking Detail</th>
                        <th>Car Detail</th>
                    </tr>
                    <?php
                    $k = 1;
                    $sql = "SELECT * FROM `booking` INNER JOIN cities ON cities.city_id=booking.city_id INNER JOIN areas ON areas.area_id=booking.pickupplace INNER JOIN mycars ON mycars.mycar_id=booking.mycar_id  WHERE `email`='$email' ORDER BY booking.booking_id DESC";
                    $sql_result = mysqli_query($conn, $sql);
                    while ($sql_row = mysqli_fetch_array($sql_result)) {
                        ?>
                        <tr>
                            <td class="text-danger" style="font-weight: bold"><?php echo $k++; ?></td>
                            <td>
                                <table class="table">
                                    <tr class="bg-warning">
                                        <th>Booking ID</th>
                                        <td><?php echo $sql_row['booking_id'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>Driving License No.</th>
                                        <td><?php echo $sql_row['driving_license_number'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>Aadhar No.</th>
                                        <td><?php echo $sql_row['aadhaar_number'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>Start Date</th>
                                        <td><?php echo $sql_row['start_date'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>End Date</th>
                                        <td><?php echo $sql_row['end_date'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>Rent</th>
                                        <td>&#8377;<?php echo $sql_row['rent'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>City Name</th>
                                        <td><?php echo $sql_row['cityname'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>Area Name</th>
                                        <td><?php echo $sql_row['areaname'] ?></td>
                                    </tr>
                                </table>
                            </td>
                            <td>
                                <table class="table">
                                    <tr class="bg-warning">
                                        <th>Car Name</th>
                                        <td><?php echo $sql_row['car_name'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>Model</th>
                                        <td><?php echo $sql_row['model'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>Color</th>
                                        <td><?php echo $sql_row['color'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>Condition</th>
                                        <td><?php echo $sql_row['condition'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>Registration No.</th>
                                        <td><?php echo $sql_row['reg_no'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>Insurance Validity</th>
                                        <td><?php echo $sql_row['insurance_validity'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>Photo</th>
                                        <td><img src="<?php echo $sql_row['coverphoto'] ?>" width="50"></td>
                                    </tr>
                                    <tr>
                                        <th>Description</th>
                                        <td><?php echo $sql_row['description'] ?></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>

                </table>
            </div>
        </div>
    </div>
</div>

<?php
include "footertemplate.php";
?>

</body>
</html>
