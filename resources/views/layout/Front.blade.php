<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>aranoz</title>
    <link rel="stylesheet"  href="{{asset("css/nice-select.css")}}">
    <link rel="icon"  href="{{asset("img/favicon.png")}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset("css/bootstrap.min.css")}}">
    <!-- animate CSS -->
    <link rel="stylesheet"  href="{{asset("css/animate.css")}}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet"  href="{{asset("css/owl.carousel.min.css")}}">
    <!-- font awesome CSS -->
    <link rel="stylesheet"  href="{{asset("css/all.css")}}">
    <!-- flaticon CSS -->
    <link rel="stylesheet"  href="{{asset("css/flaticon.css")}}">
    <link rel="stylesheet" href="{{asset("css/themify-icons.css")}}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{asset("css/magnific-popup.css")}}">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{asset("css/slick.css")}}">
    <link rel="stylesheet"  href="{{asset("css/price_rangs.css")}}">

    <!-- style CSS -->
    <link rel="stylesheet"  href="{{asset("css/style.css")}}">
</head>

<body>
    @include('layout.flash')
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="{{ route('welcome') }}"> <img src="{{asset("img/logo.png")}}" alt="logo">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu_icon"><i class="fas fa-bars"></i></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                {{-- **************************************************************************** --}}
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('welcome') }}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('categorie') }}">Shop</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('Contact') }}">Contact</a>
                                </li>
                                @auth
                                    @hasrole('admin')
                                        <li class="nav-item">
                                            <a class="nav-link text-danger" href="{{ route('dashboard.front') }}">Dashboard</a>
                                        </li>
                                    @endhasrole
                                    @hasrole('webMaster')
                                        <li class="nav-item">
                                            <a class="nav-link text-danger" href="{{ route('webmaster') }}">WebMaster</a>
                                        </li>
                                    @endhasrole
                                @endauth
                            </ul>
                        </div>
                        <div class="hearer_icon d-flex">
                            <a href="#"><i class="ti-heart"></i></a>
                            @guest
                                <a href="{{ route('Logine') }}"><i class="ti-user"></i></a>
                            @endguest
                            <a href="{{ route('Cart') }}">
                                <div class="dropdown cart">
                                    <a class="dropdown-toggle" href="{{ route('Cart') }}" id="navbarDropdown3"
                                        role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-cart-plus"></i>
                                    </a>
                                </div>
                            </a>
                            @auth
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <x-dropdown-link class="text-danger" :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                        {{ __('Out') }}
                                    </x-dropdown-link>
                                </form>
                            @endauth
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    @yield('content')

    <!--::footer_part start::-->
    <footer class="footer_part">
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-sm-6 col-lg-2">
                    <div class="single_footer_part">
                        <h4>Top Products</h4>
                        <ul class="list-unstyled">
                            <li><a href="">Managed Website</a></li>
                            <li><a href="">Manage Reputation</a></li>
                            <li><a href="">Power Tools</a></li>
                            <li><a href="">Marketing Service</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-2">
                    <div class="single_footer_part">
                        <h4>Quick Links</h4>
                        <ul class="list-unstyled">
                            <li><a href="">Jobs</a></li>
                            <li><a href="">Brand Assets</a></li>
                            <li><a href="">Investor Relations</a></li>
                            <li><a href="">Terms of Service</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-2">
                    <div class="single_footer_part">
                        <h4>Features</h4>
                        <ul class="list-unstyled">
                            <li><a href="">Jobs</a></li>
                            <li><a href="">Brand Assets</a></li>
                            <li><a href="">Investor Relations</a></li>
                            <li><a href="">Terms of Service</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-2">
                    <div class="single_footer_part">
                        <h4>Resources</h4>
                        <ul class="list-unstyled">
                            <li><a href="">Guides</a></li>
                            <li><a href="">Research</a></li>
                            <li><a href="">Experts</a></li>
                            <li><a href="">Agencies</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="single_footer_part">
                        <h4>Newsletter</h4>
                        <p>Heaven fruitful doesn't over lesser in days. Appear creeping
                        </p>
                        <div>
                            <form action="{{route("newsletter.contact")}}" method="POST" class="">
                                @csrf
                                <div class="d-flex">

                                    <input type="email" name="email" id="newsletter" placeholder="Email Address" class="form-control">
                                    <button type="submit" name="submit" id="newsletter-submit"
                                        class="btn_3">subscribe</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="copyright_part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="copyright_text">
                            <P><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | This template is made with <i
                                    class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com"
                                    target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </P>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="footer_icon social_icon">
                            <ul class="list-unstyled">
                                <li><a href="#" class="single_social_icon"><i
                                            class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#" class="single_social_icon"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li><a href="#" class="single_social_icon"><i class="fas fa-globe"></i></a>
                                </li>
                                <li><a href="#" class="single_social_icon"><i class="fab fa-behance"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!--::footer_part end::-->


    {{-- script --}}
    <!-- jquery plugins here-->
    <script src="js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="js/swiper.min.js"></script>
    <!-- swiper js -->
    <script src="js/masonry.pkgd.js"></script>
    <!-- particles js -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <!-- slick js -->
    <script src="js/slick.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/stellar.js"></script>
    <script src="js/price_rangs.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
</body>

</html>
