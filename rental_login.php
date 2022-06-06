<!DOCTYPE>
<html lang="en">
<head>
    <title>Rental Login</title>

    <?php
    include "headerfiles.php";
    ?>

    <script src="dist/jquery.validate.js"></script>
    <script>
        $(document).ready(function () {
            $("#form1").validate();
        })
    </script>
</head>
<body>

<?php
include "publicheaderTEMPLATE2.php";
?>

<div class="container">
    <form action="rentalchecklogin.php" method="post" id="form1">
        <div>
            <h4 class="alert alert-info">Rental Login</h4>
        </div>
        <div class="form-group">
            Enter Email address
            <input type="text" class="form-control" name="textbox1" data-rule-required="true"
                   data-msg-required="Please enter Email Address" data-rule-email="true">
        </div>
        <div class="form-group">
            Enter Password
            <input type="password" class="form-control" name="textbox2" data-rule-required="true"
                   data-msg-required="Password Required">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-success" value="login" data-rule-required="true"
                   style="background-color: #e3001f">
        </div>
    </form>
</div>
<div class="text-center">
    <?php
    if (isset($_REQUEST['er'])) {
        echo "<span class='alert alert-danger'>Invalid Credentials</span>";
    }
    ?>
    <br>
    <br>
    <br>
</div>

<?php
include "footertemplate.php";
?>

</body>
</html>
