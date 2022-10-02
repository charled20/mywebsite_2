  <?php get_header(); ?>
  
        <!-- ---------------------landing cover-------------------------- -->
        <section id="landingcover"> 
                <div class="col-lg-12 landingcover-ss" >
                    <div class="container-fluid" >
                        <div class="row landing-container align-items-center" >
                            <!-- <div class="row"> -->
                                <div class="col-lg-6 col-md-6 text-center">
                                    <p class="text-style">Require Fast and Efficient Alternative?</p>
                                    <button class="btn btn-primary button-style" data-toggle="modal" data-target="#accountmodal">GET STARTED</button>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <img class="img-fluid" src="img/landing-img.png">
                                </div>
                            <!-- </div> -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- ---------------------landing cover end-------------------------- -->
            
            <?php get_sidebar(); ?>
            <!----content start---->
                                
                <?php //if ( have_posts() ) : ?>
                <?php //while ( have_posts() ) : the_post(); ?>
                <!-- <div id="post-<?php //the_ID(); ?>" <?php //post_class(); ?>>
                    <div class="post-header">
                    <div class="date"><?php //the_time( 'M j y' ); ?></div>
                    <h2><a href="<?php //the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php //the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                    <div class="author"><?php //the_author(); ?></div>
                    </div>end post header-->
                    <!--<div class="entry clear"> -->
                    <?php// if ( function_exists( 'add_theme_support' ) ) the_post_thumbnail(); ?>
                    <?php// the_content(); ?>
                    <?php// edit_post_link(); ?>
                    <?php// wp_link_pages(); ?> </div>
                    <!--end entry-->
                    <!-- <div class="post-footer">
                    <div class="comments"><?php// comments_popup_link( 'Leave a Comment', '1 Comment', '% Comments' ); ?></div>
                    </div>end post footer-->
                    <!--</div>end post-->
                <?php //endwhile; /* rewind or continue if all posts have been fetched */ ?> 
                    <!-- <div class="navigation index">
                    <div class="alignleft"><?php// next_posts_link( 'Older Entries' ); ?></div>
                    <div class="alignright"><?php //previous_posts_link( 'Newer Entries' ); ?></div>
                    </div>end navigation -->
                <?php// else : ?>
                <?php// endif; ?>   
            <!----content end --->
            <!-- ---------------------about -------------------------- -->
            <section id="about">
                <div class="container" data-aos="fade-up">
                    <div class="row">
                        <div class="col-lg-5 col-md-6 text-center">
                            <div class="about-img" data-aos="fade-up-right" data-aos-duration="1000" data-aos-offset="300" data-aos-easing="ease-in-sine">
                            <!--PORTRAIT -->
                                <img src="img/portrait3.gif">
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6">
                            <div class="about-content" data-aos="fade-up-left" data-aos-duration="1000" data-aos-offset="300" data-aos-easing="ease-in-sine">
                            <!-- CONTENT-->
                            <h2>About Us</h2>
                            <p>We at RUSTY DEVS specialize in website designing and various forms of digital art.</p>
                            <ul>
                                <li>We want to develop eye-catching but affordable web solutions for businesses </li>
                                <li>Produce quick, smooth, efficient and user friendly interfaces</li>
                                <li>Our top priority is customer satisfaction through innovative and effective strategies</li>
                            </ul>
                            <p>About a year ago, curiousity and fascination got us motivated in creating an impact online. 
                            Seeing as people and small businesses alike aren't reaching their proper audience because of dull, bulky and very confusing interfaces. 
                            We wanted to build a place where people can go to and ask for great but affordable designs,  
                            get technical help without being laughed at how ridiculous they want their website to look. Somewhere we can 
                            connect to their core, so they can convey whats in their heart and out into the digital world. </p><p>That is OUR GOAL, 
                            this is OUR ROLE, we are RUSTY DEVS.</p>
                            
                            </div>
                        </div>
                    </div>  
                </div>
            </section>
            <!-- ---------------------about end-------------------------- -->

            <!-- ---------------------services-------------------------- -->
            <section id="services" class="serv-bg">
                <div class="container" data-aos="fade-up" data-aos-duration="1000">
                    <h1>Services</h1>
                    <div class="row">
                        <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300">
                            <div class="box">
                                <div id="icon-1" class="box-img"></div>
                                <!-- #BOX 1 HERE-->
                                <h5>Documentation</h5>
                                <p>Provide technical manuals and online related informations</p>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="500">
                            <div class="box">
                                <!-- #BOX 2 HERE-->
                                <div id="icon-2" class="box-img"></div>
                                <h5>Front End</h5>
                                <p>Experienced in HTML, CSS, and Javascript as well as in several other Frameworks</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="700">
                            <div class="box">
                                <!-- #BOX 3 HERE-->
                                <div id="icon-3" class="box-img"></div>
                                <h5>Back End</h5>
                                <p>Create and setup a database for your website</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="700">
                            <div class="box">
                                <!-- #BOX 4 HERE-->
                                <div id="icon-4" class="box-img"></div>
                                <h5>Pixel Art</h5>
                                <p>Create fun and cute pixel arts for game sprites and assets</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="500">
                            <div class="box">
                                <!-- #BOX 5 HERE-->
                                <div id="icon-5" class="box-img"></div>
                                <h5>Image Manipulation</h5>
                                <p>Edit and enhance image depending on the application</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300">
                            <div class="box">
                                <!-- #BOX 6 HERE-->
                                <div id="icon-6" class="box-img"></div>
                                <h5>3D Sculpting</h5>
                                <p>Produce basic 3D sculpts with simple rigs for various uses</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ---------------------services end-------------------------- -->

            <!-- ---------------------portfolio 2 start-------------------------- -->
            <section id="porttwo">
                <div id="portfolio-bg"></div>
                <div class="col-lg-12" data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-duration="1000">
                    <div class="container-fluid ">
                        <header>
                            <h3></h3>
                        </header>
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <div class="owl-carousel">
                                    <div class="portfolio-item">
                                        <img src="img/carousel3.jpg" class="portfolio-img">
                                    </div>
                                    <div class="portfolio-item">
                                        <img src="img/carousel2.jpg" class="portfolio-img">
                                    </div>
                                    <div class="portfolio-item">
                                        <img src="img/carousel1.jpg" class="portfolio-img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ---------------------portfolio 2 end-------------------------- -->

<?php get_footer();?>
    