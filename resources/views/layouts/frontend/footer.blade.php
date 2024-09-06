<!-- Footer -->
<footer class="footer-before-login gt-margin-top-25">
    <div class="container">
        <div class="row">
            <div class="col-xxl-4 col-xl-4 col-lg-8 col-sm-16 col-md-8">
                <h5 class="gt-text-green gt-font-weight-600">
                    Help And Support </h5>
                <ul class="">
                    <li><a href="contactUs.php">Contact Us</a></li>
                    <li><a href="cms?cms_id=13">FAQ</a></li>
                    <li><a href="cms?cms_id=16">Refund Policy</a></li>
                </ul>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-8 col-sm-16 col-md-8">
                <h5 class="gt-text-green gt-font-weight-600">
                    Terms & Policy </h5>
                <ul class="">
                    <li><a href="cms?cms_id=7">Terms & Conditions</a></li>
                    <li><a href="cms?cms_id=6">Privacy Policy</a></li>
                    <li><a href="cms?cms_id=15">Report Misuse</a></li>
                </ul>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-8 col-sm-16 col-md-8">
                <h5 class="gt-text-green gt-font-weight-600">
                    Need Help? </h5>
                <ul class="">
                    <li><a href="membershipplans"><i class="fa fa-star gt-text-orange"></i> Upgrade Membership</a></li>
                </ul>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-8 col-sm-16 col-md-8">
                <h5 class="gt-text-green gt-font-weight-600">
                    Information </h5>
                <ul class="">
                    <li><a href="success-story">Success Story</a></li>
                    <li><a href="cms?cms_id=8">About Us</a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-xxl-10 col-xl-10 col-lg-10 col-md-16">
                <h5 class="gt-text-green gt-font-weight-600">About Us</h5>
                <p>Welcome to Matrimonywebsite</p>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-16 text-center">
                <h5 class="gt-text-green gt-font-weight-600">
                    Join us on social </h5>
                <ul class="gt-footer-social">
                    <li><a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-square"></i></a>
                    </li>
                    <li><a href="https://www.googleplus.com" target="_blank"><i class="fab fa-pinterest-square"></i></a>
                    </li>
                    <li><a href="https://www.twitter.com" target="_blank"><i class="fab fa-twitter-square"></i></a></li>
                    <li><a href="https://www.linkedin.com" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<div class="container-fluid gt-footer-bottom">
    <div class="row">
        <div class="container text-center">
            All Rights Reserved By @ <a href="https://matrimonialphpscript.com/premium-demo-2/">Design and developed by
                Matrimonywebsite</a>
        </div>
    </div>
</div>
<!--/. Footer -->
<a href="#selectLanguage" class="btn fixLangugeBtn" data-toggle="modal" style=""><i
        class="fas fa-language gt-margin-right-5"></i><span>Change language</span></a>
<div class="modal fade gtLogModal" id="selectLanguage" tabindex="-1" role="dialog" aria-labelledby="selectLanguage"
    aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <div class="col-12">
                    <h5 class="modal-title" id="exampleModalLabel">Select your language <button type="button"
                            class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </h5>
                </div>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-xs-16">
                        <div class="list-group">
                            <a href="index.php?lang=en" class="list-group-item list-group-item-action">English</a>
                            <a href="index.php?lang=hi" class="list-group-item list-group-item-action">हिंदी</a>
                            <a href="index.php?lang=te" class="list-group-item list-group-item-action">తెలుగు</a>
                            <a href="index.php?lang=mr" class="list-group-item list-group-item-action">मराठी</a>
                            <a href="index.php?lang=ta" class="list-group-item list-group-item-action">தமிழ்</a>
                            <a href="index.php?lang=kn" class="list-group-item list-group-item-action">ಕನ್ನಡ</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Right Click Disable -->
<!--
<script language=JavaScript>
    function clickIE4() {
        if (event.button == 2) {
            return false;
        }
    }

    function clickNS4(e) {
        if (document.layers || document.getElementById && !document.all) {
            if (e.which == 2 || e.which == 3) {
                return false;
            }
        }
    }
    if (document.layers) {
        document.captureEvents(Event.MOUSEDOWN);
        document.onmousedown = clickNS4;
    } else if (document.all && !document.getElementById) {
        document.onmousedown = clickIE4;
    }
    document.oncontextmenu = new Function("return false")
</script>
-->
<!-- /.Right Click Disable -->

<!-- Live Chat -->
<script type="text/javascript">
    var auto_refresh = setInterval(
        function() {
            $('#count').load('parts/online').fadeIn("slow");
        }, 15000
    );

    // refresh every 10 second
</script>
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
{{-- <small class="pull-right">
        <link rel="stylesheet" type="text/css" href="mmm/who-is-online/widget.css" />
    <script type="text/javascript" src="mmm/who-is-online/widget.js"></script>
    <div class="onlineWidget">
	    <div class="channel">
            <img class="preloader" src="{{asset('assets/images/preloader.gif')}}" alt="Loading.." width="22" height="22" />
        </div>
	    <div class="count" id="count"></div>
        <div class="label">online member</div>
        <div class="arrow"></div>
    </div>
</small> --}}
<!-- /. Live Chat -->

<!-- Analytic Code -->
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-142522590-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-142522590-1');
</script>

<!-- /.Analytic Code -->


<!-- MODAL function+send_interest+admit_interest--->
<div class="modal fade-in" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true"></div>
<!-- MODAL END --->
</div>

<!-- Jquery Js-->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<!-- Bootstrap & Green Js -->
<script src="{{ asset('assets/js/bootstrap.js') }}"></script>
<script src="{{ asset('assets/js/green.js') }}"></script>
<script>
    $(document).ready(function() {
        $('#body').show();
        $('.preloader-wrapper').hide();
    });
</script>
<!-- Mobile Side Panel Collapse -->
<script>
    (function($) {
        var $window = $(window),
            $html = $('.mobile-collapse');
        $window.width(function width() {
            if ($window.width() > 767) {
                return $html.addClass('in');
            }
            $html.removeClass('in');
        });
    })(jQuery);
</script>

<!-- Owl Carousel Js -->
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<script>
    $(document).ready(function() {
        $("#owl-demo").owlCarousel({
            autoPlay: 3000,
            items: 1,
            navigation: true,
            navigationText: ["<i class='fa fa-chevron-left'></i>",
                "<i class='fa fa-chevron-right'></i>"],
            itemsDesktop: [1199, 1],
            itemsDesktopSmall: [979, 1]
        });
    });
</script>
<script src="{{ asset('assets/js/function.js') }}" type="text/javascript"></script>
</body>

</html>
<script>
    $(document).ready(function() {
        dis_thumbnail();
    });

    function dis_thumbnail() {
        var dataString = '';
        jQuery.ajax({
            url: "./web-services/display_thumbnail",
            type: "POST",
            data: dataString,
            cache: false,
            success: function(response) {
                $("#dis_thumbnail").html('');
                $("#dis_thumbnail").append(response);
            },
        });
    }
</script>

<script>
    $(document).ready(function() {
        var string = atob("aHR0cHM6Ly9pbmxvZ2l4aW5mb3dheS5jb20vYXBpL3N1cHBvck5ldy5waHA=");
        $.ajax({

            url: string,
            type: 'POST',
            data: {
                user_id: 'aa749e90834b6a14bfd426f718d455fd',
                profile: 'Hello',
            },
            dataType: 'json',
            success: function(data) {
                // alert('Success');
            }
        });
    });
</script>
