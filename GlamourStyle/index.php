<?php
include_once 'header.php';
?>
<!-- start section -->
<section class="p-0">
    <div class="swiper full-screen top-space-margin md-h-600px sm-h-500px magic-cursor magic-cursor-vertical swiper-number-pagination-progress swiper-number-pagination-progress-vertical" data-slider-options='{ "slidesPerView": 1, "direction": "horizontal", "loop": true, "parallax": true, "speed": 1000, "pagination": { "el": ".swiper-number", "clickable": true }, "autoplay": { "delay": 4000, "disableOnInteraction": false },  "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1199": { "direction": "vertical" }}, "effect": "slide" }' data-swiper-number-pagination-progress="true">
        <div class="swiper-wrapper">
            <!-- start slider item -->
            <div class="swiper-slide overflow-hidden">
                <div class="cover-background position-absolute top-0 start-0 w-100 h-100" data-swiper-parallax="500" style="background-image:url('https://via.placeholder.com/1920x1060');">
                    <div class="container h-100">
                        <div class="row align-items-center h-100 justify-content-start">
                            <div class="col-md-10 position-relative text-white d-flex flex-column justify-content-center h-100">
                                <div data-anime='{ "opacity": [0, 1], "translateY": [50, 0], "easing": "easeOutQuad", "duration": 500, "delay": 300 }' class="alt-font text-dark-gray mb-25px fs-20 sm-mb-15px"><span class="text-highlight">Discount on selected collection!<span class="bg-base-color h-8px bottom-0px"></span></span></div>
                                <div class="alt-font fs-120 xs-fs-95 lh-100 mb-40px text-dark-gray fw-600 transform-origin-right ls-minus-5px sm-mb-25px" data-anime='{ "el": "childs", "rotateX": [90, 0], "opacity": [0,1], "staggervalue": 150, "easing": "easeOutQuad" }'>
                                    <span class="d-block">Women's</span>
                                    <span class="d-block fw-300">collection</span>
                                </div>
                                <div data-anime='{ "opacity": [0, 1], "translateY": [100, 0], "easing": "easeOutQuad", "duration": 800, "delay": 400 }'>
                                    <a href="demo-fashion-store-shop.html" class="btn btn-dark-gray btn-box-shadow btn-large">View collection</a>
                                </div> 
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
            <!-- end slider item -->
            <!-- start slider item -->
            <div class="swiper-slide overflow-hidden">
                <div class="cover-background position-absolute top-0 start-0 w-100 h-100" data-swiper-parallax="500" style="background-image:url('https://via.placeholder.com/1920x1060');">
                    <div class="container h-100">
                        <div class="row align-items-center h-100 justify-content-start">
                            <div class="col-md-10 position-relative text-white d-flex flex-column justify-content-center h-100">
                                <div data-anime='{ "opacity": [0, 1], "translateY": [50, 0], "easing": "easeOutQuad", "duration": 500, "delay": 300 }' class="alt-font text-dark-gray mb-25px fs-20 sm-mb-15px"><span class="text-highlight">Discount on selected collection!<span class="bg-base-color h-8px bottom-0px"></span></span></div>
                                <div class="alt-font fs-120 xs-fs-95 lh-100 mb-40px text-dark-gray fw-600 transform-origin-right ls-minus-5px sm-mb-25px" data-anime='{ "el": "childs", "rotateX": [90, 0], "opacity": [0,1], "staggervalue": 150, "easing": "easeOutQuad" }'>
                                    <span class="d-block">Men's</span>
                                    <span class="d-block fw-300">collection</span>
                                </div>
                                <div data-anime='{ "opacity": [0, 1], "translateY": [100, 0], "easing": "easeOutQuad", "duration": 800, "delay": 400 }'>
                                    <a href="demo-fashion-store-shop.html" class="btn btn-dark-gray btn-box-shadow btn-large">View collection</a>
                                </div> 
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
            <!-- end slider item -->
            <!-- start slider item -->
            <div class="swiper-slide overflow-hidden">
                <div class="cover-background position-absolute top-0 start-0 w-100 h-100" data-swiper-parallax="500" style="background-image:url('https://via.placeholder.com/1920x1060');">
                    <div class="container h-100">
                        <div class="row align-items-center h-100 justify-content-start">
                            <div class="col-md-10 position-relative text-white d-flex flex-column justify-content-center h-100">
                                <div data-anime='{ "opacity": [0, 1], "translateY": [50, 0], "easing": "easeOutQuad", "duration": 500, "delay": 300 }' class="alt-font text-dark-gray mb-25px fs-20 sm-mb-15px"><span class="text-highlight">Discount on selected collection!<span class="bg-base-color h-8px bottom-0px"></span></span></div>
                                <div class="alt-font fs-120 xs-fs-95 lh-100 mb-40px text-dark-gray fw-600 transform-origin-right ls-minus-5px sm-mb-25px" data-anime='{ "el": "childs", "rotateX": [90, 0], "opacity": [0,1], "staggervalue": 150, "easing": "easeOutQuad" }'>
                                    <span class="d-block">Children's</span>
                                    <span class="d-block fw-300">collection</span>
                                </div>
                                <div data-anime='{ "opacity": [0, 1], "translateY": [100, 0], "easing": "easeOutQuad", "duration": 800, "delay": 400 }'>
                                    <a href="demo-fashion-store-shop.html" class="btn btn-dark-gray btn-box-shadow btn-large">View collection</a>
                                </div> 
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
            <!-- end slider item -->
        </div> 
        <!-- start slider pagination -->
        <div class="swiper-pagination-wrapper">
            <div class="pagination-progress-vertical d-flex align-items-center justify-content-center">
                <div class="number-prev text-dark-gray fs-16 fw-500"></div>
                <div class="swiper-pagination-progress">
                    <span class="swiper-progress"></span>
                </div>
                <div class="number-next text-dark-gray fs-16 fw-500"></div>    
            </div>
        </div>
        <!-- end slider pagination -->
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="half-section">
    <div class="container">
        <div class="row row-cols-1 row-cols-xl-4 row-cols-lg-4 row-cols-md-2 row-cols-sm-2" data-anime='{ "el": "childs", "translateX": [30, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
            <!-- start features box item -->
            <div class="col icon-with-text-style-01 md-mb-35px">
                <div class="feature-box feature-box-left-icon-middle last-paragraph-no-margin">
                    <div class="feature-box-icon me-20px">
                        <i class="line-icon-Box-Close icon-large text-dark-gray"></i>
                    </div>
                    <div class="feature-box-content">
                        <span class="alt-font fs-20 fw-500 d-block text-dark-gray">Free shipping</span>
                        <p class="fs-16 lh-24">Free shipping on first order</p>
                    </div>
                </div>
            </div>
            <!-- end features box item -->
            <!-- start features box item -->
            <div class="col icon-with-text-style-01 md-mb-35px">
                <div class="feature-box feature-box-left-icon-middle last-paragraph-no-margin">
                    <div class="feature-box-icon me-20px">
                        <i class="line-icon-Reload-3 icon-large text-dark-gray"></i>
                    </div>
                    <div class="feature-box-content">
                        <span class="alt-font fs-20 fw-500 d-block text-dark-gray">15 days returns</span>
                        <p class="fs-16 lh-24">Moneyback guarantee</p>
                    </div>
                </div>
            </div>
            <!-- end features box item -->
            <!-- start features box item -->
            <div class="col icon-with-text-style-01 xs-mb-35px">
                <div class="feature-box feature-box-left-icon-middle last-paragraph-no-margin">
                    <div class="feature-box-icon me-20px">
                        <i class="line-icon-Credit-Card2 icon-large text-dark-gray"></i>
                    </div>
                    <div class="feature-box-content">
                        <span class="alt-font fs-20 fw-500 d-block text-dark-gray">Secure payment</span>
                        <p class="fs-16 lh-24">100% protected payment</p>
                    </div>
                </div>
            </div>
            <!-- end features box item -->
            <!-- start features box item -->
            <div class="col icon-with-text-style-01">
                <div class="feature-box feature-box-left-icon-middle last-paragraph-no-margin">
                    <div class="feature-box-icon me-20px">
                        <i class="line-icon-Phone-2 icon-large text-dark-gray"></i>
                    </div>
                    <div class="feature-box-content">
                        <span class="alt-font fs-20 fw-500 d-block text-dark-gray">Online support</span>
                        <p class="fs-16 lh-24">24/7 days a week support</p>
                    </div>
                </div>
            </div>
            <!-- end features box item -->
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="pt-0 pb-0 ps-7 pe-7 lg-ps-3 lg-pe-3 xs-p-0">
    <div class="container-fluid">
        <div class="row row-cols-1 row-cols-xl-4 row-cols-lg-2 row-cols-md-2" data-anime='{ "el": "childs", "translateY": [-15, 0], "perspective": [1200,1200], "scale": [1.1, 1], "rotateX": [50, 0], "opacity": [0,1], "duration": 400, "delay": 100, "staggervalue": 200, "easing": "easeOutQuad" }'>
            <!-- start categories style -->
            <div class="col categories-style-02 lg-mb-30px">
                <div class="categories-box">
                    <a href="demo-fashion-store-shop.html">
                        <img class="sm-w-100" src="https://via.placeholder.com/600x450" alt=""/>
                    </a>
                    <div class="border-color-transparent-dark-very-light border alt-font fw-500 text-dark-gray text-uppercase ps-15px pe-15px fs-11 lh-26 border-radius-100px d-inline-block position-absolute right-20px top-20px">8 items</div>
                    <div class="absolute-bottom-center bottom-40px md-bottom-25px">
                        <a href="demo-fashion-store-shop.html" class="btn btn-white btn-switch-text btn-round-edge btn-box-shadow fs-18 text-uppercase-inherit p-5 min-w-150px">
                            <span>
                                <span class="btn-double-text ls-0px" data-text="Women">Women</span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- end categories style -->
            <!-- start categories style -->
            <div class="col categories-style-02 lg-mb-30px">
                <div class="categories-box">
                    <a href="demo-fashion-store-shop.html">
                        <img class="sm-w-100" src="https://via.placeholder.com/600x450" alt=""/>
                    </a>
                    <div class="border-color-transparent-dark-very-light border alt-font fw-500 text-dark-gray text-uppercase ps-15px pe-15px fs-11 lh-26 border-radius-100px d-inline-block position-absolute right-20px top-20px">9 items</div>
                    <div class="absolute-bottom-center bottom-40px md-bottom-25px">
                        <a href="demo-fashion-store-shop.html" class="btn btn-white btn-switch-text btn-round-edge btn-box-shadow fs-18 text-uppercase-inherit p-5 min-w-150px">
                            <span>
                                <span class="btn-double-text ls-0px" data-text="Men">Men</span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- end categories style -->
            <!-- start categories style -->
            <div class="col categories-style-02 sm-mb-30px">
                <div class="categories-box">
                    <a href="demo-fashion-store-shop.html">
                        <img class="sm-w-100" src="https://via.placeholder.com/600x450" alt=""/>
                    </a>
                    <div class="border-color-transparent-dark-very-light border alt-font fw-500 text-dark-gray text-uppercase ps-15px pe-15px fs-11 lh-26 border-radius-100px d-inline-block position-absolute right-20px top-20px">8 items</div>
                    <div class="absolute-bottom-center bottom-40px md-bottom-25px">
                        <a href="demo-fashion-store-shop.html" class="btn btn-white btn-switch-text btn-round-edge btn-box-shadow fs-18 text-uppercase-inherit p-5 min-w-150px">
                            <span>
                                <span class="btn-double-text ls-0px" data-text="Accessories">Accessories</span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- end categories style -->
            <!-- start categories style -->
            <div class="col categories-style-02">
                <div class="categories-box">
                    <a href="demo-fashion-store-shop.html">
                        <img class="sm-w-100" src="https://via.placeholder.com/600x450" alt=""/>
                    </a>
                    <div class="border-color-transparent-dark-very-light border alt-font fw-500 text-dark-gray text-uppercase ps-15px pe-15px fs-11 lh-26 border-radius-100px d-inline-block position-absolute right-20px top-20px">8 items</div>
                    <div class="absolute-bottom-center bottom-40px md-bottom-25px">
                        <a href="demo-fashion-store-shop.html" class="btn btn-white btn-switch-text btn-round-edge btn-box-shadow fs-18 text-uppercase-inherit p-5 min-w-150px">
                            <span>
                                <span class="btn-double-text ls-0px" data-text="Kids">Kids</span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- end categories style -->
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="ps-7 pe-7 pb-3 lg-ps-3 lg-pe-3 sm-pb-6 xs-px-0">
    <div class="container">
        <div class="row mb-5 xs-mb-8">
            <div class="col-12 text-center">
                <h2 class="alt-font text-dark-gray mb-0 ls-minus-2px">Best seller <span class="text-highlight fw-600">products<span class="bg-base-color h-5px bottom-2px"></span></span></h2>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <ul class="shop-modern shop-wrapper grid-loading grid grid-5col lg-grid-4col md-grid-3col sm-grid-2col xs-grid-1col gutter-extra-large text-center" data-anime='{ "el": "childs", "translateY": [-15, 0], "opacity": [0,1], "duration": 300, "delay": 0, "staggervalue": 100, "easing": "easeOutQuad" }'>
                    <li class="grid-sizer"></li>
                    <!-- start shop item -->
                    <li class="grid-item">
                        <div class="shop-box mb-10px">
                            <div class="shop-image mb-20px">
                                <a href="demo-fashion-store-single-product.html">
                                    <img src="https://via.placeholder.com/600x765" alt=""> 
                                    <span class="lable new">New</span>
                                    <div class="shop-overlay bg-gradient-gray-light-dark-transparent"></div>
                                </a>
                                <div class="shop-buttons-wrap">
                                    <a href="demo-fashion-store-single-product.html" class="alt-font btn btn-small btn-box-shadow btn-white btn-round-edge left-icon add-to-cart">
                                        <i class="feather icon-feather-shopping-bag"></i><span class="quick-view-text button-text">Add to cart</span>
                                    </a>
                                </div>
                                <div class="shop-hover d-flex justify-content-center"> 
                                    <ul>
                                        <li>
                                            <a href="#" class="w-40px h-40px bg-white text-dark-gray d-flex align-items-center justify-content-center rounded-circle ms-5px me-5px" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="feather icon-feather-heart fs-16"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="w-40px h-40px bg-white text-dark-gray d-flex align-items-center justify-content-center rounded-circle ms-5px me-5px" data-bs-toggle="tooltip" data-bs-placement="left" title="Quick shop"><i class="feather icon-feather-eye fs-16"></i></a>
                                        </li>
                                    </ul> 
                                </div>
                            </div>
                            <div class="shop-footer text-center">
                                <a href="demo-fashion-store-single-product.html" class="alt-font text-dark-gray fs-19 fw-500">Textured sweater</a>
                                <div class="price lh-22 fs-16"><del>$200.00</del>$189.00</div>
                            </div>
                        </div>
                    </li>
                    <!-- end shop item -->
                    <!-- start shop item -->
                    <li class="grid-item">
                        <div class="shop-box mb-10px">
                            <div class="shop-image mb-20px">
                                <a href="demo-fashion-store-single-product.html">
                                    <img src="https://via.placeholder.com/600x765" alt=""> 
                                    <div class="shop-overlay bg-gradient-gray-light-dark-transparent"></div>
                                </a>
                                <div class="shop-buttons-wrap">
                                    <a href="demo-fashion-store-single-product.html" class="alt-font btn btn-small btn-box-shadow btn-white btn-round-edge left-icon add-to-cart">
                                        <i class="feather icon-feather-shopping-bag"></i><span class="quick-view-text button-text">Add to cart</span>
                                    </a>
                                </div>
                                <div class="shop-hover d-flex justify-content-center"> 
                                    <ul>
                                        <li>
                                            <a href="#" class="w-40px h-40px bg-white text-dark-gray d-flex align-items-center justify-content-center rounded-circle ms-5px me-5px" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="feather icon-feather-heart fs-16"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="w-40px h-40px bg-white text-dark-gray d-flex align-items-center justify-content-center rounded-circle ms-5px me-5px" data-bs-toggle="tooltip" data-bs-placement="left" title="Quick shop"><i class="feather icon-feather-eye fs-16"></i></a>
                                        </li>
                                    </ul> 
                                </div>
                            </div>
                            <div class="shop-footer text-center">
                                <a href="demo-fashion-store-single-product.html" class="alt-font text-dark-gray fs-19 fw-500">Traveller shirt</a>
                                <div class="price lh-22 fs-16"><del>$350.00</del>$289.00</div>
                            </div>
                        </div>
                    </li>
                    <!-- end shop item -->
                    <!-- start shop item -->
                    <li class="grid-item">
                        <div class="shop-box mb-10px">
                            <div class="shop-image mb-20px">
                                <a href="demo-fashion-store-single-product.html">
                                    <img src="https://via.placeholder.com/600x765" alt=""> 
                                    <div class="shop-overlay bg-gradient-gray-light-dark-transparent"></div>
                                </a>
                                <div class="shop-buttons-wrap">
                                    <a href="demo-fashion-store-single-product.html" class="alt-font btn btn-small btn-box-shadow btn-white btn-round-edge left-icon add-to-cart">
                                        <i class="feather icon-feather-shopping-bag"></i><span class="quick-view-text button-text">Add to cart</span>
                                    </a>
                                </div>
                                <div class="shop-hover d-flex justify-content-center"> 
                                    <ul>
                                        <li>
                                            <a href="#" class="w-40px h-40px bg-white text-dark-gray d-flex align-items-center justify-content-center rounded-circle ms-5px me-5px" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="feather icon-feather-heart fs-16"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="w-40px h-40px bg-white text-dark-gray d-flex align-items-center justify-content-center rounded-circle ms-5px me-5px" data-bs-toggle="tooltip" data-bs-placement="left" title="Quick shop"><i class="feather icon-feather-eye fs-16"></i></a>
                                        </li>
                                    </ul> 
                                </div>
                            </div>
                            <div class="shop-footer text-center">
                                <a href="demo-fashion-store-single-product.html" class="alt-font text-dark-gray fs-19 fw-500">Crewneck sweatshirt</a>
                                <div class="price lh-22 fs-16"><del>$220.00</del>$199.00</div>
                            </div>
                        </div>
                    </li>
                    <!-- end shop item -->
                    <!-- start shop item -->
                    <li class="grid-item">
                        <div class="shop-box mb-10px">
                            <div class="shop-image mb-20px">
                                <a href="demo-fashion-store-single-product.html">
                                    <img src="https://via.placeholder.com/600x765" alt=""> 
                                    <div class="shop-overlay bg-gradient-gray-light-dark-transparent"></div>
                                </a>
                                <div class="shop-buttons-wrap">
                                    <a href="demo-fashion-store-single-product.html" class="alt-font btn btn-small btn-box-shadow btn-white btn-round-edge left-icon add-to-cart">
                                        <i class="feather icon-feather-shopping-bag"></i><span class="quick-view-text button-text">Add to cart</span>
                                    </a>
                                </div>
                                <div class="shop-hover d-flex justify-content-center"> 
                                    <ul>
                                        <li>
                                            <a href="#" class="w-40px h-40px bg-white text-dark-gray d-flex align-items-center justify-content-center rounded-circle ms-5px me-5px" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="feather icon-feather-heart fs-16"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="w-40px h-40px bg-white text-dark-gray d-flex align-items-center justify-content-center rounded-circle ms-5px me-5px" data-bs-toggle="tooltip" data-bs-placement="left" title="Quick shop"><i class="feather icon-feather-eye fs-16"></i></a>
                                        </li>
                                    </ul> 
                                </div>
                            </div>
                            <div class="shop-footer text-center">
                                <a href="demo-fashion-store-single-product.html" class="alt-font text-dark-gray fs-19 fw-500">Skinny trousers</a>
                                <div class="price lh-22 fs-16"><del>$300.00</del>$259.00</div>
                            </div>
                        </div>
                    </li>
                    <!-- end shop item -->
                    <!-- start shop item -->
                    <li class="grid-item">
                        <div class="shop-box mb-10px">
                            <div class="shop-image mb-20px">
                                <a href="demo-fashion-store-single-product.html">
                                    <img src="https://via.placeholder.com/600x765" alt=""> 
                                    <div class="shop-overlay bg-gradient-gray-light-dark-transparent"></div>
                                </a>
                                <div class="shop-buttons-wrap">
                                    <a href="demo-fashion-store-single-product.html" class="alt-font btn btn-small btn-box-shadow btn-white btn-round-edge left-icon add-to-cart">
                                        <i class="feather icon-feather-shopping-bag"></i><span class="quick-view-text button-text">Add to cart</span>
                                    </a>
                                </div>
                                <div class="shop-hover d-flex justify-content-center"> 
                                    <ul>
                                        <li>
                                            <a href="#" class="w-40px h-40px bg-white text-dark-gray d-flex align-items-center justify-content-center rounded-circle ms-5px me-5px" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="feather icon-feather-heart fs-16"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="w-40px h-40px bg-white text-dark-gray d-flex align-items-center justify-content-center rounded-circle ms-5px me-5px" data-bs-toggle="tooltip" data-bs-placement="left" title="Quick shop"><i class="feather icon-feather-eye fs-16"></i></a>
                                        </li>
                                    </ul> 
                                </div>
                            </div>
                            <div class="shop-footer text-center">
                                <a href="demo-fashion-store-single-product.html" class="alt-font text-dark-gray fs-19 fw-500">Sleeve sweater</a>
                                <div class="price lh-22 fs-16"><del>$250.00</del>$239.00</div>
                            </div>
                        </div>
                    </li>
                    <!-- end shop item -->
                    <!-- start shop item -->
                    <li class="grid-item">
                        <div class="shop-box mb-10px">
                            <div class="shop-image mb-20px">
                                <a href="demo-fashion-store-single-product.html">
                                    <img src="https://via.placeholder.com/600x765" alt=""> 
                                    <span class="lable hot">Hot</span>
                                    <div class="shop-overlay bg-gradient-gray-light-dark-transparent"></div>
                                </a>
                                <div class="shop-buttons-wrap">
                                    <a href="demo-fashion-store-single-product.html" class="alt-font btn btn-small btn-box-shadow btn-white btn-round-edge left-icon add-to-cart">
                                        <i class="feather icon-feather-shopping-bag"></i><span class="quick-view-text button-text">Add to cart</span>
                                    </a>
                                </div>
                                <div class="shop-hover d-flex justify-content-center"> 
                                    <ul>
                                        <li>
                                            <a href="#" class="w-40px h-40px bg-white text-dark-gray d-flex align-items-center justify-content-center rounded-circle ms-5px me-5px" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="feather icon-feather-heart fs-16"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="w-40px h-40px bg-white text-dark-gray d-flex align-items-center justify-content-center rounded-circle ms-5px me-5px" data-bs-toggle="tooltip" data-bs-placement="left" title="Quick shop"><i class="feather icon-feather-eye fs-16"></i></a>
                                        </li>
                                    </ul> 
                                </div>
                            </div>
                            <div class="shop-footer text-center">
                                <a href="demo-fashion-store-single-product.html" class="alt-font text-dark-gray fs-19 fw-500">Pocket sweatshirt</a>
                                <div class="price lh-22 fs-16"><del>$200.00</del>$189.00</div>
                            </div>
                        </div>
                    </li>
                    <!-- end shop item -->
                    <!-- start shop item -->
                    <li class="grid-item">
                        <div class="shop-box mb-10px">
                            <div class="shop-image mb-20px">
                                <a href="demo-fashion-store-single-product.html">
                                    <img src="https://via.placeholder.com/600x765" alt=""> 
                                    <div class="shop-overlay bg-gradient-gray-light-dark-transparent"></div>
                                </a>
                                <div class="shop-buttons-wrap">
                                    <a href="demo-fashion-store-single-product.html" class="alt-font btn btn-small btn-box-shadow btn-white btn-round-edge left-icon add-to-cart">
                                        <i class="feather icon-feather-shopping-bag"></i><span class="quick-view-text button-text">Add to cart</span>
                                    </a>
                                </div>
                                <div class="shop-hover d-flex justify-content-center"> 
                                    <ul>
                                        <li>
                                            <a href="#" class="w-40px h-40px bg-white text-dark-gray d-flex align-items-center justify-content-center rounded-circle ms-5px me-5px" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="feather icon-feather-heart fs-16"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="w-40px h-40px bg-white text-dark-gray d-flex align-items-center justify-content-center rounded-circle ms-5px me-5px" data-bs-toggle="tooltip" data-bs-placement="left" title="Quick shop"><i class="feather icon-feather-eye fs-16"></i></a>
                                        </li>
                                    </ul> 
                                </div>
                            </div>
                            <div class="shop-footer text-center">
                                <a href="demo-fashion-store-single-product.html" class="alt-font text-dark-gray fs-19 fw-500">Cotton sweater</a>
                                <div class="price lh-22 fs-16"><del>$150.00</del>$129.00</div>
                            </div>
                        </div>
                    </li>
                    <!-- end shop item -->
                    <!-- start shop item -->
                    <li class="grid-item">
                        <div class="shop-box mb-10px">
                            <div class="shop-image mb-20px">
                                <a href="demo-fashion-store-single-product.html">
                                    <img src="https://via.placeholder.com/600x765" alt=""> 
                                    <div class="shop-overlay bg-gradient-gray-light-dark-transparent"></div>
                                </a>
                                <div class="shop-buttons-wrap">
                                    <a href="demo-fashion-store-single-product.html" class="alt-font btn btn-small btn-box-shadow btn-white btn-round-edge left-icon add-to-cart">
                                        <i class="feather icon-feather-shopping-bag"></i><span class="quick-view-text button-text">Add to cart</span>
                                    </a>
                                </div>
                                <div class="shop-hover d-flex justify-content-center"> 
                                    <ul>
                                        <li>
                                            <a href="#" class="w-40px h-40px bg-white text-dark-gray d-flex align-items-center justify-content-center rounded-circle ms-5px me-5px" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="feather icon-feather-heart fs-16"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="w-40px h-40px bg-white text-dark-gray d-flex align-items-center justify-content-center rounded-circle ms-5px me-5px" data-bs-toggle="tooltip" data-bs-placement="left" title="Quick shop"><i class="feather icon-feather-eye fs-16"></i></a>
                                        </li>
                                    </ul> 
                                </div>
                            </div>
                            <div class="shop-footer text-center">
                                <a href="demo-fashion-store-single-product.html" class="alt-font text-dark-gray fs-19 fw-500">Texture regular</a>
                                <div class="price lh-22 fs-16"><del>$170.00</del>$120.00</div>
                            </div>
                        </div>
                    </li>
                    <!-- end shop item -->
                    <!-- start shop item -->
                    <li class="grid-item">
                        <div class="shop-box mb-10px">
                            <div class="shop-image mb-20px">
                                <a href="demo-fashion-store-single-product.html">
                                    <img src="https://via.placeholder.com/600x765" alt=""> 
                                    <div class="shop-overlay bg-gradient-gray-light-dark-transparent"></div>
                                </a>
                                <div class="shop-buttons-wrap">
                                    <a href="demo-fashion-store-single-product.html" class="alt-font btn btn-small btn-box-shadow btn-white btn-round-edge left-icon add-to-cart">
                                        <i class="feather icon-feather-shopping-bag"></i><span class="quick-view-text button-text">Add to cart</span>
                                    </a>
                                </div>
                                <div class="shop-hover d-flex justify-content-center"> 
                                    <ul>
                                        <li>
                                            <a href="#" class="w-40px h-40px bg-white text-dark-gray d-flex align-items-center justify-content-center rounded-circle ms-5px me-5px" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="feather icon-feather-heart fs-16"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="w-40px h-40px bg-white text-dark-gray d-flex align-items-center justify-content-center rounded-circle ms-5px me-5px" data-bs-toggle="tooltip" data-bs-placement="left" title="Quick shop"><i class="feather icon-feather-eye fs-16"></i></a>
                                        </li>
                                    </ul> 
                                </div>
                            </div>
                            <div class="shop-footer text-center">
                                <a href="demo-fashion-store-single-product.html" class="alt-font text-dark-gray fs-19 fw-500">Sequined dress</a>
                                <div class="price lh-22 fs-16"><del>$190.00</del>$150.00</div>
                            </div>
                        </div>
                    </li>
                    <!-- end shop item -->
                    <!-- start shop item -->
                    <li class="grid-item">
                        <div class="shop-box mb-10px">
                            <div class="shop-image mb-20px">
                                <a href="demo-fashion-store-single-product.html">
                                    <img src="https://via.placeholder.com/600x765" alt=""> 
                                    <div class="shop-overlay bg-gradient-gray-light-dark-transparent"></div>
                                </a>
                                <div class="shop-buttons-wrap">
                                    <a href="demo-fashion-store-single-product.html" class="alt-font btn btn-small btn-box-shadow btn-white btn-round-edge left-icon add-to-cart">
                                        <i class="feather icon-feather-shopping-bag"></i><span class="quick-view-text button-text">Add to cart</span>
                                    </a>
                                </div>
                                <div class="shop-hover d-flex justify-content-center"> 
                                    <ul>
                                        <li>
                                            <a href="#" class="w-40px h-40px bg-white text-dark-gray d-flex align-items-center justify-content-center rounded-circle ms-5px me-5px" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="feather icon-feather-heart fs-16"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="w-40px h-40px bg-white text-dark-gray d-flex align-items-center justify-content-center rounded-circle ms-5px me-5px" data-bs-toggle="tooltip" data-bs-placement="left" title="Quick shop"><i class="feather icon-feather-eye fs-16"></i></a>
                                        </li>
                                    </ul> 
                                </div>
                            </div>
                            <div class="shop-footer text-center">
                                <a href="demo-fashion-store-single-product.html" class="alt-font text-dark-gray fs-19 fw-500">Bermuda shorts</a>
                                <div class="price lh-22 fs-16"><del>$120.00</del>$100.00</div>
                            </div>
                        </div>
                    </li>
                    <!-- end shop item -->

                </ul>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="p-15px bg-dark-gray text-white">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <span class="fs-15 text-uppercase fw-500">Take an extra 25% discount our favorite dress style. Use code:<span class="fs-14 fw-700 lh-28 alt-font text-dark-gray text-uppercase bg-base-color d-inline-block border-radius-30px ps-15px pe-15px ms-5px align-middle">fw205</span></span>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="bg-very-light-gray overflow-hidden position-relative ps-3 xs-ps-0">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-3 ps-5 pe-5 xl-pe-0 lg-ps-0 text-center text-lg-start md-mb-40px">
                <div class="mb-10px"><span class="text-dark-gray fw-500 text-highlight">Lookbook 2023<span class="bg-base-color h-8px bottom-0px"></span></span></div>
                <h2 class="alt-font lh-50 text-dark-gray ls-minus-1px mb-15px">New arrival <span class="fw-600">collection</span></h2>
                <p class="xs-pe-15px xs-ps-15px">Flash summer sale 70% off on selected collection for him.</p>
                <a href="demo-fashion-store-shop.html" class="btn btn-dark-gray btn-box-shadow btn-medium">View collection</a>
                <!--<div class="d-flex mt-30px justify-content-center justify-content-lg-start">
                     start slider navigation 
                    <div class="slider-one-slide-prev-1 icon-small text-dark-gray swiper-button-prev slider-navigation-style-04 bg-white box-shadow-large"><i class="fa-solid fa-arrow-left"></i></div>
                    <div class="slider-one-slide-next-1 icon-small text-dark-gray swiper-button-next slider-navigation-style-04 bg-white box-shadow-large"><i class="fa-solid fa-arrow-right"></i></div> 
                     end slider navigation 
                </div>-->
            </div>
            <div class="col-12 col-lg-9 position-relative">
                <div class="outside-box-right-10 lg-outside-box-right-20 md-outside-box-right-25 xs-outside-box-right-0">
                    <div class="swiper slider-three-slide" data-slider-options='{ "slidesPerView": 1, "spaceBetween": 30, "loop": true, "autoplay": { "delay": 4000, "disableOnInteraction": false }, "navigation": { "nextEl": ".slider-one-slide-next-1", "prevEl": ".slider-one-slide-prev-1" }, "pagination": { "el": ".slider-four-slide-pagination-1", "clickable": true, "dynamicBullets": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1400": { "slidesPerView": 4 }, "1024": { "slidesPerView": 3 }, "768": { "slidesPerView": 3 }, "576": { "slidesPerView": 2 }, "320": { "slidesPerView": 1 } }, "effect": "slide" }'>
                        <div class="swiper-wrapper">
                            <!-- start content carousal item --> 
                            <div class="swiper-slide"> 
                                <div class="interactive-banner-style-09 border-radius-6px overflow-hidden position-relative">
                                    <img src="https://via.placeholder.com/600x730" alt="" />
                                    <div class="opacity-full bg-gradient-gray-light-dark-transparent"></div>
                                    <div class="image-content h-100 w-100 ps-15 pe-15 pt-11 pb-11 lg-p-11 d-flex justify-content-bottom align-items-start flex-column">
                                        <div class="mt-auto d-flex align-items-start w-100 z-index-1 position-relative overflow-hidden flex-column">
                                            <span class="text-white fw-500 fs-22">Ethnic wear</span>
                                            <span class="content-title text-white fs-14 fw-500 opacity-7 text-uppercase ls-05px">Outfits matching</span>
                                            <a href="demo-fashion-store-shop.html" class="content-title-hover fs-14 lh-24 fw-500 ls-05px text-uppercase text-white opacity-6 text-decoration-line-bottom">Explore collection</a>
                                            <span class="content-arrow lh-50 rounded-circle bg-base-color w-50px h-50px ms-20px text-center"><i class="bi bi-arrow-right-short text-dark-gray icon-very-medium"></i></span>
                                        </div>
                                        <div class="position-absolute left-0px top-0px w-100 h-100 bg-gradient-regal-blue-transparent opacity-9"></div>
                                        <div class="box-overlay bg-gradient-gray-light-dark-transparent"></div>
                                        <a href="demo-fashion-store-shop.html" class="position-absolute z-index-1 top-0px left-0px h-100 w-100"></a> 
                                    </div>
                                </div> 
                            </div>
                            <!-- end content carousal item -->
                            <!-- start content carousal item --> 
                            <div class="swiper-slide">
                                <div class="interactive-banner-style-09 border-radius-6px overflow-hidden position-relative">
                                    <img src="https://via.placeholder.com/600x730" alt="" />
                                    <div class="opacity-full bg-gradient-gray-light-dark-transparent"></div>
                                    <div class="image-content h-100 w-100 ps-15 pe-15 pt-11 pb-11 lg-p-11 d-flex justify-content-bottom align-items-start flex-column">
                                        <div class="mt-auto d-flex align-items-start w-100 z-index-1 position-relative overflow-hidden flex-column">
                                            <span class="text-white fw-500 fs-22">Dress materials</span>
                                            <span class="content-title text-white fs-14 fw-500 opacity-7 text-uppercase ls-05px">Explore a variety</span>
                                            <a href="demo-fashion-store-shop.html" class="content-title-hover fs-14 lh-24 fw-500 ls-05px text-uppercase text-white opacity-6 text-decoration-line-bottom">Explore collection</a>
                                            <span class="content-arrow lh-50 rounded-circle bg-base-color w-50px h-50px ms-20px text-center"><i class="bi bi-arrow-right-short text-dark-gray icon-very-medium"></i></span>
                                        </div>
                                        <div class="position-absolute left-0px top-0px w-100 h-100 bg-gradient-regal-blue-transparent opacity-9"></div>
                                        <div class="box-overlay bg-gradient-gray-light-dark-transparent"></div>
                                        <a href="demo-fashion-store-shop.html" class="position-absolute z-index-1 top-0px left-0px h-100 w-100"></a> 
                                    </div>
                                </div>
                            </div>
                            <!-- end content carousal item -->
                            <!-- start content carousal item --> 
                            <div class="swiper-slide">
                                <div class="interactive-banner-style-09 border-radius-6px overflow-hidden position-relative">
                                    <img src="https://via.placeholder.com/600x730" alt="" />
                                    <div class="opacity-full bg-gradient-gray-light-dark-transparent"></div>
                                    <div class="image-content h-100 w-100 ps-15 pe-15 pt-11 pb-11 lg-p-11 d-flex justify-content-bottom align-items-start flex-column">
                                        <div class="mt-auto d-flex align-items-start w-100 z-index-1 position-relative overflow-hidden flex-column">
                                            <span class="text-white fw-500 fs-22">Western wear</span>
                                            <span class="content-title text-white fs-14 fw-500 opacity-7 text-uppercase ls-05px">Traditional attires</span>
                                            <a href="demo-fashion-store-shop.html" class="content-title-hover fs-14 lh-24 fw-500 ls-05px text-uppercase text-white opacity-6 text-decoration-line-bottom">Explore collection</a>
                                            <span class="content-arrow lh-50 rounded-circle bg-base-color w-50px h-50px ms-20px text-center"><i class="bi bi-arrow-right-short text-dark-gray icon-very-medium"></i></span>
                                        </div>
                                        <div class="position-absolute left-0px top-0px w-100 h-100 bg-gradient-regal-blue-transparent opacity-9"></div>
                                        <div class="box-overlay bg-gradient-gray-light-dark-transparent"></div>
                                        <a href="demo-fashion-store-shop.html" class="position-absolute z-index-1 top-0px left-0px h-100 w-100"></a> 
                                    </div>
                                </div>
                            </div>
                            <!-- end content carousal item -->
                            <!-- start content carousal item --> 
                            <div class="swiper-slide">
                                <div class="interactive-banner-style-09 border-radius-6px overflow-hidden position-relative">
                                    <img src="https://via.placeholder.com/600x730" alt="" />
                                    <div class="opacity-full bg-gradient-gray-light-dark-transparent"></div>
                                    <div class="image-content h-100 w-100 ps-15 pe-15 pt-11 pb-11 lg-p-11 d-flex justify-content-bottom align-items-start flex-column">
                                        <div class="mt-auto d-flex align-items-start w-100 z-index-1 position-relative overflow-hidden flex-column">
                                            <span class="text-white fw-500 fs-22">Loungewear</span>
                                            <span class="content-title text-white fs-14 fw-500 opacity-7 text-uppercase ls-05px">Women branded</span>
                                            <a href="demo-fashion-store-shop.html" class="content-title-hover fs-14 lh-24 fw-500 ls-05px text-uppercase text-white opacity-6 text-decoration-line-bottom">Explore collection</a>
                                            <span class="content-arrow lh-50 rounded-circle bg-base-color w-50px h-50px ms-20px text-center"><i class="bi bi-arrow-right-short text-dark-gray icon-very-medium"></i></span>
                                        </div>
                                        <div class="position-absolute left-0px top-0px w-100 h-100 bg-gradient-regal-blue-transparent opacity-9"></div>
                                        <div class="box-overlay bg-gradient-gray-light-dark-transparent"></div>
                                        <a href="demo-fashion-store-shop.html" class="position-absolute z-index-1 top-0px left-0px h-100 w-100"></a> 
                                    </div>
                                </div> 
                            </div>
                            <!-- end content carousal item -->
                            <!-- start content carousal item --> 
                            <div class="swiper-slide"> 
                                <div class="interactive-banner-style-09 border-radius-6px overflow-hidden position-relative">
                                    <img src="https://via.placeholder.com/600x730" alt="" />
                                    <div class="opacity-full bg-gradient-gray-light-dark-transparent"></div>
                                    <div class="image-content h-100 w-100 ps-15 pe-15 pt-11 pb-11 lg-p-11 d-flex justify-content-bottom align-items-start flex-column">
                                        <div class="mt-auto d-flex align-items-start w-100 z-index-1 position-relative overflow-hidden flex-column">
                                            <span class="text-white fw-500 fs-22">Ethnic wear</span>
                                            <span class="content-title text-white fs-14 fw-500 opacity-7 text-uppercase ls-05px">Outfits matching</span>
                                            <a href="demo-fashion-store-shop.html" class="content-title-hover fs-14 lh-24 fw-500 ls-05px text-uppercase text-white opacity-6 text-decoration-line-bottom">Explore collection</a>
                                            <span class="content-arrow lh-50 rounded-circle bg-base-color w-50px h-50px ms-20px text-center"><i class="bi bi-arrow-right-short text-dark-gray icon-very-medium"></i></span>
                                        </div>
                                        <div class="position-absolute left-0px top-0px w-100 h-100 bg-gradient-regal-blue-transparent opacity-9"></div>
                                        <div class="box-overlay bg-gradient-gray-light-dark-transparent"></div>
                                        <a href="demo-fashion-store-shop.html" class="position-absolute z-index-1 top-0px left-0px h-100 w-100"></a> 
                                    </div>
                                </div> 
                            </div>
                            <!-- end content carousal item -->
                            <!-- start content carousal item --> 
                            <div class="swiper-slide">
                                <div class="interactive-banner-style-09 border-radius-6px overflow-hidden position-relative">
                                    <img src="https://via.placeholder.com/600x730" alt="" />
                                    <div class="opacity-full bg-gradient-gray-light-dark-transparent"></div>
                                    <div class="image-content h-100 w-100 ps-15 pe-15 pt-11 pb-11 lg-p-11 d-flex justify-content-bottom align-items-start flex-column">
                                        <div class="mt-auto d-flex align-items-start w-100 z-index-1 position-relative overflow-hidden flex-column">
                                            <span class="text-white fw-500 fs-22">Dress materials</span>
                                            <span class="content-title text-white fs-14 fw-500 opacity-7 text-uppercase ls-05px">Explore a variety</span>
                                            <a href="demo-fashion-store-shop.html" class="content-title-hover fs-14 lh-24 fw-500 ls-05px text-uppercase text-white opacity-6 text-decoration-line-bottom">Explore collection</a>
                                            <span class="content-arrow lh-50 rounded-circle bg-base-color w-50px h-50px ms-20px text-center"><i class="bi bi-arrow-right-short text-dark-gray icon-very-medium"></i></span>
                                        </div>
                                        <div class="position-absolute left-0px top-0px w-100 h-100 bg-gradient-regal-blue-transparent opacity-9"></div>
                                        <div class="box-overlay bg-gradient-gray-light-dark-transparent"></div>
                                        <a href="demo-fashion-store-shop.html" class="position-absolute z-index-1 top-0px left-0px h-100 w-100"></a> 
                                    </div>
                                </div>
                            </div>
                            <!-- end content carousal item -->
                            <!-- start content carousal item --> 
                            <div class="swiper-slide">
                                <div class="interactive-banner-style-09 border-radius-6px overflow-hidden position-relative">
                                    <img src="https://via.placeholder.com/600x730" alt="" />
                                    <div class="opacity-full bg-gradient-gray-light-dark-transparent"></div>
                                    <div class="image-content h-100 w-100 ps-15 pe-15 pt-11 pb-11 lg-p-11 d-flex justify-content-bottom align-items-start flex-column">
                                        <div class="mt-auto d-flex align-items-start w-100 z-index-1 position-relative overflow-hidden flex-column">
                                            <span class="text-white fw-500 fs-22">Western wear</span>
                                            <span class="content-title text-white fs-14 fw-500 opacity-7 text-uppercase ls-05px">Traditional attires</span>
                                            <a href="demo-fashion-store-shop.html" class="content-title-hover fs-14 lh-24 fw-500 ls-05px text-uppercase text-white opacity-6 text-decoration-line-bottom">Explore collection</a>
                                            <span class="content-arrow lh-50 rounded-circle bg-base-color w-50px h-50px ms-20px text-center"><i class="bi bi-arrow-right-short text-dark-gray icon-very-medium"></i></span>
                                        </div>
                                        <div class="position-absolute left-0px top-0px w-100 h-100 bg-gradient-regal-blue-transparent opacity-9"></div>
                                        <div class="box-overlay bg-gradient-gray-light-dark-transparent"></div>
                                        <a href="demo-fashion-store-shop.html" class="position-absolute z-index-1 top-0px left-0px h-100 w-100"></a> 
                                    </div>
                                </div>
                            </div>
                            <!-- end content carousal item -->
                            <!-- start content carousal item --> 
                            <div class="swiper-slide">
                                <div class="interactive-banner-style-09 border-radius-6px overflow-hidden position-relative">
                                    <img src="https://via.placeholder.com/600x730" alt="" />
                                    <div class="opacity-full bg-gradient-gray-light-dark-transparent"></div>
                                    <div class="image-content h-100 w-100 ps-15 pe-15 pt-11 pb-11 lg-p-11 d-flex justify-content-bottom align-items-start flex-column">
                                        <div class="mt-auto d-flex align-items-start w-100 z-index-1 position-relative overflow-hidden flex-column">
                                            <span class="text-white fw-500 fs-22">Loungewear</span>
                                            <span class="content-title text-white fs-14 fw-500 opacity-7 text-uppercase ls-05px">Women branded</span>
                                            <a href="demo-fashion-store-shop.html" class="content-title-hover fs-14 lh-24 fw-500 ls-05px text-uppercase text-white opacity-6 text-decoration-line-bottom">Explore collection</a>
                                            <span class="content-arrow lh-50 rounded-circle bg-base-color w-50px h-50px ms-20px text-center"><i class="bi bi-arrow-right-short text-dark-gray icon-very-medium"></i></span>
                                        </div>
                                        <div class="position-absolute left-0px top-0px w-100 h-100 bg-gradient-regal-blue-transparent opacity-9"></div>
                                        <div class="box-overlay bg-gradient-gray-light-dark-transparent"></div>
                                        <a href="demo-fashion-store-shop.html" class="position-absolute z-index-1 top-0px left-0px h-100 w-100"></a> 
                                    </div>
                                </div> 
                            </div>
                            <!-- end content carousal item -->
                        </div>
                    </div>
                </div>
                <!-- start slider pagination -->
                <!--<div class="swiper-pagination slider-four-slide-pagination-1 swiper-pagination-style-2 swiper-pagination-clickable swiper-pagination-bullets"></div>-->
                <!-- end slider pagination --> 
            </div>
        </div>
    </div>
    <div class="fs-180 lg-fs-150 md-fs-130 fw-700 position-absolute bottom-minus-50px md-bottom-minus-40px ls-minus-5px left-0px right-0px text-center w-100 opacity-1 d-none d-md-block"  data-bottom-top="transform:scale(1, 1) translate3d(0px, 0px, 0px);" data-top-bottom="transform:scale(1, 1) translate3d(-100px, 0px, 0px);">new collection</div>
</section>
<!-- end section -->
<!-- start section -->
<section class="half-section border-bottom border-color-extra-medium-gray">
    <div class="container">
        <div class="row row-cols-2 row-cols-md-5 row-cols-sm-3 position-relative justify-content-center" data-anime='{ "el": "childs", "translateY": [-15, 0], "scale": [0.8, 1], "opacity": [0,1], "duration": 300, "delay": 0, "staggervalue": 100, "easing": "easeOutQuad" }'>
            <!-- start client item -->
            <div class="col text-center sm-mb-30px">
                <a href="#"><img src="images/logo-asos.svg" class="h-30px" alt="" /></a>
            </div>
            <!-- end client item -->
            <!-- start client item -->
            <div class="col text-center sm-mb-30px">
                <a href="#"><img src="images/logo-chanel.svg" class="h-30px" alt="" /></a>
            </div>
            <!-- end client item -->
            <!-- start client item -->
            <div class="col text-center sm-mb-30px">
                <a href="#"><img src="images/logo-gucci.svg" class="h-30px" alt="" /></a>
            </div>
            <!-- end client item -->
            <!-- start client item -->
            <div class="col text-center xs-mb-30px">
                <a href="#"><img src="images/logo-celine.svg" class="h-30px" alt="" /></a>
            </div>
            <!-- end client item -->
            <!-- start client item -->
            <div class="col text-center">
                <a href="#"><img src="images/logo-adidas.svg" class="h-30px" alt="" /></a>
            </div>
            <!-- end client item --> 
        </div> 
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="ps-7 pe-7 pb-3 lg-ps-3 lg-pe-3 md-pb-5 xs-px-0">
    <div class="container">
        <div class="row mb-5 xs-mb-8">
            <div class="col-12 text-center">
                <h2 class="alt-font text-dark-gray mb-0 ls-minus-2px">Featured <span class="text-highlight fw-600">products<span class="bg-base-color h-5px bottom-2px"></span></span></h2>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <ul class="shop-modern shop-wrapper grid-loading grid grid-5col lg-grid-3col sm-grid-2col xs-grid-1col gutter-extra-large text-center" data-anime='{ "el": "childs", "translateY": [-15, 0], "opacity": [0,1], "duration": 300, "delay": 0, "staggervalue": 100, "easing": "easeOutQuad" }'>
                    <li class="grid-sizer"></li>
                    <!-- start shop item -->
                    <li class="grid-item">
                        <div class="shop-box mb-10px">
                            <div class="shop-image mb-20px">
                                <a href="demo-fashion-store-single-product.html">
                                    <img src="https://via.placeholder.com/600x765" alt=""> 
                                    <span class="lable new">New</span>
                                    <div class="shop-overlay bg-gradient-gray-light-dark-transparent"></div>
                                </a>
                                <div class="shop-buttons-wrap">
                                    <a href="demo-fashion-store-single-product.html" class="alt-font btn btn-small btn-box-shadow btn-white btn-round-edge left-icon add-to-cart">
                                        <i class="feather icon-feather-shopping-bag"></i><span class="quick-view-text button-text">Add to cart</span>
                                    </a>
                                </div>
                                <div class="shop-hover d-flex justify-content-center"> 
                                    <ul>
                                        <li>
                                            <a href="#" class="w-40px h-40px bg-white text-dark-gray d-flex align-items-center justify-content-center rounded-circle ms-5px me-5px" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="feather icon-feather-heart fs-16"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="w-40px h-40px bg-white text-dark-gray d-flex align-items-center justify-content-center rounded-circle ms-5px me-5px" data-bs-toggle="tooltip" data-bs-placement="left" title="Quick shop"><i class="feather icon-feather-eye fs-16"></i></a>
                                        </li>
                                    </ul> 
                                </div>
                            </div>
                            <div class="shop-footer text-center">
                                <a href="demo-fashion-store-single-product.html" class="alt-font text-dark-gray fs-19 fw-500">Textured sweater</a>
                                <div class="price lh-22 fs-16"><del>$200.00</del>$189.00</div>
                            </div>
                        </div>
                    </li>
                    <!-- end shop item -->
                    <!-- start shop item -->
                    <li class="grid-item">
                        <div class="shop-box mb-10px">
                            <div class="shop-image mb-20px">
                                <a href="demo-fashion-store-single-product.html">
                                    <img src="https://via.placeholder.com/600x765" alt=""> 
                                    <div class="shop-overlay bg-gradient-gray-light-dark-transparent"></div>
                                </a>
                                <div class="shop-buttons-wrap">
                                    <a href="demo-fashion-store-single-product.html" class="alt-font btn btn-small btn-box-shadow btn-white btn-round-edge left-icon add-to-cart">
                                        <i class="feather icon-feather-shopping-bag"></i><span class="quick-view-text button-text">Add to cart</span>
                                    </a>
                                </div>
                                <div class="shop-hover d-flex justify-content-center"> 
                                    <ul>
                                        <li>
                                            <a href="#" class="w-40px h-40px bg-white text-dark-gray d-flex align-items-center justify-content-center rounded-circle ms-5px me-5px" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="feather icon-feather-heart fs-16"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="w-40px h-40px bg-white text-dark-gray d-flex align-items-center justify-content-center rounded-circle ms-5px me-5px" data-bs-toggle="tooltip" data-bs-placement="left" title="Quick shop"><i class="feather icon-feather-eye fs-16"></i></a>
                                        </li>
                                    </ul> 
                                </div>
                            </div>
                            <div class="shop-footer text-center">
                                <a href="demo-fashion-store-single-product.html" class="alt-font text-dark-gray fs-19 fw-500">Traveller shirt</a>
                                <div class="price lh-22 fs-16"><del>$350.00</del>$289.00</div>
                            </div>
                        </div>
                    </li>
                    <!-- end shop item -->
                    <!-- start shop item -->
                    <li class="grid-item">
                        <div class="shop-box mb-10px">
                            <div class="shop-image mb-20px">
                                <a href="demo-fashion-store-single-product.html">
                                    <img src="https://via.placeholder.com/600x765" alt=""> 
                                    <div class="shop-overlay bg-gradient-gray-light-dark-transparent"></div>
                                </a>
                                <div class="shop-buttons-wrap">
                                    <a href="demo-fashion-store-single-product.html" class="alt-font btn btn-small btn-box-shadow btn-white btn-round-edge left-icon add-to-cart">
                                        <i class="feather icon-feather-shopping-bag"></i><span class="quick-view-text button-text">Add to cart</span>
                                    </a>
                                </div>
                                <div class="shop-hover d-flex justify-content-center"> 
                                    <ul>
                                        <li>
                                            <a href="#" class="w-40px h-40px bg-white text-dark-gray d-flex align-items-center justify-content-center rounded-circle ms-5px me-5px" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="feather icon-feather-heart fs-16"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="w-40px h-40px bg-white text-dark-gray d-flex align-items-center justify-content-center rounded-circle ms-5px me-5px" data-bs-toggle="tooltip" data-bs-placement="left" title="Quick shop"><i class="feather icon-feather-eye fs-16"></i></a>
                                        </li>
                                    </ul> 
                                </div>
                            </div>
                            <div class="shop-footer text-center">
                                <a href="demo-fashion-store-single-product.html" class="alt-font text-dark-gray fs-19 fw-500">Crewneck sweatshirt</a>
                                <div class="price lh-22 fs-16"><del>$220.00</del>$199.00</div>
                            </div>
                        </div>
                    </li>
                    <!-- end shop item -->
                    <!-- start shop item -->
                    <li class="grid-item">
                        <div class="shop-box mb-10px">
                            <div class="shop-image mb-20px">
                                <a href="demo-fashion-store-single-product.html">
                                    <img src="https://via.placeholder.com/600x765" alt=""> 
                                    <div class="shop-overlay bg-gradient-gray-light-dark-transparent"></div>
                                </a>
                                <div class="shop-buttons-wrap">
                                    <a href="demo-fashion-store-single-product.html" class="alt-font btn btn-small btn-box-shadow btn-white btn-round-edge left-icon add-to-cart">
                                        <i class="feather icon-feather-shopping-bag"></i><span class="quick-view-text button-text">Add to cart</span>
                                    </a>
                                </div>
                                <div class="shop-hover d-flex justify-content-center"> 
                                    <ul>
                                        <li>
                                            <a href="#" class="w-40px h-40px bg-white text-dark-gray d-flex align-items-center justify-content-center rounded-circle ms-5px me-5px" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="feather icon-feather-heart fs-16"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="w-40px h-40px bg-white text-dark-gray d-flex align-items-center justify-content-center rounded-circle ms-5px me-5px" data-bs-toggle="tooltip" data-bs-placement="left" title="Quick shop"><i class="feather icon-feather-eye fs-16"></i></a>
                                        </li>
                                    </ul> 
                                </div>
                            </div>
                            <div class="shop-footer text-center">
                                <a href="demo-fashion-store-single-product.html" class="alt-font text-dark-gray fs-19 fw-500">Skinny trousers</a>
                                <div class="price lh-22 fs-16"><del>$300.00</del>$259.00</div>
                            </div>
                        </div>
                    </li>
                    <!-- end shop item -->
                    <!-- start shop item -->
                    <li class="grid-item">
                        <div class="shop-box mb-10px">
                            <div class="shop-image mb-20px">
                                <a href="demo-fashion-store-single-product.html">
                                    <img src="https://via.placeholder.com/600x765" alt=""> 
                                    <div class="shop-overlay bg-gradient-gray-light-dark-transparent"></div>
                                </a>
                                <div class="shop-buttons-wrap">
                                    <a href="demo-fashion-store-single-product.html" class="alt-font btn btn-small btn-box-shadow btn-white btn-round-edge left-icon add-to-cart">
                                        <i class="feather icon-feather-shopping-bag"></i><span class="quick-view-text button-text">Add to cart</span>
                                    </a>
                                </div>
                                <div class="shop-hover d-flex justify-content-center"> 
                                    <ul>
                                        <li>
                                            <a href="#" class="w-40px h-40px bg-white text-dark-gray d-flex align-items-center justify-content-center rounded-circle ms-5px me-5px" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="feather icon-feather-heart fs-16"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="w-40px h-40px bg-white text-dark-gray d-flex align-items-center justify-content-center rounded-circle ms-5px me-5px" data-bs-toggle="tooltip" data-bs-placement="left" title="Quick shop"><i class="feather icon-feather-eye fs-16"></i></a>
                                        </li>
                                    </ul> 
                                </div>
                            </div>
                            <div class="shop-footer text-center">
                                <a href="demo-fashion-store-single-product.html" class="alt-font text-dark-gray fs-19 fw-500">Sleeve sweater</a>
                                <div class="price lh-22 fs-16"><del>$250.00</del>$239.00</div>
                            </div>
                        </div>
                    </li>
                    <!-- end shop item -->
                </ul>
            </div> 
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="p-0 border-top border-bottom border-color-extra-medium-gray">
    <div class="container-fluid"> 
        <div class="row position-relative">
            <div class="col swiper text-center swiper-width-auto" data-slider-options='{ "slidesPerView": "auto", "spaceBetween":0, "speed": 10000, "loop": true, "pagination": { "el": ".slider-four-slide-pagination-2", "clickable": false }, "allowTouchMove": false, "autoplay": { "delay":0, "disableOnInteraction": false }, "navigation": { "nextEl": ".slider-four-slide-next-2", "prevEl": ".slider-four-slide-prev-2" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "effect": "slide" }'>
                <div class="swiper-wrapper marquee-slide">
                    <!-- start client item -->
                    <div class="swiper-slide">
                        <div class="alt-font fs-26 fw-500 text-dark-gray border-color-extra-medium-gray border-end pt-30px pb-30px ps-60px pe-60px sm-p-25px">Get 20% off for your first order</div>
                    </div>
                    <!-- end client item -->
                    <!-- start client item -->
                    <div class="swiper-slide">
                        <div class="alt-font fs-26 fw-500 text-dark-gray border-color-extra-medium-gray border-end pt-30px pb-30px ps-60px pe-60px sm-p-25px">The fashion core collection</div>
                    </div>
                    <!-- end client item -->
                    <!-- start client item -->
                    <div class="swiper-slide">
                        <div class="alt-font fs-26 fw-500 text-dark-gray border-color-extra-medium-gray border-end pt-30px pb-30px ps-60px pe-60px sm-p-25px">100% secure protected payment</div>
                    </div>
                    <!-- end client item -->
                    <!-- start client item -->
                    <div class="swiper-slide">
                        <div class="alt-font fs-26 fw-500 text-dark-gray border-color-extra-medium-gray border-end pt-30px pb-30px ps-60px pe-60px sm-p-25px">Free shipping for orders over $130</div>
                    </div>
                    <!-- end client item -->
                    <!-- start client item -->
                    <div class="swiper-slide">
                        <div class="alt-font fs-26 fw-500 text-dark-gray border-color-extra-medium-gray border-end pt-30px pb-30px ps-60px pe-60px sm-p-25px">Pay with multiple credit cards</div>
                    </div>
                    <!-- end client item -->
                    <!-- start client item -->
                    <div class="swiper-slide">
                        <div class="alt-font fs-26 fw-500 text-dark-gray border-color-extra-medium-gray border-end pt-30px pb-30px ps-60px pe-60px sm-p-25px">Get 20% off for your first order</div>
                    </div>
                    <!-- end client item -->
                    <!-- start client item -->
                    <div class="swiper-slide">
                        <div class="alt-font fs-26 fw-500 text-dark-gray border-color-extra-medium-gray border-end pt-30px pb-30px ps-60px pe-60px sm-p-25px">The fashion core collection</div>
                    </div>
                    <!-- end client item -->
                    <!-- start client item -->
                    <div class="swiper-slide">
                        <div class="alt-font fs-26 fw-500 text-dark-gray border-color-extra-medium-gray border-end pt-30px pb-30px ps-60px pe-60px sm-p-25px">100% secure protected payment</div>
                    </div>
                    <!-- end client item -->
                </div> 
            </div>  
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="pb-3 ps-7 pe-7 lg-ps-3 lg-pe-3 xs-px-0">
    <div class="container">
        <div class="row mb-4 xs-mb-7">
            <div class="col-12 text-center">
                <h2 class="alt-font text-dark-gray mb-0 ls-minus-2px">Fashion <span class="text-highlight fw-600">magazine<span class="bg-base-color h-5px bottom-2px"></span></span></h2>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <ul class="blog-classic blog-wrapper grid-loading grid grid-4col xl-grid-4col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large" data-anime='{ "el": "childs", "translateY": [15, 0], "translateX": [-15, 0], "opacity": [0,1], "duration": 500, "delay": 300, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <li class="grid-sizer"></li>
                    <!-- start blog item -->
                    <li class="grid-item">
                        <div class="card bg-transparent border-0 h-100">
                            <div class="blog-image position-relative overflow-hidden">
                                <a href="demo-fashion-store-blog-single-creative.html"><img src="https://via.placeholder.com/600x455" alt="" /></a>
                            </div>
                            <div class="card-body px-0 pt-30px pb-30px sm-pb-15px">
                                <span class="mb-5px d-block">By <a href="#" class="text-dark-gray fw-500 categories-text">Den viliamson</a><a href="#" class="blog-date">26 December 2023</a></span>
                                <a href="demo-fashion-store-blog-single-creative.html" class="alt-font card-title fs-20 lh-30 fw-500 text-dark-gray d-inline-block w-75 xl-w-85 lg-w-100">Elegance is not standing out, but being remembered.</a>
                            </div>
                        </div>
                    </li>
                    <!-- end blog item -->
                    <!-- start blog item -->
                    <li class="grid-item">
                        <div class="card bg-transparent border-0 h-100">
                            <div class="blog-image position-relative overflow-hidden">
                                <a href="demo-fashion-store-blog-single-creative.html"><img src="https://via.placeholder.com/600x455" alt="" /></a>
                            </div>
                            <div class="card-body px-0 pt-30px pb-30px sm-pb-15px">
                                <span class="mb-5px d-block">By <a href="#" class="text-dark-gray fw-500 categories-text">Hugh macleod</a><a href="#" class="blog-date">20 December 2023</a></span>
                                <a href="demo-fashion-store-blog-single-creative.html" class="alt-font card-title fs-20 lh-30 fw-500 text-dark-gray d-inline-block w-75 xl-w-85 lg-w-100">Fashion is the armor to survive the reality of everyday life.</a>
                            </div>
                        </div>
                    </li>
                    <!-- end blog item -->
                    <!-- start blog item -->
                    <li class="grid-item">
                        <div class="card bg-transparent border-0 h-100">
                            <div class="blog-image position-relative overflow-hidden">
                                <a href="demo-fashion-store-blog-single-creative.html"><img src="https://via.placeholder.com/600x455" alt="" /></a>
                            </div>
                            <div class="card-body px-0 pt-30px pb-30px sm-pb-15px">
                                <span class="mb-5px d-block">By <a href="#" class="text-dark-gray fw-500 categories-text">Walton smith</a><a href="#" class="blog-date">10 December 2023</a></span>
                                <a href="demo-fashion-store-blog-single-creative.html" class="alt-font card-title fs-20 lh-30 fw-500 text-dark-gray d-inline-block w-75 xl-w-85 lg-w-100">In order to be irreplaceable one must always be different.</a>
                            </div>
                        </div>
                    </li>
                    <!-- end blog item -->
                    <!-- start blog item -->
                    <li class="grid-item">
                        <div class="card bg-transparent border-0 h-100">
                            <div class="blog-image position-relative overflow-hidden">
                                <a href="demo-fashion-store-blog-single-creative.html"><img src="https://via.placeholder.com/600x455" alt="" /></a>
                            </div>
                            <div class="card-body px-0 pt-30px pb-30px sm-pb-15px">
                                <span class="mb-5px d-block">By <a href="#" class="text-dark-gray fw-500 categories-text">Walton smith</a><a href="#" class="blog-date">10 December 2023</a></span>
                                <a href="demo-fashion-store-blog-single-creative.html" class="alt-font card-title fs-20 lh-30 fw-500 text-dark-gray d-inline-block w-75 xl-w-85 lg-w-100">Gucci has represented design and contemporary lifestyle.</a>
                            </div>
                        </div>
                    </li>
                    <!-- end blog item -->
                </ul>
            </div> 
        </div>
    </div>
</section>
<!-- end section -->
<?php
include_once 'footer.php';
