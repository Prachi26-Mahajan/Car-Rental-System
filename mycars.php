<!DOCTYPE>
<html>

<head>
    <?php
    include "headerfiles.php";
    ?>
<!--    <link href="css/bootstrap.css" rel="stylesheet">-->
<!--    <script src="jquery-3.2.0.min.js"></script>-->
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
?>
<div class="container">
    <form action="mycars_action.php" method="post" id="form1" enctype="multipart/form-data">
        <div class="form-group">
            Select car
            <select name="tbcar" class="form-control" data-rule-required="true"
                    data-msg-required="car Required">

                <option>Select Car</option>
                <?php
                $getcar = "select * from cars";
                include "connection.php";
                $rescar = mysqli_query($conn, $getcar);
                while ($rowcar = mysqli_fetch_array($rescar)) {

                    echo "<option value='$rowcar[0]'>$rowcar[0]</option>";

                }
                ?>
            </select>
        </div>

        <div class="form-group">
            Modal
            <input type="text" class="form-control" name="modal" data-rule-required="true"
                   data-msg-required="Modal Required" maxlength="4" data-rule-number="true">
        </div>
        <div class="form-group">
            Color
            <input type="text" class="form-control" name="color" data-rule-required="true"
                   data-msg-required="color Required">
        </div>
        <div class="form-group">
            Condition
            <input type="text" class="form-control" name="condition" data-rule-required="true"
                   data-msg-required="condition Required">
        </div>
        <div class="form-group">
            Description
            <textarea class="form-control" data-rule-required="true" name="description"></textarea>
        </div>
        <div class="form-group">
            Cover photo
            <input type="file" class="form-control" name="coverphoto" data-rule-required="true"
                   data-msg-required="cover photo Required">
        </div>
        <div class="form-group">
            Enter Reg no.
            <input type="text" class="form-control" name="regno" data-rule-required="true"
                   data-msg-required="reg no. Required" maxlength="12">
        </div>
        <div class="form-group">
            Enter insurance validity
            <input type="text" class="form-control" name="insurancevalidity" data-rule-required="true"
                   data-msg-required="insurance validity Required">
        </div>
        <div class="form-group">
            Rent
            <input type="text" data-rule-number="true" class="form-control" name="rent" data-rule-required="true"
                   data-msg-required="Rent Required">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-success" value="submit" data-rule-required="true">
        </div>
    </form>
    <br>
    <br>
    <?php
    if (isset($_GET['msg'])) {
        $msg = $_GET['msg'];
        if ($msg == 0) {
            echo '<span class="alert alert-danger">Car Already Exist</span>';
        } elseif ($msg == 1) {
            echo '<span class="alert alert-danger">Please Upload Valid Format</span>';
        } else {
            echo '<span class="alert alert-success">Car Added Successfully</span>';
        }
    }
    ?>
</div>
<br>
<br>
<?php
include "footertemplate.php";
?>
</body>

</html>