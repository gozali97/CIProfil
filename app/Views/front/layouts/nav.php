<header class="header navbar-area">
    <!-- Start Header Middle -->
    <div class="header-middle">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-3 col-7">
                    <!-- Start Header Logo -->
                    <a class="navbar-brand logo-bumdes nav-logo" href="index.html">
                        <img src="https://bumdes.id/id/public/assets/home/img/bumdes.svg" alt="Logo">
                    </a>
                    <!-- End Header Logo -->
                </div>
                <div class="col-lg-5 col-md-7 d-xs-none">
                    <!-- Start Main Menu Search -->
                    <div class="main-menu-search">
                        <!-- navbar search start -->
                        <div class="navbar-search search-style-5">
                            <div class="search-input">
                                <input type="text" placeholder="Search">
                            </div>
                            <div class="search-btn">
                                <button><i class="lni lni-search-alt"></i></button>
                            </div>
                        </div>
                        <!-- navbar search Ends -->
                    </div>
                    <!-- End Main Menu Search -->
                </div>
                <div class="col-lg-4 col-md-2 col-5">
                    <div class="middle-right-area">
                        <div class="nav-hotline">
                            <i class="lni lni-phone"></i>
                            <h3>Hotline:
                                <span>(+100) 123 456 7890</span>
                            </h3>
                        </div>
                        <div class="navbar-cart">
                            <div>
                                <!-- Start Header Logo -->
                                <a class="navbar-brand logo-bumdes nav-logo" href="index.html">
                                    <img class="ms-3" src="https://seeklogo.com/images/K/kemendesa-logo-8698B6D63A-seeklogo.com.png" alt="Logo" height="40 px">
                                </a>
                                <!-- End Header Logo -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Middle -->
    <!-- Start Header Bottom -->
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 col-md-6 col-12">
                <div class="nav-inner">
                    <!-- Start Navbar -->
                    <nav class="navbar navbar-expand-lg">
                        <button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                            <ul id="nav" class="navbar-nav ms-auto">
                                <li class="nav-item">
                                    <a href="<?= base_url('/') ?>" class="active" aria-label="Toggle navigation">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('/profil') ?>" aria-label="Toggle navigation">Profil</a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('/product') ?>" aria-label="Toggle navigation">Katalog</a>
                                </li>
                                <li class="nav-item">
                                    <a href="contact.html" aria-label="Toggle navigation">Contact Us</a>
                                </li>
                            </ul>
                        </div> <!-- navbar collapse -->
                    </nav>
                    <!-- End Navbar -->
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Start Nav Social -->
                <!-- {{-- <div class="nav-social">
                    <h5 class="title">Follow Us:</h5>
                    <ul>
                        <li>
                            <a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><i class="lni lni-twitter-original"></i></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><i class="lni lni-instagram"></i></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><i class="lni lni-skype"></i></a>
                        </li>
                    </ul>
                </div> --}} -->
                <!-- End Nav Social -->
                <div class="navbar-cart nav-social">
                    <div class="wishlist">
                        <a href="javascript:void(0)">
                            <i class="lni lni-heart"></i>
                            <span class="total-items">0</span>
                        </a>
                    </div>
                    <div class="cart-items">
                        <a href="javascript:void(0)" class="main-btn">
                            <i class="lni lni-cart"></i>
                            <span class="total-items">2</span>
                        </a>
                        <!-- Shopping Item -->
                        <div class="shopping-item">
                            <div class="dropdown-cart-header">
                                <span>2 Items</span>
                                <a href="cart.html">View Cart</a>
                            </div>
                            <ul class="shopping-list">
                                <li>
                                    <a href="javascript:void(0)" class="remove" title="Remove this item"><i class="lni lni-close"></i></a>
                                    <div class="cart-img-head">
                                        <a class="cart-img" href="product-details.html"><img src="{{ asset('front/assets/images/header/cart-items/item1.jpg') }}" alt="#"></a>
                                    </div>

                                    <div class="content">
                                        <h4><a href="product-details.html">
                                                Apple Watch Series 6</a></h4>
                                        <p class="quantity">1x - <span class="amount">$99.00</span></p>
                                    </div>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="remove" title="Remove this item"><i class="lni lni-close"></i></a>
                                    <div class="cart-img-head">
                                        <a class="cart-img" href="product-details.html"><img src="{{ asset('front/assets/images/header/cart-items/item2.jpg') }}" alt="#"></a>
                                    </div>
                                    <div class="content">
                                        <h4><a href="product-details.html">Wi-Fi Smart Camera</a></h4>
                                        <p class="quantity">1x - <span class="amount">$35.00</span></p>
                                    </div>
                                </li>
                            </ul>
                            <div class="bottom">
                                <div class="total">
                                    <span>Total</span>
                                    <span class="total-amount">$134.00</span>
                                </div>
                                <div class="button">
                                    <a href="checkout.html" class="btn animate">Checkout</a>
                                </div>
                            </div>
                        </div>
                        <!--/ End Shopping Item -->
                    </div>
                    <div class="ms-3">
                        <!-- @if (Route::has('login'))
                            @auth -->
                        <?php if (session('logged_in')) : ?>
                            <a href="<?= base_url('/dashboard') ?>" class="text-sm text-success underline"><?= session('nama_bumdes') ?></a>
                            <a class=" btn btn-logout main-btn text-success" href="<?= base_url('logout') ?>"><i class="lni lni-enter"></i> </a>
                        <?php else : ?>
                            <a href="<?= base_url('login') ?>" class="btn btn-login">Masuk</a>
                            <a href="<?= base_url('register') ?>" class="btn btn-login">Daftar</a>
                        <?php endif ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Bottom -->
</header>