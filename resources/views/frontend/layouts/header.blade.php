<!-- Header -->
    <header class="header chasmishco_header bg-black">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-xl-3 col-lg-2 col-4">
                    <div class="logo">
                        <a href="{{ route('/') }}">
                            <img src="{{ asset('assets/img/logo/Logo-Tendance-Optique.png') }}" alt="chasmishco Logo">
                        </a>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-10 col-8 position-relative">
                    <div class="header_right_sidebar">
                        <div class="login_account">
                            <div class="account">
                                <ul>
                                    <li>
                                        <a href="{{ route('login-register') }}">Login</a>
                                    </li>
                                    
                                </ul>
                            </div>
                            <div class="mini_cat_box">
                                <div class="shop_cart_icon shop_trigger shopping_basket header-cart">
                                    <img src="{{ asset('assets/img/icons/icon2.png') }}" alt="icons">
                                    <span class="shop_count">3</span>
                                    <span class="cart_text">Chariot</span>
                                </div>
                            </div>
                        </div>
                        <div class="glass_toggle_menu">
                            <nav class="mainmenu_nav ">
                                <ul class="main_menu">
                                    <li class="">
                                        <a href="{{ route('offers') }}">Offres</a>
                                        
                                    </li>
                                    <li class="">
                                        <a href="{{ route('brands') }}">Marques</a>
                                        
                                    </li>
                                    <li class="">
                                        <a href="{{ route('stores') }}">Magasins</a>
                                       
                                    </li>
                                    
                                    <li class="drop">
                                        <a href="#">Contact</a>
                                        <ul class="dropdown">
                                            <li><a href="{{ route('contact-us') }}">Contactez-nous</a></li>
                                            <li><a href="{{ route('login-register') }}">Recrutement</a></li>
                                           
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{ route('indexopticien') }}">Opticien Privé</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('clubtendance') }}">Club Tendance</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('shop') }}">Essayage</a>
                                    </li>
                                </ul>
                            </nav>

                            <div class="hamburger-box button mobile-toggle">
                                <span class="mobile-toggle__icon"></span>
                            </div>
                        </div>

                        <div class="mobile-menu-toggle d-lg-none">
                            <button class="menu-toggle">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </header>

    <!-- Mobile Menu Start -->
    <div class="mobile-menu mobile-menu-items" >

        <div class="mobile-menu-close">
            <button class="close-toggle">
                <span></span>
                <span></span>
            </button>
        </div>

        <ul class="main_menu">
            <li class="">
                <a href="{{ route('offers') }}">Offres</a>
                
            </li>
            <li class="">
                <a href="{{ route('brands') }}">Marques</a>
                
            </li>
            <li class="">
                <a href="{{ route('stores') }}">Magasins</a>
               
            </li>
            
            <li class="drop">
                <a href="#">Contact</a>
                <ul class="dropdown">
                    <li><a href="{{ route('contact-us') }}">Contactez-nous</a></li>
                    <li><a href="{{ route('login-register') }}">Recrutement</a></li>
                   
                </ul>
            </li>
            <li>
                <a href="{{ route('indexopticien') }}">Opticien Privé</a>
            </li>
            <li>
                <a href="{{ route('clubtendance') }}">Club Tendance</a>
            </li>
            <li>
                <a href="{{ route('shop') }}">Essayage</a>
            </li>
        </ul>
    </div>
    <div class="menu-overlay"></div>
    <!-- Mobile Menu End -->
    <!-- Mini Cart Wrap Start -->
    <div class="mini-cart-wrap">
        <!-- Mini Cart Top -->
        <div class="mini-cart-top">
            <button class="close-cart">Close Cart <i class="icofont icofont-close"></i> </button>
        </div>
        <!-- Mini Cart Products -->
        <ul class="mini-cart-products">
            <li>
                <a class="image"> <img src="{{ asset('assets/img/product/product-1.jpg') }}" alt="Product"> </a>
                <div class="content"> <a href="#" class="title">Simple Silacon Glasses</a> <span class="price">Price: $59</span> <span class="qty">Qty: 01</span> </div>
                <button class="remove"> <i class="fa fa-trash-o"></i> </button>
            </li>
            <li>
                <a class="image"> <img src="{{ asset('assets/img/product/product-2.jpg') }}" alt="Product"> </a>
                <div class="content"> <a href="#" class="title">Simple Easin Glasses</a> <span class="price">Price: $20</span> <span class="qty">Qty: 02</span> </div>
                <button class="remove"> <i class="fa fa-trash-o"></i> </button>
            </li>
            <li>
                <a class="image"> <img src="{{ asset('assets/img/product/product-3.jpg') }}" alt="Product"> </a>
                <div class="content"> <a href="#" class="title">Simple Macrox Glasses</a> <span class="price">Price: $320</span> <span class="qty">Qty: 03</span> </div>
                <button class="remove"> <i class="fa fa-trash-o"></i> </button>
            </li>
        </ul>
        <!-- Mini Cart Bottom -->
        <div class="mini-cart-bottom">
            <h4 class="sub-total">Total:
                <span>$120</span>
            </h4>
            <div class="button"> <a href="{{ route('checkout') }}">CHECKOUT</a> </div>
        </div>
    </div>
    <!-- Mini Cart Wrap End -->