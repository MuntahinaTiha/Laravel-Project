<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!-- GOOGLE FONTS END -->

    <title>Ecobazar | Home</title>
    <link rel="shortcut icon" href="{{ asset('frontend_assets/assets/images/fav.png') }}" type="image/x-icon">

    <!-- SLICK SLIDER -->
    <link rel="stylesheet" href="{{ asset('frontend_assets/assets/css/slick.min.css') }}">
    <!-- BOOTSTRAP 5.3 -->
    <link rel="stylesheet" href="{{ asset('frontend_assets/assets/css/bootstrap.min.css') }}">
    <!-- VENO BOX -->
    <link
        href="{{ asset('frontend_assets/assets/Yet-Another-jQuery-Responsive-Lightbox-Plugin-VenoBox/src/venobox.css') }}"
        rel="stylesheet" />

        @stack('frontend_css')
        
    <!-- STYLE CSS -->
    <link rel="stylesheet" href="{{ asset('frontend_assets/assets/css/style.css') }}">
    <!-- RESPONSIVE CSS -->
    <link rel="stylesheet" href="{{ asset('frontend_assets/assets/css/responsive.css') }}">


</head>

<body>


    <!-- =============== HEADING START ==================== -->
    <section id="heading">
        <div class="container">
            <div class="row justify-content-between">

                <div class="col-lg-5  d-flex align-items-center">
                    <span class="location"><iconify-icon icon="fluent:location-28-regular" width="20"
                            height="20"></iconify-icon></span>
                    <span class="location_text">Store Location: Lincoln- 344, Illinois, Chicago, USA</span>
                </div>

                <div class="col-lg-4 heading_right">
                    <div>
                        <select name="" id="">
                            <option value="">Bng</option>
                            <option value="">Eng</option>
                        </select>

                        <select name="" id="">
                            <option value="">BDT</option>
                            <option value="">USD</option>
                        </select>
                    </div>
                    <span class="divider"></span>
                    <div class="heading_right_secondary">
                        <a href="#">Sign In</a>
                        <span class="slash">/</span>
                        <a href="#">Sign Up</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- =============== HEADING END ==================== -->



    <!-- =============== HEADING TWO START ==================== -->
    <section id="secondary_heading" class="py-3 d-none d-lg-block">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-3">
                    <a href="./index.html">
                        <img src="{{ asset('frontend_assets/assets/images/Logo.png') }}" alt="logo.png">
                    </a>
                </div>
                <div class="col-lg-5">
                    <form action="" class="search_bar">
                        <span class="search_icon"><iconify-icon icon="uil:search" width="20"
                                height="21"></iconify-icon></span>
                        <input type="text" placeholder="Search">
                        <button class="search_btn">Search</button>
                    </form>
                </div>
                <div class="col-lg-3">
                    <div class="cart_parent">
                        <div class="wishlist_icon">
                            <a href="#"><span><iconify-icon icon="bi:heart" width="35"
                                        height="33"></iconify-icon></span></a>
                            <!-- <span id="wishlistCount">0</span> -->
                        </div>
                        <div class="second_divider"></div>
                        <div class="shopping_bag">
                            <span style="cursor: pointer;" class="cart-icon" id="cartToggleDesktop"><iconify-icon
                                    icon="teenyicons:bag-outline" width="30" height="30"></iconify-icon></span>
                            <span id="cartCountDesktop" class="count cart-badge">0</span>
                            <div class="shop">
                                <p class="shopping_text mb-0">Shopping cart:</p>
                                <b id="cartSubtotalNav" class="price">$0</b>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =============== HEADING TWO END ==================== -->


    <!-- Notification Toast -->
    <div id="toast" class="toast-message"></div>


    <!-- =============== CART SIDEBAR START  ==================== -->
    <!-- ========== Start cart_sidebar ========== -->
    <aside class="cart-sidebar" id="cartSidebar">
        <div class="cart-header">
            <h3>Shopping Cart <span>(<b id="header_item">0</b>)</span></h3>
            <button id="closeCart" class="close_btn btn-close"></button>
        </div>
        <div id="cartItems" class="cart-items">
            <!-- Items will be injected here (image, name, price, qty shown as text, remove) -->
        </div>

        <div class="cart-footer">
            <div class="subtotal-row">
                <div>
                    <span id="item_number">0</span>
                    <span>products</span>
                </div>
                <div>
                    <strong id="cartSubtotal">0.00</strong>
                </div>
            </div>

            <div class="cart-actions">
                <a class="checkout" href="{{ route('frontend.checkout') }}">Checkout</a>
                <a class="" href="cart.html" id="goToCart" class="btn primary">Go to Cart</a>
            </div>
        </div>
    </aside>
    <!-- ========== End cart_sidebar ========== -->
    <!-- =============== CART SIDEBAR END  ==================== -->


    <!-- =============== NAVIGATION START ==================== -->
    <nav id="nav" class="navbar navbar-expand-lg p-0">
        <div class="container">

            <a href="index.html" class="d-lg-none">
                <img src="./assets/images/Logo.png" alt="">
            </a>
            <div class="d-none d-lg-block">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle category_bar " type="button"
                        data-bs-toggle="dropdown" aria-expanded="false">

                        <span><iconify-icon icon="basil:menu-solid" width="24"
                                height="24"></iconify-icon></span>
                        <span class="main_text">All Categories</span>
                        <span><iconify-icon icon="iconamoon:arrow-down-2-light" width="24"
                                height="24"></iconify-icon></span>

                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>
            </div>

            <button class="navbar-toggler mobile-menu-bar d-lg-none" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                <span><iconify-icon icon="ci:menu-alt-01" width="28" height="28"></iconify-icon></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-0 mb-lg-0">

                    <li class="nav-item">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle dropdown-link" type="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Home
                                <span><iconify-icon icon="iconamoon:arrow-down-2-light" width="24"
                                        height="24"></iconify-icon></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">HOMEPAGE 01</a></li>
                                <li><a class="dropdown-item" href="#">HOMEPAGE 02</a></li>
                                <li><a class="dropdown-item" href="#">HOMEPAGE 03</a></li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle dropdown-link" type="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Shop
                                <span><iconify-icon icon="iconamoon:arrow-down-2-light" width="24"
                                        height="24"></iconify-icon></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">SHOP 01</a></li>
                                <li><a class="dropdown-item" href="#">SHOP 02</a></li>
                                <li><a class="dropdown-item" href="#">SHOP 03</a></li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle dropdown-link" type="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Pages
                                <span><iconify-icon icon="iconamoon:arrow-down-2-light" width="24"
                                        height="24"></iconify-icon></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">PAGE 01</a></li>
                                <li><a class="dropdown-item" href="#">PAGE 02</a></li>
                                <li><a class="dropdown-item" href="#">PAGE 03</a></li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle dropdown-link" type="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Blog
                                <span><iconify-icon icon="iconamoon:arrow-down-2-light" width="24"
                                        height="24"></iconify-icon></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">BLOG 01</a></li>
                                <li><a class="dropdown-item" href="#">BLOG 02</a></li>
                                <li><a class="dropdown-item" href="#">BLOG 03</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item"><a href="#" class="nav-link">About Us</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Contact Us</a></li>
                </ul>

                <div class="phone">
                    <span><iconify-icon icon="line-md:phone-call-loop" width="23"
                            height="23"></iconify-icon></span>
                    <a href="tel:(219) 555-0114">(219) 555-0114</a>
                </div>

            </div>
        </div>
    </nav>
    <!-- =============== NAVIGATION END ==================== -->



    <!-- =============== OFFCANVAS START ==================== -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
        aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <a href="#"><img src="./assets/images/Logo.png" alt=""></a>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">

            <ul class="navbar-nav me-auto mb-0 mb-lg-0">

                <li class="nav-item">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle dropdown-link" type="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Home
                            <span><iconify-icon icon="iconamoon:arrow-down-2-light" width="24"
                                    height="24"></iconify-icon></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">HOMEPAGE 01</a></li>
                            <li><a class="dropdown-item" href="#">HOMEPAGE 02</a></li>
                            <li><a class="dropdown-item" href="#">HOMEPAGE 03</a></li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle dropdown-link" type="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Shop
                            <span><iconify-icon icon="iconamoon:arrow-down-2-light" width="24"
                                    height="24"></iconify-icon></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">SHOP 01</a></li>
                            <li><a class="dropdown-item" href="#">SHOP 02</a></li>
                            <li><a class="dropdown-item" href="#">SHOP 03</a></li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle dropdown-link" type="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Pages
                            <span><iconify-icon icon="iconamoon:arrow-down-2-light" width="24"
                                    height="24"></iconify-icon></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">PAGE 01</a></li>
                            <li><a class="dropdown-item" href="#">PAGE 02</a></li>
                            <li><a class="dropdown-item" href="#">PAGE 03</a></li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle dropdown-link" type="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Blog
                            <span><iconify-icon icon="iconamoon:arrow-down-2-light" width="24"
                                    height="24"></iconify-icon></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">BLOG 01</a></li>
                            <li><a class="dropdown-item" href="#">BLOG 02</a></li>
                            <li><a class="dropdown-item" href="#">BLOG 03</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item mobile-menu-last"><a href="#" class="nav-link">About Us</a></li>
                <li class="nav-item mobile-menu-last"><a href="#" class="nav-link">Contact Us</a></li>
            </ul>

            <div class="mobile_sign_parent">
                <a class="mobile_sign_in" href="#">Sign In</a>
                <a class="mobile_sign_in" href="#">Sign Up</a>
            </div>

        </div>

    </div>
    <!-- =============== OFFCANVAS END ==================== -->



    <!-- =============== MOBILE FOOTER START ==================== -->
    <section id="mobile_footer" class="d-lg-none">
        <div class="container">
            <div class="row">

                <div class="col-3 footer_box">
                    <span><iconify-icon icon="ic:outline-home" width="24" height="24"></iconify-icon></span>
                    <p class="m-0">Home</p>
                </div>

                <div class="col-3 footer_box">
                    <span><iconify-icon icon="iconamoon:category-thin" width="24"
                            height="24"></iconify-icon></span>
                    <p class="m-0">Category</p>
                </div>

                <div class="col-3 footer_box">
                    <span class="footer_mobile_search"><iconify-icon icon="uil:search" width="24"
                            height="24"></iconify-icon></span>
                    <p class="m-0">Search</p>
                </div>

                <div class="col-3 footer_box">
                    <!-- <span><iconify-icon icon="teenyicons:bag-outline" width="28" height="25"></iconify-icon></span> -->
                    <a href="checkout.html"><iconify-icon icon="teenyicons:bag-outline" width="28"
                            height="25"></iconify-icon></a>
                    <p class="m-0">Cart</p>
                </div>

            </div>
        </div>
        <div class="img_no"><img class="cart_img" src="./assets/images/No..png" alt=""></div>
    </section>
    <!-- =============== MOBILE FOOTER END ==================== -->



    <!-- =============== MOBILE SEARCH START ==================== -->
    <section id="mobile_search" class="d-lg-none">
        <div class="container">
            <form action="">
                <input type="text" placeholder="Search">
                <button type="submit">
                    <iconify-icon icon="uil:search" width="24" height="24"></iconify-icon>
                </button>

                <span class="close"><iconify-icon icon="ic:round-close" width="24"
                        height="24"></iconify-icon></span>
            </form>

            <div class="filter_cart">
                <div class="row g-3">

                    <div class="col-6">
                        <div class="shadow card_box pb-2 mt-3">
                            <img class="img-fluid" src="./assets/images/Products/1.png" alt="">
                            <div class="details">
                                <h4 class="m-0">Green Apple</h4>
                                <b>$14.99</b>
                                <del>$20.99</del>
                            </div>
                            <div class="review">
                                <span><iconify-icon icon="twemoji:star" width="18" height="18"></iconify-icon>
                                    <iconify-icon icon="twemoji:star" width="18" height="18"></iconify-icon>
                                    <iconify-icon icon="twemoji:star" width="18" height="18"></iconify-icon>
                                    <iconify-icon icon="twemoji:star" width="18" height="18"></iconify-icon>
                                    <!-- <iconify-icon icon="heroicons:star" width="18" height="18"></iconify-icon> -->
                                    <span class="star"><iconify-icon icon="ph:star-thin" width="18"
                                            height="17"></iconify-icon></span>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="shadow card_box pb-2 mt-3">
                            <img class="img-fluid" src="./assets/images/Products/2.png" alt="">
                            <div class="details">
                                <h4 class="m-0">Surjapur Mango</h4>
                                <b>$14.99</b>
                                <del>$20.99</del>
                            </div>
                            <div class="review">
                                <span><iconify-icon icon="twemoji:star" width="18" height="18"></iconify-icon>
                                    <iconify-icon icon="twemoji:star" width="18" height="18"></iconify-icon>
                                    <iconify-icon icon="twemoji:star" width="18" height="18"></iconify-icon>
                                    <iconify-icon icon="twemoji:star" width="18" height="18"></iconify-icon>
                                    <span class="star"><iconify-icon icon="ph:star-thin" width="18"
                                            height="17"></iconify-icon></span>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="shadow card_box pb-2 mt-1">
                            <img class="img-fluid" src="./assets/images/Products/3.png" alt="">
                            <div class="details">
                                <h4 class="m-0">Red Tomatos</h4>
                                <b>$14.99</b>
                                <del>$20.99</del>
                            </div>
                            <div class="review">
                                <span><iconify-icon icon="twemoji:star" width="18" height="18"></iconify-icon>
                                    <iconify-icon icon="twemoji:star" width="18" height="18"></iconify-icon>
                                    <iconify-icon icon="twemoji:star" width="18" height="18"></iconify-icon>
                                    <iconify-icon icon="twemoji:star" width="18" height="18"></iconify-icon>
                                    <span class="star"><iconify-icon icon="ph:star-thin" width="18"
                                            height="17"></iconify-icon></span>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="shadow card_box pb-2 mt-1">
                            <img class="img-fluid" src="./assets/images/Products/4.png" alt="">
                            <div class="details">
                                <h4 class="m-0">Fresh Cauliflower</h4>
                                <b>$14.99</b>
                                <del>$20.99</del>
                            </div>
                            <div class="review">
                                <span><iconify-icon icon="twemoji:star" width="18" height="18"></iconify-icon>
                                    <iconify-icon icon="twemoji:star" width="18" height="18"></iconify-icon>
                                    <iconify-icon icon="twemoji:star" width="18" height="18"></iconify-icon>
                                    <iconify-icon icon="twemoji:star" width="18" height="18"></iconify-icon>
                                    <span class="star"><iconify-icon icon="ph:star-thin" width="18"
                                            height="17"></iconify-icon></span>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="shadow card_box pb-2 mt-1">
                            <img class="img-fluid" src="./assets/images/Products/5.png" alt="">
                            <div class="details">
                                <h4 class="m-0">Green Lettuce</h4>
                                <b>$14.99</b>
                                <del>$20.99</del>
                            </div>
                            <div class="review">
                                <span><iconify-icon icon="twemoji:star" width="18" height="18"></iconify-icon>
                                    <iconify-icon icon="twemoji:star" width="18" height="18"></iconify-icon>
                                    <iconify-icon icon="twemoji:star" width="18" height="18"></iconify-icon>
                                    <iconify-icon icon="twemoji:star" width="18" height="18"></iconify-icon>
                                    <span class="star"><iconify-icon icon="ph:star-thin" width="18"
                                            height="17"></iconify-icon></span>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="shadow card_box pb-2 mt-1">
                            <img class="img-fluid" src="./assets/images/Products/6.png" alt="">
                            <div class="details">
                                <h4 class="m-0">Bell Paper</h4>
                                <b>$14.99</b>
                                <del>$20.99</del>
                            </div>
                            <div class="review">
                                <span><iconify-icon icon="twemoji:star" width="18" height="18"></iconify-icon>
                                    <iconify-icon icon="twemoji:star" width="18" height="18"></iconify-icon>
                                    <iconify-icon icon="twemoji:star" width="18" height="18"></iconify-icon>
                                    <iconify-icon icon="twemoji:star" width="18" height="18"></iconify-icon>
                                    <span class="star"><iconify-icon icon="ph:star-thin" width="18"
                                            height="17"></iconify-icon></span>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="shadow card_box pb-2 mt-1">
                            <img class="img-fluid" src="./assets/images/Products/7.png" alt="">
                            <div class="details">
                                <h4 class="m-0">Green Chilli</h4>
                                <b>$14.99</b>
                                <del>$20.99</del>
                            </div>
                            <div class="review">
                                <span><iconify-icon icon="twemoji:star" width="18" height="18"></iconify-icon>
                                    <iconify-icon icon="twemoji:star" width="18" height="18"></iconify-icon>
                                    <iconify-icon icon="twemoji:star" width="18" height="18"></iconify-icon>
                                    <iconify-icon icon="twemoji:star" width="18" height="18"></iconify-icon>
                                    <span class="star"><iconify-icon icon="ph:star-thin" width="18"
                                            height="17"></iconify-icon></span>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="shadow card_box pb-2 mt-1">
                            <img class="img-fluid" src="./assets/images/Products/8.png" alt="">
                            <div class="details">
                                <h4 class="m-0">Eggplant</h4>
                                <b>$14.99</b>
                                <del>$20.99</del>
                            </div>
                            <div class="review">
                                <span><iconify-icon icon="twemoji:star" width="18" height="18"></iconify-icon>
                                    <iconify-icon icon="twemoji:star" width="18" height="18"></iconify-icon>
                                    <iconify-icon icon="twemoji:star" width="18" height="18"></iconify-icon>
                                    <iconify-icon icon="twemoji:star" width="18" height="18"></iconify-icon>
                                    <span class="star"><iconify-icon icon="ph:star-thin" width="18"
                                            height="17"></iconify-icon></span>
                                </span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- =============== MOBILE SEARCH END ==================== -->




    @yield('frontend_content')

    @php
        $cart = session('cart', []);
        $qty = array_sum(array_column($cart, 'qty'));
    @endphp


    <!-- =============== CART OFFCANVAS ==================== -->

    <div class="offcanvas offcanvas-end" tabindex="-1" id="count" aria-labelledby="countLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="countLabel">Your Cart</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">

            @php
                $totalAmount = 0;
            @endphp

            @forelse ($cart as $id => $data)

        @php
            $totalAmount += $data['price'] * $data['qty'];
        @endphp

            <div class="row mb-3 align-items-center">
                <div class="col-2">
                    <img class="img-fluid" src="{{ asset('storage/product_images/' . $data['image']) }}" alt="">
                </div>
                <div class="col-8">
                    <p class="mb-0 pb-0">{{ $data['title'] }}</p>
                    <p class="mb-0 pb-0">{{ $data['descriptions'] }}</p>
                    <b>Price : {{ $data['price'] }}</b>
                    <b>Qty : {{ $data['qty'] }}</b>
                </div>
                <div class="col-2">
                    <a class="text-danger" href="{{ route('frontend.remove.cart' , $id) }}"><iconify-icon icon="fluent:delete-20-regular" width="20" height="20"></iconify-icon></a>
                </div>
            </div>


            @empty
            <p class="text-center text-danger">No Cart Found</p>
            @endforelse

            <b>Sub-Total = {{ $totalAmount }}৳  </b>

            <a href="{{ route('frontend.checkout') }}" class="btn btn-outline-success w-100">Checkout</a>

        </div>
    </div>

    {{-- @foreach (session('cart') as $data)
       @dd($data)
    @endforeach --}}

    <!-- =============== CART OFFCANVAS END ==================== -->



    @php
        $cart = session('cart', []);
        $qty = array_sum(array_column($cart, 'qty'));
    @endphp

    <!-- =============== CART BADGE ==================== -->
    <div class="count_cart">
        <button type="button" class="btn btn-success position-relative" data-bs-toggle="offcanvas"
            data-bs-target="#count" aria-controls="count">
            <span class="icon"><iconify-icon icon="tdesign:cart-add-filled" width="24"
                    height="24"></iconify-icon></span>
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                {{ $qty ? $qty : 0 }}
                <span class="visually-hidden">unread messages</span>
            </span>
        </button>
    </div>
    <!-- =============== CART BADGE END ==================== -->

    {{-- @dd($qty); --}}


    <!-- =============== HOME FOOTER START ==================== -->
    <footer>
        <div class="footer_wrap">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-3 detail">
                        <h4>About Shopery</h4>
                        <p class="py-4">Morbi cursus porttitor enim lobortis molestie. Duis gravida turpis dui, eget
                            bibendum magna congue nec.</p>
                        <span><b>(219) 555-0114 <h6>or</h6>
                                Proxy@gmail.com </b>
                        </span>
                    </div>

                    <div class="col-lg-2 col-6 list">
                        <h3>My Account</h3>
                        <ul class="">
                            <li>My Account</li>
                            <li>Order History</li>
                            <li>Shoping Cart</li>
                            <li>Wishlist</li>
                            <li>Settings</li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-6 list">
                        <h3>Helps</h3>
                        <ul class="">
                            <li>Contact</li>
                            <li>Faqs</li>
                            <li>Terms & Condition</li>
                            <li>Privacy Policy</li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-6 list">
                        <h3>Proxy</h3>
                        <ul class="">
                            <li>About</li>
                            <li>Shop</li>
                            <li>Product</li>
                            <li>Products Details</li>
                            <li>Track Order</li>
                        </ul>
                    </div>

                    <div class="col-lg-3 d-lg-block d-none list">
                        <h3>Instagram</h3>
                        <div class="row justify-content-between py-4">
                            <div class="insta col-lg-3"><img class="img img-fluid" style="width: 100%;"
                                    src="{{ asset('frontend_assets/assets/images/footer/insta_1.png') }}"
                                    alt=""></div>
                            <div class="insta col-lg-3"><img class="img img-fluid" style="width: 100%;"
                                    src="{{ asset('frontend_assets/assets/images/footer/insta_2.png') }}"
                                    alt=""></div>
                            <div class="insta col-lg-3"><img class="img img-fluid" style="width: 100%;"
                                    src="{{ asset('frontend_assets/assets/images/footer/insta_3.png') }}"
                                    alt=""></div>
                            <div class="insta col-lg-3"><img class="img img-fluid" style="width: 100%;"
                                    src="{{ asset('frontend_assets/assets/images/footer/insta_4.png') }}"
                                    alt=""></div>
                            <div class="insta col-lg-3 py-3"><img class="img img-fluid" style="width: 100%;"
                                    src="{{ asset('frontend_assets/assets/images/footer/insta_5.png') }}"
                                    alt=""></div>
                            <div class="insta col-lg-3 py-3"><img class="img img-fluid" style="width: 100%;"
                                    src="{{ asset('frontend_assets/assets/images/footer/insta_6.png') }}"
                                    alt=""></div>
                            <div class="insta col-lg-3 py-3"><img class="img img-fluid" style="width: 100%;"
                                    src="{{ asset('frontend_assets/assets/images/footer/insta_7.png') }}"
                                    alt=""></div>
                            <div class="insta col-lg-3 py-3"><img class="img img-fluid" style="width: 100%;"
                                    src="{{ asset('frontend_assets/assets/images/footer/insta_8.png') }}"
                                    alt=""></div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-6 d-lg-none d-block list">
                        <h3>Categories</h3>
                        <ul class="">
                            <li>Fruit & Vegetables</li>
                            <li>Meat & Fish</li>
                            <li>Bread & Bakery</li>
                            <li>Beauty & Health</li>
                        </ul>
                    </div>

                </div>
                <hr>
                <div>
                    <div class="row justify-content-between">
                        <div class="col-lg-3 media pt-3">
                            <a href="https://www.facebook.com/share/19ap6k5GVj/"><span><iconify-icon
                                        icon="jam:facebook" width="24" height="24"></iconify-icon></span></a>
                            <a
                                href="https://l.facebook.com/l.php?u=https%3A%2F%2Flinkedin.com%2Fin%2Fmuntahina-islam-tiha-733b18376%3Ffbclid%3DIwZXh0bgNhZW0CMTAAYnJpZBExZG5YOXBIMDVmTGI0ak1uTQEeOZP_lvt9DCtyp-Se3OLleVkinHUifxRSHkACXGjcokqJJUP6_Q9kmMwhuQI_aem_ue7ZSm9USfAGJjYQ33XFKg&h=AT2_yQUkYBxcCZb-UpZnuyDZn64X5LDqpIuaGEiKXI7cw5SbkdYT0ITLZQCyq5ylYlIg2lTvVU5ibYNrZkj6cNOHmFb9QXdzg6wKCP7AYEd1k63isIA_6VmXZL-J7jIPDNEF"><span><iconify-icon
                                        icon="ri:twitter-fill" width="24"
                                        height="24"></iconify-icon></span></a>
                            <a
                                href="https://l.facebook.com/l.php?u=https%3A%2F%2Flinkedin.com%2Fin%2Fmuntahina-islam-tiha-733b18376%3Ffbclid%3DIwZXh0bgNhZW0CMTAAYnJpZBExZG5YOXBIMDVmTGI0ak1uTQEeOZP_lvt9DCtyp-Se3OLleVkinHUifxRSHkACXGjcokqJJUP6_Q9kmMwhuQI_aem_ue7ZSm9USfAGJjYQ33XFKg&h=AT2_yQUkYBxcCZb-UpZnuyDZn64X5LDqpIuaGEiKXI7cw5SbkdYT0ITLZQCyq5ylYlIg2lTvVU5ibYNrZkj6cNOHmFb9QXdzg6wKCP7AYEd1k63isIA_6VmXZL-J7jIPDNEF"><span><iconify-icon
                                        icon="jam:pinterest" width="24" height="24"></iconify-icon></span></a>
                            <a
                                href="https://l.facebook.com/l.php?u=https%3A%2F%2Flinkedin.com%2Fin%2Fmuntahina-islam-tiha-733b18376%3Ffbclid%3DIwZXh0bgNhZW0CMTAAYnJpZBExZG5YOXBIMDVmTGI0ak1uTQEeOZP_lvt9DCtyp-Se3OLleVkinHUifxRSHkACXGjcokqJJUP6_Q9kmMwhuQI_aem_ue7ZSm9USfAGJjYQ33XFKg&h=AT2_yQUkYBxcCZb-UpZnuyDZn64X5LDqpIuaGEiKXI7cw5SbkdYT0ITLZQCyq5ylYlIg2lTvVU5ibYNrZkj6cNOHmFb9QXdzg6wKCP7AYEd1k63isIA_6VmXZL-J7jIPDNEF"><span><iconify-icon
                                        icon="proicons:instagram" width="24"
                                        height="24"></iconify-icon></span></a>
                        </div>

                        <div class="col-lg-5 pt-3 copyright">
                            <p>Ecobazar eCommerce Designed by Muntahina Tiha</p>
                        </div>

                        <div class="col-lg-4 pt-3 payment">
                            <a href="#"><img src="{{ asset('frontend_assets/assets/images/footer/1.png') }}"
                                    alt=""></a>
                            <a href="#"><img src="{{ asset('frontend_assets/assets/images/footer/2.png') }}"
                                    alt=""></a>
                            <a href="#"><img src="{{ asset('frontend_assets/assets/images/footer/3.png') }}"
                                    alt=""></a>
                            <a href="#"><img src="{{ asset('frontend_assets/assets/images/footer/4.png') }}"
                                    alt=""></a>
                            <a href="#"><img src="{{ asset('frontend_assets/assets/images/footer/5.png') }}"
                                    alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- =============== HOME FOOTER END ==================== -->




    <!-- JQUERY -->
    <script src="{{ asset('frontend_assets/assets/js/jquery-3.7.1.min.js') }}"></script>
    <!-- ICONIFY -->
    <script src="https://code.iconify.design/iconify-icon/3.0.0/iconify-icon.min.js"></script>
    <!-- BOOTSTRAP JS -->
    <script src="{{ asset('frontend_assets/assets/js/bootstrap.bundle.min.js') }}"></script>
    <!-- SLICK SLIDER JS -->
    <script src="{{ asset('frontend_assets/assets/js/slick.min.js') }}"></script>
    <!-- CATEGORY FILTER -->
    <script src="{{ asset('frontend_assets/assets/js/category-filter.js') }}"></script>
    <!-- ZOOM -->
    <script src="{{ asset('frontend_assets/assets/js/zoomsl.js') }}"></script>
    <!-- COUNT DOWN JS -->
    <script src="{{ asset('frontend_assets/assets/jquery.countdown-2.2.0/jquery.countdown.js') }}"></script>
    <script src="{{ asset('frontend_assets/assets/jquery.countdown-2.2.0/jquery.countdown.min.js') }}"></script>
    <!-- VENO BOX -->
    <script
        src="{{ asset('frontend_assets/assets/Yet-Another-jQuery-Responsive-Lightbox-Plugin-VenoBox/src/venobox.esm.js') }}">
    </script>
    <!-- APP JS -->
    <script src="{{ asset('frontend_assets/assets/js/app.js') }}"></script>

    @stack('frontend_js')

</body>

</html>
