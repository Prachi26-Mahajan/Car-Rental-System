<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php
    include "headerfiles.php";
    ?>
<!--    <link rel="stylesheet" href="css/bootstrap.css">-->
</head>
<body>
<?php
//include "adminheader.php";
include "adminheaderTEMPLATE.php";
?>
<div class="container">
    <?php
    include "connection.php";
    $cityid = $_REQUEST['cityid'];
    $select_cities = "select * from cities where city_id='$cityid'";
    $result_cities = mysqli_query($conn, $select_cities);
    $row_cities = mysqli_fetch_array($result_cities);

    ?>
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <h1>Add Cities</h1>
            <form method="post" id="form1" action="cityupdate.php">
                <div class="form-group">
                    <label>City Name</label>
                    <input type="hidden" name="cityid" class="form-control" value="<?php echo $row_cities[0]; ?>">
                    <input type="text" data-rule-required="true" name="cityname" class="form-control" value="<?php echo $row_cities[1]; ?>">
                </div>
                <div class="form-group">
                    <label>Postal Code</label>
                    <input type="text" data-rule-required="true" maxlength="6" minlength="6" data-rule-number="true" name="postalcode" class="form-control" value="<?php echo $row_cities[2]; ?>">
                </div>
                <div class="form-group">
                    <input type="submit" value="Add City" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
</div>
<?php
include "footertemplate.php";
?>
</body>
</html>

