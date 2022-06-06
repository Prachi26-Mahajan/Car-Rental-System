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
    <h1>Area View</h1>
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <tr>
                        <th>Sr No</th>
                        <th>Area Name</th>
                        <th>City Name</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    <?php
                    include "connection.php";
                    $select_Areas = "select * from Areas";
                    $result_Areas = mysqli_query($conn, $select_Areas);
                    $sr_no = 1;


                    while ($row_Areas = mysqli_fetch_array($result_Areas)) {
                        ?>
                        <tr>
                            <td><?php echo $sr_no; ?></td>
                            <td><?php echo $row_Areas['areaname']; ?></td>

                            <?php
                            $selectcities = "select * from cities WHERE city_id='$row_Areas[2]'";
                            $res_cityname = mysqli_query($conn, $selectcities);
                            $row_cityname = mysqli_fetch_array($res_cityname);
                            if ($row_cityname['city_id'] == $row_Areas['city_id']) {
                                ?>
                                <td><?php echo $row_cityname['cityname']; ?></td>
                                <?php
                            }
                            ?>
                            <td><a href="areaedit.php?areaid=<?php echo $row_Areas[0]; ?>">Edit</a></td>
                            <td><a onclick="return confirm('are you sure to delete ?')" href="areadelete.php?areaid=<?php echo $row_Areas[0]; ?>">Delete</a></td>
                        </tr>
                        <?php
                        $sr_no++;
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
</div>
<?php
include "footertemplate.php";
?>
</body>
</html>