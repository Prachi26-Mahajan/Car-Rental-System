<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blacklist Cars</title>

    <?php
    include "headerfiles.php";
    ?>

    <script src="dist/jquery.validate.js"></script>
    <script>
        $(document).ready(function () {
            $("#form1").validate();
        });
    </script>
</head>
<body>

<?php
include "rentalHeaderTEMPLATE.php";
?>

<div class="container">
    <div class="text-center">
        <h2 class="alert alert-info">BlackList My Cars</h2>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <table class="table table-responsive table-bordered">
                <tr>
                    <th>Car Name</th>
                    <th>Cover Photo</th>
                    <th>Remarks</th>
                    <th>Click Me</th>
                </tr>
                <?php
                $srno = 1;

                include "connection.php";
                $mycars = "Select * from mycars WHERE rental_id=$rental_id";
                $res_mycars = mysqli_query($conn, $mycars);
                while ($row_mycars = mysqli_fetch_array($res_mycars)) {
                    ?>
                    <form method="post" action="blacklist_rentalcars_action.php" id="form1">
                        <tr>

                            <td>
                                <input type="hidden" name="mycar_id"
                                       value="<?php echo $row_mycars['mycar_id'] ?>">

                                <?php echo $row_mycars['car_name']; ?>
                            </td>


                            <td>
                                <img src="<?php echo $row_mycars['coverphoto']; ?>" style="width: 150px;height: 100px"
                                     class="img img-thumbnail">
                            </td>

                            <?php
                            $already_blacklist = "select * from blacklist_cars where mycar_id=$row_mycars[0]";
                            $res_already_blacklist = mysqli_query($conn, $already_blacklist);
                            $row_blacklist = mysqli_fetch_array($res_already_blacklist);
                            ?>

                            <td>
                                <textarea name="remarks" class="form-control"
                                    <?php if (mysqli_num_rows($res_already_blacklist) > 0) {
                                        echo "readonly";
                                    } ?> data-rule-required="true"><?php if (mysqli_num_rows($res_already_blacklist) > 0) {
                                        echo $row_blacklist["remarks"];
                                    } ?></textarea>
                            </td>


                            <td>
                                <?php
                                if (mysqli_num_rows($res_already_blacklist) == 0) { ?>

                                    <input type="hidden" name="tbblock">
                                    <input type="submit" value="Blacklist Car" class="btn btn-danger">
                                <?php } else {
//                                    $row_already_blacklist = mysqli_fetch_array($res_already_blacklist);
                                    ?>
                                    <input type="hidden" value="<?php echo $row_blacklist[0]; ?>"
                                           name="tbstatus">
                                    <input type="submit" value="Active Car" class="btn btn-success"
                                    <?php
                                }
                                ?>
                            </td>

                        </tr>
                    </form>
                    <?php
                }
                ?>
            </table>

        </div>
    </div>
</div>
<?php
include "footertemplate.php";
?>
</body>
</html>
