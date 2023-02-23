<?php
/**
 * Template Name: Contact Us
 *
 * This template can be used to override the default template and sidebar setup
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
get_header();
?>

<section class="inner-contact" style="background:url('<?php echo get_stylesheet_directory_uri(); ?>/images/contact-us-img-2.jpg'); background-size: 50% 100%;
    background-repeat: no-repeat;
    background-position: left center;">
    <div class="container">
        <div class="row">
            <div class="offset-md-6 col-md-6">
            <div class="contact-form">
                    <?php echo do_shortcode('[gravityform id="2" title="true"]' ); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="partners-logo" style="background:url(<?php echo get_stylesheet_directory_uri(); ?>/images/bg-2.png);">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="content-box">
                    <h2 class="title">Built on trust since 2013</h2>
                    <p>We take pride in protecting a global network of 100’s of enterprise clients.</p>
                </div>                
                <div class="logo-container swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="item">
                            <a href="#">
                                <div class="image-container">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cushman.png" alt="logo">
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="item">
                            <a href="#">
                                <div class="image-container">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/elkem.png" alt="logo">
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="item">
                            <a href="#">
                                <div class="image-container">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/lous-vuitton.png" alt="logo">
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="item">
                            <a href="#">
                                <div class="image-container">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/airfrance-logo.png" alt="logo">
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="item">
                            <a href="#">
                                <div class="image-container">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/technicolor.png" alt="logo">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="content-with-img-bluebg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="content-box">
                    <h2 class="title">Experience the CybelAngel Difference</h2>
                    <div class="content">
                        <p>Our Data Breach Prevention and Asset Discovery and Monitoring solutions can defuse your supply chain attack risk.</p>
                    </div>
                    

                    <div class="btn-container">
                        <ul>
                            <li><a class="btn btn-white" href="#">Learn more</a></li>
                            <li><a class="btn btn-sweet" href="#">Get Started</a></li>
                        </ul>
                    </div>
                </div>
                <div class="image-box">
                    <div class="image-container">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Screenmockup.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<?php
get_footer();