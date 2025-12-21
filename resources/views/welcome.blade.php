@extends('frontend.layout')

@section('frontend_content')

    <!-- =============== SHOPERY START ==================== -->
    <section id="shopery">
        <div class="container">

            <div class="parent_slider">
                <div>
                    <div class="row ">
                        <div class="col-lg-6 col-12 image">
                            <img class="img-fluid" src="{{ asset('frontend_assets/assets/images/shopery.png') }}" alt="">

                            <div class="shape d-lg-block d-none">
                                <h4>70% </h4>
                                <span>off</span>
                            </div>
                        </div>

                        <div class="content col-lg-6 col-12">
                            <span class="main">welcome to shopery</span>
                            <h4>Fresh & Healthy Organic Food</h4>
                            <p>Free shipping on all your order. we deliver, you enjoy</p>
                            <a href="#">Shop now <span><iconify-icon icon="majesticons:arrow-right-line" width="21"
                                        height="21"></iconify-icon></span></a>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="row ">
                        <div class="col-lg-6 col-12 image">
                            <img class="img-fluid" src="{{ asset('frontend_assets/assets/images/shopery.png') }}" alt="">

                            <div class="shape d-lg-block d-none">
                                <h4>70% </h4>
                                <span>off</span>
                            </div>
                        </div>

                        <div class="content col-lg-6 col-12">
                            <span class="main">welcome to shopery</span>
                            <h4>Fresh & Healthy Organic Food</h4>
                            <p>Free shipping on all your order. we deliver, you enjoy</p>
                            <a href="#">Shop now <span><iconify-icon icon="majesticons:arrow-right-line" width="21"
                                        height="21"></iconify-icon></span></a>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="row ">
                        <div class="col-lg-6 col-12 image">
                            <img class="img-fluid" src="{{ asset('frontend_assets/assets/images/shopery.png') }}" alt="">

                            <div class="shape d-lg-block d-none">
                                <h4>70% </h4>
                                <span>off</span>
                            </div>
                        </div>

                        <div class="content col-lg-6 col-12">
                            <span class="main">welcome to shopery</span>
                            <h4>Fresh & Healthy Organic Food</h4>
                            <p>Free shipping on all your order. we deliver, you enjoy</p>
                            <a href="#">Shop now <span><iconify-icon icon="majesticons:arrow-right-line" width="21"
                                        height="21"></iconify-icon></span></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- =============== SHOPERY END ==================== -->



    <!-- =============== CART START ==================== -->
    <section id="cart">
        <div class="container">
            <div class="row">

                <div class="col-3 shipping">
                    <div class="icon"><span><iconify-icon icon="la:shipping-fast" width="32" height="32"
                                style="color: #00B207;"></iconify-icon></span>
                    </div>
                    <h4>Free Shipping</h4>
                    <p>Free shipping with discount</p>
                </div>

                <div class="col-3 shipping">
                    <div class="icon"><span><iconify-icon icon="streamline-freehand:headphones-cable" width="25"
                                height="25" style="color: #00B207"></iconify-icon></span>
                    </div>
                    <h4>Great Support 24/7</h4>
                    <p>Instant access to Contact</p>
                </div>

                <div class="col-3 shipping">
                    <div class="icon"><span><iconify-icon icon="streamline-ultimate:shopping-bag-check" width="25"
                                height="25" style="color: #00B207"></iconify-icon></span>
                    </div>
                    <h4>100% Sucure Payment</h4>
                    <p>We ensure your money is save</p>
                </div>

                <div class="col-3 shipping">
                    <div class="icon"><span><iconify-icon icon="ph:package-light" width="25" height="25"
                                style="color: #00B207"></iconify-icon></span>
                    </div>
                    <h4>Money-Back Guarantee</h4>
                    <p>30 days money-back guarantee</p>
                </div>

            </div>
        </div>
    </section>
    <!-- =============== CART END ==================== -->





    <!-- ========== Start product ========== -->
    <section id="product">
        <div class="container">
            <div class="head">
                <h4>Introducing Our Products</h4>
                <div class="filter_button">
                    <button class="category-button" data-filter="all">All</button>
                    <button class="category-button" data-filter="vagetable"> Vegetable</button>
                    <button class="category-button" data-filter="fruit">Fruit</button>
                    <button class="category-button" data-filter="meat">Meat & Fish</button>
                </div>
            </div>

            <div class="row product_boxes">

                @forelse ($products as $product)


                <div class="product filter_body col-lg-3 p-0" data-stock="true" data-id="{{ $product->title . $product->id }}"
                    data-name="{{ $product->title }}" data-price="{{ $product->price }}" data-img="{{ asset( 'storage/product_images/' . $product->productImages[0]->image_name) }}">
                    <div class="filter vagetable">
                        <span class="sale">Sale 50%</span>
                        <a href="stock.html">
                            <img class="img-fluid" src="{{ asset( 'storage/product_images/' . $product->productImages[0]->image_name) }}" alt="">
                        </a>
                        <div class="details">
                            <div class="row justify-content-between align-items-center ">
                                <div class="col-8">
                                    <h4 class="m-0">Red Tomatos</h4>
                                    <b>{{ $product->price }}</b>
                                    <del>$20.99</del>
                                    <div class="rate">
                                        <ul>
                                            <li>
                                                <iconify-icon icon="material-symbols-light:star" width="18"
                                                    height="18"></iconify-icon>
                                            </li>
                                            <li>
                                                <iconify-icon icon="material-symbols-light:star" width="18"
                                                    height="18"></iconify-icon>
                                            </li>
                                            <li>
                                                <iconify-icon icon="material-symbols-light:star" width="18"
                                                    height="18"></iconify-icon>
                                            </li>
                                            <li>
                                                <iconify-icon icon="material-symbols-light:star" width="18"
                                                    height="18"></iconify-icon>
                                            </li>
                                            <li>
                                                <iconify-icon icon="material-symbols-light:star" width="18"
                                                    height="18"></iconify-icon>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-4 bag_icon">
                                    <span class="bag add-to-cart"><iconify-icon icon="teenyicons:bag-outline" width="24"
                                            height="24"></iconify-icon></span>
                                </div>
                            </div>
                        </div>
                        <span class="eye"><iconify-icon icon="bi:eye" width="20" height="20"></iconify-icon></span>
                        <span class="heart add-to-wishlist"><iconify-icon icon="bi:heart" width="20"
                                height="20"></iconify-icon></span>
                    </div>
                </div>

                @empty
                    <p>No Product Found!</p>
                @endforelse


            </div>

        </div>
    </section>
    <!-- ========== End product ========== -->




    <!-- =============== FEATURED PRODUCT START ==================== -->
     <!-- ========== Start featured_products ========== -->
    <section id="featured_products">
        <div class="container">
            <div class="head">
                <h4>Featured Products</h4>
            </div>
            <div class="row justify-content-between">

                <div class="product filter_body col-lg-2 p-0" data-stock="true" data-id="Green Lettuce"
                    data-name="Green Lettuce" data-price="14.99" data-img="{{ asset('frontend_assets/assets/images/Featured Products/2.png') }}">
                    <div class="filter_box">
                        <span class="sale">Sale 50%</span>
                        <a href="./stock.html">
                            <img class="img-fluid" style="height: 230px;" src="{{ asset('frontend_assets/assets/images/Featured Products/2.png') }}" alt="">
                        </a>
                        <div class="details">
                            <div class="row justify-content-between align-items-center ">
                                <div class="col-8">
                                    <h4 class="m-0">Green Lettuce</h4>
                                    <b>$14.99</b>
                                    <!-- <del>$20.99</del> -->
                                    <div class="rate">
                                        <ul>
                                            <li>
                                                <iconify-icon icon="material-symbols-light:star" width="16"
                                                    height="16"></iconify-icon>
                                            </li>
                                            <li>
                                                <iconify-icon icon="material-symbols-light:star" width="16"
                                                    height="16"></iconify-icon>
                                            </li>
                                            <li>
                                                <iconify-icon icon="material-symbols-light:star" width="16"
                                                    height="16"></iconify-icon>
                                            </li>
                                            <li>
                                                <iconify-icon icon="material-symbols-light:star" width="16"
                                                    height="16"></iconify-icon>
                                            </li>
                                            <li>
                                                <iconify-icon icon="material-symbols-light:star" width="16"
                                                    height="16"></iconify-icon>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-4 bag_icon">
                                    <span class="bag add-to-cart"><iconify-icon icon="teenyicons:bag-outline" width="18"
                                            height="18"></iconify-icon></span>
                                </div>
                            </div>
                        </div>
                        <span class="eye"><iconify-icon icon="bi:eye" width="18" height="18"></iconify-icon></span>
                        <span class="heart add-to-wishlist"><iconify-icon icon="bi:heart" width="18"
                                height="18"></iconify-icon></span>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ========== End featured_products ========== -->
    <!-- =============== FEATURED PRODUCT END ==================== -->



    <!-- =============== ADD START ==================== -->
    <!-- Popup Overlay -->
    <div id="popup" class="popup-overlay">
        <div class="popup-content">
            <span class="close-btn">&times;</span>
            <div class="popup-body">
                <img src="./assets/images/Advertise.png" alt="Offer" class="popup-img">
                <div class="popup-text">
                    <h2>Subscribe to Our <br> Newsletter</h2>
                    <p>
                        Subscribe to our newsletter and Save your
                        <span style="color:#ff6600; font-weight:600;">20% money</span>
                        with discount code today.
                    </p>
                    <form class="popup-form">
                        <input type="email" placeholder="Enter your email" required>
                        <button class="submit" type="submit">Subscribe</button>
                    </form>
                    <label class="dont-show">
                        <input type="checkbox"> Do not show this window
                    </label>
                </div>
            </div>
        </div>
    </div>
    <!-- =============== ADD END ==================== -->



@endsection
