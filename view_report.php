<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Report</title>

    <?php
    include "headerfiles.php";
    ?>

    <script>
        $(document).ready(function () {
            //     $(".date").datepicker();

            $("#start_date").datepicker({
                // dateFormat: 'yy-mm-dd',
                dateFormat: 'mm/dd/yy',
                defaultDate: new Date(),
                onClose: function (selectedDate) {
                    $("#end_date").datepicker("option", "minDate", selectedDate);
                }
            });
            $("#end_date").datepicker({
                // dateFormat: 'yy-mm-dd',
                dateFormat: 'mm/dd/yy',
                onClose: function (selectedDate) {
                    $("#start_date").datepicker("option", "maxDate", selectedDate);
                }
            });
        });
    </script>
</head>
<body>

<?php
include "rentalHeaderTEMPLATE.php";
?>

<div class="container">
    <div class="text-center">
        <h2 class="alert alert-info">View Report</h2>
    </div>
    <div class="row">
        <div class="col-lg-12 col-sm-12 col-md-12">
            <form class="form-inline">
                <div class="form-group">

                    <input type="text" class="date form-control" placeholder="start date" id="start_date">
                </div>
                <div class="form-group">

                    <input type="text" class="date form-control" placeholder="end date" id="end_date">
                </div>
                <div class="form-group">
                    <input type="button" class="btn btn-danger" value="View Report" onclick="getReports()">
                </div>
            </form>
        </div>
    </div>
    <br>
    <div class="row">

        <div class="col-lg-12 col-sm-12 col-md-12">
            <div id="showreport">

            </div>
        </div>
    </div>
</div>
<br>
<?php
include "footertemplate.php";
?>
<script>
    $(document).ready(function () {
        getReports();
    })
</script>
</body>
</html>
