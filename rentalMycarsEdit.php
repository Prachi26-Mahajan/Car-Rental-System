<!DOCTYPE>
<html lang="en">
<head>
    <title></title>

    <?php
    include "headerfiles.php";
    ?>

    <script src="dist/jquery.validate.js"></script>
    <script>
        $(document).ready(function () {
//            alert("jquery ready");
            $("#form1").validate();
        })
    </script>
</head>

<body>
<?php
//include "rentalHeader.php";
include "rentalHeaderTEMPLATE.php";
include "connection.php";

$mycar_id = $_REQUEST['mycar_id'];

$select_mycars = "select * from mycars WHERE mycar_id='$mycar_id'";
//echo $select_mycars;
$result_mycars = mysqli_query($conn, $select_mycars);
$row_mycars = mysqli_fetch_array($result_mycars);
?>
<div class="container">
    <h1>Edit Rental Car</h1>
    <form action="rentalMycarsUpdate.php" method="post" id="form1" enctype="multipart/form-data">
        <?php
        $select_rental_id = "select ID from rental_signup WHERE Email='" . $_SESSION['rental_email'] . "'";
        $result_rental_id = mysqli_query($conn, $select_rental_id);
        $row_rental_id = mysqli_fetch_array($result_rental_id);
        $rental_id = $row_rental_id[0];
        ?>
        <input type="hidden" name="rental_id" value="<?php echo $rental_id; ?>">
        <input type="hidden" name="tbmycar_id" value="<?php echo $row_mycars[0]; ?>">
        <div class="form-group">
            Select car

            <select name="tbcar" class="form-control" data-rule-required="true"
                    data-msg-required="car Required">

                <option>Select Car</option>
                <?php
                $getcar = "select car_name from cars";
                $rescar = mysqli_query($conn, $getcar);
                while ($rowcar = mysqli_fetch_array($rescar)) {
                    ?>
                    <option <?php if ($rowcar[0] == $row_mycars[8]) {
                        echo "selected";
                    } ?> value="<?php echo $rowcar[0]; ?>"><?php echo $rowcar[0]; ?></option>
                    <?php
                }
                ?>
            </select>
        </div>

        <div class="form-group">
            Modal
            <input type="text" data-rule-number="true" class="form-control" name="modal" data-rule-required="true"
                   data-msg-required="Modal Required" value="<?php echo $row_mycars[1]; ?>">
        </div>
        <div class="form-group">
            Color
            <input type="text" class="form-control" name="color" data-rule-required="true"
                   data-msg-required="color Required" value="<?php echo $row_mycars[2]; ?>">
        </div>
        <div class="form-group">
            Condition
            <input type="text" class="form-control" name="condition" data-rule-required="true"
                   data-msg-required="condition Required" value="<?php echo $row_mycars[3]; ?>">
        </div>
        <div class="form-group">
            Description
            <textarea class="form-control" data-rule-requird="true" name="description"><?php echo $row_mycars[4]; ?></textarea>
        </div>
        <div class="form-group">

            <img src="<?php echo $row_mycars[5]; ?>" style="width: 100px">
            Cover photo
            <input type="file" class="form-control" name="coverphoto"
                   data-msg-required="cover photo Required">
        </div>
        <div class="form-group">
            Enter Reg no.
            <input type="text" class="form-control" name="regno" data-rule-required="true"
                   data-msg-required="reg no. Required" value="<?php echo $row_mycars[6]; ?>" maxlength="12">
        </div>
        <div class="form-group">
            Enter insurance validity
            <input type="text" class="form-control" name="insurancevalidity" data-rule-required="true"
                   data-msg-required="insurance validity Required" value="<?php echo $row_mycars[7]; ?>">
        </div>
        <div class="form-group">
            Rent
            <input type="text" class="form-control" name="rent" data-rule-required="true"
                   data-msg-required="Rent Required" data-rule-number="true" value="<?php echo $row_mycars[10]; ?>">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-success" value="submit" data-rule-required="true">
        </div>
    </form>
    <?php
    if (isset($_GET['msg'])) {
        $msg = $_GET['msg'];
        if ($msg == 1) {
            echo '<span class="alert alert-danger">Please Enter Valid Format</span>';
        } else {
            echo '<span class="alert alert-danger">Renal Car Updated</span>';
        }
    }
    ?>
</div>
<?php
include "footertemplate.php";
?>
</body>

</html>
