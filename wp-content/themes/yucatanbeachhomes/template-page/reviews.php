<?php 
/*Template Name: Reviews*/
get_header();
?>

   <!--Page Title-->
    <?php get_template_part('breadcrum');?>
    <!--End Page Title-->

    <!-- Sidebar Page Container -->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Content Side-->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                    <div class="blog-detail">
                     

                        <!--Comments Area-->
                        <div class="comments-area">
                            
                            <div class="group-title">
                                <h3>Recent Review:</h3>
                            </div>
                            
                            <!--Comment Box-->
                            <div class="comment-box">
                                <div class="comment">
                                    <div class="author-thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/icons/empty.png" data-src="<?php echo get_template_directory_uri(); ?>/images/resource/thumb-1.jpg" alt="">
                                        <a class="comment-reply" href="#">Reply</a>
                                    </div>
                                    <div class="comment-inner">
                                        <div class="comment-info clearfix">STEPHEN PHILL<div class="comment-time">JANUARY 7 , 2018 AT 12:21 AM</div></div>
                                        <div class="text">Efficiently unleash cross-media information without cross-media value. Quickly maximize timely fun deliverables for real-time schemas.</div>
                                    </div>
                                </div>
                            </div>
                                   
                            <!--Comment Box-->
                            <div class="comment-box reply-comment">
                                <div class="comment">
                                    <div class="author-thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/icons/empty.png" data-src="<?php echo get_template_directory_uri(); ?>/images/resource/thumb-2.jpg" alt="">
                                        <a class="comment-reply" href="#">Reply</a>
                                    </div>
                                    <div class="comment-inner">
                                        <div class="comment-info clearfix">VALKOR SMITH<div class="comment-time">JANUARY 7 , 2018 AT 12:21 AM</div></div>
                                        <div class="text">Dramatically maintain clicks-and-mortar solutions without any of functional solutions.</div>
                                    </div>
                                </div>
                            </div>

                            <!--Comment Box-->
                            <div class="comment-box">
                                <div class="comment">
                                    <div class="author-thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/icons/empty.png" data-src="<?php echo get_template_directory_uri(); ?>/images/resource/thumb-3.jpg" alt="">
                                        <a class="comment-reply" href="#">Reply</a>
                                    </div>
                                    <div class="comment-inner">
                                        <div class="comment-info clearfix">JONATHAN<div class="comment-time">JANUARY 7 , 2018 AT 12:21 AM</div></div>
                                        <div class="text">Efficiently unleash cross-media information without cross-media value. Quickly maximize timely fun deliverables for real-time schemas.</div>
                                    </div>
                                </div>
                            </div>                                    
                        </div>
                        <!--End Comments Area-->
                        
                        <!-- Comment Form -->
                        <div class="comment-form">
                            <div class="group-title">
                                <h3>Leave a Comment</h3>
                            </div>
                            <!--Comment Form-->
                            <form method="post" action="http://html.ary-themes.com/revel/contact.html">
                                <div class="row">
                                    <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                        <input type="text" name="username" placeholder="Full Name" required>
                                    </div>
                                    <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                        <input type="email" name="email" placeholder="Email Address" required>
                                    </div>
                                    <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                        <input type="text" name="subject" placeholder="Subject" required>
                                    </div>
                                    <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                        <input type="text" name="number" placeholder="Phone Number" required>
                                    </div>
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <textarea name="message" placeholder="Massage"></textarea>
                                    </div>

                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <button class="theme-btn btn-style-one" type="submit" name="submit-form"><span class="btn-title">Post Comment</span></button>
                                    </div>
                                </div>
                            </form>
                                
                        </div>
                        <!--End Comment Form --> 
                    </div>
                </div>

                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                    <aside class="sidebar default-sidebar">


                    <div class="form-column">
                        <div class="inner-column">
                            <div class="contact-form">
                                <div class="title">
                                    <h2>Get in Touch</h2>
                                    <div class="text">Feel free to drop us a line below!</div>
                                </div>
                                <form method="post" action="http://html.ary-themes.com/revel/sendemail.php" id="contact-form">
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <input type="text" name="username" placeholder="Name" required="">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <input type="email" name="email" placeholder="Email" required="">
                                        </div>

                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <input type="text" name="subject" placeholder="Subject" required="">
                                        </div>
                                        
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <textarea name="message" placeholder="Message"></textarea>
                                        </div>
                                        
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <button class="theme-btn btn-style-one" type="submit" name="submit-form"><span class="btn-title">Submit Now</span></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                                   
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- End Sidebar Container -->   

<?php get_footer(); ?>   