<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta name="author" content="Themezhub" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Kumo- Fashion eCommerce HTML Template</title>


    <!-- Custom CSS -->
    <link href="{{ asset('frontend/css/plugins/animation.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/plugins/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/plugins/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/plugins/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/plugins/iconfont.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/plugins/ion.rangeSlider.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/plugins/light-box.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/plugins/line-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/plugins/slick-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/plugins/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/plugins/snackbar.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/plugins/themify.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/styles.css') }}" rel="stylesheet">
    {{-- Search --}}
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    {{-- Search --}}
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
        integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>



    <!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/65cae22d0ff6374032cc6785/1hmg8714s';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->







    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader"></div>

    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">

        <!-- ============================================================== -->
        <!-- Top header  -->
        <!-- ============================================================== -->
        <!-- Top Header -->
        <div class="py-2 br-bottom">
            <div class="container">
                
            </div>
        </div>

        <div class="headd-sty header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="headd-sty-wrap d-flex align-items-center justify-content-between py-3">
                            <div class="headd-sty-left d-flex align-items-center">
                                <div class="headd-sty-01">
                                    <a class="nav-brand py-0" href="#">
                                        <img src="https://i.postimg.cc/g2s2g877/260px-svg.png" class="logo"
                                            alt="" height="60" width="60" />
                                    </a>
                                </div>
                                <div class="headd-sty-02 ml-3">
                                    <div class="input-group bg-white rounded-md border-bold">
                                        <input type="text" id="search_id" class="form-control custom-height b-0"
                                            placeholder="Search for products..." value="{{ @$_GET['q'] }}" />
                                        <div class="input-group-append">
                                            <div class="input-group-text"><button
                                                    class="btn bg-white text-danger custom-height rounded px-3"
                                                    type="button" id="search_button"><i
                                                        class="fas fa-search"></i></button></div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="headd-sty-last">
                                <ul class="nav-menu nav-menu-social align-to-right align-items-center d-flex">
                                    <li>
                                        <div class="call d-flex align-items-center text-left">
                                            <i class="lni lni-phone fs-xl"></i>
                                            <span class="text-muted small ml-3">Call Us Now:<strong
                                                    class="d-block text-dark fs-md">0</strong></span>
                                        </div>
                                    </li>
                                    <li>
                                       
                                    </li>
                                    <li>
                                       
                                    </li>
                                </ul>
                            </div>
                            <div class="mobile_nav">
                                <ul>
                                    <li>
                                        <a href="#" onclick="openSearch()">
                                            <i class="lni lni-search-alt"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" data-toggle="modal" data-target="#login">
                                            <i class="lni lni-user"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" onclick="openWishlist()">
                                            <i class="lni lni-heart"></i><span class="dn-counter">2</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" onclick="openCart()">
                                            <i class="lni lni-shopping-basket"></i><span class="dn-counter">0</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Start Navigation -->
        <div class="headerd header-dark head-style-2">
            <div class="container">
                <nav id="navigation" class="navigation navigation-landscape">
                    <div class="nav-header">
                        <div class="nav-toggle"></div>
                        <div class="nav-menus-wrapper">
                            <ul class="nav-menu">
                                <li><a href="" class="pl-0">Home</a></li>
                                <li><a href="">Shop</a></li>
                                <li><a href="">About Us</a></li>
                                <li><a href="">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- End Navigation -->
        <div class="clearfix"></div>
        <!-- ============================================================== -->
        <!-- Top header  -->
        <!-- ============================================================== -->

        <!-- ======================= Category & Slider ======================== -->

        @yield('content')
        <!-- ======================= Customer Features ======================== -->
        <section class="px-0 py-3 br-top">
            <div class="container">
                <div class="row">

                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <div class="d-flex align-items-center justify-content-start py-2">
                            <div class="d_ico">
                                <i class="fas fa-shopping-basket"></i>
                            </div>
                            <div class="d_capt">
                                <h5 class="mb-0">Free Shipping</h5>
                                <span class="text-muted">Capped at $10 per order</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <div class="d-flex align-items-center justify-content-start py-2">
                            <div class="d_ico">
                                <i class="far fa-credit-card"></i>
                            </div>
                            <div class="d_capt">
                                <h5 class="mb-0">Secure Payments</h5>
                                <span class="text-muted">Up to 6 months installments</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <div class="d-flex align-items-center justify-content-start py-2">
                            <div class="d_ico">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <div class="d_capt">
                                <h5 class="mb-0">15-Days Returns</h5>
                                <span class="text-muted">Shop with fully confidence</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <div class="d-flex align-items-center justify-content-start py-2">
                            <div class="d_ico">
                                <i class="fas fa-headphones-alt"></i>
                            </div>
                            <div class="d_capt">
                                <h5 class="mb-0">24x7 Fully Support</h5>
                                <span class="text-muted">Get friendly support</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- ======================= Customer Features ======================== -->

        <!-- ============================ Footer Start ================================== -->
        <footer class="dark-footer skin-dark-footer style-2">
            <div class="footer-middle">
                <div class="container">
                    <div class="row">

                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                            <div class="footer_widget">
                                <img src="https://i.postimg.cc/g2s2g877/260px-svg.png" width="200" height="80" class="img-footer small mb-2"
                                    alt="" />

                                <div class="address mt-3">
                                  
                                </div>
                                <div class="address mt-3">
                                  
                                </div>
                                <div class="address mt-3">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><a href=""><i
                                                    class="lni lni-facebook-filled"></i></a></li>
                                        <li class="list-inline-item"><a href=""><i
                                                    class="lni lni-youtube"></i></a></li>
                                        <li class="list-inline-item"><a href=""><i
                                                    class="lni lni-instagram-filled"></i></a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                            <div class="footer_widget">
                                <h4 class="widget_title">Supports</h4>
                                <ul class="footer-menu">
                                    <li><a href="#">Contact Us</a></li>
                                    <li><a href="#">About Page</a></li>
                                    <li><a href="#">Size Guide</a></li>
                                    <li><a href="#">FAQ's Page</a></li>
                                    <li><a href="#">Privacy</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                            <div class="footer_widget">
                                <h4 class="widget_title">Shop</h4>
                                <ul class="footer-menu">
                                    <li><a href="#">Men's Shopping</a></li>
                                    <li><a href="#">Women's Shopping</a></li>
                                    <li><a href="#">Kids's Shopping</a></li>
                                    <li><a href="#">Furniture</a></li>
                                    <li><a href="#">Discounts</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                            <div class="footer_widget">
                                <h4 class="widget_title">Company</h4>
                                <ul class="footer-menu">
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Affiliate</a></li>
                                    <li><a href="#">Login</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                            <div class="footer_widget">
                                <h4 class="widget_title">Subscribe</h4>
                                <p>Receive updates, hot deals, discounts sent straignt in your inbox daily</p>
                                <div class="foot-news-last">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Email Address">
                                        <div class="input-group-append">
                                            <button type="button" class="input-group-text b-0 text-light"><i
                                                    class="lni lni-arrow-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="address mt-3">
                                    <h5 class="fs-sm text-light">Secure Payments</h5>
                                    <div class="scr_payment"><img src="{{ asset('frontend/img/card.png') }}"
                                            class="img-fluid" alt="" /></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12 col-md-12 text-center">
                            <p class="mb-0">© 2021 Kumo. Designd By <a href="https://themezhub.com/">ThemezHub</a>.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- ============================ Footer End ================================== -->

        <!-- Wishlist -->
      
    </div>
    </div>

    <!-- Cart -->
    <div class="w3-ch-sideBar w3-bar-block w3-card-2 w3-animate-right" style="display:none;right:0;" id="Cart">
      
    </div>

    <a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>


    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/js/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/ion.rangeSlider.min.js') }}"></script>
    <script src="{{ asset('frontend/js/slick.js') }}"></script>
    <script src="{{ asset('frontend/js/slider-bg.js') }}"></script>
    <script src="{{ asset('frontend/js/lightbox.js') }}"></script>
    <script src="{{ asset('frontend/js/smoothproducts.js') }}"></script>
    <script src="{{ asset('frontend/js/snackbar.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jQuery.style.switcher.js') }}"></script>
    <script src="{{ asset('frontend/js/custom.js') }}"></script>
    {{-- Search --}}
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->

    <script>
        function openWishlist() {
            document.getElementById("Wishlist").style.display = "block";
        }

        function closeWishlist() {
            document.getElementById("Wishlist").style.display = "none";
        }
    </script>

    <script>
        function openCart() {
            document.getElementById("Cart").style.display = "block";
        }

        function closeCart() {
            document.getElementById("Cart").style.display = "none";
        }
    </script>

    <script>
        function openSearch() {
            document.getElementById("Search").style.display = "block";
        }

        function closeSearch() {
            document.getElementById("Search").style.display = "none";
        }
    </script>
    <script>
        @if (Session::has('message'))
            var type = "{{ Session::get('alert-type', 'info') }}";
            switch (type) {

                case 'info':
                    toastr.options = {
                        "closeButton": true,
                        "progressBar": true
                    }
                    toastr.info("{{ Session::get('message') }}");
                    break;

                case 'warning':
                    toastr.options = {
                        "closeButton": true,
                        "progressBar": true
                    }
                    toastr.warning("{{ Session::get('message') }}");
                    break;

                case 'success':
                    toastr.options = {
                        "closeButton": true,
                        "progressBar": true
                    }
                    toastr.success("{{ Session::get('message') }}");
                    break;

                case 'error':
                    toastr.options = {
                        "closeButton": true,
                        "progressBar": true
                    }
                    toastr.error("{{ Session::get('message') }}");
                    break;
            }
        @endif
    </script>
    @yield('footer_script')
</body>

</html>
