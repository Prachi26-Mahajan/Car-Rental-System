<!DOCTYPE>
<html lang="en">
<head>
    <title>User Dashboard</title>
    <?php
    include "headerfiles.php";
    ?>
</head>
<body>

<?php
include "userheaderTEMPLATE.php";
?>

<div class="container">
    <div class="jumbotron" style="margin-top: 40px">
        <h2 class="text-center">Welcome to User Home <br> <?php echo $email ?></h2>
    </div>
</div>

<?php
include "footertemplate.php";
?>

</body>
</html>
