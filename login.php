<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Login</title>

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
include "publicheaderTEMPLATE2.php";
?>

<div class="container">
    <form action="checklogin.php" method="post" id="form1">
        <div>
            <h4 class="alert alert-info">Admin Login</h4>
        </div>
        <div class="form-group">
            Enter Email address
            <input type="text" class="form-control" name="email" data-rule-required="true"
                   data-msg-required="Please enter Email Address" data-rule-email="true">
        </div>
        <div class="form-group">
            Enter Password
            <input type="password" class="form-control" name="textbox2" data-rule-required="true"
                   data-msg-required="Password Required">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-success" value="Login" data-rule-required="true"
                   style="background-color: #e3001f">
        </div>
    </form>
</div>
<div class="text-center">
    <?php
    if (isset($_REQUEST['er'])) {
        $val = $_REQUEST['er'];
        if ($val == 1) {
            echo '<span class="alert alert-danger">Invalid Credentials</span>';
        }
    }
    ?>
</div>

<?php
include "footertemplate.php";
?>

</body>
</html>
