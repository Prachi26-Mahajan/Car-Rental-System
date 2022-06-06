<!Doctype>

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
//include "adminheader.php";
include "adminheaderTEMPLATE.php";
?>
<form action="ajaxchangepassword.php" method="post" id="form1">
    <div class="container">
        <h1>Change Password</h1>
        <div class="form-group">
            Enter Username
            <input type="text" readonly value="<?php echo $email; ?>" class="form-control" name="username"
                   data-rule-required="true" data-msg-required="Username Required">
        </div>
        <div class="form-group">
            Enter Old Password
            <input type="password" class="form-control" name="opass" data-rule-required="true"
                   data-msg-required="Password is Required">
        </div>
        <div class="form-group">
            Enter New Password
            <input type="password" class="form-control" name="newpass" id="newpas" data-rule-required="true"
                   data-msg-required="New Password is Required">
        </div>
        <div class="form-group">
            Confirm New Password
            <input type="password" class="form-control" name="connewpass" data-rule-required="true"
                   data-msg-required="Password is Required" data-rule-equalto="#newpas">
        </div>

        <div class="form-group">
            <input type="submit" value="Change Password" class="btn btn-success">
        </div>
    </div>
    <div class="text-center">
        <?php
        if (isset($_REQUEST['er'])) {
            $er = $_REQUEST['er'];
            if ($er == 1) {
                echo '<span class="alert alert-danger">Email and Password does not Match</span>';
            } elseif ($er == 2) {
                echo '<span class="alert alert-danger">Password and Confirm Password does not Match</span>';
            } else {
                echo '<span class="alert alert-success">Password has been changed Successfully</span>';
            }
        }
        ?>
    </div>
</form>
<?php
include "footertemplate.php";
?>
</body>

</html>