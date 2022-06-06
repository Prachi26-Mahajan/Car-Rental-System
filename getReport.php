<?php
include "connection.php";
$sel_report="";
if (isset($_GET["start_date"]) and isset($_GET["end_date"])) {
    $start_date = date('Y-m-d', strtotime($_GET['start_date']));
    $end_date = date('Y-m-d', strtotime($_GET['end_date']));
    $sel_report = "select * from bills WHERE billdate BETWEEN '$start_date' AND '$end_date'";
} else {
    $sel_report = "select * from bills WHERE billdate";
}
//echo $start_date . "-" . $end_date;
?>

<table class="table table-bordered">
    <tr>
        <th>User Email</th>
        <th>Car Name</th>
        <th>Paid On</th>
        <th>GST %</th>
        <th>Grand Total</th>
    </tr>
    <?php
    //    $sel_report = "select bills.bill_id, mycars.car_name, bills.email, bills.numberofdays, bills.gst_percent,
    //bills.grand_total, bills.billdate from bills INNER JOIN mycars on WHERE start_date='$start_date' AND end_date='$end_date'";

    //echo $sel_report;
    $res_report = mysqli_query($conn, $sel_report);
    while ($row_report = mysqli_fetch_array($res_report)) {
        ?>
        <tr>
            <td><?php echo $row_report['email']; ?></td>
            <td>
                <?php
                //                echo $row_report['mycar_id'];

                $mycar_id = $row_report['mycar_id'];
                $select_carname = "select * from mycars WHERE mycar_id=$mycar_id";
                $result_carname = mysqli_query($conn, $select_carname);
                $row_carname = mysqli_fetch_array($result_carname);
                echo $row_carname[8];
                ?>
            </td>
            <td><?php echo $row_report['billdate']; ?></td>
            <td><?php echo $row_report['gst_percent']; ?></td>
            <td><?php echo $row_report['grand_total']; ?></td>
        </tr>
        <?php
    }
    ?>
</table>
