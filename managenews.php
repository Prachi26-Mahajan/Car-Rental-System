<!DOCTYPE>
<html>


<head>
    <?php
    include "headerfiles.php";
    ?>
<!--    <link href="css/bootstrap.css" rel="stylesheet">-->
<!--    <link href="jquery-ui.css" rel="stylesheet">-->
<!--    <script src="jquery-3.2.0.min.js"></script>-->
<!--    <script src="jquery-ui.min.js"></script>-->
<!--    <script src="js/bootstrap.js"></script>-->

    <script>
        function test() {
//            alert("testing");
            var a, b, c;
            a = document.getElementById("textbox1").value;
            b = document.getElementById("textbox2").value;
            c = document.getElementById("textbox3").value;

            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("ans").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET", "ajaxinsertnews.php?textbox1=" + a + "&textbox2=" + b + "&textbox3=" + c, true);
            xmlhttp.send();


        }
    </script>

    <script>
        $(document).ready(function () {
            $(".demo").datepicker();

        })

    </script>

</head>
<body>
<?php
//include "adminheader.php";
include "adminheaderTEMPLATE.php";
?>
<div class="container">


    <input type="button" class="btn btn-success" value="Add News" data-toggle="modal" data-target="#myModal">

    <?php

    $s = "select * from news";
    include "connection.php";;

    $ans = "<table class='table'>";
    $ans = $ans . "<tr>";
    $ans = $ans . "<td>Sr No.</td>";
    $ans = $ans . "<td>news title</td>";
    $ans = $ans . "<td>news</td>";
    $ans = $ans . "<td>Date of News</td>";
    $ans = $ans . "<td colspan='2'>Controls</td>";

    $ans = $ans . "</tr>";

    $result = mysqli_query($conn, $s);
    $i=0;
    while ($row = mysqli_fetch_array($result)) {
        $ans = $ans . "<tr>";

        $ans = $ans . "<td>" . ++$i . "</td>";
        $ans = $ans . "<td>" . $row[1] . "</td>";
        $ans = $ans . "<td>" . $row[2] . "</td>";
        $ans = $ans . "<td>" . $row[3] . "</td>";
        $ans = $ans . '<td><a href="removenews.php?q=' . $row[0] . '">
    <img src="delete.png" style="width:25px;height:25px">
    </a></td>';
        $ans = $ans . '<td><a href="updatenews.php?q=' . $row[0] . '">
    <img src="edit.png" style="width:25px;height:25px">
    </a></td>';

        $ans = $ans . "</tr>";


    }

    $ans = $ans . "</table>";

    echo $ans;

    ?>


    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        Enter News Title
                        <input type="text" class="form-control" id="textbox1">
                    </div>
                    <div class="form-group">
                        News
                        <input type="text" class="form-control" id="textbox2">
                    </div>
                    <div class="form-group">
                        Date of News
                        <input type="text" class="form-control demo" id="textbox3">
                    </div>


                    <div class="form-group">
                        <input type="button" onclick="test()" value="Add News">
                    </div>
                    <div id="ans">

                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

</div>
<?php
include "footertemplate.php";
?>
</body>


</html>