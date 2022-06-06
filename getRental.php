<?php
@session_start();
$areaid = $_REQUEST['areaid'];
$cityid = $_REQUEST['cityid'];

include "connection.php";
$sel_rental_area = "select * from rental_areas WHERE area_id=$areaid && city_id=$cityid";
$res_rental_area = mysqli_query($conn, $sel_rental_area);
?>
<table class="table table-bordered table-responsive table-hover">
    <tr>
        <th>Photo</th>
        <th>Condition</th>
        <th>Car Name</th>
        <th>Rental Name</th>
    </tr>
    <?php
    while ($row_rental_area = mysqli_fetch_array($res_rental_area)) {
        $rentalid = $row_rental_area['rental_id'];
        $sel_car = "Select * from mycars WHERE rental_id=$rentalid";
        $res_cars = mysqli_query($conn, $sel_car);
        while ($row_cars = mysqli_fetch_array($res_cars)) {
            ?>
            <tr>
                <?php

                $pagetogo = "user_car_booking.php?carid=$row_cars[0]&cityid=$cityid&areaid=$areaid";
                if (!isset($_SESSION["useremail"])) {

                    $pagetogo = "user_car_bookingcheck.php?carid=$row_cars[0]&cityid=$cityid&areaid=$areaid";
                }
                ?>


                <td><a href="<?php echo $pagetogo; ?>"><img
                                src="<?php echo $row_cars['coverphoto']; ?>" style="width: 100px"
                                class="img img-thumbnail"></a></td>
                <td><?php echo $row_cars['condition']; ?></td>
                <td><?php echo $row_cars['car_name']; ?> (<?php echo $row_cars['model']; ?>)</td>
                <td>
                    <?php
                    $rentalname = "select `Name` from rental_signup WHERE ID=$rentalid";
                    $res_rentalname = mysqli_query($conn, $rentalname);
                    $row_rentalname = mysqli_fetch_array($res_rentalname);
                    echo $row_rentalname[0];
                    ?>
                </td>
            </tr>
            <?php
        }
    }
    ?>
</table>
