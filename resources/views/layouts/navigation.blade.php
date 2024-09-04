<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <header id="header">
        <div id="header-wrap">
            <nav class="secondary-nav border-bottom">
                <div class="container">
                    <div class="row d-flex align-items-center">
                        <div class="col-md-4 header-contact">
                            <p>Let's talk! <strong>+57 444 11 00 35</strong>
                            </p>
                        </div>
                        <div class="col-md-4 shipping-purchase text-center">
                            <p>Free shipping on a purchase value of $200</p>
                        </div>
                        <div class="col-md-4 col-sm-12 user-items">
                            <ul class="d-flex justify-content-end list-unstyled">

                                @if (Route::has('login'))
                                    @auth

                                        <li>
                                            <a href="{{ route('profile.edit') }}
                                            >
                                                <i class="icon icon-user"> {{ Auth::user()->name }}</i>
                                            </a>
                                        </li>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <li>
                                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                                    Logout
                                                </a>
                                            </li>
                                        </form>
                                    @else
                                        <li>
                                            <a href="{{ route('login') }}">
                                                <i class="icon icon-user">Login</i>
                                            </a>
                                        </li>
                                        @if (Route::has('register'))
                                            <li>
                                                <a href="{{ route('register') }}">
                                                    <i class="icon icon-user">Register</i>
                                                </a>
                                            </li>
                                        @endif
                                    @endauth
                                @endif


                                <li>
                                    <a href="cart.html">
                                        <i class="icon icon-shopping-cart"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="wishlist.html">
                                        <i class="icon icon-heart"></i>
                                    </a>
                                </li>
                                <li class="user-items search-item pe-3">
                                    <a href="#" class="search-button">
                                        <i class="icon icon-search"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
            <nav class="primary-nav padding-small">
                <div class="container">
                    <div class="row d-flex align-items-center">
                        <div class="col-lg-2 col-md-2">
                            <div class="main-logo">
                                <a href="index.html">
                                    <img src="{{ asset('assets/images/main-logo.png') }}" alt="logo">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-10 col-md-10">
                            <div class="navbar">

                                <div id="main-nav" class="stellarnav d-flex justify-content-end right">
                                    <ul class="menu-list">

                                        <li class="menu-item has-sub">
                                            <a href="{{ route('home.index') }}"
                                                class="{{ request()->routeIs('home.index') ? 'active' : '' }} item-anchor d-flex align-item-center"
                                                data-effect="Home">Home<i class="icon icon-chevron-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="index.html"
                                                        class="{{ request()->routeIs('home.index') ? 'active' : '' }} item-anchor">Home</a>
                                                </li>
                                                <li><a href="home2.html" class="item-anchor">Home v2<span
                                                            class="text-primary"> (PRO)</span></a></li>
                                            </ul>
                                        </li>

                                        <li><a href="{{ route('dashboard') }}"
                                                class="item-anchor {{ request()->routeIs('dashboard') ? 'active' : '' }}"
                                                data-effect="About">About</a></li>

                                        <li class="menu-item has-sub">
                                            <a href="shop.html" class="item-anchor d-flex align-item-center"
                                                data-effect="Shop">Shop<i class="icon icon-chevron-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="shop.html" class="item-anchor">Shop</a></li>
                                                <li><a href="shop-slider.html" class="item-anchor">Shop slider<span
                                                            class="text-primary"> (PRO)</span></a></li>
                                                <li><a href="shop-grid.html" class="item-anchor">Shop grid<span
                                                            class="text-primary"> (PRO)</span></a></li>
                                                <li><a href="shop-list.html" class="item-anchor">Shop list<span
                                                            class="text-primary"> (PRO)</span></a></li>
                                                <li><a href="single-product.html" class="item-anchor">Single
                                                        product<span class="text-primary"> (PRO)</span></a></li>
                                                <li><a href="cart.html" class="item-anchor">Cart<span
                                                            class="text-primary"> (PRO)</span></a></li>
                                                <li><a href="wishlist.html" class="item-anchor">Wishlist<span
                                                            class="text-primary"> (PRO)</span></a></li>
                                                <li><a href="checkout.html" class="item-anchor">Checkout<span
                                                            class="text-primary"> (PRO)</span></a></li>
                                            </ul>
                                        </li>

                                        <li class="menu-item has-sub">
                                            <a href="#" class="item-anchor d-flex align-item-center"
                                                data-effect="Pages">Pages<i class="icon icon-chevron-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="coming-soon.html" class="item-anchor">Coming soon<span
                                                            class="text-primary"> (PRO)</span></a></li>
                                                <li><a href="login.html" class="item-anchor">Login<span
                                                            class="text-primary"> (PRO)</span></a></li>
                                                <li><a href="faqs.html" class="item-anchor">FAQs<span
                                                            class="text-primary"> (PRO)</span></a></li>
                                                <li><a href="styles.html" class="item-anchor">Styles</a></li>
                                                <li><a href="thank-you.html" class="item-anchor">Thankyou</a></li>
                                                <li><a href="error.html" class="item-anchor">Error page<span
                                                            class="text-primary"> (PRO)</span></a></li>
                                            </ul>
                                        </li>

                                        <li class="menu-item has-sub">
                                            <a href="blog.html" class="item-anchor d-flex align-item-center"
                                                data-effect="Blog">Blog<i class="icon icon-chevron-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="blog.html" class="item-anchor">Blog</a></li>
                                                <li><a href="blog-sidebar.html" class="item-anchor">Blog with
                                                        sidebar<span class="text-primary"> (PRO)</span></a></li>
                                                <li><a href="blog-masonry.html" class="item-anchor">Blog masonry<span
                                                            class="text-primary"> (PRO)</span></a></li>
                                                <li><a href="single-post.html" class="item-anchor">Single post</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li><a href="contact.html" class="item-anchor"
                                                data-effect="Contact">Contact</a></li>

                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
</nav>
