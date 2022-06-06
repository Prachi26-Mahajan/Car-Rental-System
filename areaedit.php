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
include "connection.php";

$areaid = $_REQUEST['areaid'];
$select_Areas = "select * from Areas WHERE area_id='$areaid'";
$result_Areas = mysqli_query($conn, $select_Areas);
$row_Areas = mysqli_fetch_array($result_Areas);
?>
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <h1>Edit Areas</h1>
            <form method="post" id="form1" action="areaupdate.php">

                <!--area id hidden-->
                <input type="hidden" value="<?php echo $row_Areas[0]; ?>" name="area_id">

                <div class="form-group">
                    <label>Select City</label>
                    <select class="form-control" data-rule-required="true" name="city_id">
                        <option>Select City</option>
                        <?php

                        $select_cities = "select city_id,cityname from cities";
                        $result_cities = mysqli_query($conn, $select_cities);
                        while ($row_cities = mysqli_fetch_array($result_cities)) {
                            ?>
                            <option <?php if ($row_Areas[2] == $row_cities[0]) {
                                echo "selected";
                            } ?> value="<?php echo $row_cities[0]; ?>"><?php echo $row_cities[1]; ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Area Name</label>
                    <input type="text" data-rule-required="true" name="areaname" class="form-control" value="<?php echo $row_Areas[1]; ?>">
                </div>
                <div class="form-group">
                    <input type="submit" value="submit" class="btn btn-success">
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