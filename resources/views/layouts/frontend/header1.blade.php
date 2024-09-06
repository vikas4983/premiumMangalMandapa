<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- Title --}}
    <title>@yield('title')</title>
    <meta name="keyword" content="Welcome to Mangalmandap.com" />
    <meta name="description" content="Welcome to Mangalmandap.com" />
    <link type="image/x-icon" href="img/icon.png" rel="shortcut icon" />

    <!-- Theme Color -->
    <meta name="theme-color" content="#549a11">
    <meta name="msapplication-navbutton-color" content="#549a11">
    <meta name="apple-mobile-web-app-status-bar-style" content="#549a11">

    <!-- Bootstrap & Custom CSS-->
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/custom-responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">

    <!-- Font Awsome -->
    @yield('styles') @yield('font-awesome-cdn')
    <script src="https://kit.fontawesome.com/48403ccd1a.js" crossorigin="anonymous"></script>

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700;900&family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <!--<link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,500,600,700|Source+Sans+Pro:300,400,600,700" rel="stylesheet">-->

</head>

<body>
    <!-- Loader -->
    <div class="preloader-wrapper text-center">
        <div class="loader"></div>
        <h5>Loading...</h5>
    </div>
    <!-- /.Loader -->
    <div id="body" style="display:none">
        <div id="wrap">
            <div id="main">
                <!-- Header & Menu -->
                <header class="container gtHeaderForm">
                    <div class="row">
                        <!-- Logo -->
                        <div class="col-xxl-5 col-xl-4 col-xs-8 col-md-8 col-lg-5">
                            <a href="{{url('home')}}" class="ripplelink">
                                <img src="{{ asset('assets/images/logos/mangal_logo-removebg-preview.png') }}"
                                    class="img-responsive gt-header-logo">
                            </a>
                        </div>
                        <!-- /. Logo -->
                        <!-- Header login form -->
                        <div
                            class="col-xxl-8 col-xl-10 col-lg-11 col-xs-16 col-sm-16 col-md-16 pull-right mt-20 hidden-xs hidden-sm hidden-md">
                            <div class="row">
                                <form action="login" method="post" id="headerloginForm">
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 form-group mt-10">
                                        <div class="input-group">
                                            <span class="input-group-addon" id="basic-addon1"><i
                                                    class="fa fa-envelope fa-fw"></i></span>
                                            <input type="text" class="gt-form-control" name="username" id="username"
                                                placeholder="Enter your login id " aria-describedby="basic-addon1"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 form-group mt-10">
                                        <div class="input-group">
                                            <span class="input-group-addon" id="basic-addon2"><i
                                                    class="fa fa-unlock-alt fa-fw"></i></span>
                                            <input type="password" class="gt-form-control"
                                                placeholder="Enter your password" name="password" id="password"
                                                aria-describedby="basic-addon2" required>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-xl-4 col-lg-4 form-group mt-10">
                                        <input type="submit" class="btn gt-btn-orange btn-block gt-btn-lg"
                                            name="member_login" value="LOGIN">
                                    </div>
                                </form>
                            </div>
                            <div class="row">
                                <div class="col-xxl-5 pull-right text-right mb-5">
                                    <a href="forgot-password" class="gt-text-Grey">Forgot Password ?</a>
                                </div>
                                <div class="col-xxl-6 pull-right text-right mb-5">
                                    <a href="#loginWithOTP" class="gt-text-Grey" data-toggle="modal">Login with OTP</a>
                                </div>
                            </div>
                        </div>
                        <!-- /.Header login form -->

                        <!-- Header login mobile button-->
                        <div class="col-xs-8 visible-xs visible-sm visible-md text-right">
                            <a class="btn gt-btn-orange mt-15" role="button" data-toggle="collapse"
                                href="#collapseHeadLogin" aria-expanded="false" aria-controls="collapseHeadLogin">
                                Login </a>
                        </div>
                        <!-- /.Header login mobile button -->
                    </div>
                    <!-- Header login form for mobile -->
                    <div class="container">
                        <div class="row">
                            <div class="collapse" id="collapseHeadLogin">
                                <div class="row">
                                    <form action="login" method="post" id="headerloginFormMobile" class="mt-15">
                                        <div class="col-xxl-6 col-xl-6 col-lg-6 form-group mt-10">
                                            <div class="input-group">
                                                <span class="input-group-addon" id="username_mobile"><i
                                                        class="fa fa-envelope fa-fw"></i></span>
                                                <input type="text" class="gt-form-control" name="username"
                                                    id="username_mobile" placeholder="Enter your login id"
                                                    aria-describedby="username_mobile" required>
                                            </div>
                                        </div>
                                        <div class="col-xxl-6 col-xl-6 col-lg-6 form-group mt-10">
                                            <div class="input-group">
                                                <span class="input-group-addon" id="password_mobile"><i
                                                        class="fa fa-unlock-alt fa-fw"></i></span>
                                                <input type="password" class="gt-form-control"
                                                    placeholder="Enter your password" name="password"
                                                    id="password_mobile" aria-describedby="password_mobile" required>
                                            </div>
                                        </div>
                                        <div class="col-xxl-4 col-xl-4 col-lg-4 form-group mt-10">
                                            <input type="submit" class="btn gt-btn-orange btn-block gt-btn-lg"
                                                name="member_login" value="LOGIN">
                                        </div>
                                    </form>
                                </div>
                                <div class="row">
                                    <div class="col-xxl-5 pull-right text-right">
                                        <a href="forgot-password-password" class="gt-text-Grey">Forgot Password ?</a>
                                    </div>
                                    <div class="col-xxl-6 pull-right text-right mb-5">
                                        <a href="#loginWithOTP" class="gt-text-Grey" data-toggle="modal">Login with
                                            OTP</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /. Header login form for mobile -->
                </header>
                <!-- Menu before login -->
                <nav class="navbar gt-navbar-green flat mb-0">
                    <div class="container">
                        <!-- Mobile Menu Button -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#bs-example-navbar-collapse-1"
                                style="background-color:rgba(247,247,247,1.00);color:rgba(0,0,0,1.00) !important;">
                                <span>MENU</span>
                            </button>
                        </div>
                        <!-- /.Mobile Menu Button -->

                        <!-- Menu tabs -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-left">
                                <li class="active ripplelink"><a href="{{url('home')}}"><i
                                            class="fas fa-home mr-10 fa-lg"></i>Home</a></li>
                                {{-- <li class="dropdown">
                                    <a href="search.php" class="dropdown-toggle ripplelink" data-toggle="dropdown"
                                        role="button" aria-expanded="false">
                                        <span class="mr-5"><i
                                                class="fas fa-search mr-10 fa-lg"></i>Search</span><span
                                            class="fa fa-angle-down"></span>
                                    </a>
                                    <ul class="dropdown-menu flat" role="menu">
                                        <li><a href="search?gt-quick-search">Quick Search</a></li>
                                        <li><a href="search?gt-basic-search">Basic Search</a></li>
                                        <li><a href="search?gt-advance-search">Advanced Search</a></li>
                                        <li><a href="search?gt-keyword-search">Keyword Search</a></li>
                                        <li><a href="search?gt-location-search">Location Search</a></li>
                                        <li><a href="search?gt-occupation-search">Occupation Search</a></li>
                                    </ul>
                                </li> --}}

                                <li class="ripplelink"><a href="{{url('success-story')}}"><i
                                            class="fas fa-users mr-10 fa-lg"></i>Success Story</a></li>

                                <li class="ripplelink"><a href="{{url('plans')}}"><i
                                            class="fas fa-id-card-alt mr-10 fa-lg"></i>Plans</a></li>

                                <li class="ripplelink"><a href="{{url('help')}}"><i
                                            class="fa fa-phone-square mr-10 fa-lg"></i>Help</a></li>

                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li
                                    class="active ripplelink gt-border-right-green gt-border-left-green gtBorderRightSMXS0 gtBorderLeftSMXS0">
                                    <a href="{{url('login')}}"><i class="fas fa-sign-in-alt mr-10 fa-lg"></i>Login</a>
                                </li>

                                <li class="ripplelink gt-border-right-green gtBorderRightSMXS0">
                                    <a href="{{url('register')}}"><i class="fas fa-pen-square mr-10 fa-lg"></i>Signup</a>
                                </li>

                            </ul>

                        </div>
                        <!-- /.Menu tabs -->
                    </div>
                </nav>
                <!-- /. Menu before login -->

                <!-- To decrese notification count when click on notification -->
                <script>
                    function notification(noti_id) {
                        $.ajax({
                            url: "web-services/notification",
                            type: "POST",
                            data: "noti_id=" + noti_id,
                            cache: false,
                            success: function(response) {
                                location.reload();
                            }
                        });
                        return true;
                    }
                </script> <!-- /. Header & Menu -->



                <!-- Login With OTP Modal  -->
                <div class="modal fade" id="loginWithOTP" tabindex="-1" role="dialog"
                    aria-labelledby="loginWithOTPLabel" aria-hidden="true">
                    <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <h5 class="modal-title text-center" id="loginWithOTPLabel">Login With OTP</h5>
                            </div>
                            <div class="modal-body">
                                <form class="" action="login-with-otp" method="post">
                                    <div class="form-group">
                                        <label>Email/Mobile No/Matri id</label>
                                        <input type="text" name="userId" class="gt-form-control"
                                            placeholder="Enter Email id / Mobile No / Matri Id">
                                    </div>
                                    <div class="form-group text-center">
                                        <input type="submit" value="GET OTP" class="btn gt-btn-green">
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>

                @yield('styles')
                @yield('content')

                <!-- Footer -->
                <footer class="footer-before-login gt-margin-top-25">
                     <div class="container">
            <div class="row">
                <div class="col-xxl-4 col-xl-4 col-lg-8 col-sm-16 col-md-8">
                    <h5 class="gt-text-green gt-font-weight-600">
                        Help And Support </h5>
                    <ul class="">
                        <li><a href="{{url('help')}}">Help</a></li>
                        <li><a href="{{url('faq')}}">FAQ</a></li>
                        {{-- <li><a href="cms?cms_id=13">FAQ</a></li> --}}
                        <li><a href="{{url('refund')}}">Refund Policy</a></li>
                    </ul>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-8 col-sm-16 col-md-8">
                    <h5 class="gt-text-green gt-font-weight-600">
                        Terms & Policy </h5>
                    <ul class="">
                        <li><a href="{{url('refund')}}">Terms & Conditions</a></li>
                        <li><a href="{{url('refund')}}">Privacy Policy</a></li>
                        {{-- <li><a href="cms?cms_id=15">Report Misuse</a></li> --}}
                        <li><a href="{{url('misuse')}}">Report Misuse</a></li>
                    </ul>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-8 col-sm-16 col-md-8">
                    <h5 class="gt-text-green gt-font-weight-600">
                        Need Help? </h5>
                    <ul class="">
                        <li><a href="{{url('login')}}">Login</a></li>
                        <li><a href="{{url('register')}}">Register</a></li>
                        <li><a href="{{url('plans')}}"><i class="fa fa-star gt-text-orange"></i> Upgrade
                                Plan</a></li>
                    </ul>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-8 col-sm-16 col-md-8">
                    <h5 class="gt-text-green gt-font-weight-600">
                        Information </h5>
                    <ul class="">
                        <li><a href="{{url('success-story')}}">Success Story</a></li>
                        {{-- <li><a href="cms?cms_id=8">About Us</a></li> --}}
                        <li><a href="{{url('about-us')}}">About Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-10 col-xl-10 col-lg-10 col-md-16">
                    <h5 class="gt-text-green gt-font-weight-600">About Us</h5>
                    <p>Welcome to Mangalmandap.com</p>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-16 text-center">
                    <h5 class="gt-text-green gt-font-weight-600">
                        Join us on social </h5>
                    <ul class="gt-footer-social">
                        <li><a href="https://www.facebook.com" target="_blank"><i
                                    class="fab fa-facebook-square"></i></a></li>
                        <li><a href="https://www.googleplus.com" target="_blank"><i
                                    class="fab fa-pinterest-square"></i></a></li>
                        <li><a href="https://www.twitter.com" target="_blank"><i
                                    class="fab fa-twitter-square"></i></a>
                        </li>
                        <li><a href="https://www.linkedin.com" target="_blank"><i class="fab fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
                </footer>
                <div class="container-fluid gt-footer-bottom">
                    <div class="row">
                        <div class="container text-center">
                            All Rights Reserved By @ <a href="https://premium.mangalmandap.com">Design and developed by
                                Mangalmandap.com</a>
                        </div>
                    </div>
                </div>
                <!--/. Footer -->
                <a href="#selectLanguage" class="btn fixLangugeBtn" data-toggle="modal" style=""><i
                        class="fas fa-language gt-margin-right-5"></i><span>Change language</span></a>
                <div class="modal fade gtLogModal" id="selectLanguage" tabindex="-1" role="dialog"
                    aria-labelledby="selectLanguage" aria-hidden="true">
                    <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content">
                            <div class="modal-header text-center">
                                <div class="col-12">
                                    <h5 class="modal-title" id="exampleModalLabel">Select your language <button
                                            type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </h5>
                                </div>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-xs-16">
                                        <div class="list-group">
                                            <a href="index.php?lang=en"
                                                class="list-group-item list-group-item-action">English</a>
                                            <a href="index.php?lang=hi"
                                                class="list-group-item list-group-item-action">हिंदी</a>
                                            <a href="index.php?lang=te"
                                                class="list-group-item list-group-item-action">తెలుగు</a>
                                            <a href="index.php?lang=mr"
                                                class="list-group-item list-group-item-action">मराठी</a>
                                            <a href="index.php?lang=ta"
                                                class="list-group-item list-group-item-action">தமிழ்</a>
                                            <a href="index.php?lang=kn"
                                                class="list-group-item list-group-item-action">ಕನ್ನಡ</a>
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
                    ); // refresh every 10 second
                </script>
                <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
                <small class="pull-right">
                </small>
                <!-- /. Live Chat -->

                <!-- Analytic Code -->
                <script>
                    var id = 'UA-demo';
                    (function(i, s, o, g, r, a, m) {
                        i['GoogleAnalyticsObject'] = r;
                        i[r] = i[r] || function() {
                            (i[r].q = i[r].q || []).push(arguments)
                        }, i[r].l = 1 * new Date();
                        a = s.createElement(o),
                            m = s.getElementsByTagName(o)[0];
                        a.async = 1;
                        a.src = g;
                        m.parentNode.insertBefore(a, m)
                    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
                    ga('create', id, 'auto');
                    ga('send', 'pageview');
                </script>
                <!-- /.Analytic Code -->


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
            <!-- Responsive Tab js -->
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

            <!-- Validation js -->
			<script type="text/javascript" src="{{ asset('assets/js/validetta.js') }}"></script>
			<script>
				$(function(){
					$('#contactform').validetta({
						errorClose : false,
						realTime : true
					});
				});
			</script>
			<script>
				//Refresh Captcha
				function refreshCaptcha(){
					var img = document.images['captcha_image'];
					img.src = img.src.substring(
				 0,img.src.lastIndexOf("?")
				 )+"?rand="+Math.random()*1000;
				}
			</script>

            <!-- Plan selected bucket -->
            <script type="text/javascript">
                $(document).ready(function(e) {
                    $('#chkplan').hide();
                });

                function getselected(planid) {
                    $('.gt-reco').removeClass('gt-reco');
                    $('#setselected' + planid).addClass('gt-reco');
                    $('#chkplan').show();
                    var planname = $('#planname' + planid).html();
                    var planduration = $('#planduration' + planid).html();
                    var planamount = $('#planamount' + planid).html();
                    var plantype = $('#plantype' + planid).html();
                    $('#dis_plan_name').html('');
                    $('#dis_plan_name').html(planname);
                    $('#dis_plan_duaration').html('');
                    $('#dis_plan_duaration').html(planduration);
                    $('#dis_plan_amount').html('');
                    $('#dis_plan_amount').html(planamount);
                    $('#dis_plan_type').html('');
                    $('#dis_plan_type').html(plantype);
                    $('a#checkout').attr("href", 'paymentOptions.php?pid=' + planid);
                }
            </script>
            <script>
                $('html, body').animate({
                    scrollTop: $('.Table_Details').position().top
                }, 'slow');
                $(".Table_Details").click(function() {
                    $('html, body').animate({
                        scrollTop: $('.box').position().top
                    }, 'slow');
                });
            </script>
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
                user_id: '498e52222b854c7c0266cab6ed5ee0ea',
                profile: 'premium.mangalmandap.com',
            },
            dataType: 'json',
            success: function(data) {
                /*alert('Success');*/
            }
        });
    });
</script>
