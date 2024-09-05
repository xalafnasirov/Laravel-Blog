<x-app-layout>

    {{-- <x-slot name="header"> 
        Home page
    </x-slot> --}}

    {{-- BILLBOARD --}}
    <section id="billboard" class="overflow-hidden">

        <button class="button-prev">
            <i class="icon icon-chevron-left"></i>
        </button>
        <button class="button-next">
            <i class="icon icon-chevron-right"></i>
        </button>
        <div class="swiper main-swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide"
                    style="background-image: url({{ asset('assets/images/banner1.jpg') }});background-repeat: no-repeat;background-size: cover;background-position: center;">
                    <div class="banner-content">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <h2 class="banner-title">Summer Collection</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu feugiat amet,
                                        libero ipsum enim pharetra hac.</p>
                                    <div class="btn-wrap">
                                        <a href="shop.html" class="btn btn-light btn-medium d-flex align-items-center"
                                            tabindex="0">Shop it now <i class="icon icon-arrow-io"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide"
                    style="background-image: url({{ asset('assets/images/banner2.jpg') }});background-repeat: no-repeat;background-size: cover;background-position: center;">
                    <div class="banner-content">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <h2 class="banner-title">Casual Collection</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu feugiat amet,
                                        libero ipsum enim pharetra hac.</p>
                                    <div class="btn-wrap">
                                        <a href="shop.html"
                                            class="btn btn-light btn-light-arrow btn-medium d-flex align-items-center"
                                            tabindex="0">Shop it now <i class="icon icon-arrow-io"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- BEST SELLING PRODUCTS --}}
    <section id="selling-products" class="product-store bg-light-grey padding-large">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Best selling products</h2>
            </div>
            <ul class="tabs list-unstyled">
                <li data-tab-target="#all" class="active tab">All</li>
                <li data-tab-target="#shoes" class="tab">Shoes</li>
                <li data-tab-target="#tshirts" class="tab">Tshirts</li>
                <li data-tab-target="#pants" class="tab">Pants</li>
                <li data-tab-target="#hoodie" class="tab">Hoodie</li>
                <li data-tab-target="#outer" class="tab">Outer</li>
                <li data-tab-target="#jackets" class="tab">Jackets</li>
                <li data-tab-target="#accessories" class="tab">Accessories</li>
            </ul>
            <div class="tab-content">
                <div id="all" data-tab-content class="active">
                    <div class="row d-flex flex-wrap">
                        <div class="product-item col-lg-3 col-md-6 col-sm-6">
                            <div class="image-holder">
                                <img src="{{asset("assets/images/selling-products1.jpg")}}" alt="Books" class="product-image">
                            </div>
                            <div class="cart-concern">
                                <div class="cart-button d-flex justify-content-between align-items-center">
                                    <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to
                                        cart <i class="icon icon-arrow-io"></i>
                                    </button>
                                    <button type="button" class="view-btn tooltip
                          d-flex">
                                        <i class="icon icon-screen-full"></i>
                                        <span class="tooltip-text">Quick view</span>
                                    </button>
                                    <button type="button" class="wishlist-btn">
                                        <i class="icon icon-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-detail">
                                <h3 class="product-title">
                                    <a href="single-product.html">Half sleeve T-shirt</a>
                                </h3>
                                <div class="item-price text-primary">$40.00</div>
                            </div>
                        </div>
                        <div class="product-item col-lg-3 col-md-6 col-sm-6">
                            <div class="image-holder">
                                <img src="{{asset("assets/images/selling-products2.jpg")}}" alt="Books" class="product-image">
                            </div>
                            <div class="cart-concern">
                                <div class="cart-button d-flex justify-content-between align-items-center">
                                    <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to
                                        cart <i class="icon icon-arrow-io"></i>
                                    </button>
                                    <button type="button" class="view-btn tooltip
                          d-flex">
                                        <i class="icon icon-screen-full"></i>
                                        <span class="tooltip-text">Quick view</span>
                                    </button>
                                    <button type="button" class="wishlist-btn">
                                        <i class="icon icon-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-detail">
                                <h3 class="product-title">
                                    <a href="single-product.html">Stylish Grey T-shirt</a>
                                </h3>
                                <div class="item-price text-primary">$35.00</div>
                            </div>
                        </div>
                        <div class="product-item col-lg-3 col-md-6 col-sm-6">
                            <div class="image-holder">
                                <img src="{{asset("assets/images/selling-products3.jpg")}}" alt="Books" class="product-image">
                            </div>
                            <div class="cart-concern">
                                <div class="cart-button d-flex justify-content-between align-items-center">
                                    <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to
                                        cart <i class="icon icon-arrow-io"></i>
                                    </button>
                                    <button type="button" class="view-btn tooltip
                          d-flex">
                                        <i class="icon icon-screen-full"></i>
                                        <span class="tooltip-text">Quick view</span>
                                    </button>
                                    <button type="button" class="wishlist-btn">
                                        <i class="icon icon-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-detail">
                                <h3 class="product-title">
                                    <a href="single-product.html">Silk White Shirt</a>
                                </h3>
                                <div class="item-price text-primary">$35.00</div>
                            </div>
                        </div>
                        <div class="product-item col-lg-3 col-md-6 col-sm-6">
                            <div class="image-holder">
                                <img src="{{asset("assets/images/selling-products4.jpg")}}" alt="Books" class="product-image">
                            </div>
                            <div class="cart-concern">
                                <div class="cart-button d-flex justify-content-between align-items-center">
                                    <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to
                                        cart <i class="icon icon-arrow-io"></i>
                                    </button>
                                    <button type="button" class="view-btn tooltip
                          d-flex">
                                        <i class="icon icon-screen-full"></i>
                                        <span class="tooltip-text">Quick view</span>
                                    </button>
                                    <button type="button" class="wishlist-btn">
                                        <i class="icon icon-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-detail">
                                <h3 class="product-title">
                                    <a href="single-product.html">Grunge Hoodie</a>
                                </h3>
                                <div class="item-price text-primary">$30.00</div>
                            </div>
                        </div>
                        <div class="product-item col-lg-3 col-md-6 col-sm-6">
                            <div class="image-holder">
                                <img src="images/selling-products5.jpg" alt="Books" class="product-image">
                            </div>
                            <div class="cart-concern">
                                <div class="cart-button d-flex justify-content-between align-items-center">
                                    <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to
                                        cart <i class="icon icon-arrow-io"></i>
                                    </button>
                                    <button type="button" class="view-btn tooltip
                          d-flex">
                                        <i class="icon icon-screen-full"></i>
                                        <span class="tooltip-text">Quick view</span>
                                    </button>
                                    <button type="button" class="wishlist-btn">
                                        <i class="icon icon-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-detail">
                                <h3 class="product-title">
                                    <a href="single-product.html">Full sleeve Jeans jacket</a>
                                </h3>
                                <div class="item-price text-primary">$40.00</div>
                            </div>
                        </div>
                        <div class="product-item col-lg-3 col-md-6 col-sm-6">
                            <div class="image-holder">
                                <img src="images/selling-products6.jpg" alt="Books" class="product-image">
                            </div>
                            <div class="cart-concern">
                                <div class="cart-button d-flex justify-content-between align-items-center">
                                    <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to
                                        cart <i class="icon icon-arrow-io"></i>
                                    </button>
                                    <button type="button" class="view-btn tooltip
                          d-flex">
                                        <i class="icon icon-screen-full"></i>
                                        <span class="tooltip-text">Quick view</span>
                                    </button>
                                    <button type="button" class="wishlist-btn">
                                        <i class="icon icon-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-detail">
                                <h3 class="product-title">
                                    <a href="single-product.html">Grey Check Coat</a>
                                </h3>
                                <div class="item-price text-primary">$30.00</div>
                            </div>
                        </div>
                        <div class="product-item col-lg-3 col-md-6 col-sm-6">
                            <div class="image-holder">
                                <img src="images/selling-products7.jpg" alt="Books" class="product-image">
                            </div>
                            <div class="cart-concern">
                                <div class="cart-button d-flex justify-content-between align-items-center">
                                    <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to
                                        cart <i class="icon icon-arrow-io"></i>
                                    </button>
                                    <button type="button" class="view-btn tooltip
                          d-flex">
                                        <i class="icon icon-screen-full"></i>
                                        <span class="tooltip-text">Quick view</span>
                                    </button>
                                    <button type="button" class="wishlist-btn">
                                        <i class="icon icon-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-detail">
                                <h3 class="product-title">
                                    <a href="single-product.html">Long Sleeve T-shirt</a>
                                </h3>
                                <div class="item-price text-primary">$40.00</div>
                            </div>
                        </div>
                        <div class="product-item col-lg-3 col-md-6 col-sm-6">
                            <div class="image-holder">
                                <img src="images/selling-products8.jpg" alt="Books" class="product-image">
                            </div>
                            <div class="cart-concern">
                                <div class="cart-button d-flex justify-content-between align-items-center">
                                    <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to
                                        cart <i class="icon icon-arrow-io"></i>
                                    </button>
                                    <button type="button" class="view-btn tooltip
                          d-flex">
                                        <i class="icon icon-screen-full"></i>
                                        <span class="tooltip-text">Quick view</span>
                                    </button>
                                    <button type="button" class="wishlist-btn">
                                        <i class="icon icon-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-detail">
                                <h3 class="product-title">
                                    <a href="single-product.html">Half Sleeve T-shirt</a>
                                </h3>
                                <div class="item-price text-primary">$35.00</div>
                            </div>
                        </div>
                        <div class="product-item col-lg-3 col-md-6 col-sm-6">
                            <div class="image-holder">
                                <img src="images/selling-products13.jpg" alt="Books" class="product-image">
                            </div>
                            <div class="cart-concern">
                                <div class="cart-button d-flex justify-content-between align-items-center">
                                    <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to
                                        cart <i class="icon icon-arrow-io"></i>
                                    </button>
                                    <button type="button" class="view-btn tooltip
                          d-flex">
                                        <i class="icon icon-screen-full"></i>
                                        <span class="tooltip-text">Quick view</span>
                                    </button>
                                    <button type="button" class="wishlist-btn">
                                        <i class="icon icon-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-detail">
                                <h3 class="product-title">
                                    <a href="single-product.html">Orange white Nike</a>
                                </h3>
                                <div class="item-price text-primary">$55.00</div>
                            </div>
                        </div>
                        <div class="product-item col-lg-3 col-md-6 col-sm-6">
                            <div class="image-holder">
                                <img src="images/selling-products14.jpg" alt="Books" class="product-image">
                            </div>
                            <div class="cart-concern">
                                <div class="cart-button d-flex justify-content-between align-items-center">
                                    <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to
                                        cart <i class="icon icon-arrow-io"></i>
                                    </button>
                                    <button type="button" class="view-btn tooltip
                          d-flex">
                                        <i class="icon icon-screen-full"></i>
                                        <span class="tooltip-text">Quick view</span>
                                    </button>
                                    <button type="button" class="wishlist-btn">
                                        <i class="icon icon-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-detail">
                                <h3 class="product-title">
                                    <a href="single-product.html">Running Shoe</a>
                                </h3>
                                <div class="item-price text-primary">$65.00</div>
                            </div>
                        </div>
                        <div class="product-item col-lg-3 col-md-6 col-sm-6">
                            <div class="image-holder">
                                <img src="images/selling-products15.jpg" alt="Books" class="product-image">
                            </div>
                            <div class="cart-concern">
                                <div class="cart-button d-flex justify-content-between align-items-center">
                                    <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to
                                        cart <i class="icon icon-arrow-io"></i>
                                    </button>
                                    <button type="button" class="view-btn tooltip
                          d-flex">
                                        <i class="icon icon-screen-full"></i>
                                        <span class="tooltip-text">Quick view</span>
                                    </button>
                                    <button type="button" class="wishlist-btn">
                                        <i class="icon icon-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-detail">
                                <h3 class="product-title">
                                    <a href="single-product.html">Tennis Shoe</a>
                                </h3>
                                <div class="item-price text-primary">$80.00</div>
                            </div>
                        </div>
                        <div class="product-item col-lg-3 col-md-6 col-sm-6">
                            <div class="image-holder">
                                <img src="images/selling-products16.jpg" alt="Books" class="product-image">
                            </div>
                            <div class="cart-concern">
                                <div class="cart-button d-flex justify-content-between align-items-center">
                                    <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to
                                        cart <i class="icon icon-arrow-io"></i>
                                    </button>
                                    <button type="button" class="view-btn tooltip
                          d-flex">
                                        <i class="icon icon-screen-full"></i>
                                        <span class="tooltip-text">Quick view</span>
                                    </button>
                                    <button type="button" class="wishlist-btn">
                                        <i class="icon icon-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-detail">
                                <h3 class="product-title">
                                    <a href="single-product.html">Nike Brand Shoe</a>
                                </h3>
                                <div class="item-price text-primary">$65.00</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="shoes" data-tab-content>
                    <div class="row d-flex flex-wrap">
                        <div class="product-item col-lg-3 col-md-6 col-sm-6">
                            <div class="image-holder">
                                <img src="images/selling-products13.jpg" alt="Books" class="product-image">
                            </div>
                            <div class="cart-concern">
                                <div class="cart-button d-flex justify-content-between align-items-center">
                                    <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to
                                        cart <i class="icon icon-arrow-io"></i>
                                    </button>
                                    <button type="button" class="view-btn tooltip
                          d-flex">
                                        <i class="icon icon-screen-full"></i>
                                        <span class="tooltip-text">Quick view</span>
                                    </button>
                                    <button type="button" class="wishlist-btn">
                                        <i class="icon icon-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-detail">
                                <h3 class="product-title">
                                    <a href="single-product.html">Orange white Nike</a>
                                </h3>
                                <div class="item-price text-primary">$55.00</div>
                            </div>
                        </div>
                        <div class="product-item col-lg-3 col-md-6 col-sm-6">
                            <div class="image-holder">
                                <img src="images/selling-products14.jpg" alt="Books" class="product-image">
                            </div>
                            <div class="cart-concern">
                                <div class="cart-button d-flex justify-content-between align-items-center">
                                    <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to
                                        cart <i class="icon icon-arrow-io"></i>
                                    </button>
                                    <button type="button" class="view-btn tooltip
                          d-flex">
                                        <i class="icon icon-screen-full"></i>
                                        <span class="tooltip-text">Quick view</span>
                                    </button>
                                    <button type="button" class="wishlist-btn">
                                        <i class="icon icon-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-detail">
                                <h3 class="product-title">
                                    <a href="single-product.html">Running Shoe</a>
                                </h3>
                                <div class="item-price text-primary">$65.00</div>
                            </div>
                        </div>
                        <div class="product-item col-lg-3 col-md-6 col-sm-6">
                            <div class="image-holder">
                                <img src="images/selling-products15.jpg" alt="Books" class="product-image">
                            </div>
                            <div class="cart-concern">
                                <div class="cart-button d-flex justify-content-between align-items-center">
                                    <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to
                                        cart <i class="icon icon-arrow-io"></i>
                                    </button>
                                    <button type="button" class="view-btn tooltip
                          d-flex">
                                        <i class="icon icon-screen-full"></i>
                                        <span class="tooltip-text">Quick view</span>
                                    </button>
                                    <button type="button" class="wishlist-btn">
                                        <i class="icon icon-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-detail">
                                <h3 class="product-title">
                                    <a href="single-product.html">Tennis Shoe</a>
                                </h3>
                                <div class="item-price text-primary">$80.00</div>
                            </div>
                        </div>
                        <div class="product-item col-lg-3 col-md-6 col-sm-6">
                            <div class="image-holder">
                                <img src="images/selling-products16.jpg" alt="Books" class="product-image">
                            </div>
                            <div class="cart-concern">
                                <div class="cart-button d-flex justify-content-between align-items-center">
                                    <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to
                                        cart <i class="icon icon-arrow-io"></i>
                                    </button>
                                    <button type="button" class="view-btn tooltip
                          d-flex">
                                        <i class="icon icon-screen-full"></i>
                                        <span class="tooltip-text">Quick view</span>
                                    </button>
                                    <button type="button" class="wishlist-btn">
                                        <i class="icon icon-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-detail">
                                <h3 class="product-title">
                                    <a href="single-product.html">Nike Brand Shoe</a>
                                </h3>
                                <div class="item-price text-primary">$65.00</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tshirts" data-tab-content>
                    <div class="row d-flex flex-wrap">
                        <div class="product-item col-lg-3 col-md-6 col-sm-6">
                            <div class="image-holder">
                                <img src="images/selling-products3.jpg" alt="Books" class="product-image">
                            </div>
                            <div class="cart-concern">
                                <div class="cart-button d-flex justify-content-between align-items-center">
                                    <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to
                                        cart <i class="icon icon-arrow-io"></i>
                                    </button>
                                    <button type="button" class="view-btn tooltip
                          d-flex">
                                        <i class="icon icon-screen-full"></i>
                                        <span class="tooltip-text">Quick view</span>
                                    </button>
                                    <button type="button" class="wishlist-btn">
                                        <i class="icon icon-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-detail">
                                <h3 class="product-title">
                                    <a href="single-product.html">Silk White Shirt</a>
                                </h3>
                                <div class="item-price text-primary">$35.00</div>
                            </div>
                        </div>
                        <div class="product-item col-lg-3 col-md-6 col-sm-6">
                            <div class="image-holder">
                                <img src="images/selling-products8.jpg" alt="Books" class="product-image">
                            </div>
                            <div class="cart-concern">
                                <div class="cart-button d-flex justify-content-between align-items-center">
                                    <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to
                                        cart <i class="icon icon-arrow-io"></i>
                                    </button>
                                    <button type="button" class="view-btn tooltip
                          d-flex">
                                        <i class="icon icon-screen-full"></i>
                                        <span class="tooltip-text">Quick view</span>
                                    </button>
                                    <button type="button" class="wishlist-btn">
                                        <i class="icon icon-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-detail">
                                <h3 class="product-title">
                                    <a href="single-product.html">White Half T-shirt</a>
                                </h3>
                                <div class="item-price text-primary">$30.00</div>
                            </div>
                        </div>
                        <div class="product-item col-lg-3 col-md-6 col-sm-6">
                            <div class="image-holder">
                                <img src="images/selling-products5.jpg" alt="Books" class="product-image">
                            </div>
                            <div class="cart-concern">
                                <div class="cart-button d-flex justify-content-between align-items-center">
                                    <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to
                                        cart <i class="icon icon-arrow-io"></i>
                                    </button>
                                    <button type="button" class="view-btn tooltip
                          d-flex">
                                        <i class="icon icon-screen-full"></i>
                                        <span class="tooltip-text">Quick view</span>
                                    </button>
                                    <button type="button" class="wishlist-btn">
                                        <i class="icon icon-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-detail">
                                <h3 class="product-title">
                                    <a href="single-product.html">Ghee Half T-shirt</a>
                                </h3>
                                <div class="item-price text-primary">$40.00</div>
                            </div>
                        </div>
                        <div class="product-item col-lg-3 col-md-6 col-sm-6">
                            <div class="image-holder">
                                <img src="images/selling-products7.jpg" alt="Books" class="product-image">
                            </div>
                            <div class="cart-concern">
                                <div class="cart-button d-flex justify-content-between align-items-center">
                                    <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to
                                        cart <i class="icon icon-arrow-io"></i>
                                    </button>
                                    <button type="button" class="view-btn tooltip
                          d-flex">
                                        <i class="icon icon-screen-full"></i>
                                        <span class="tooltip-text">Quick view</span>
                                    </button>
                                    <button type="button" class="wishlist-btn">
                                        <i class="icon icon-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-detail">
                                <h3 class="product-title">
                                    <a href="single-product.html">Long Sleeve T-shirt</a>
                                </h3>
                                <div class="item-price text-primary">$40.00</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="pants" data-tab-content>
                    <div class="row d-flex flex-wrap">
                        <div class="product-item col-lg-3 col-md-6 col-sm-6">
                            <div class="image-holder">
                                <img src="images/selling-products1.jpg" alt="Books" class="product-image">
                            </div>
                            <div class="cart-concern">
                                <div class="cart-button d-flex justify-content-between align-items-center">
                                    <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to
                                        cart <i class="icon icon-arrow-io"></i>
                                    </button>
                                    <button type="button" class="view-btn tooltip
                          d-flex">
                                        <i class="icon icon-screen-full"></i>
                                        <span class="tooltip-text">Quick view</span>
                                    </button>
                                    <button type="button" class="wishlist-btn">
                                        <i class="icon icon-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-detail">
                                <h3 class="product-title">
                                    <a href="single-product.html">Half sleeve T-shirt</a>
                                </h3>
                                <div class="item-price text-primary">$40.00</div>
                            </div>
                        </div>
                        <div class="product-item col-lg-3 col-md-6 col-sm-6">
                            <div class="image-holder">
                                <img src="images/selling-products4.jpg" alt="Books" class="product-image">
                            </div>
                            <div class="cart-concern">
                                <div class="cart-button d-flex justify-content-between align-items-center">
                                    <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to
                                        cart <i class="icon icon-arrow-io"></i>
                                    </button>
                                    <button type="button" class="view-btn tooltip
                          d-flex">
                                        <i class="icon icon-screen-full"></i>
                                        <span class="tooltip-text">Quick view</span>
                                    </button>
                                    <button type="button" class="wishlist-btn">
                                        <i class="icon icon-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-detail">
                                <h3 class="product-title">
                                    <a href="single-product.html">Grunge Hoodie</a>
                                </h3>
                                <div class="item-price text-primary">$30.00</div>
                            </div>
                        </div>
                        <div class="product-item col-lg-3 col-md-6 col-sm-6">
                            <div class="image-holder">
                                <img src="images/selling-products7.jpg" alt="Books" class="product-image">
                            </div>
                            <div class="cart-concern">
                                <div class="cart-button d-flex justify-content-between align-items-center">
                                    <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to
                                        cart <i class="icon icon-arrow-io"></i>
                                    </button>
                                    <button type="button" class="view-btn tooltip
                          d-flex">
                                        <i class="icon icon-screen-full"></i>
                                        <span class="tooltip-text">Quick view</span>
                                    </button>
                                    <button type="button" class="wishlist-btn">
                                        <i class="icon icon-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-detail">
                                <h3 class="product-title">
                                    <a href="single-product.html">Long Sleeve T-shirt</a>
                                </h3>
                                <div class="item-price text-primary">$40.00</div>
                            </div>
                        </div>
                        <div class="product-item col-lg-3 col-md-6 col-sm-6">
                            <div class="image-holder">
                                <img src="images/selling-products2.jpg" alt="Books" class="product-image">
                            </div>
                            <div class="cart-concern">
                                <div class="cart-button d-flex justify-content-between align-items-center">
                                    <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to
                                        cart <i class="icon icon-arrow-io"></i>
                                    </button>
                                    <button type="button" class="view-btn tooltip
                          d-flex">
                                        <i class="icon icon-screen-full"></i>
                                        <span class="tooltip-text">Quick view</span>
                                    </button>
                                    <button type="button" class="wishlist-btn">
                                        <i class="icon icon-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-detail">
                                <h3 class="product-title">
                                    <a href="single-product.html">Stylish Grey Pant</a>
                                </h3>
                                <div class="item-price text-primary">$40.00</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="hoodie" data-tab-content>
                    <div class="row d-flex flex-wrap">
                        <div class="product-item col-lg-3 col-md-6 col-sm-6">
                            <div class="image-holder">
                                <img src="images/selling-products17.jpg" alt="Books" class="product-image">
                            </div>
                            <div class="cart-concern">
                                <div class="cart-button d-flex justify-content-between align-items-center">
                                    <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to
                                        cart <i class="icon icon-arrow-io"></i>
                                    </button>
                                    <button type="button" class="view-btn tooltip
                          d-flex">
                                        <i class="icon icon-screen-full"></i>
                                        <span class="tooltip-text">Quick view</span>
                                    </button>
                                    <button type="button" class="wishlist-btn">
                                        <i class="icon icon-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-detail">
                                <h3 class="product-title">
                                    <a href="single-product.html">White Hoodie</a>
                                </h3>
                                <div class="item-price text-primary">$40.00</div>
                            </div>
                        </div>
                        <div class="product-item col-lg-3 col-md-6 col-sm-6">
                            <div class="image-holder">
                                <img src="images/selling-products4.jpg" alt="Books" class="product-image">
                            </div>
                            <div class="cart-concern">
                                <div class="cart-button d-flex justify-content-between align-items-center">
                                    <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to
                                        cart <i class="icon icon-arrow-io"></i>
                                    </button>
                                    <button type="button" class="view-btn tooltip
                          d-flex">
                                        <i class="icon icon-screen-full"></i>
                                        <span class="tooltip-text">Quick view</span>
                                    </button>
                                    <button type="button" class="wishlist-btn">
                                        <i class="icon icon-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-detail">
                                <h3 class="product-title">
                                    <a href="single-product.html">Navy Blue Hoodie</a>
                                </h3>
                                <div class="item-price text-primary">$45.00</div>
                            </div>
                        </div>
                        <div class="product-item col-lg-3 col-md-6 col-sm-6">
                            <div class="image-holder">
                                <img src="images/selling-products18.jpg" alt="Books" class="product-image">
                            </div>
                            <div class="cart-concern">
                                <div class="cart-button d-flex justify-content-between align-items-center">
                                    <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to
                                        cart <i class="icon icon-arrow-io"></i>
                                    </button>
                                    <button type="button" class="view-btn tooltip
                          d-flex">
                                        <i class="icon icon-screen-full"></i>
                                        <span class="tooltip-text">Quick view</span>
                                    </button>
                                    <button type="button" class="wishlist-btn">
                                        <i class="icon icon-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-detail">
                                <h3 class="product-title">
                                    <a href="single-product.html">Dark Green Hoodie</a>
                                </h3>
                                <div class="item-price text-primary">$35.00</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="outer" data-tab-content>
                    <div class="row d-flex flex-wrap">
                        <div class="product-item col-lg-3 col-md-6 col-sm-6">
                            <div class="image-holder">
                                <img src="images/selling-products3.jpg" alt="Books" class="product-image">
                            </div>
                            <div class="cart-concern">
                                <div class="cart-button d-flex justify-content-between align-items-center">
                                    <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to
                                        cart <i class="icon icon-arrow-io"></i>
                                    </button>
                                    <button type="button" class="view-btn tooltip
                          d-flex">
                                        <i class="icon icon-screen-full"></i>
                                        <span class="tooltip-text">Quick view</span>
                                    </button>
                                    <button type="button" class="wishlist-btn">
                                        <i class="icon icon-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-detail">
                                <h3 class="product-title">
                                    <a href="single-product.html">Silk White Shirt</a>
                                </h3>
                                <div class="item-price text-primary">$ 35.00</div>
                            </div>
                        </div>
                        <div class="product-item col-lg-3 col-md-6 col-sm-6">
                            <div class="image-holder">
                                <img src="images/selling-products4.jpg" alt="Books" class="product-image">
                            </div>
                            <div class="cart-concern">
                                <div class="cart-button d-flex justify-content-between align-items-center">
                                    <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to
                                        cart <i class="icon icon-arrow-io"></i>
                                    </button>
                                    <button type="button" class="view-btn tooltip
                          d-flex">
                                        <i class="icon icon-screen-full"></i>
                                        <span class="tooltip-text">Quick view</span>
                                    </button>
                                    <button type="button" class="wishlist-btn">
                                        <i class="icon icon-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-detail">
                                <h3 class="product-title">
                                    <a href="single-product.html">Grunge Hoodie</a>
                                </h3>
                                <div class="item-price text-primary">$ 30.00</div>
                            </div>
                        </div>
                        <div class="product-item col-lg-3 col-md-6 col-sm-6">
                            <div class="image-holder">
                                <img src="images/selling-products6.jpg" alt="Books" class="product-image">
                            </div>
                            <div class="cart-concern">
                                <div class="cart-button d-flex justify-content-between align-items-center">
                                    <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to
                                        cart <i class="icon icon-arrow-io"></i>
                                    </button>
                                    <button type="button" class="view-btn tooltip
                          d-flex">
                                        <i class="icon icon-screen-full"></i>
                                        <span class="tooltip-text">Quick view</span>
                                    </button>
                                    <button type="button" class="wishlist-btn">
                                        <i class="icon icon-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-detail">
                                <h3 class="product-title">
                                    <a href="single-product.html">Grey Check Coat</a>
                                </h3>
                                <div class="item-price text-primary">$ 30.00</div>
                            </div>
                        </div>
                        <div class="product-item col-lg-3 col-md-6 col-sm-6">
                            <div class="image-holder">
                                <img src="images/selling-products7.jpg" alt="Books" class="product-image">
                            </div>
                            <div class="cart-concern">
                                <div class="cart-button d-flex justify-content-between align-items-center">
                                    <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to
                                        cart <i class="icon icon-arrow-io"></i>
                                    </button>
                                    <button type="button" class="view-btn tooltip
                          d-flex">
                                        <i class="icon icon-screen-full"></i>
                                        <span class="tooltip-text">Quick view</span>
                                    </button>
                                    <button type="button" class="wishlist-btn">
                                        <i class="icon icon-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-detail">
                                <h3 class="product-title">
                                    <a href="single-product.html">Long Sleeve T-shirt</a>
                                </h3>
                                <div class="item-price text-primary">$ 40.00</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="jackets" data-tab-content>
                    <div class="row d-flex flex-wrap">
                        <div class="product-item col-lg-3 col-md-6 col-sm-6">
                            <div class="image-holder">
                                <img src="images/selling-products5.jpg" alt="Books" class="product-image">
                            </div>
                            <div class="cart-concern">
                                <div class="cart-button d-flex justify-content-between align-items-center">
                                    <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to
                                        cart <i class="icon icon-arrow-io"></i>
                                    </button>
                                    <button type="button" class="view-btn tooltip
                          d-flex">
                                        <i class="icon icon-screen-full"></i>
                                        <span class="tooltip-text">Quick view</span>
                                    </button>
                                    <button type="button" class="wishlist-btn">
                                        <i class="icon icon-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-detail">
                                <h3 class="product-title">
                                    <a href="single-product.html">Full Sleeve Jeans Jacket</a>
                                </h3>
                                <div class="item-price text-primary">$40.00</div>
                            </div>
                        </div>
                        <div class="product-item col-lg-3 col-md-6 col-sm-6">
                            <div class="image-holder">
                                <img src="images/selling-products2.jpg" alt="Books" class="product-image">
                            </div>
                            <div class="cart-concern">
                                <div class="cart-button d-flex justify-content-between align-items-center">
                                    <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to
                                        cart <i class="icon icon-arrow-io"></i>
                                    </button>
                                    <button type="button" class="view-btn tooltip
                          d-flex">
                                        <i class="icon icon-screen-full"></i>
                                        <span class="tooltip-text">Quick view</span>
                                    </button>
                                    <button type="button" class="wishlist-btn">
                                        <i class="icon icon-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-detail">
                                <h3 class="product-title">
                                    <a href="single-product.html">Stylish Grey Coat</a>
                                </h3>
                                <div class="item-price text-primary">$35.00</div>
                            </div>
                        </div>
                        <div class="product-item col-lg-3 col-md-6 col-sm-6">
                            <div class="image-holder">
                                <img src="images/selling-products6.jpg" alt="Books" class="product-image">
                            </div>
                            <div class="cart-concern">
                                <div class="cart-button d-flex justify-content-between align-items-center">
                                    <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to
                                        cart <i class="icon icon-arrow-io"></i>
                                    </button>
                                    <button type="button" class="view-btn tooltip
                          d-flex">
                                        <i class="icon icon-screen-full"></i>
                                        <span class="tooltip-text">Quick view</span>
                                    </button>
                                    <button type="button" class="wishlist-btn">
                                        <i class="icon icon-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-detail">
                                <h3 class="product-title">
                                    <a href="single-product.html">Grey Check Coat</a>
                                </h3>
                                <div class="item-price text-primary">$35.00</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="accessories" data-tab-content>
                    <div class="row d-flex flex-wrap">
                        <div class="product-item col-lg-3 col-md-6 col-sm-6">
                            <div class="image-holder">
                                <img src="images/selling-products19.jpg" alt="Books" class="product-image">
                            </div>
                            <div class="cart-concern">
                                <div class="cart-button d-flex justify-content-between align-items-center">
                                    <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to
                                        cart <i class="icon icon-arrow-io"></i>
                                    </button>
                                    <button type="button" class="view-btn tooltip
                          d-flex">
                                        <i class="icon icon-screen-full"></i>
                                        <span class="tooltip-text">Quick view</span>
                                    </button>
                                    <button type="button" class="wishlist-btn">
                                        <i class="icon icon-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-detail">
                                <h3 class="product-title">
                                    <a href="single-product.html">Stylish Women Bag</a>
                                </h3>
                                <div class="item-price text-primary">$35.00</div>
                            </div>
                        </div>
                        <div class="product-item col-lg-3 col-md-6 col-sm-6">
                            <div class="image-holder">
                                <img src="images/selling-products20.jpg" alt="Books" class="product-image">
                            </div>
                            <div class="cart-concern">
                                <div class="cart-button d-flex justify-content-between align-items-center">
                                    <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to
                                        cart <i class="icon icon-arrow-io"></i>
                                    </button>
                                    <button type="button" class="view-btn tooltip
                          d-flex">
                                        <i class="icon icon-screen-full"></i>
                                        <span class="tooltip-text">Quick view</span>
                                    </button>
                                    <button type="button" class="wishlist-btn">
                                        <i class="icon icon-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-detail">
                                <h3 class="product-title">
                                    <a href="single-product.html">Stylish Gadgets</a>
                                </h3>
                                <div class="item-price text-primary">$30.00</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-app-layout>
