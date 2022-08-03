<?php 
/*Template Name: Home*/
get_header();
?>



        <!-- Banner Section -->
        <section class="banner-section">
            <div class="banner-carousel owl-carousel owl-theme">
                <!-- Slide Item -->
                <div class="slide-item" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/main-slider/1.jpg);">
                    <div class="auto-container">
                        <div class="inner-box">
                            <div class="content-box">
                               <!--  <span class="price">$ 1.2K<small>/month</small></span> -->
                                <h2>Beautiful House in The Best Place.</h2>
                               <!--  <ul class="property-info">
                                    <li>
                                        <span class="icon flaticon-bed-1"></span>
                                        <strong>03</strong>
                                        <p>Bed Room</p>
                                    </li>
                                    <li>
                                        <span class="icon flaticon-kitchen"></span>
                                        <strong>01</strong>
                                        <p>Kitchen Room</p>
                                    </li>
                                    <li>
                                        <span class="icon flaticon-grass"></span>
                                        <strong>02</strong>
                                        <p>Play Ground</p>
                                    </li>
                                </ul> -->
                                <!-- <div class="address"><span class="icon fa fa-map-marker-alt"></span>40 Baria Sreet 133/2
                                    Stock Exchange, Barclas Center </div> -->
                               
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide Item -->
               <!--  <div class="slide-item" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/main-slider/2.jpg);">
                    <div class="auto-container">
                        <div class="inner-box">
                            <div class="content-box">
                                <span class="price">$ 1.2K<small>/month</small></span>
                                <h2>Beautiful House in The Best Place.</h2>
                                <ul class="property-info">
                                    <li>
                                        <span class="icon flaticon-bed-1"></span>
                                        <strong>03</strong>
                                        <p>Bed Room</p>
                                    </li>
                                    <li>
                                        <span class="icon flaticon-kitchen"></span>
                                        <strong>01</strong>
                                        <p>Kitchen Room</p>
                                    </li>
                                    <li>
                                        <span class="icon flaticon-grass"></span>
                                        <strong>02</strong>
                                        <p>Play Ground</p>
                                    </li>
                                </ul>
                                <div class="address"><span class="icon fa fa-map-marker-alt"></span>40 Baria Sreet 133/2
                                    Stock Exchange, Barclas Center </div>
                                
                            </div>
                        </div>
                    </div>
                </div> -->

                <!-- Slide Item -->
                <div class="slide-item" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/main-slider/3.jpg);">
                    <div class="auto-container">
                        <div class="inner-box">
                            <div class="content-box">
                                <!-- <span class="price">$ 1.2K<small>/month</small></span> -->
                                <!-- <h2>Beautiful House in The Best Place.</h2> -->
                            <!--     <ul class="property-info">
                                    <li>
                                        <span class="icon flaticon-bed-1"></span>
                                        <strong>03</strong>
                                        <p>Bed Room</p>
                                    </li>
                                    <li>
                                        <span class="icon flaticon-kitchen"></span>
                                        <strong>01</strong>
                                        <p>Kitchen Room</p>
                                    </li>
                                    <li>
                                        <span class="icon flaticon-grass"></span>
                                        <strong>02</strong>
                                        <p>Play Ground</p>
                                    </li>
                                </ul> -->
                               <!--  <div class="address"><span class="icon fa fa-map-marker-alt"></span>40 Baria Sreet 133/2
                                    Stock Exchange, Barclas Center </div> -->
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Banner Section -->


        <!-- Property Search Section -->
        <section class="property-search-section">
            <div class="auto-container">
                <div class="property-search-tabs tabs-box">
                    <!-- <ul class="tab-buttons">
                    <li data-tab="#sale" class="tab-btn active-btn">For Rent</li>
                    <li data-tab="#rent" class="tab-btn">For SALE</li>
                </ul> -->

                    <div class="tabs-content">
                        <!--Tab / Active Tab-->
                        <div class="tab active-tab" id="sale">
                            <div class="property-search-form">
                                <form method="post" action="http://html.ary-themes.com/revel/index.html">
                                    <div class="row">
                                        <!-- Form Group -->
                                        <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                            <select class="custom-select-box">
                                                <option>Features</option>
                                                <option>Beach Living</option>
                                                <option>Walled Property</option>
                                                <option>Pool</option>
                                                <option>Ocean View</option>
                                                <option>Lot Only</option>
                                                <option>Ocean Front</option>
                                                <option>Merida Centro</option>
                                                <option>Beach Second Row</option>
                                                <option>Renovation Needed</option>
                                                <option>Merida North</option>
                                                <option>Hotel/Restaurant</option>
                                                <option>Merida South</option>
                                                <option>Condominium</option>
                                            </select>
                                        </div>

                                        <!-- Form Group -->
                                        <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                            <select class="custom-select-box">
                                                <option>Bedrooms</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4+</option>
                                                <option value="5">5</option>
                                                <option value="8">8</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                            </select>
                                        </div>

                                        <!-- Form Group -->
                                        <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                            <select class="custom-select-box">
                                                <option value="" selected="selected">City</option>
                                                <option value="chelem">Chelem</option>
                                                <option value="chuburna">Chuburna</option>
                                                <option value="merida">Merida</option>
                                                <option value="merida-centro">Merida - Centro</option>
                                                <option value="chicxulub">Chicxulub</option>
                                                <option value="progreso">Progreso</option>
                                                <option value="merida-north">Merida - North</option>
                                                <option value="yucalpeten">Yucalpeten</option>
                                                <option value="dzitya">Dzitya</option>
                                                <option value="san-crisanto">San Crisanto</option>
                                                <option value="telchac">Telchac</option>
                                                <option value="campeche">Campeche</option>
                                            </select>
                                        </div>

                                        <!-- Form Group -->
                                        <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                            <select class="custom-select-box">
                                                <option value="" selected="selected">Bathrooms</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="2-5">2.5</option>
                                                <option value="5">5</option>
                                                <option value="1-5">1.5</option>
                                                <option value="6">6+</option>
                                                <option value="3-5">3.5</option>
                                                <option value="4-5">4.5</option>
                                                <option value="7">7</option>
                                            </select>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                            <select class="custom-select-box">
                                                <option value="" selected="selected">All Listings</option>
                                                <option value="view-all-listings">View All Listings</option>
                                            </select>
                                        </div>

                                        <!-- Form Group -->
                                        <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                            <select class="custom-select-box">
                                                <option value="" selected="selected">Hot Deals</option>
                                                <option value="view-hot-deals">View Hot Deals</option>
                                            </select>
                                        </div>
                                          <!-- Form Group -->
                                          <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                            <select class="custom-select-box">
                                                <option value="" selected="selected">Price Search</option>
                                                <option value="pre-selling">Pre-Selling</option>
                                                <option value="50000-or-less">$50,000 or less</option>
                                                <option value="50001-100000">$50,001-$100,000</option>
                                                <option value="100001-150000">$100,001-$150,000</option>
                                                <option value="150001-200000">$150,001-$200,000</option>
                                                <option value="200001-250000">$200,001-$250,000</option>
                                                <option value="250001-300000">$250,001-$300,000</option>
                                                <option value="300001-350000">$300,001-$350,000</option>
                                                <option value="350001-plus">$350,001 +</option>
                                            </select>
                                        </div>

                                        <!-- Form Group -->
                                        <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                            <button type="submit" class="theme-btn btn-style-three"><span
                                                    class="btn-title">Search</span></button>
                                        </div>


                                        <!-- Form Group -->
                                        <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                            <!-- <div class="range-slider-one clearfix">
                                            <div class="title">Size &nbsp; Sqft</div>
                                            <div class="input"><input type="text" class="property-amount" name="field-name" readonly></div>
                                            <div class="area-range-slider"></div>
                                        </div> -->
                                        </div>

                                        <!-- Form Group -->
                                        <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                            <!-- <div class="range-slider-one clearfix">
                                            <div class="title">Land Area</div>
                                            <div class="input"><input type="text" class="price-amount" name="field-name" readonly></div>
                                            <div class="price-range-slider"></div>
                                        </div> -->
                                        </div>

                                        <!-- Form Group -->

                                    </div>
                                </form>
                            </div>
                        </div>
                        <!--Tab -->
                        <div class="tab" id="rent">
                            <div class="property-search-form">
                                <form method="post" action="http://html.ary-themes.com/revel/index.html">
                                    <div class="row">
                                        <!-- Form Group -->
                                        <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                            <select class="custom-select-box">
                                                <option>All Types</option>
                                                <option>Special Purpose</option>
                                                <option>Multifamily</option>
                                                <option>Industrial</option>
                                                <option>Office</option>
                                                <option>Hotel</option>
                                                <option>Retail</option>
                                            </select>
                                        </div>

                                        <!-- Form Group -->
                                        <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                            <input type="text" name="text" placeholder="Title" required>
                                        </div>

                                        <!-- Form Group -->
                                        <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                            <input type="text" name="text" placeholder="Address" required>
                                        </div>

                                        <!-- Form Group -->
                                        <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                            <select class="custom-select-box">
                                                <option>Any Bedrooms</option>
                                                <option>01 Bedroom</option>
                                                <option>02 Bedroom</option>
                                                <option>03 Bedroom</option>
                                                <option>04 Bedroom</option>
                                                <option>05 Bedroom</option>
                                            </select>
                                        </div>

                                        <!-- Form Group -->
                                        <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                            <select class="custom-select-box">
                                                <option>Any Bathrooms</option>
                                                <option>01 Bathrooms</option>
                                                <option>02 Bathrooms</option>
                                                <option>03 Bathrooms</option>
                                                <option>04 Bathrooms</option>
                                                <option>05 Bathrooms</option>
                                            </select>
                                        </div>

                                        <!-- Form Group -->
                                        <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                            <div class="row">
                                                <div class="form-group col-lg-6 col-md-6 col-sm-6">
                                                    <select class="custom-select-box">
                                                        <option>Min Price</option>
                                                        <option>$1000</option>
                                                        <option>$5000</option>
                                                        <option>$10000</option>
                                                        <option>$20000</option>
                                                        <option>$50000</option>
                                                    </select>
                                                </div>

                                                <div class="form-group col-lg-6 col-md-6 col-sm-6">
                                                    <select class="custom-select-box">
                                                        <option>Max Price</option>
                                                        <option>$1000</option>
                                                        <option>$5000</option>
                                                        <option>$10000</option>
                                                        <option>$20000</option>
                                                        <option>$50000</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Form Group -->
                                        <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                            <div class="range-slider-one clearfix">
                                                <div class="title">Size &nbsp; Sqft</div>
                                                <div class="input"><input type="text" class="property-amount"
                                                        name="field-name" readonly></div>
                                                <div class="area-range-slider"></div>
                                            </div>
                                        </div>

                                        <!-- Form Group -->
                                        <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                            <div class="range-slider-one clearfix">
                                                <div class="title">Land Area</div>
                                                <div class="input"><input type="text" class="price-amount"
                                                        name="field-name" readonly></div>
                                                <div class="price-range-slider"></div>
                                            </div>
                                        </div>

                                        <!-- Form Group -->
                                        <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                            <button type="submit" class="theme-btn btn-style-three"><span
                                                    class="btn-title">Search</span></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Property Search Section -->

        <!-- About Section -->
        <section class="about-section">
            <div class="auto-container">
                <div class="row">
                    <!-- Content COlumn -->
                    <div class="content-column col-lg-6 col-md-12 col-sm-12 order-2">
                        <div class="inner-column">
                            <div class="sec-title">
                                <div class="devider"><span></span></div>
                                <h2>About Us</h2>
                                <div class="text">Revel Real Estate Agency Welcome To Best</div>
                            </div>

                            <!-- text Box -->
                            <div class="text-box">
                                <p>Leverage agile frameworks to provide a robust synopsis for high level overviews.
                                    terative approaches to corporate strategy foster collaborative thinking to further
                                </p>
                            </div>

                            <!-- About Block -->
                            <div class="about-block wow fadeInUp">
                                <div class="inner">
                                    <div class="icon flaticon-layers"></div>
                                    <h4>Our Mission</h4>
                                    <div class="text">Bring to the table win-win survival strategies to ensure proactive
                                        domination. At the end of the day.</div>
                                </div>
                            </div>

                            <!-- About Block -->
                            <div class="about-block wow fadeInUp">
                                <div class="inner">
                                    <div class="icon flaticon-bar-chart"></div>
                                    <h4>Our Vision</h4>
                                    <div class="text">Bring to the table win-win survival strategies to ensure proactive
                                        domination. At the end of the day.</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Feature Column -->
                    <div class="feature-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/resource/image-1.jpg);">
                            <div class="row no-gutters">
                                <!-- Title Block -->
                                  <div class="feature-block col-lg-6 col-md-6 wow fadeIn" data-wow-delay="1200ms">
                                    <div class="inner-box">
                                        <div class="icon flaticon-analytics"></div>
                                        <h4><a href="#">Hot</a></h4>
                                        <div class="text">Deals</div>
                                    </div>
                                </div>

                                <!-- Feature-block -->
                                <div class="feature-block col-lg-6 col-md-6 wow fadeIn" data-wow-delay="400ms">
                                    <div class="inner-box">
                                        <div class="icon flaticon-home-insurance"></div>
                                        <h4><a href="#">Property</a></h4>
                                        <div class="text">Search</div>
                                    </div>
                                </div>

                                <!-- Feature-block -->
                                <div class="feature-block col-lg-6 col-md-6 order-2 wow fadeIn" data-wow-delay="800ms">
                                    <div class="inner-box">
                                        <div class="icon flaticon-home-2"></div>
                                        <h4><a href="#">Explore</a></h4>
                                        <div class="text">Campeche</div>
                                    </div>
                                </div>

                                <!-- Feature-block -->
                                <div class="feature-block col-lg-6 col-md-6 wow fadeIn" data-wow-delay="1200ms">
                                    <div class="inner-box">
                                        <div class="icon flaticon-mortgage"></div>
                                        <h4><a href="#">Explore</a></h4>
                                        <div class="text">Yucatan</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End About Section -->

        <!-- Property Section -->
        <section class="property-section" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/background/1.jpg);">
       <div class="auto-container">
                <div class="sec-title light text-center">
                    <div class="devider"><span></span></div>
                    <h2>Newest Properties</h2>
                    <div class="text">Find Your Home in Your City</div>
                </div>

                <div class="property-carousel owl-carousel owl-theme">
                    <!-- Property Block -->
                    <div class="property-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/resource/property-1.jpg"
                                            data-src="<?php echo get_template_directory_uri(); ?>/images/resource/property-1.jpg" alt=""></a></figure>
                                <span class="for">FOR SALE</span>
                            </div>
                            <div class="lower-content">
                                <ul class="property-info clearfix">
                                    <li><span class="icon fa fa-expand"></span> Sq Ft 12,000</li>
                                    <li><span class="icon fa fa-bed"></span> Bedroom 3</li>
                                    <li><span class="icon fa fa-bath"></span> Bathroom 2</li>
                                </ul>
                                <h3><a href="#">Trentino-Alto Adige</a></h3>
                                <div class="text">Join the 350,000 daily users who have relied on Movoto to find the
                                    perfect home. </div>
                                <div class="property-price clearfix">
                                    <div class="location"><span class="icon fa fa-map-marker-alt"></span> 568 E 1st Ave,
                                        Ney Jersey</div>
                                    <div class="price">$ 765,300</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Property Block -->
                    <div class="property-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/resource/property-2.jpg"
                                            data-src="<?php echo get_template_directory_uri(); ?>/images/resource/property-2.jpg" alt=""></a></figure>
                                <span class="for">FOR SALE</span>
                            </div>
                            <div class="lower-content">
                                <ul class="property-info clearfix">
                                    <li><span class="icon fa fa-expand"></span> Sq Ft 12,000</li>
                                    <li><span class="icon fa fa-bed"></span> Bedroom 3</li>
                                    <li><span class="icon fa fa-bath"></span> Bathroom 2</li>
                                </ul>
                                <h3><a href="#">Friuli-Venezia Giulia</a></h3>
                                <div class="text">Join the 350,000 daily users who have relied on Movoto to find the
                                    perfect home. </div>
                                <div class="property-price clearfix">
                                    <div class="location"><span class="icon fa fa-map-marker-alt"></span> 568 E 1st Ave,
                                        Ney Jersey</div>
                                    <div class="price">$ 765,300</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Property Block -->
                    <div class="property-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="property-detail.html"><img
                                            src="<?php echo get_template_directory_uri(); ?>/images/resource/property-3.jpg"
                                            data-src="<?php echo get_template_directory_uri(); ?>/images/resource/property-3.jpg" alt=""></a></figure>
                                <span class="for">FOR SALE</span>
                            </div>
                            <div class="lower-content">
                                <ul class="property-info clearfix">
                                    <li><span class="icon fa fa-expand"></span> Sq Ft 12,000</li>
                                    <li><span class="icon fa fa-bed"></span> Bedroom 3</li>
                                    <li><span class="icon fa fa-bath"></span> Bathroom 2</li>
                                </ul>
                                <h3><a href="#">San Marino</a></h3>
                                <div class="text">Join the 350,000 daily users who have relied on Movoto to find the
                                    perfect home. </div>
                                <div class="property-price clearfix">
                                    <div class="location"><span class="icon fa fa-map-marker-alt"></span> 568 E 1st Ave,
                                        Ney Jersey</div>
                                    <div class="price">$ 765,300</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Property Block -->
                    <div class="property-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/empty.png"
                                            data-src="<?php echo get_template_directory_uri(); ?>/images/resource/property-1.jpg" alt=""></a></figure>
                                <span class="for">FOR SALE</span>
                            </div>
                            <div class="lower-content">
                                <ul class="property-info clearfix">
                                    <li><span class="icon fa fa-expand"></span> Sq Ft 12,000</li>
                                    <li><span class="icon fa fa-bed"></span> Bedroom 3</li>
                                    <li><span class="icon fa fa-bath"></span> Bathroom 2</li>
                                </ul>
                                <h3><a href="#">Trentino-Alto Adige</a></h3>
                                <div class="text">Join the 350,000 daily users who have relied on Movoto to find the
                                    perfect home. </div>
                                <div class="property-price clearfix">
                                    <div class="location"><span class="icon fa fa-map-marker-alt"></span> 568 E 1st Ave,
                                        Ney Jersey</div>
                                    <div class="price">$ 765,300</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Property Block -->
                    <div class="property-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/empty.png"
                                            data-src="<?php echo get_template_directory_uri(); ?>/images/resource/property-2.jpg" alt=""></a></figure>
                                <span class="for">FOR SALE</span>
                            </div>
                            <div class="lower-content">
                                <ul class="property-info clearfix">
                                    <li><span class="icon fa fa-expand"></span> Sq Ft 12,000</li>
                                    <li><span class="icon fa fa-bed"></span> Bedroom 3</li>
                                    <li><span class="icon fa fa-bath"></span> Bathroom 2</li>
                                </ul>
                                <h3><a href="#">Friuli-Venezia Giulia</a></h3>
                                <div class="text">Join the 350,000 daily users who have relied on Movoto to find the
                                    perfect home. </div>
                                <div class="property-price clearfix">
                                    <div class="location"><span class="icon fa fa-map-marker-alt"></span> 568 E 1st Ave,
                                        Ney Jersey</div>
                                    <div class="price">$ 765,300</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Property Block -->
                    <div class="property-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/empty.png"
                                            data-src="<?php echo get_template_directory_uri(); ?>/images/resource/property-3.jpg" alt=""></a></figure>
                                <span class="for">FOR SALE</span>
                            </div>
                            <div class="lower-content">
                                <ul class="property-info clearfix">
                                    <li><span class="icon fa fa-expand"></span> Sq Ft 12,000</li>
                                    <li><span class="icon fa fa-bed"></span> Bedroom 3</li>
                                    <li><span class="icon fa fa-bath"></span> Bathroom 2</li>
                                </ul>
                                <h3><a href="#">San Marino</a></h3>
                                <div class="text">Join the 350,000 daily users who have relied on Movoto to find the
                                    perfect home. </div>
                                <div class="property-price clearfix">
                                    <div class="location"><span class="icon fa fa-map-marker-alt"></span> 568 E 1st Ave,
                                        Ney Jersey</div>
                                    <div class="price">$ 765,300</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Property Section -->

        <!--Popular Places Section-->
        <section class="popular-places-section">
            <div class="auto-container">
                <div class="sec-title text-center">
                    <div class="devider"><span></span></div>
                    <h2>Most Popular Places</h2>
                    <div class="text">Find Your Dream House in Your City</div>
                </div>

                <div class="masonry-items-container clearfix">
                    <!-- Portfolio Item -->
                    <div class="popular-item masonry-item small-item">
                        <div class="image-box">
                            <figure class="image"><img src="<?php echo get_template_directory_uri(); ?>/#" data-src="<?php echo get_template_directory_uri(); ?>/images/gallery/1.jpg" alt=""></figure>
                            <div class="caption-box">
                                <h4>Ocean</h4>
                                <span>Front</span>
                            </div>
                            <div class="overlay-box">
                                <div class="info-box">
                                    <h4>Apartment</h4>
                                    <span class="properties">5 Properties</span>
                                    <a href="#" class="lightbox-image images-btn">25 Photos <span
                                            class="fa fa-search"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Portfolio Item -->
                    <div class="popular-item masonry-item large-item">
                        <div class="image-box">
                            <figure class="image"><img src="<?php echo get_template_directory_uri(); ?>/#" data-src="<?php echo get_template_directory_uri(); ?>/images/gallery/2.jpg" alt=""></figure>
                            <div class="caption-box">
                                <h4>Beach</h4>
                                <span>Homes</span>
                            </div>
                            <div class="overlay-box">
                                <div class="info-box">
                                    <h4>Villa</h4>
                                    <span class="properties">7 Properties</span>
                                    <a href="#" class="lightbox-image images-btn">25 Photos <span
                                            class="fa fa-search"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Portfolio Item -->
                    <div class="popular-item masonry-item small-item">
                        <div class="image-box">
                            <figure class="image"><img src="<?php echo get_template_directory_uri(); ?>/#" data-src="<?php echo get_template_directory_uri(); ?>/images/gallery/3.jpg" alt=""></figure>
                            <div class="caption-box">
                                <h4>City</h4>
                                <span>Centro</span>
                            </div>
                            <div class="overlay-box">
                                <div class="info-box">
                                    <h4>House</h4>
                                    <span class="properties">5 Properties</span>
                                    <a href="#" class="lightbox-image images-btn">25 Photos <span
                                            class="fa fa-search"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Portfolio Item -->
                    <div class="popular-item masonry-item small-item">
                        <div class="image-box">
                            <figure class="image"><img src="<?php echo get_template_directory_uri(); ?>/#" data-src="<?php echo get_template_directory_uri(); ?>/images/gallery/4.jpg" alt=""></figure>
                            <div class="caption-box">
                                <h4>North</h4>
                                <span>Side</span>
                            </div>
                            <div class="overlay-box">
                                <div class="info-box">
                                    <h4>Restaurant</h4>
                                    <span class="properties">5 Properties</span>
                                    <a href="#" class="lightbox-image images-btn">25 Photos <span
                                            class="fa fa-search"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Portfolio Item -->
                    <div class="popular-item masonry-item small-item">
                        <div class="image-box">
                            <figure class="image"><img src="<?php echo get_template_directory_uri(); ?>/images/gallery/5.jpg" data-src="<?php echo get_template_directory_uri(); ?>/images/gallery/5.jpg"
                                    alt=""></figure>
                            <div class="caption-box">
                                <h4>Business</h4>
                                <span>Opportunity</span>
                            </div>
                            <div class="overlay-box">
                                <div class="info-box">
                                    <h4>bar</h4>
                                    <span class="properties">5 Properties</span>
                                    <a href="#" class="lightbox-image images-btn">25 Photos <span
                                            class="fa fa-search"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Portfolio Item -->
                    <div class="popular-item masonry-item large-item">
                        <div class="image-box">
                            <figure class="image"><img src="<?php echo get_template_directory_uri(); ?>/images/gallery/6.jpg" data-src="<?php echo get_template_directory_uri(); ?>/images/gallery/6.jpg"
                                    alt=""></figure>
                            <div class="caption-box">
                                <h4>Land</h4>
                                <span>3 Homesites</span>
                            </div>
                            <div class="overlay-box">
                                <div class="info-box">
                                    <h4>farm</h4>
                                    <span class="properties">5 Properties</span>
                                    <a href="#" class="lightbox-image images-btn">25 Photos <span
                                            class="fa fa-search"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Popular Places-->

        <!-- Agents Section -->
        <div class="agents-section">
            <div class="auto-container">
                <div class="sec-title">
                    <div class="devider"><span></span></div>
                    <h2>Professional Agents</h2>
                    <div class="text">Meet with Revel real estate agents</div>
                </div>

                <div class="agents-carousel owl-carousel owl-theme">
                    <!-- Agent Block -->
                    <div class="agent-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/ProfessionalAgents/agent-1.jpg"
                                            data-src="<?php echo get_template_directory_uri(); ?>/images/ProfessionalAgents/agent-1.jpg" alt=""></a></figure>
                            </div>
                            <div class="info-box">
                                <h4 class="name"><a href="#">Ashraf Maqbool</a></h4>
                                <span class="designation">4 Properties</span>
                                <ul class="social-links social-icon-colored">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Agent Block -->
                    <div class="agent-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/ProfessionalAgents/agent-2.jpg"
                                            data-src="<?php echo get_template_directory_uri(); ?>/images/ProfessionalAgents/agent-2.jpg" alt=""></a></figure>
                            </div>
                            <div class="info-box">
                                <h4 class="name"><a href="#">Fatima Gohar</a></h4>
                                <span class="designation">2 Properties</span>
                                <ul class="social-links social-icon-colored">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Agent Block -->
                    <div class="agent-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/ProfessionalAgents/agent-3.jpg"
                                            data-src="<?php echo get_template_directory_uri(); ?>/images/ProfessionalAgents/agent-3.jpg" alt=""></a></figure>
                            </div>
                            <div class="info-box">
                                <h4 class="name"><a href="#">Munib Aawan</a></h4>
                                <span class="designation">1 Properties</span>
                                <ul class="social-links social-icon-colored">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Agent Block -->
                    <div class="agent-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/empty.png"
                                            data-src="<?php echo get_template_directory_uri(); ?>/images/resource/agent-1.jpg" alt=""></a></figure>
                            </div>
                            <div class="info-box">
                                <h4 class="name"><a href="#">Ashraf Maqbool</a></h4>
                                <span class="designation">4 Properties</span>
                                <ul class="social-links social-icon-colored">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Agent Block -->
                    <div class="agent-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/empty.png"
                                            data-src="<?php echo get_template_directory_uri(); ?>/images/resource/agent-2.jpg" alt=""></a></figure>
                            </div>
                            <div class="info-box">
                                <h4 class="name"><a href="#">Fatima Gohar</a></h4>
                                <span class="designation">2 Properties</span>
                                <ul class="social-links social-icon-colored">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Agent Block -->
                    <div class="agent-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/empty.png"
                                            data-src="<?php echo get_template_directory_uri(); ?>/images/resource/agent-3.jpg" alt=""></a></figure>
                            </div>
                            <div class="info-box">
                                <h4 class="name"><a href="#">Munib Aawan</a></h4>
                                <span class="designation">1 Properties</span>
                                <ul class="social-links social-icon-colored">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Agents Section -->

        <!-- Testimonial Section -->
        <section class="testimonial-section">
            <div class="auto-container">
                <div class="sec-title text-center">
                    <div class="devider"><span></span></div>
                    <h2>What Our Client Says</h2>
                    <div class="text">Find Your Dream House in Your City</div>
                </div>

                <div class="testimonial-carousel owl-carousel owl-theme">
                    <!-- Testimonial Block -->
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="<?php echo get_template_directory_uri(); ?>/images/BusinessPerson/testi-thumb.jpg"
                                        data-src="<?php echo get_template_directory_uri(); ?>/images/BusinessPerson/testi-thumb.jpg" alt=""></figure>
                            </div>
                            <div class="content-box">
                                <span class="designation">Business Preson</span>
                                <h4 class="name">John Doe</h4>
                                <div class="text">Today we can tell you, thanks to your passion, hard work creativity,
                                    and expertise, you delivered us the most beautiful house great looks.</div>
                                <div class="rating"><span class="fa fa-star"></span><span
                                        class="fa fa-star"></span><span class="fa fa-star"></span><span
                                        class="fa fa-star"></span><span class="fa fa-star"></span></div>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial Block -->
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="<?php echo get_template_directory_uri(); ?>/images/BusinessPerson/testi-thumb-2.jpg"
                                        data-src="<?php echo get_template_directory_uri(); ?>/images/BusinessPerson/testi-thumb-2.jpg" alt=""></figure>
                            </div>
                            <div class="content-box">
                                <span class="designation">Business Preson</span>
                                <h4 class="name">John Doe</h4>
                                <div class="text">Today we can tell you, thanks to your passion, hard work creativity,
                                    and expertise, you delivered us the most beautiful house great looks.</div>
                                <div class="rating"><span class="fa fa-star"></span><span
                                        class="fa fa-star"></span><span class="fa fa-star"></span><span
                                        class="fa fa-star"></span><span class="fa fa-star"></span></div>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial Block -->
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="<?php echo get_template_directory_uri(); ?>/images/BusinessPerson/testi-thumb.jpg"
                                        data-src="<?php echo get_template_directory_uri(); ?>/images/BusinessPerson/testi-thumb.jpg" alt=""></figure>
                            </div>
                            <div class="content-box">
                                <span class="designation">Business Preson</span>
                                <h4 class="name">John Doe</h4>
                                <div class="text">Today we can tell you, thanks to your passion, hard work creativity,
                                    and expertise, you delivered us the most beautiful house great looks.</div>
                                <div class="rating"><span class="fa fa-star"></span><span
                                        class="fa fa-star"></span><span class="fa fa-star"></span><span
                                        class="fa fa-star"></span><span class="fa fa-star"></span></div>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial Block -->
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="<?php echo get_template_directory_uri(); ?>/images/BusinessPerson/testi-thumb-2.jpg"
                                        data-src="<?php echo get_template_directory_uri(); ?>/images/BusinessPerson/testi-thumb-2.jpg" alt=""></figure>
                            </div>
                            <div class="content-box">
                                <span class="designation">Business Preson</span>
                                <h4 class="name">John Doe</h4>
                                <div class="text">Today we can tell you, thanks to your passion, hard work creativity,
                                    and expertise, you delivered us the most beautiful house great looks.</div>
                                <div class="rating"><span class="fa fa-star"></span><span
                                        class="fa fa-star"></span><span class="fa fa-star"></span><span
                                        class="fa fa-star"></span><span class="fa fa-star"></span></div>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial Block -->
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="<?php echo get_template_directory_uri(); ?>/images/BusinessPerson/testi-thumb.jpg"
                                        data-src="<?php echo get_template_directory_uri(); ?>/images/BusinessPerson/testi-thumb.jpg" alt=""></figure>
                            </div>
                            <div class="content-box">
                                <span class="designation">Business Preson</span>
                                <h4 class="name">John Doe</h4>
                                <div class="text">Today we can tell you, thanks to your passion, hard work creativity,
                                    and expertise, you delivered us the most beautiful house great looks.</div>
                                <div class="rating"><span class="fa fa-star"></span><span
                                        class="fa fa-star"></span><span class="fa fa-star"></span><span
                                        class="fa fa-star"></span><span class="fa fa-star"></span></div>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial Block -->
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="<?php echo get_template_directory_uri(); ?>/images/BusinessPerson/testi-thumb-2.jpg"
                                        data-src="<?php echo get_template_directory_uri(); ?>/images/BusinessPerson/testi-thumb-2.jpg" alt=""></figure>
                            </div>
                            <div class="content-box">
                                <span class="designation">Business Preson</span>
                                <h4 class="name">John Doe</h4>
                                <div class="text">Today we can tell you, thanks to your passion, hard work creativity,
                                    and expertise, you delivered us the most beautiful house great looks.</div>
                                <div class="rating"><span class="fa fa-star"></span><span
                                        class="fa fa-star"></span><span class="fa fa-star"></span><span
                                        class="fa fa-star"></span><span class="fa fa-star"></span></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!--End Testimonial Section -->

        <!-- Call To Action -->
        <!-- <section class="call-to-action" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/background/2.jpg);" da<?php echo get_template_directory_uri(); ?>/ta-stellar-background-ratio="0.5"<?php echo get_template_directory_uri(); ?>/>
        <div class="auto-container">
            <div class="sec-title light text-center">
                <div class="text">Buy or sell your house in few seconds.</div>
                <h2>Revel Real Estate Co.</h2>
            </div>
            <div class="btn-box">
                <a href="#" class="theme-btn btn-style-two"><span class="btn-title">Submit Property</span></a>
                <a href="#" class="theme-btn btn-style-four"><span class="btn-title">Browes Property</span></a>
            </div>
        </div>
    </section> -->
        <!--End Call To Action -->

        <!-- News Section -->

        <!--End News Section -->

        <!--Clients Section-->
    <!--     <section class="clients-section">
            <div class="auto-container">
                <div class="sponsors-outer">
                   
                    <ul class="sponsors-carousel owl-carousel owl-theme">
                        <li class="slide-item">
                            <figure class="image-box"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/clients-section/1.png"
                                        data-src="<?php echo get_template_directory_uri(); ?>/images/clients-section/1.png" alt=""></a></figure>
                        </li>
                        <li class="slide-item">
                            <figure class="image-box"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/clients-section/2.png"
                                        data-src="<?php echo get_template_directory_uri(); ?>/images/clients-section/2.png" alt=""></a></figure>
                        </li>
                        <li class="slide-item">
                            <figure class="image-box"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/clients-section/3.png"
                                        data-src="<?php echo get_template_directory_uri(); ?>/images/clients-section/3.png" alt=""></a></figure>
                        </li>
                        <li class="slide-item">
                            <figure class="image-box"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/clients-section/4.png"
                                        data-src="<?php echo get_template_directory_uri(); ?>/images/clients-section/4.png" alt=""></a></figure>
                        </li>
                        <li class="slide-item">
                            <figure class="image-box"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/clients-section/5.png"
                                        data-src="<?php echo get_template_directory_uri(); ?>/images/clients-section/5.png" alt=""></a></figure>
                        </li>
                        <li class="slide-item">
                            <figure class="image-box"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/clients-section/1.png"
                                        data-src="<?php echo get_template_directory_uri(); ?>/images/clients-section/1.png" alt=""></a></figure>
                        </li>
                        <li class="slide-item">
                            <figure class="image-box"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/clients-section/2.png"
                                        data-src="<?php echo get_template_directory_uri(); ?>/images/clients-section/2.png" alt=""></a></figure>
                        </li>
                        <li class="slide-item">
                            <figure class="image-box"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/clients-section/3.png"
                                        data-src="<?php echo get_template_directory_uri(); ?>/images/clients-section/3.png" alt=""></a></figure>
                        </li>
                        <li class="slide-item">
                            <figure class="image-box"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/clients-section/4.png"
                                        data-src="<?php echo get_template_directory_uri(); ?>/images/clients-section/4.png" alt=""></a></figure>
                        </li>
                        <li class="slide-item">
                            <figure class="image-box"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/clients-section/5.png"
                                        data-src="<?php echo get_template_directory_uri(); ?>/images/clients-section/5.png" alt=""></a></figure>
                        </li>
                    </ul>
                </div>
            </div>
        </section> -->
        <!--End Clients Section-->

       

<?php get_footer(); ?>
       