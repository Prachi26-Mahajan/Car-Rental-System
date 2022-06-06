<!DOCTYPE>
<html lang="en">
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
include "publicheaderTEMPLATE2.php";
?>

<div class="container">
    <form action="rental_signup_action.php" method="post" id="form1" enctype="multipart/form-data">
        <div>
            <h4 class="alert alert-info">Rental Signup</h4>
        </div>

        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="form-group">
                    Enter name
                    <input type="text" class="form-control" name="name" data-rule-required="true"
                           data-msg-required="Name Required">
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="form-group">
                    Enter mobile
                    <input type="text" class="form-control" name="mobile" data-rule-required="true"
                           data-msg-required="Mobile Required" maxlength="10" data-rule-number="true">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="form-group">
                    Enter GSTIN
                    <input type="text" class="form-control" name="GSTIN" data-rule-required="true"
                           data-msg-required="GSTIN Required" maxlength="15" data-rule-number="true">
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="form-group">
                    Enter Adhar no.
                    <input type="text" class="form-control" name="Adharno" data-rule-required="true"
                           data-msg-required="Adhar no. Required" maxlength="12" data-rule-number="true">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="form-group">
                    Enter password
                    <input type="password" class="form-control" name="password" id="ppp" data-rule-required="true"
                           data-msg-required="password Required">
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="form-group">
                    Enter confirm password
                    <input type="password" class="form-control" name="cpassword" data-rule-required="true"
                           data-rule-equalto="#ppp" data-msg-required="password Required">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="form-group">
                    Enter Address
                    <textarea class="form-control" data-rule-required="true" name="Address"></textarea>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="form-group">
                    Enter Email
                    <input type="text" class="form-control" name="Email" data-rule-required="true"
                           data-rule-email="true"
                           data-msg-required="Email Required">
                </div>
            </div>
        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-success" value="Signup" data-rule-required="true"
                   style="background-color: #e3001f">
        </div>
    </form>

    <?php
    if (isset($_GET['msg'])) {
        $msg = $_GET['msg'];
        if ($msg == 1) {
            echo '<span class="alert alert-danger">username already exist</span>';
        } elseif ($msg == 2) {
            echo '<span class="alert alert-danger">password not matched</span>';
        } else {
            echo '<span class="alert alert-success">row inserted</span>';
        }
    }
    ?>
</div>

<?php
include "footertemplate.php";
?>

</body>
</html>
