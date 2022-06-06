<!DOCTYPE>
<html>

<head>
    <?php
    include "headerfiles.php";
    ?>
<!--    <link href="css/bootstrap.css" rel="stylesheet">-->
<!--    <script src="jquery-3.2.0.min.js"></script>-->
    <script src="dist/jquery.validate.js"></script>
    <script>
        $(document).ready(function () {
//            alert("jquery ready");
            $("#form1").validate();
        })
    </script>
</head>

<body>
<?php
//include "adminheader.php";
include "adminheaderTEMPLATE.php";
?>
<div class="container">
<h1>Add Cars</h1>
    <form action="cars_action.php" method="post" id="form1" enctype="multipart/form-data">
        <div class="form-group">
            Enter car name
            <input type="text" class="form-control" name="carname" data-rule-required="true"
                   data-msg-required="carname Required">
        </div>

        <div class="form-group">
            Enter brand
            <input type="text" class="form-control" name="brand" data-rule-required="true"
                   data-msg-required="brand Required">
        </div>
        <div class="form-group">
            Insert photo
            <input type="file" class="form-control" name="photo" data-rule-required="true"
                   data-msg-required="photo Required">
        </div>
        <div class="form-group">
            Enter description

            <textarea data-rule-required="true" class="form-control" name="description"></textarea>
        </div>
        <div class="form-group" style="align-content: end">
            <input type="submit" class="btn btn-success" value="submit" data-rule-required="true">
        </div>
    </form>
    <br>
    <?php
    if (isset($_GET['msg'])) {
        $msg = $_GET['msg'];
        if ($msg == 1) {
            echo '<span class="alert alert-danger">Car Already Exist</span>';
        } elseif ($msg == 2) {
            echo '<span class="alert alert-success">Car Added Successfully</span>';
        } else {
            echo '<span class="alert alert-danger">Upload an Image File Only</span>';
        }
    }
    ?>
    <br>
    <br>
    <br>
</div>
<?php
include "footertemplate.php";
?>
</body>

</html>