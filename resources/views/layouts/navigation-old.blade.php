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
                                <li>
                                    <a href="{{route('profile.edit')}}">
                                        <i class="icon icon-user"> {{Auth::user()->name}}</i>
                                    </a>
                                </li>
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
                                    <img src="{{asset('assets/images/main-logo.png')}}" alt="logo">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-10 col-md-10">
                            <div class="navbar">

                                <div id="main-nav" class="stellarnav d-flex justify-content-end right">
                                    <ul class="menu-list">

                                        <li class="menu-item has-sub">
                                            <a href="{{route('home.index')}}" class="{{request()->routeIs('home.index') ? 'active' : ''}} item-anchor d-flex align-item-center"
                                                data-effect="Home">Home<i class="icon icon-chevron-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="index.html" class="{{request()->routeIs('home.index') ? 'active' : ''}} item-anchor">Home</a></li>
                                                <li><a href="home2.html" class="item-anchor">Home v2<span
                                                            class="text-primary"> (PRO)</span></a></li>
                                            </ul>
                                        </li>

                                        <li><a href="{{route('dashboard')}}" class="item-anchor {{request()->routeIs('dashboard') ? 'active' : ''}}" data-effect="About">About</a></li>

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

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                    <x-nav-link :href="route('home.index')" :active="request()->routeIs('home.index')">
                        {{ __('Home') }}
                    </x-nav-link>
                </div>

            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button
                            class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                        onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
