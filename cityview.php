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
    <h1>City View</h1>
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <tr>
                        <th>Sr No</th>
                        <th>Cityname</th>
                        <th>Postalcode</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    <?php
                    include "connection.php";
                    $select_cities = "select * from cities";
                    $result_cities = mysqli_query($conn, $select_cities);
                    $sr_no = 1;
                    while ($row_cities = mysqli_fetch_array($result_cities)) {
                        ?>
                        <tr>
                            <td><?php echo $sr_no; ?></td>
                            <td><?php echo $row_cities[1]; ?></td>
                            <td><?php echo $row_cities[2]; ?></td>
                            <td><a href="cityedit.php?cityid=<?php echo $row_cities[0]; ?>">Edit</a></td>
                            <td><a onclick="return confirm('are you sure to delete ?')" href="citydelete.php?cityid=<?php echo $row_cities[0]; ?>">Delete</a></td>
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
