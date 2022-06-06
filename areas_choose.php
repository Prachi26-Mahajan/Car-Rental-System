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
</head>
<body>

<?php
include "connection.php";
include "rentalHeaderTEMPLATE.php";
?>

<div class="container">
    <form class="form-horizontal" method="post" action="areas_choose_action.php">
        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-0"></div>

            <div class="col-lg-8 col-md-8 col-sm-12">
                <div class="row">
                    <div class="form-group">
                        <label class="col-lg-4 col-md-4 col-sm-3 control-label">Select City</label>
                        <div class="col-lg-8 col-md-8 col-sm-9">
                            <select class="form-control" name="tbcity_id" id="city_id" onchange="getAreas(this.value)">
                                <option>Choose City</option>
                                <?php
                                $select_cities = "select * from cities";
                                $result_cities = mysqli_query($conn, $select_cities);
                                while ($row_cities = mysqli_fetch_array($result_cities)) {
                                    ?>
                                    <option
                                            value="<?php echo $row_cities['city_id']; ?>"><?php echo $row_cities['cityname']; ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-2 col-sm-0"></div>
        </div>

        <div id="output"></div>
    </form>
    <script>
        function checkAll(ele) {
            var checkboxes = document.getElementsByTagName('input');
            if (ele.checked) {
                for (var i = 0; i < checkboxes.length; i++) {
                    if (checkboxes[i].type == 'checkbox') {
                        checkboxes[i].checked = true;
                    }
                }
            } else {
                for (var i = 0; i < checkboxes.length; i++) {
                    console.log(i)
                    if (checkboxes[i].type == 'checkbox') {
                        checkboxes[i].checked = false;
                    }
                }
            }
        }
    </script>
    <form action="deleteareas.php" method="post" onsubmit="return confirm('Are you sure to delete ?')">
        <table class="table table-bordered table-hover">
            <tr>
                <th><input type="checkbox" onchange="checkAll(this)"></th>
                <th>City Name</th>
                <th>Area Name</th>
                <th>Rental Name</th>
            </tr>

            <?php
            $sel_rental_area = "select * from rental_areas WHERE rental_id=$rental_id";
            $res_rental_area = mysqli_query($conn, $sel_rental_area);
            while ($row_rental_area = mysqli_fetch_array($res_rental_area)) {
                ?>
                <tr>
                    <td>
                        <input type="checkbox" name="arid[]" value="<?php echo $row_rental_area[0]; ?>">
                    </td>
                    <td>
                        <?php
                        $sel_city = "select * from cities WHERE city_id='$row_rental_area[2]'";
                        $res_cityname = mysqli_query($conn, $sel_city);
                        $row_cityname = mysqli_fetch_array($res_cityname);
                        ?>
                        <?php echo $row_cityname[1]; ?>
                    </td>
                    <td>
                        <?php
                        $sel_area = "select * from Areas WHERE area_id='$row_rental_area[1]'";
                        $res_areaname = mysqli_query($conn, $sel_area);
                        $row_areaname = mysqli_fetch_array($res_areaname);
                        ?>
                        <?php echo $row_areaname['areaname']; ?>
                    </td>
                    <td><?php echo $email; ?></td>
                </tr>
                <?php
            }
            ?>

        </table>
        <div class="form-group">

            <input type="submit" value="Delete" class="btn btn-danger">
        </div>

    </form>
</div>
<?php
include "footertemplate.php";
?>
</body>
</html>
