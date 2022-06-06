<?php
session_start();
if (!isset($_SESSION["rental_email"])) {
    header("location:rental_login.php");
} else {
    $email = $_SESSION["rental_email"];
    $rental_id = $_SESSION["rental_id"];
}
?>
<link rel="stylesheet" href="css/bootstrap.css">
<div>
    <ul class="nav nav-pills">
        <li><a href="rentalhome.php">rental Home</a></li>
        <li><a href="mycars.php">Add Cars</a></li>
        <li><a href="rentalMycars.php">View Cars</a></li>
        <li><a href="areas_choose.php">Choose Areas</a></li>
        <li><a href="blacklist_rentalcars.php">BlackList Cars</a></li>
        <li><a href="rental_changepassword.php">Change Password</a></li>
        <li><a href="rental_logout.php">Logout <?php echo $_SESSION['rental_email']; ?></a></li>

    </ul>
</div>
