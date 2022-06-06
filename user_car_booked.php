<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Car Booked</title>

    <?php
    include "headerfiles.php";
    ?>
</head>
<body>

<?php
include "userheaderTEMPLATE.php";
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <?php
            if (isset($_GET['msg'])) {
                ?>
                <div style="margin-top: 4rem">
                    <div class="alert alert-success">
                        <h1 class="text-center">Car Booked Successfully</h1>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</div>

<?php
include "footertemplate.php";
?>

</body>
</html>
