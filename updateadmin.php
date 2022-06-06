<!Doctype>

<html>

<head>
    <?php
    include "headerfiles.php";
    ?>
<!--    <link href="css/bootstrap.css" rel="stylesheet">-->
<!--    <link href="jquery-ui.css" rel="stylesheet">-->
<!--    <script src="jquery-3.2.0.min.js"></script>-->
<!--    <script src="jquery-ui.min.js"></script>-->
</head>

<body>
<?php
//include "adminheader.php";
include "adminheaderTEMPLATE.php";
?>
<div class="container">
    <?php

    $s = "select * from admindemo where email='" . $_REQUEST["email"]."'";
    include "connection.php";
    $result = mysqli_query($conn, $s);
    $row = mysqli_fetch_array($result);

    ?>

    <form action="saveupdate.php" method="post">
        <div class="form-group">
            <h1>Update Admin</h1>
        </div>
        <div class="form-group">
            Enter Email Address
            <input type="text" class="form-control" readonly value="<?php echo $_REQUEST["email"] ?>"
                   name="email">
        </div>
        <div class="form-group">
            Select Admin Type
            <select id="select1" class="form-control"  name="type" >
                <option <?php if($row[2]=="Admin") {   ?>selected<?php   } ?>>Admin</option>
                <option <?php if($row[2]=="Limited User") {   ?>selected<?php   } ?>>Limited User</option>
            </select>
        </div>

        <div class="form-group">
            <input type="submit" value="Submit" class="btn btn-danger">
        </div>

    </form>

</div>

<?php
include "footertemplate.php";
?>
</body>
</html>
