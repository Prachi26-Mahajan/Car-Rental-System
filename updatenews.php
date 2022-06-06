<!Doctype>

<html>

<head>
    <?php
    include "headerfiles.php";
    ?>
<!--    <link href="css/bootstrap.css" rel="stylesheet">-->
<!--    <link href="jquery-ui.css" rel="stylesheet">-->
<!--    <script src="jquery-3.2.0.min.js"></script>-->
<!--    <script src="jquery-ui.min.js"></script>-->
</head>

<body>
<?php
//include "adminheader.php";
include "adminheaderTEMPLATE.php";
?>
<div class="container">
    <?php
    $s = "select * from news where newsid='" . $_REQUEST["q"]."'";
    include "connection.php";
    $result = mysqli_query($conn, $s);
    $row = mysqli_fetch_array($result);
    ?>
    
    <form action="savenews.php" method="post">
        <input type="hidden" name="newsid" value="<?php echo $row[0] ?>">
        <div class="form-group">
            <h1>Update News</h1>
        </div>

        <div class="form-group">
            Enter News Title
            <input type="text" class="form-control" value="<?php echo $row[1] ?>" id="textbox1" name="newstitle">
        </div>
        <div class="form-group">
            News
            <input type="text" class="form-control" value="<?php echo $row[2] ?>" id="textbox2" name="news">
        </div>
        <div class="form-group">
            Date of News
            <input type="text" class="form-control demo" value="<?php echo $row[3] ?>" id="textbox3" name="dateofnews">
        </div>

        <div class="form-group">
            <input type="submit" value="Submit" class="btn btn-danger">
        </div>
    </form>

</div>
<?php
include "footertemplate.php";
?>
</body>
</html>
    