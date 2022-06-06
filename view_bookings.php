<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Bookings</title>

    <?php
    include "headerfiles.php";
    ?>
</head>
<body>

<?php
include "rentalHeaderTEMPLATE.php";
?>

<div class="container">
    <div class="text-center">
        <h2 class="alert alert-info">View Bookings</h2>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <table class="table table-bordered">
                <tr>
                    <th>Booking ID</th>
                    <th>Email</th>
                    <th>Pickup Area</th>
                    <th>City</th>
                    <th>My Car ID</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Generate Bill</th>
                </tr>
                <?php
                include "connection.php";
                $select_booking = "select * from booking";
                $res_booking = mysqli_query($conn, $select_booking);
                while ($row_booking = mysqli_fetch_array($res_booking)) {
                    ?>
                    <tr>
                        <td><?php echo $row_booking['booking_id']; ?></td>
                        <td><?php echo $row_booking['email']; ?></td>
                        <td>
                            <?php
                            //                            echo $row_booking['pickupplace'];
                            $areaid = $row_booking['pickupplace'];
                            $select_Areas = "select * from Areas WHERE area_id=$areaid";
                            $result_Areas = mysqli_query($conn, $select_Areas);
                            $row_Areasname = mysqli_fetch_array($result_Areas);
                            echo $row_Areasname[1];
                            ?>
                        </td>
                        <td>
                            <?php
                            //                            echo $row_booking['city_id'];
                            $cityid = $row_booking['city_id'];
                            $select_cities = "select * from cities WHERE city_id=$cityid";
                            $result_cities = mysqli_query($conn, $select_cities);
                            $row_cities = mysqli_fetch_array($result_cities);
                            echo $row_cities[1];

                            ?>
                        </td>
                        <td>
                            <?php
//                            echo $row_booking['mycar_id'];
                            $mycar_id = $row_booking['mycar_id'];
                            $select_carname = "select * from mycars WHERE mycar_id=$mycar_id";
                            $result_carname = mysqli_query($conn, $select_carname);
                            $row_carname = mysqli_fetch_array($result_carname);
                            echo $row_carname[8];

                            ?>
                        </td>
                        <td><?php echo $row_booking['start_date']; ?></td>
                        <td><?php echo $row_booking['end_date']; ?></td>
                        <td><a href="generate_bill.php?booking_id=<?php echo $row_booking['booking_id']; ?>">Generate
                                Bill</a></td>
                    </tr>
                    <?php
                }
                ?>
            </table>
        </div>
    </div>
</div>
<?php
include "footertemplate.php"
?>
</body>
</html>
