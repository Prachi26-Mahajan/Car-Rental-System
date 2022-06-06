<!Doctype>

<html>

<head>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="jquery-ui.css" rel="stylesheet">
    <script src="jquery-3.2.0.min.js"></script>
    <script src="jquery-ui.min.js"></script>
    <script src="dist/jquery.validate.js"></script>
    <script>
        $(document).ready(function () {
//            alert("jquery ready");
            $("#form1").validate();
        })
    </script>

</head>

<body>
<div class="container">
    <?php
    include "publicheader.php";
    ?>


    <form action="reschecksignup.php" method="post" id="form1">
        <div class="form-group">
            <h1 style="margin-left: 250px">Restaurant Sign Up</h1>
        </div>
        <div class="form-group">
            Enter Email Address
            <input type="text" class="form-control" name="email" data-rule-required="true"
                   data-msg-required="Please enter Email Address" data-rule-email="true" maxlength="80">
        </div>
        <div class="form-group">
            Enter Password
            <input type="password" class="form-control" name="password"data-rule-required="true"
                   data-msg-required="Password Required" maxlength="80">
        </div>
        <div class="form-group">
            Confirm Password
            <input type="password" class="form-control" name="cpassword" data-rule-required="true"
                   data-msg-required="Confirm Your Password" maxlength="80">
        </div>
        <div class="form-group">
            Enter Owner Name
            <input type="text" class="form-control" name="ownername"data-rule-required="true"
                   data-msg-required="Owner Name Required" maxlength="80">
        </div>
        <div class="form-group">
            Enter Mobile No.
            <input type="text" class="form-control" name="mobileno" data-rule-required="true"
                   data-rule-number="true" data-msg-required="Mobile Number Required" maxlength="12">
        </div>
        <div class="form-group">
            Enter GST No.
            <input type="text" class="form-control" name="gstno" data-rule-required="true"
                   data-msg-required="GST No. Required" maxlength="15">
        </div>
        <div class="form-group">
            Enter PAN No.
            <input type="text" class="form-control" name="panno" data-rule-required="true"
                   data-msg-required="PAN No. Required" maxlength="10">
        </div>
        <div class="form-group">
            Enter Address
            <input type="text" class="form-control" name="address"data-rule-required="true"
                   data-msg-required="Address Required" maxlength="80">
        </div>
        <div class="form-group">
            Enter State
            <input type="text" class="form-control" name="state" data-rule-required="true"
                   data-msg-required="State Required" maxlength="50">
        </div>
        <div class="form-group">
            Enter City
            <input type="text" class="form-control" name="city" data-rule-required="true"
                   data-msg-required="City Required" maxlength="50">
        </div>
        
        <div class="form-group">
            <input type="submit" class="btn btn-success" value="Sign Up">
        </div>
    </form>

</div>

</body>

</html>