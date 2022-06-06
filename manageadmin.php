<!DOCTYPE>
<html lang="en">
<head>
    <title>Manage Admin</title>

    <?php
    include "headerfiles.php";
    ?>

    <script>
        function test() {
            if ($("#form1").valid()) {
                var a, b, c, d;
                a = document.getElementById("textbox1").value;
                b = document.getElementById("textbox2").value;
                c = document.getElementById("select1").value;
                d = document.getElementById("textbox3").value;
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("ans").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET", "ajaxinsertuser.php?textbox1=" + a + "&textbox2=" + b + "&select1=" + c +
                    "&textbox3=" + d, true);
                xmlhttp.send();
            }
        }
    </script>

</head>
<body>

<?php
include "adminheaderTEMPLATE.php";
?>

<div class="container">
    <div class="form-group">
        <input type="button" class="btn btn-success" value="Add New Admin" data-toggle="modal" data-target="#myModal">
    </div>

    <?php
    $s = "select * from admindemo";
    include "connection.php";;

    $ans = "<table class='table'>";
    $ans = $ans . "<tr>";
    $ans = $ans . "<td>Sr No.</td>";
    $ans = $ans . "<td>Email</td>";
    $ans = $ans . "<td>Type</td>";
    $ans = $ans . "<td colspan='2'>Controls</td>";
    $ans = $ans . "</tr>";

    $result = mysqli_query($conn, $s);
    $i = 1;
    while ($row = mysqli_fetch_array($result)) {
        $ans = $ans . "<tr>";
        $ans = $ans . "<td>" . $i . "</td>";
        $ans = $ans . "<td>" . $row[0] . "</td>";
        $ans = $ans . "<td>" . $row[2] . "</td>";
        $ans = $ans . '<td><a onclick="return confirm(\'Are you Sure you want to delete?\')" href="removeadmin.php?email=' . $row[0] . '">
    <img src="delete.png" style="width:25px;height:25px">
    </a></td>';
        $ans = $ans . '<td><a href="updateadmin.php?email=' . $row[0] . '">
    <img src="edit.png" style="width:25px;height:25px">
    </a></td>';
        $ans = $ans . "</tr>";
        $i++;
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
                    <h4 class="modal-title">Add New Admin</h4>
                </div>
                <div class="modal-body">
                    <form id="form1">
                        <div class="form-group">
                            Enter Email Address
                            <input type="email" data-rule-email="true" data-rule-required="true" class="form-control"
                                   id="textbox1">
                        </div>
                        <div class="form-group">
                            Enter Password
                            <input type="password" data-rule-required="true" class="form-control" id="textbox2">
                        </div>
                        <div class="form-group">
                            Confirm Password
                            <input type="password" data-rule-required="true" data-rule-equalto="textbox2"
                                   class="form-control" id="textbox3">
                        </div>

                        <div class="form-group">
                            Select Admin Type
                            <select id="select1" data-rule-required="true" class="form-control">
                                <option value="">Select Type</option>
                                <option value="Admin">Admin</option>
                                <option value="Limited User">Limited User</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <input type="button" onclick="test()" value="Add New user" class="btn btn-danger">
                        </div>
                        <div id="ans">

                        </div>
                    </form>
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
