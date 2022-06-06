<!Doctype>

<html xmlns="http://www.w3.org/1999/html">

<head>
    <link href="css/bootstrap.css" rel="stylesheet">
    <script type="text/javascript">

 function checkAll(ele) {
            var checkboxes = document.getElementsByTagName('input');
            if (ele.checked) {
                for (var i = 0; i < checkboxes.length; i++) {
                    if (checkboxes[i].type == 'checkbox') {
                        checkboxes[i].checked = true;
                    }
                }
            } else {
                for (var i = 0; i < checkboxes.length; i++) {
                    console.log(i)
                    if (checkboxes[i].type == 'checkbox') {
                        checkboxes[i].checked = false;
                    }
                }
            }
        }


    </script>
</head>

<body>
<div class="container">
    <form action="approveallrental.php" method="post">
    <?php
    include "adminheader.php";

    $s = "select * from rental_signup where status='PENDING'";
    include "connection.php";


    $ans = " <table class='table table-bordered table-responsive'>";

    $ans = $ans . "<tr>";
    $ans = $ans . "<th><INPUT type=\"checkbox\" onchange=\"checkAll(this)\"  /> </th>";
    $ans = $ans . "<th>ID</th>";
    $ans = $ans . "<th>Name</th>";
    $ans = $ans . "<th>GSTIN</th>";
    $ans = $ans . "<th>Address</th>";
    $ans = $ans . "<th>Adhar no.</th>";
    $ans = $ans . "<th>Mobile</th>";
    $ans = $ans . "<th>Email</th>";
    $ans = $ans . "<th>status</th>";


    $ans = $ans . "</tr>";
    $result = mysqli_query($conn, $s);


    $i=0;
    while ($row = mysqli_fetch_array($result)) {
        $ans .= "<tr>";

        $ans .= "<td><input type='checkbox' name='ch[]' value='$row[0]'></td>";
        $ans .= "<td>" . ++$i  . "</td>";
        $ans .= "<td>" . $row[1] . "</td>";
        $ans .= "<td>" . $row[2] . "</td>";
        $ans .= "<td>" . $row[3] . "</td>";
        $ans .= "<td>" . $row[4] . "</td>";
        $ans .= "<td>" . $row[5] . "</td>";
        $ans .= "<td>" . $row[6] . "</td>";
        $ans .= "<td>" . $row[8] . "</td>";


    }
    $ans = $ans . "</table>";
    mysqli_query($conn, $s);
    echo $ans;


    ?>

        <div class="row">

            <div class="col-md-12 col-lg-12">
                <input type="submit" value="Approve">
            </div>
        </div>
    </form
</div>



</body>
</html>