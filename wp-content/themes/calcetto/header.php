<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Calcetto</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,300i,400,400i,600,700,800,900%7CPoppins:300,400,500,600,700,800,900" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body>
    <!-- Start Header Area -->
    <header class="header-area header-style__2 header-transparent">
        <!-- main header start -->
        <div class="main-header d-none d-lg-block">

            <!-- header middle area start -->
            <div class="header-main-area sticky">
                <div class="container">
                    <div class="row align-items-center position-relative">
                        <!-- start logo area -->
                        <div class="col-auto">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="<?php echo get_theme_file_uri('img/logo.png')?>" alt="Calcetto">
                                </a>
                            </div>
                        </div>
                        <!-- start logo area -->

                        <!-- main menu area start -->
                        <div class="col-auto position-static ml-auto">
                            <div class="main-menu-area">
                                <div class="main-menu">
                                    <!-- main menu navbar start -->
                                    <nav class="desktop-menu">
                                        <ul>
                                            <li class="active"><a href="index.html">Home</a>  </li>

                                            <li><a href="about.html">About </a></li>

                                            <li><a href="#">Products <i class="fa fa-angle-down"></i></a>
                                                <ul class="dropdown">
                                                    <li><a href="#">New Launch</a></li>
                                                    <li><a href="#">Men</a></li>
                                                    <li><a href="#">Women</a></li>
                                                </ul>
                                            </li>

                                            <li><a href="#">Our Stores</a></li>

                                            <li><a href="contact.html">Contact us</a></li>
                                        </ul>
                                    </nav>
                                    <!-- main menu navbar end -->
                                </div>
                            </div>
                        </div>
                        <!-- main menu area end -->

                        <!-- mini cart area start -->
                        <div class="col-auto ml-auto">
                            <div class="header-right">
                                <div class="header-configure-area">
                                    <ul class="nav">
                                        <li>
                                            <a href="#" class="search-trigger">
                                                <img src="<?php echo get_theme_file_uri('img/clt.png')?>" alt="CLT"/></a>
                                        </li>
                                        <li class="mini-cart-wrap">
                                            <a href="#" class="minicart-btn">
											<img src="<?php echo get_theme_file_uri('img/cipramo.png')?>" alt="Cipramo"/>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- mini cart area end -->

                    </div>
                </div>
            </div>
            <!-- header middle area end -->
        </div>
        <!-- main header start -->

        <!-- mobile header start -->
        <!-- mobile header start -->
        <div class="mobile-header d-lg-none d-md-block sticky black-soft">
            <!--mobile header top start -->
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="mobile-main-header">
                            <div class="mobile-logo">
                                <a href="index.html">
								<img src="<?php echo get_theme_file_uri('img/logo1.png')?>" alt="Calcetto"/>
                                </a>
                            </div>
                            <div class="mobile-menu-toggler">
                                <button class="mobile-menu-btn">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- mobile header top start -->
        </div>
        <!-- mobile header end -->
        <!-- mobile header end -->

        <!-- offcanvas mobile menu start -->
        <!-- off-canvas menu start -->
        <aside class="off-canvas-wrapper">
            <div class="off-canvas-overlay"></div>
            <div class="off-canvas-inner-content">
                <div class="btn-close-off-canvas">
                    <i class="fa fa-close"></i>
                </div>

                <div class="off-canvas-inner">
                    <!-- mobile menu start -->
                    <div class="mobile-navigation">

                        <!-- mobile menu navigation start -->
                        <nav>
                            <ul class="mobile-menu">
                                <li><a href="index.html">Home</a></li>

                                <li><a href="about.html">About</a></li>

                                <li class="menu-item-has-children "><a href="#">Products</a>
                                    <ul class="dropdown">
                                        <li><a href="#">New Launch</a></li>
                                        <li><a href="#">Men</a></li>
                                        <li><a href="#">Women</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Our Stores</a></li>
                                <li><a href="contact-us.html">Contact us</a></li>
                            </ul>
                        </nav>
                        <!-- mobile menu navigation end -->
                    </div>
                    <!-- mobile menu end -->

                    <!-- offcanvas widget area start -->
                    <div class="offcanvas-widget-area">
                        <div class="off-canvas-contact-widget">
                            <ul>
                                <li><i class="fa fa-mobile"></i>
                                    <a href="tel:+91 9873439378">+91 9873439378</a>
                                </li>
                                <li><i class="fa fa-envelope-o"></i>
                                    <a href="mailto:sales@calcetto.in">sales@calcetto.in</a>
                                </li>
                            </ul>
                        </div>
                        <div class="off-canvas-social-widget">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                    <!-- offcanvas widget area end -->
                </div>
            </div>
        </aside>
        <!-- off-canvas menu end -->
        <!-- offcanvas mobile menu end -->
    </header>
    <!-- end Header Area -->
