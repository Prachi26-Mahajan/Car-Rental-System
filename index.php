<!DOCTYPE html>
<html lang="en">
<head>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="Car Rental Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"/>

    <title>Car Rental | Home</title>

    <?php
    include "headerfiles.php";
    ?>
</head>
<body>

<?php
include "publicheaderTEMPLATE.php";
?>

<!-- //banner -->
<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
            <section>
                <div class="modal-body">
                    <h3 class="agileinfo_sign">BEFRIEND</h3>
                    <img src="images/g1.jpg" alt=" " class="img-responsive"/>
                    <p>Ut enim ad minima veniam, quis nostrum
                        exercitationem ullam corporis suscipit laboriosam,
                        nisi ut aliquid ex ea commodi consequatur.
                        <i>" Quis autem vel eum iure reprehenderit qui in ea voluptate velit .</i></p>
                </div>
            </section>
        </div>
    </div>
</div>
<!-- //banner -->

<div class="banner-bottom">
    <!--//screen-gallery-->
    <div class="wthree_title_agile">
        <h3>Most <span>Popular</span> Cars</h3>
    </div>

    <p class="sub_para">It’s time to drive</p>

    <div class="inner_w3l_agile_grids">
        <div class="sreen-gallery-cursual">
            <div id="owl-demo" class="owl-carousel">
                <?php
                include "connection.php";
                $mycars = "select mycar_id,coverphoto,rent from mycars";
                $res_mycars = mysqli_query($conn, $mycars);
                while ($row_mycars = mysqli_fetch_array($res_mycars)) {
                    ?>
                    <div class="item-owl">
                        <div class="test-review">
                            <!--                            <img src="images/s1.jpg" class="img-responsive" alt=""/>-->
                            <a onclick="showmodal('<?php echo $row_mycars["mycar_id"]; ?>')"><img
                                        src="<?php echo $row_mycars["coverphoto"]; ?>" class="img-responsive" alt=""/>
                                <!--                            <h5>$280</h5>-->
                                <h5>&#8377; <?php echo $row_mycars["rent"]; ?></h5></a>

                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
            <!--//screen-gallery-->
        </div>
    </div>
</div>
<!-- //banner-bottom -->


<!-- about -->
<div class="about" id="about">
    <div class="container">
        <div class="wthree_title_agile two">
            <h3>About <span>Us</span></h3>
        </div>
        <p class="sub_para two">It’s time to drive</p>
        <div class="inner_w3l_agile_grids">
            <div class="col-md-12 about-left-w3layouts">
                <h6 class="sub">WELCOME TO OUR Car Fusion</h6>
                <p>No more worries about petrol mileage, fuel costs, insurance, and car breakdowns! Cars Fusion has
                    enabled
                    driving convenience for travellers around the country and is fast expanding its reach to cities
                    including Amritsar, Jalandhar, Ludhiana, Mohali. Self drive cars from Cars Fusion have given
                    customers
                    more control, privacy, and freedom. Book a selfdrive car in any city you visit and feel at home
                    wherever you go.</p>
            </div>
            <div class="col-md-6 about-right-w3layouts"></div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- about -->

<div class="lb-overlay" id="image-1">
    <img src="images/g1.jpg" alt="image1"/>
    <div class="gal-info">
        <h3>Car Rental</h3>
        <p>Neque porro quisquam est, qui dolorem ipsum
            quia dolor sit amet, consectetur, adipisci velit,
            sed quia non numquam eius modi tempora incidunt ut
            labore et dolore magnam aliquam quaerat voluptatem.</p>
    </div>
    <a href="index.html" class="lb-close">Close</a>
</div>
<div class="lb-overlay" id="image-2">
    <img src="images/g2.jpg" alt="image1"/>
    <div class="gal-info">
        <h3>Car Rental</h3>
        <p>Neque porro quisquam est, qui dolorem ipsum
            quia dolor sit amet, consectetur, adipisci velit,
            sed quia non numquam eius modi tempora incidunt ut
            labore et dolore magnam aliquam quaerat voluptatem.</p>
    </div>
    <a href="index.html" class="lb-close">Close</a>
</div>
<div class="lb-overlay" id="image-3">
    <img src="images/g3.jpg" alt="image1"/>
    <div class="gal-info">
        <h3>Car Rental</h3>
        <p>Neque porro quisquam est, qui dolorem ipsum
            quia dolor sit amet, consectetur, adipisci velit,
            sed quia non numquam eius modi tempora incidunt ut
            labore et dolore magnam aliquam quaerat voluptatem.</p>
    </div>
    <a href="index.html" class="lb-close">Close</a>
</div>
<div class="lb-overlay" id="image-4">
    <img src="images/g4.jpg" alt="image1"/>
    <div class="gal-info">
        <h3>Car Rental</h3>
        <p>Neque porro quisquam est, qui dolorem ipsum
            quia dolor sit amet, consectetur, adipisci velit,
            sed quia non numquam eius modi tempora incidunt ut
            labore et dolore magnam aliquam quaerat voluptatem.</p>
    </div>
    <a href="index.html" class="lb-close">Close</a>
</div>
<div class="lb-overlay" id="image-5">
    <img src="images/g5.jpg" alt="image1"/>
    <div class="gal-info">
        <h3>Car Rental</h3>
        <p>Neque porro quisquam est, qui dolorem ipsum
            quia dolor sit amet, consectetur, adipisci velit,
            sed quia non numquam eius modi tempora incidunt ut
            labore et dolore magnam aliquam quaerat voluptatem.</p>
    </div>
    <a href="index.html" class="lb-close">Close</a>
</div>
<div class="lb-overlay" id="image-6">
    <img src="images/g6.jpg" alt="image1"/>
    <div class="gal-info">
        <h3>Car Rental</h3>
        <p>Neque porro quisquam est, qui dolorem ipsum
            quia dolor sit amet, consectetur, adipisci velit,
            sed quia non numquam eius modi tempora incidunt ut
            labore et dolore magnam aliquam quaerat voluptatem.</p>
    </div>
    <a href="index.html" class="lb-close">Close</a>
</div>
<div class="lb-overlay" id="image-7">
    <img src="images/g7.jpg" alt="image1"/>
    <div class="gal-info">
        <h3>Car Rental</h3>
        <p>Neque porro quisquam est, qui dolorem ipsum
            quia dolor sit amet, consectetur, adipisci velit,
            sed quia non numquam eius modi tempora incidunt ut
            labore et dolore magnam aliquam quaerat voluptatem.</p>
    </div>
    <a href="index.html" class="lb-close">Close</a>
</div>
<div class="lb-overlay" id="image-8">
    <img src="images/g8.jpg" alt="image1"/>
    <div class="gal-info">
        <h3>Car Rental</h3>
        <p>Neque porro quisquam est, qui dolorem ipsum
            quia dolor sit amet, consectetur, adipisci velit,
            sed quia non numquam eius modi tempora incidunt ut
            labore et dolore magnam aliquam quaerat voluptatem.</p>
    </div>
    <a href="index.html" class="lb-close">Close</a>
</div>
<!-- gallery -->


<!-- contact -->
<div class="map-w3ls">
    <div class="wthree_title_agile" id="contact">
        <h3> Contact <span>Us</span></h3>
    </div>
    <p class="sub_para">It’s time to drive</p>
    <div class="contact-agile">
        <div class="contact-middle">
            <h4>Say Hello</h4>
            <form action="#" method="post">
                <div class="form-agileinfo">
                    <div class="input-w3ls">
                        <p>Your Name</p>
                        <input type="text" name="your name" placeholder="" required=""/>
                    </div>
                    <div class="input-w3ls">
                        <p>Your Email</p>
                        <input type="email" name="Your email" placeholder="" required=""/>
                    </div>
                </div>
                <div class="form-agileits-w3layouts">
                    <p>Your Comments</p>
                    <textarea name="your message" placeholder="" required=""></textarea>
                    <input type="submit" value="Send message">
                </div>
                <div class="clearfix"></div>
            </form>
        </div>
        <div class="contact-left">
            <h6>89, Mall Road, ASR.</h6>
            <p>(+91) 1234567898</p>
            <p><a href="javascript:void(0);">demo@email.com</a></p>
            <h6>Opening Hours</h6>
            <p>Monday-Friday</p>
            <!--            <span>7.00AM-10.00PM</span>-->
            <span>24hrs</span>
            ​<p>Saturday-Sunday</p>
            ​<span>24hrs</span>
        </div>

    </div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1233.8968956351416!2d74.9904393305695!3d31.577140722014992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391bd63f85203271%3A0x57ec6504e6d034f4!2sAmritsar+College+of+Engineering+and+Technology!5e1!3m2!1sen!2sin!4v1510729023226"
            width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
<!-- //contact -->

<div class="modal fade" id="modaldetail">
    <div class="modal-dialog modal-sm modal-lg">
        <div class="modal-content">
            <div class="modal-header justify-content-center">
                <div class="row col-lg-offset-5 mt-4">
                    <h1>Car Detail </h1>
                    <input type="hidden" name="carid" id="carid">
                </div>
            </div>
            <div class="modal-body justify-content-center" id="cardetail">

            </div>
            <div class="modal-footer">
                <h6>Any one interested in purchasing contact Rental Owner.</h6>
            </div>
        </div>
    </div>
</div>

<?php
include "footertemplate.php";
?>

<script>
    function showmodal(cid) {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                $("#modaldetail").modal("show");
                document.getElementById('cardetail').innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "detailaction.php?carid=" + cid, true);
        xhttp.send();
    }
</script>

</body>
</html>
