<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Cars</title>

    <?php
    include "headerfiles.php";
    ?>
</head>
<body>

<?php
//include "rentalHeader.php";
include "rentalHeaderTEMPLATE.php";
?>

<div class="container">
    <div class="text-center">
        <h2 class="alert alert-info">View Rental Cars</h2>
    </div>
    <div class="row">
        <div class="col-sm-12 col-lg-12 col-md-12 table-responsive">
            <?php
            include "connection.php";
            $select_rental_mycars = "select mycars.mycar_id,mycars.model,mycars.color,mycars.condition,mycars.description,
mycars.coverphoto,mycars.reg_no,mycars.car_name,mycars.insurance_validity,mycars.rent from mycars INNER JOIN rental_signup on rental_signup.ID = mycars.rental_id 
WHERE Email='" . $_SESSION["rental_email"] . "'";


            $result_rental_mycars = mysqli_query($conn, $select_rental_mycars);
            //            echo $select_rental_mycars;
            ?>
            <table class="table table-bordered table-hover">
                <tr>
                    <th>Sr&nbsp;No.</th>
                    <th>Model</th>
                    <th>Color</th>
                    <th>Condition</th>
                    <th>Description</th>
                    <th>Photo</th>
                    <th>Reg&nbsp;No</th>
                    <th>Car&nbsp;Name</th>
                    <th>Insurance</th>
                    <th>Rent</th>
                    <th colspan="2">Controls</th>
                </tr>
                <?php
                $k = 0;
                while ($row_rental_mycars = mysqli_fetch_array($result_rental_mycars)) {
                    $k++;
                    ?>
                    <tr>
                        <td><?php echo $k; ?></td>
                        <td><?php echo $row_rental_mycars[1]; ?></td>
                        <td><?php echo $row_rental_mycars[2]; ?></td>
                        <td><?php echo $row_rental_mycars[3]; ?></td>
                        <td><?php echo $row_rental_mycars[4]; ?></td>
                        <td><img src="<?php echo $row_rental_mycars[5]; ?>" style="width: 100px"></td>
                        <td><?php echo $row_rental_mycars[6]; ?></td>
                        <td><?php echo $row_rental_mycars[7]; ?></td>
                        <td><?php echo $row_rental_mycars[8]; ?></td>
                        <td><?php echo $row_rental_mycars[9]; ?></td>

                        <td>
                            <a href="rentalMycarsEdit.php?mycar_id=<?php echo $row_rental_mycars[0]; ?>">Edit</a>
                        </td>
                        <td>
                            <a onclick="return confirm('are you sure to delete ?')"
                               href="rentalMycarsDelete.php?mycar_id=<?php echo $row_rental_mycars[0]; ?>">Delete</a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </table>
        </div>
    </div>
</div>
<?php
include "footertemplate.php";
?>
</body>
</html>
