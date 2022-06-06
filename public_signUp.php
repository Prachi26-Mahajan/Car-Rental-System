<!DOCTYPE>
<html>

<head>
    <title>User Signup</title>

    <?php include "headerfiles.php"; ?>

    <script src="dist/jquery.validate.js"></script>
    <script>
        $(document).ready(function () {
            $("#form1").validate();
        });
    </script>
</head>
<body>

<?php include "publicheaderTEMPLATE2.php"; ?>

<div class="container">
    <form action="public_signUp_action.php" method="post" id="form1">
        <div>
            <h4 class="alert alert-info">Public Signup</h4>
        </div>
        <div class="form-group">
            Enter Email address
            <input type="email" class="form-control" name="emailaddress" data-rule-required="true"
                   data-msg-required="Please enter Email Address" data-rule-email="true">
        </div>
        <div class="form-group">
            Enter Password
            <input type="password" class="form-control" id="newpas" name="password" data-rule-required="true"
                   data-msg-required="Password Required">
        </div>
        <div class="form-group">
            Enter Confirm Password
            <input type="password" class="form-control" name="cpassword" data-rule-required="true"
                   data-msg-required="Confirm Password Required" data-rule-equalto="#newpas">
        </div>
        <div class="form-group">
            Enter Fullname
            <input type="text" class="form-control" name="fullname" data-rule-required="true"
                   data-msg-required="Name Required">
        </div>
        <div class="form-group">
            Enter Gender
            <input type="radio" name="gender" value="male" checked> Male
            <input type="radio" name="gender" value="female"> Female
        </div>
        <div class="form-group">
            Enter Mobile
            <input type="text" class="form-control" name="mobile" data-rule-required="true"
                   data-msg-required="Mobile Required" maxlength="10" minlength="10" data-rule-number="true">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-success" value="Signup" data-rule-required="true"
                   style="background-color: #e3001f">
        </div>
    </form>
    <?php
    if (isset($_GET['msg'])) {
        echo $_GET['msg'];
    }
    ?>
</div>

<?php include "footertemplate.php"; ?>

</body>
</html>
