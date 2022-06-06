<!-- footer -->
<div class="w3_agile_address">
    <div class="container">
        <div class="w3ls_footer_grid">
            <div class="col-md-4 w3ls_footer_grid_left">
                <div class="w3ls_footer_grid_leftl">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                </div>
                <div class="w3ls_footer_grid_leftr">
                    <h4>Find Us On:</h4>
                    <p>89, Mall Road, ASR.</p>
                </div>
                <div class="clearfix"></div>
            </div>

            <div class="col-md-4 w3ls_footer_grid_left">
                <div class="w3ls_footer_grid_leftl email">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                </div>
                <div class="w3ls_footer_grid_leftr ">
                    <h4>Email Us On:</h4>
                    <a>carfusion@gmail.com</a>
                </div>
                <div class="clearfix"></div>
            </div>

            <div class="col-md-4 w3ls_footer_grid_left">
                <div class="w3ls_footer_grid_leftl">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                </div>
                <div class="w3ls_footer_grid_leftr">
                    <h4>Call Us On:</h4>
                    <p>(+91) 8264535580</p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>

<div class="newsletter">
    <div class="container">
        <div class="col-md-3 footer-grid">

        </div>
        <div class="col-md-2 footer-grid">

        </div>
        <div class="col-md-4 footer-grid">


        </div>
        <div class="col-md-3 footer-grid">

            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<div class="w3l_footer_agile">
    <p>© <?php echo date("Y") ?> Car Fusion. All Rights Reserved | Design by <a
                href="javascript:void(0);" style="text-decoration: none">PPM</a></p>
</div>
<!-- //footer -->

<!-- js -->
<!--<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>-->
<!--scripts-->
<!-- Counter required files -->
<script type="text/javascript" src="js/dscountdown.min.js"></script>
<!--<script src="js/demo-1.js"></script>-->
<script>
    jQuery(document).ready(function ($) {
        $('.demo2').dsCountDown({
            endDate: new Date("December 24, 2020 23:59:00"),
            theme: 'black'
        });
    });
</script>
<!-- //Counter required files -->

<!--//scripts-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();
            $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
        });
    });
</script>
<!-- start-smoth-scrolling -->
<!--banner Slider starts Here-->
<script src="js/responsiveslides.min.js"></script>
<script>
    // You can also use "$(window).load(function() {"
    $(function () {
        // Slideshow 4
        $("#slider3").responsiveSlides({
            auto: true,
            pager: true,
            nav: false,
            speed: 500,
            namespace: "callbacks",
            before: function () {
                $('.events').append("<li>before event fired.</li>");
            },
            after: function () {
                $('.events').append("<li>after event fired.</li>");
            }
        });

    });
</script>
<script src="js/modernizr.custom.js"></script>


<script src="js/jquery.flipster.js"></script>
<script>

    $(function () {
        $(".flipster").flipster({style: 'carousel', start: 0});
    });


</script>
<!--banner Slider starts Here-->
<!-- required-js-files-->
<link href="css/owl.carousel.css" rel="stylesheet">
<script src="js/owl.carousel.js"></script>
<script>
    $(document).ready(function () {
        $("#owl-demo").owlCarousel({
            items: 5,
            itemsDesktop: [768, 4],
            itemsDesktopSmall: [414, 3],
            lazyLoad: true,
            autoPlay: true,
            navigation: true,

            navigationText: false,
            pagination: false,

        });

    });
</script>
<!--//required-js-files-->
<!-- smooth scrolling -->
<script type="text/javascript">
    $(document).ready(function () {
        /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
            };
        */
        $().UItoTop({easingType: 'easeOutQuart'});
    });
</script>
<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
<!--<script type="text/javascript" src="js/bootstrap.js"></script>-->
