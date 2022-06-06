<!DOCTYPE>
<html lang="en">
<head>
    <title>Admin Dashboard</title>

    <?php
    include "headerfiles.php";
    ?>
</head>
<body>

<?php
include "adminheaderTEMPLATE.php";
?>

<div class="container" style="margin-top: 50px">
    <div class="jumbotron">
        <h2 class="text-center">Welcome to admin Home <?php echo $_SESSION["email"] ?></h2>
    </div>
</div>

<?php
include "footertemplate.php";
?>

</body>
</html>
