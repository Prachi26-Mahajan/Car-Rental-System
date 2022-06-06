<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rental Dashboard</title>

    <?php
    include "headerfiles.php";
    ?>
</head>
<body>

<?php
include "rentalHeaderTEMPLATE.php";
?>

<div class="container" style="margin-top: 4rem">
    <div class="text-center jumbotron">
        <h2 class="">Welcome <?php echo $email ?></h2>
    </div>
</div>

<?php
include "footertemplate.php";
?>

</body>
</html>
