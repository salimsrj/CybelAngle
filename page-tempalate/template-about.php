<?php
/**
 * Template Name: About Us
 *
 * This template can be used to override the default template and sidebar setup
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
get_header();
?>
<section class="inner-page-banner" style="background: url(<?php echo get_stylesheet_directory_uri(); ?>/images/about-banner.jpg);     background-size: cover;
    background-repeat: no-repeat;
    background-position: center;">
    <div class="container">
        <div class="col-md-6">
            <div class="content-box">
                <div class="banner-box">
                    <div class="left-box">
                        <h1 class="title">Stronger Together</h1>
                        <div class="content">
                            <p>In 2013, two brothers, each with distinct interests and talents, joined forces to build a powerful global movement in cybersecurity. </p>
                            <p>Together they rallied a team passionate about protecting the world from digital risk and freeing businesses from the burden of inevitable cyber threats.</p>
                        </div>
                        <!-- <div class="btn-container">
                            <ul>
                                <li><a class="btn btn-white" href="#">Explore Case Studies</a></li>
                                <li><a class="btn btn-pest" href="#">Get in touch</a></li>
                            </ul>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="two-col-text-with-img">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="content-box">
                    <div class="section-head">
                        <span class="sub-title">Our Story</span>
                        <h2 class="title">Building a global cybersecurity movement</h2>
                    </div>
                    <div class="content">
                        <p>Our advanced CybelAngel external threat protection platform combines machine learning and expert human analysis to bring security teams deep visibility into only the most critical threats, long before they’re exploited.</p>
                        <p>Today more than 180 CybelAngel employees provide proactive external digital threat protection to top brands around the world.</p>
                    </div>
                    <div class="image-box">
                        <div class="image-container">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/story-img.jpg" alt="">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="quotes">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="quote">
                    <div class="content">
                        <p>“CybelAngel makes things easy. They are our one-stop shop for data leakage detection across all our extended supply chains.”</p>
                    </div>
                    <div class="author-info">
                        <div class="image-container">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/thierryAuger.png" alt="thierryAuger">
                        </div>
                        <h4>Thierry Auger</h4>
                        <p>Deputy CIO and CISO, Lagardère</p>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>



<!-- <section class="testimonial-style2">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="testimonal-carousel swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide ">
                            <div class="item"
                                style="background:url(<?php echo get_stylesheet_directory_uri(); ?>/images/testimonial-bg.png); background-size: cover;">
                                <div class="content-box">
                                    <div class="logo">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/lagradere.png"
                                            alt="lagradere">
                                    </div>
                                    <span class="ratings">
                                        <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                        <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                        <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                        <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                        <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                    </span>
                                    <h3>CybelAngel makes things easy. They are our one-stop shop for data leakage
                                        detection across all our extended supply chains.</h3>
                                    <div class="auther-info">
                                        <h4 class="name">— Thierry Auger</h4>
                                        <div class="info">
                                            <p>Deputy CIO and CISO, Lagardère</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="image-box">
                                    <div class="image-container">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/thierry-auger.jpg"
                                            alt="">
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="item"
                                style="background:url(<?php echo get_stylesheet_directory_uri(); ?>/images/testimonial-bg.png); background-size: cover;">
                                <div class="content-box">
                                    <div class="logo">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/lagradere.png"
                                            alt="lagradere">
                                    </div>
                                    <span class="ratings">
                                        <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                        <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                        <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                        <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                        <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                    </span>
                                    <h3>CybelAngel makes things easy. They are our one-stop shop for data leakage
                                        detection across all our extended supply chains.</h3>
                                    <div class="auther-info">
                                        <h4 class="name">— Thierry Auger</h4>
                                        <div class="info">
                                            <p>Deputy CIO and CISO, Lagardère</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="image-box">
                                    <div class="image-container">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/thierry-auger.jpg"
                                            alt="">
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="item"
                                style="background:url(<?php echo get_stylesheet_directory_uri(); ?>/images/testimonial-bg.png); background-size: cover;">
                                <div class="content-box">
                                    <div class="logo">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/lagradere.png"
                                            alt="lagradere">
                                    </div>
                                    <span class="ratings">
                                        <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                        <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                        <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                        <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                        <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                    </span>
                                    <h3>CybelAngel makes things easy. They are our one-stop shop for data leakage
                                        detection across all our extended supply chains.</h3>
                                    <div class="auther-info">
                                        <h4 class="name">— Thierry Auger</h4>
                                        <div class="info">
                                            <p>Deputy CIO and CISO, Lagardère</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="image-box">
                                    <div class="image-container">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/thierry-auger.jpg"
                                            alt="">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section> -->


<section class="contact-address" style="background: url(<?php echo get_stylesheet_directory_uri(); ?>/images/blue-map.jpg);background-position: center center;
    background-size: cover;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="content-box">
                    <div class="section-head">
                        <span class="pre-title">Contact us</span>
                        <h2 class="title">Global Offices</h2>
                        <div class="content">
                            <p>We have offices and teams all around the world.</p>
                        </div>
                    </div>

                    <div class="address">
                        
                        <div class="item">
                        <div class="flag">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/FR.png" alt="">
                        </div>
                            <h3>Paris</h3>
                            <p>45 Rue de Monceau 75008 France.</p>
                        </div>

                        <div class="item">
                        <div class="flag">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/US.png" alt="">
                        </div>
                            <h3>Boston</h3>
                            <p>33 Arch StreetMassachusetts</p>
                        </div>

                        <div class="item">
                        <div class="flag">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/GB.png" alt="">
                        </div>
                            <h3>London</h3>
                            <p>8th Floor South, 11 Old Jewry London</p>
                        </div>
                    </div>
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






<?php
get_footer();