<?php get_header(); ?>

  <main>
        <!-- slider area start -->
        <section class="hero-slider">
            <div class="hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style">
                <!-- single slider item start -->
                <div class="hero-single-slide hero-overlay">
                    <video autoplay="" muted="" loop="" id="myVideo">
                      <source src="<?php echo get_theme_file_uri('img/male.mp4')?>" type="video/mp4">
                    </video>
                </div>

                <!-- single slider item start -->
                <div class="hero-single-slide hero-overlay">
                      <video autoplay="" muted="" loop="" id="Video1">
                      <source src="<?php echo get_theme_file_uri('img/female.mp4')?>" type="video/mp4">
                    </video>
                </div>
            </div>
        </section>
        <!-- slider area end -->


        <!-- counter -->
        <div class="banner-statistics-area" style="background: #dfe0e3;">
            <div class="container">
                <div class="row mtn-30" id="conter-scroll">
                        <div class="col-4 counter text-center">
                            <h2 class="timer count-title count-number" data-to="1000000" data-speed="5000">1000000</h2><h3>+</h3>
                            <p class="count-text ">More Customers</p>
                        </div>
                        <div class="col-4 counter text-center">
                            <h2 class="timer count-title bordr-Counter count-number" data-to="43" data-speed="10"></h2>
                            <p class="count-text ">Brand Stores</p>
                        </div>
                        <div class="col-4 counter text-center">
                            <h2 class="timer count-title count-number" data-to="1000" data-speed="1000"></h2><h3>+</h3>
                            <p class="count-text ">Shoes Options</p>
                        </div>
                </div>
            </div>
        </div>

        <!-- New Arrivals -->
        <section class="service-policy mt-30">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title text-center">
                            <h3 class="title">NEW ARRIVALS</h3>
                        </div>
                    </div>
                </div>
                <!--<div class="row row-10">
                    <div class="col-lg-4 col-sm-6">
                           <img src="img/shoe1.png" />
                            <div style="float: left; width: 64%; position: absolute; top: 67%;left: 50%;  transform: translate(-50%, -50%);">
                                <h4>CLT 905 &nbsp;&nbsp;&nbsp; Rs.1159</h4>
                            </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                           <img src="img/shoe2.png" />
                            <div style="float: left; width: 64%; position: absolute; top: 67%;left: 50%;  transform: translate(-50%, -50%);">
                                <h4>CLT 915 &nbsp;&nbsp;&nbsp; Rs.1159</h4>
                            </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                           <img src="img/shoe3.png" />
                             <div style="float: left; width: 64%; position: absolute; top: 67%;left: 50%;  transform: translate(-50%, -50%);">
                                <h4>CLT 905 &nbsp;&nbsp;&nbsp; Rs.1159</h4>
                            </div>
                    </div>
                </div>-->
                <div class="row">
                    <div class="col-12">
                        <div class="product-carousel--4 slick-row-5 slick-arrow-style">
                            <div class="product-item">
                                <div class="product-thumb">
                                  <img src="<?php echo get_theme_file_uri('img/shoe1.png')?>" alt="Calcetto">
                            <div style="float: left; width: 64%; position: absolute; top: 67%;left: 50%;  transform: translate(-50%, -50%);">
                                <h4>CLT 905 &nbsp;&nbsp;&nbsp; Rs.1159</h4>
                            </div>
                                </div>
                            </div>
                            <!-- product single item end -->

                            <div class="product-item">
                                <div class="product-thumb">
                                  <img src="<?php echo get_theme_file_uri('img/shoe2.png')?>" alt="Calcetto">
                            <div style="float: left; width: 64%; position: absolute; top: 67%;left: 50%;  transform: translate(-50%, -50%);">
                                <h4>CLT 905 &nbsp;&nbsp;&nbsp; Rs.1159</h4>
                            </div>
                                </div>
                            </div>
                            <!-- product single item end -->

                            <div class="product-item">
                                <div class="product-thumb">
                                  <img src="<?php echo get_theme_file_uri('img/shoe3.png')?>" alt="Calcetto">
                                  <div style="float: left; width: 64%; position: absolute; top: 67%;left: 50%;  transform: translate(-50%, -50%);">
                                <h4>CLT 905 &nbsp;&nbsp;&nbsp; Rs.1159</h4>
                            </div>
                                </div>
                            </div>
                            <!-- product single item end -->

                            <div class="product-item">
                                <div class="product-thumb">
                                  <img src="<?php echo get_theme_file_uri('img/shoe2.png')?>" alt="Calcetto">
                                  <div style="float: left; width: 64%; position: absolute; top: 67%;left: 50%;  transform: translate(-50%, -50%);">
                                <h4>CLT 905 &nbsp;&nbsp;&nbsp; Rs.1159</h4>
                            </div>
                                </div>
                            </div>
                            <!-- product single item end -->

                            <div class="product-item">
                                <div class="product-thumb">
                                  <img src="<?php echo get_theme_file_uri('img/shoe1.png')?>" alt="Calcetto">
                                  <div style="float: left; width: 64%; position: absolute; top: 67%;left: 50%;  transform: translate(-50%, -50%);">
                                <h4>CLT 905 &nbsp;&nbsp;&nbsp; Rs.1159</h4>
                            </div>
                                </div>
                            </div>
                            <!-- product single item end -->

                            <div class="product-item">
                                <div class="product-thumb">
                                  <img src="<?php echo get_theme_file_uri('img/shoe3.png')?>" alt="Calcetto">
                                  <div style="float: left; width: 64%; position: absolute; top: 67%;left: 50%;  transform: translate(-50%, -50%);">
                                <h4>CLT 905 &nbsp;&nbsp;&nbsp; Rs.1159</h4>
                            </div>
                                </div>
                            </div>
                            <!-- product single item end -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Model imgs -->
        <section class="service-policy mt-auto">
          <img src="<?php echo get_theme_file_uri('img/shakti.jpg')?>" alt="Calcetto">
        </section>


        <section class="service-policy online" style="background: #dfe0e3;">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="text-center mt-30">
                            <h3 class="title">OUR ONLINE PLATFORMS</h3>
                        </div>
                    </div>
                </div>
                <div class="row row-10 ptb-50">
                    <div class="col-lg-3 col-sm-6 col-6 text-center">
                      <img src="<?php echo get_theme_file_uri('img/amazon.png')?>" alt="Calcetto">
                    </div>
                    <div class="col-lg-3 col-sm-6 col-6 text-center">
                      <img src="<?php echo get_theme_file_uri('img/flipkart.png')?>" alt="Calcetto">
                    </div>
                    <div class="col-lg-3 col-sm-6 col-6 text-center">
                      <img src="<?php echo get_theme_file_uri('img/myntra.png')?>" alt="Calcetto">
                    </div>
                    <div class="col-lg-3 col-sm-6 col-6 text-center">
                      <img src="<?php echo get_theme_file_uri('img/paytm.png')?>" alt="Calcetto">
                    </div>
                    <div class="col-lg-3 col-sm-6 col-6 text-center">
                      <img src="<?php echo get_theme_file_uri('img/ajio.png')?>" alt="Calcetto">
                    </div>
                    <div class="col-lg-3 col-sm-6 col-6 text-center">
                      <img src="<?php echo get_theme_file_uri('img/fynd.png')?>" alt="Calcetto">
                    </div>
                    <div class="col-lg-3 col-sm-6 col-6 text-center">
                      <img src="<?php echo get_theme_file_uri('img/udaan.png')?>" alt="Calcetto">
                    </div>
                    <div class="col-lg-3 col-sm-6 col-6 text-center">
                      <img src="<?php echo get_theme_file_uri('img/bijnis.png')?>" alt="Calcetto">
                    </div>
                </div>
                <div class="row  ptb-50">
                    <div class="col-6 col-sm-6 col-12">
                        <div class="text-right mt-30">
                            <h4 class="title">Check Stores Near You</h4>
                        </div>
                    </div>
                    <div class="col-4 col-sm-4 col-12">
                        <div class="text-center mt-20">
                            <div class="single-input-item">
                                        <select name="country nice-select" id="Select1" style="display: none;">
                                            <option value="Afghanistan">Delhi</option>
                                            <option value="Albania">UP</option>
                                            <option value="Algeria">Haryana</option>
                                        </select>
                                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

       
    </main>

  <?php get_footer();

?>