<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/normalize.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/icomoon/icomoon.css') }}">
    <link rel="stylesheet" type="text/css" media="all"
        href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendor.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- script
    ================================================== -->
    <script src="{{ asset('assets/js/modernizr.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-1.11.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>


</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @isset($header)
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endisset

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>

        {{-- Footer --}}
        

        
    </div>
    <footer id="footer">
        <div class="container">
            <div class="footer-menu-list">
                <div class="row d-flex flex-wrap justify-content-between">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer-menu">
                            <h5 class="widget-title">Ultras</h5>
                            <ul class="menu-list list-unstyled">
                                <li class="menu-item">
                                    <a href="about.html">About us</a>
                                </li>
                                <li class="menu-item">
                                    <a href="#">Conditions </a>
                                </li>
                                <li class="menu-item">
                                    <a href="blog.html">Our Journals</a>
                                </li>
                                <li class="menu-item">
                                    <a href="#">Careers</a>
                                </li>
                                <li class="menu-item">
                                    <a href="#">Affiliate Programme</a>
                                </li>
                                <li class="menu-item">
                                    <a href="#">Ultras Press</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer-menu">
                            <h5 class="widget-title">Customer Service</h5>
                            <ul class="menu-list list-unstyled">
                                <li class="menu-item">
                                    <a href="faqs.html">FAQ</a>
                                </li>
                                <li class="menu-item">
                                    <a href="contact.html">Contact</a>
                                </li>
                                <li class="menu-item">
                                    <a href="#">Privacy Policy</a>
                                </li>
                                <li class="menu-item">
                                    <a href="#">Returns & Refunds</a>
                                </li>
                                <li class="menu-item">
                                    <a href="#">Cookie Guidelines</a>
                                </li>
                                <li class="menu-item">
                                    <a href="#">Delivery Information</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer-menu">
                            <h5 class="widget-title">Contact Us</h5>
                            <p>Do you have any questions or suggestions? <a href="#"
                                    class="email">ourservices@ultras.com</a>
                            </p>
                            <p>Do you need assistance? Give us a call. <br>
                                <strong>+57 444 11 00 35</strong>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer-menu">
                            <h5 class="widget-title">Forever 2018</h5>
                            <p>Cras mattis sit ornare in metus eu amet adipiscing enim. Ullamcorper in orci,
                                ultrices integer eget arcu. Consectetur leo dignissim lacus, lacus sagittis
                                dictumst.</p>
                            <div class="social-links">
                                <ul class="d-flex list-unstyled">
                                    <li>
                                        <a href="#">
                                            <i class="icon icon-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon icon-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon icon-youtube-play"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon icon-behance-square"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
    </footer>
    <div id="footer-bottom">
        <div class="container">
            <div class="d-flex align-items-center flex-wrap justify-content-between">
                <div class="copyright">
                    <p>Freebies by <a href="https://templatesjungle.com/">Templates Jungle</a> Distributed by <a
                            href="https://themewagon.com">ThemeWagon</a>
                    </p>
                </div>
                <div class="payment-method">
                    <p>Payment options :</p>
                    <div class="card-wrap">
                        <img src="{{asset('assets/images/visa-icon.jpg')}}" alt="visa">
                        <img src="{{asset('assets/images/mastercard.png')}}" alt="mastercard">
                        <img src="{{asset('assets/images/american-express.jpg')}}" alt="american-express">
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
