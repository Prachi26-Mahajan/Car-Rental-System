<?php
include_once 'connection.php';

if (isset($_GET["carid"])){
    $cid=$_GET["carid"];
    $sql="select * from mycars where mycar_id='$cid'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result);
    ?>
    <div class="row">
        <div class="col-sm-6">
            <img style="width: 300px;height: 300px" src="<?php echo $row["coverphoto"];?>" alt="">
        </div>
        <div class="col-sm-6">
            <div class="row">
                <div class="col-sm-6">
                    <h4><b>Model</b></h4>
                </div>
                <div class="col-sm-6">
                    <h4><?php echo $row["model"];?></h4>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <h4><b>Car Name</b></h4>
                </div>
                <div class="col-sm-6">
                    <h4><?php echo $row["car_name"];?></h4>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <h4><b>Color</b></h4>
                </div>
                <div class="col-sm-6">
                    <h4><?php echo $row["color"];?></h4>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <h4><b>Regd no.</b></h4>
                </div>
                <div class="col-sm-6">
                    <h4><?php echo $row["reg_no"];?></h4>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <h4><b>Condition</b></h4>
                </div>
                <div class="col-sm-6">
                    <h4><?php echo $row["condition"];?></h4>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <h4><b>Insurance</b></h4>
                </div>
                <div class="col-sm-6">
                    <h4><?php echo $row["insurance_validity"];?></h4>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <h4><b>Description</b></h4>
                </div>
                <div class="col-sm-6">
                    <h4><?php echo $row["description"];?></h4>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <h4><b>Rent price (per day)</b></h4>
                </div>
                <div class="col-sm-6">
                    <h4>&#8377;&nbsp;<?php echo $row["rent"];?></h4>
                </div>
            </div>
        </div>
    </div>
    <?php

}