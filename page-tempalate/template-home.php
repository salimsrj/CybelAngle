<?php
/**
 * Template Name: Home
 *
 * This template can be used to override the default template and sidebar setup
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
get_header();
?>
<section class="home_banner" style="background: url(<?php echo get_stylesheet_directory_uri(); ?>/images/home_banner.png);     background-size: 50% auto;
    background-repeat: no-repeat;
    background-position: right;">
    <div class="container">
        <div class="col-md-6">
            <div class="content-box">
                <div class="banner-box">
                    <div class="left-box">
                        <h1 class="title">Eliminate exposures you can’t see with CybelAngel.</h1>
                        <div class="content">
                            <p>Pre-emptive cybersecurity to detect & eliminate exposures you can’t see… before others
                                can. </p>
                        </div>
                        <div class="btn-container">
                            <ul>
                                <li><a class="btn btn-white" href="#">Explore Case Studies</a></li>
                                <li><a class="btn btn-pest" href="#">Get in touch</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<section class="partners">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="content-box">
                    <div class="content">
                        <span>Pre-emptive cybersecurity to detect & eliminate exposures you can’t see… before others
                            can.</span>
                    </div>

                    <div class="logo-carousel swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="item">
                                    <a href="#">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/trimbel.png"
                                            alt="Logo">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="item">
                                    <a href="#">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/airfrance.png"
                                            alt="Logo">
                                    </a>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="item">
                                    <a href="#">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ignify.png"
                                            alt="Logo">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="item">
                                    <a href="#">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cushman.png"
                                            alt="Logo">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="features">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="pre-title">
                    <span>Features</span>
                </div>
                <div class="content-box">
                    <h2 class="title">External Attack Surface Management from CybelAngel (EASMX)</h2>
                    <div class="content">
                        <p>We take pride in protecting a global network of 100’s of enterprise clients, knowing they are
                            more secure because of our advanced EASM protection.</p>
                    </div>
                </div>


                <div class="features-tab">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <div class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                aria-selected="true">
                                <h3>Xtended Visibility</h3>
                                <span>Multiple search methodologies find ‘unknowns’ across 1st to Nth-party systems; no
                                    other vendor can match it.</span>
                            </div>
                            <div class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile"
                                aria-selected="false">
                                <h3>Comprehensive Coverage</h3>
                                <span>CybelAngel blocks attacker entry with breadth to uncover internet-connected assets
                                    (doors) and the exposures (keys) used for access.</span>
                            </div>

                            <div class="nav-link" id="nav-contact-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact"
                                aria-selected="false">
                                <h3>Relentless Pursuit</h3>
                                <span>Continuous scanning covers the entirety of the internet every 24 hours to find
                                    assets, detect exposures and limit liability.</span>
                            </div>

                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                            aria-labelledby="nav-home-tab">
                            <div class="video_container">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/video1.png" alt="">
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            ...</div>
                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                            ...</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="metric">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="content-box">
                    <h2 class="title">We do things differently...</h2>
                    <div class="content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing eliteiusmod tempor incididunt ut labore et
                            dolore magna.</p>
                    </div>
                    <a href="#" class="btn btn-sweet">Why CybelAngel?</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="matric-list">
                    <ul>
                        <li class="matric-item">
                            <div class="icon"><img
                                    src="<?php echo get_stylesheet_directory_uri();?>/images/icon-flash.png" alt="icon">
                            </div>
                            <div class="number-with-text">
                                <div class="number-text"><span class="number">400</span><span>+</span></div>
                                <div class="content">
                                    <span>Integer Metric Item</span>
                                </div>
                            </div>
                        </li>

                        <li class="matric-item">
                            <div class="icon"><img
                                    src="<?php echo get_stylesheet_directory_uri();?>/images/icon-flash.png" alt="icon">
                            </div>
                            <div class="number-with-text">
                                <div class="number-text"><span class="number">600</span><span>%</span></div>
                                <div class="content">
                                    <span>Percentage Metric</span>
                                </div>
                            </div>
                        </li>

                        <li class="matric-item">
                            <div class="icon"><img
                                    src="<?php echo get_stylesheet_directory_uri();?>/images/icon-flash.png" alt="icon">
                            </div>
                            <div class="number-with-text">
                                <div class="number-text"><span class="number">10</span><span>k</span></div>
                                <div class="content">
                                    <span>Integer Metric Item</span>
                                </div>
                            </div>
                        </li>

                        <li class="matric-item">
                            <div class="icon"><img
                                    src="<?php echo get_stylesheet_directory_uri();?>/images/icon-flash.png" alt="icon">
                            </div>
                            <div class="number-with-text">
                                <div class="number-text"><span class="number">200</span><span>+</span></div>
                                <div class="content">
                                    <span>Integer Metric Item</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="text-with-img-and-list">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="content-box">
                    <h2 class="title">External Attack Surface Management from CybelAngel (EASMX)</h2>
                    <div class="content">
                        <p>We take pride in protecting a global network of 100’s of enterprise clients, knowing they are
                            more secure because of our advanced EASM protection.</p>
                    </div>
                    <a href="#" class="btn btn-sweet">Learn More</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="feature-list">
                    <ul>
                        <li>
                            <h3>Xtended Visibility</h3>
                            <p>Multiple search methodologies find ‘unknowns’ across 1st to Nth-party systems; no other
                                vendor can match it.</p>
                        </li>
                        <li>
                            <h3>Comprehensive Coverage</h3>
                            <p>CybelAngel blocks attacker entry with breadth to uncover internet-connected assets
                                (doors) and the exposures (keys) used for access.</p>
                        </li>
                        <li>
                            <h3>Relentless Pursuit</h3>
                            <p>Continuous scanning covers the entirety of the internet every 24 hours to find assets,
                                detect exposures and limit liability.</p>
                        </li>
                        <li>
                            <h3>Zero False Positives</h3>
                            <p>Advanced machine learning and human intelligence meticulously sift, score and prioritize
                                findings into only ‘must see’ critical alerts.</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="image-container">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/features.jpg" alt="features">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cta" style="background:url('<?php echo get_stylesheet_directory_uri(); ?>/images/cta-bg.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="title">Start today on a path to a more secure tomorrow.</h2>
                <p>Start your 30-day free trial today.</p>
                <a href="#" class="btn btn-sweet">View all Resources</a>
            </div>

            <div class="col-md-6">
                <div class="article-box">
                    <article>
                        <div class="image-container">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cta-article-img.jpg" alt="">
                        </div>
                        <div class="post-meta">
                            <span>5 min read</span> • <span>20 Jan 2022</span>
                        </div>
                        <h3 class="title">Why your security strategy needs to be preemptive</h3>
                        <div class="content">
                            <p>Q&A on preemptive cybersecurity with CybelAngel’s CISO Todd Carroll Originally published
                                on betanews.com As cyberattacks...</p>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="testimonials">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="testimonial-box">
                    <div class="testimonial-list swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="item">
                                    <span class="ratings">
                                        <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                        <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                        <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                        <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                        <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                    </span>
                                    <h3>“CybelAngel identifies exposed data on connected storage devices that we do not
                                        see with
                                        other solutions.”</h3>
                                    <div class="auther-info">
                                        <h4 class="name">— Jean-Yves Poichotte</h4>
                                        <div class="info">
                                            <p>Global Head of Cybersecurity, Louis Vuitton</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="item">
                                    <span class="ratings">
                                        <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                        <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                        <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                        <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                        <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                    </span>
                                    <h3>“CybelAngel identifies exposed data on connected storage devices that we do not
                                        see with
                                        other solutions.”</h3>
                                    <div class="auther-info">
                                        <h4 class="name">— Jean-Yves Poichotte</h4>
                                        <div class="info">
                                            <p>Global Head of Cybersecurity, Louis Vuitton</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="item">
                                    <span class="ratings">
                                        <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                        <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                        <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                        <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                        <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                    </span>
                                    <h3>“CybelAngel identifies exposed data on connected storage devices that we do not
                                        see with
                                        other solutions.”</h3>
                                    <div class="auther-info">
                                        <h4 class="name">— Jean-Yves Poichotte</h4>
                                        <div class="info">
                                            <p>Global Head of Cybersecurity, Louis Vuitton</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="item">
                                    <span class="ratings">
                                        <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                        <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                        <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                        <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                        <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                    </span>
                                    <h3>“CybelAngel identifies exposed data on connected storage devices that we do not
                                        see with
                                        other solutions.”</h3>
                                    <div class="auther-info">
                                        <h4 class="name">— Jean-Yves Poichotte</h4>
                                        <div class="info">
                                            <p>Global Head of Cybersecurity, Louis Vuitton</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="navigation">
                            <div class="button-next"></div>
                            <div class="button-prev"></div>
                        </div>
                    </div>
                    <div class="image-box">
                        <div class="image-container">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/five-img.png" alt="">
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</section>
<section class="text-with-img">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-head">
                    <h2 class="section-title">Start today on a path to a more secure tomorrow.</h2>
                    <div class="content">
                        <p>We take pride in protecting a global network of 100’s of enterprise clients, knowing they are
                            more secure because of our advanced EASM protection.</p>
                    </div>
                    <a href="#" class="btn btn-sweet">Why CybelAngel?</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="text-and-img-block">
                    <div class="content-box">
                        <div class="title-content-box">
                            <h2 class="title">Secure Your Attack Surface</h2>
                            <div class="content">
                                <p>External Attack Surface Management from CybelAngel let’s you see beyond perimeters
                                    and find peace of mind knowing you can find it and remediate it, before hackers even
                                    know it’s there.</p>
                            </div>
                            <a href="#" class="btn btn-white">Learn more</a>
                        </div>
                    </div>
                    <div class="img-box">
                        <div class="image-container">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/web-security.jpg"
                                alt="Web Security">
                        </div>
                    </div>
                </div>

                <div class="text-and-img-block img-left">
                    <div class="content-box">
                        <div class="title-content-box">
                            <h2 class="title">Secure Your Attack Surface</h2>
                            <div class="content">
                                <p>External Attack Surface Management from CybelAngel let’s you see beyond perimeters
                                    and find peace of mind knowing you can find it and remediate it, before hackers even
                                    know it’s there.</p>
                            </div>
                            <a href="#" class="btn btn-white">Learn more</a>
                        </div>
                    </div>
                    <div class="img-box">
                        <div class="image-container">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/human-with-machine.jpg"
                                alt="Web Security">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="button-with-carousel">
    <div class="container">
        <div class="row section-head">
            <div class="col-md-7">
                <div class="">
                    <h2 class="title">Case Studies</h2>
                    <p>Dig into our clients’ successes in these case studies.</p>
                </div>
            </div>
            <div class="col-md-5">
                <div class="button-container">
                    <ul>
                        <li><a href="#" class="btn btn-white">Request Your Trial</a></li>
                        <li><a href="#" class="btn btn-sweet">See More Successes Here</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="carousel-box swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="item"
                                style="background:url(<?php echo get_stylesheet_directory_uri(); ?>/images/airbus.jpg);">
                                <div class="content-box">
                                    <p>AirFrance Secures Data Leak Protecting Intellectual Property</p>
                                    <span class="item-footer">Signify x CybelAngel</span>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="item"
                                style="background:url(<?php echo get_stylesheet_directory_uri(); ?>/images/carousel_2.jpg);">
                                <div class="content-box">
                                    <p>AirFrance Secures Data Leak Protecting Intellectual Property</p>
                                    <span class="item-footer">Signify x CybelAngel</span>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="item"
                                style="background:url(<?php echo get_stylesheet_directory_uri(); ?>/images/carousel_3.jpg);">
                                <div class="content-box">
                                    <p>AirFrance Secures Data Leak Protecting Intellectual Property</p>
                                    <span class="item-footer">Signify x CybelAngel</span>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="item"
                                style="background:url(<?php echo get_stylesheet_directory_uri(); ?>/images/carousel_2.jpg);">
                                <div class="content-box">
                                    <p>AirFrance Secures Data Leak Protecting Intellectual Property</p>
                                    <span class="item-footer">Signify x CybelAngel</span>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="item"
                                style="background:url(<?php echo get_stylesheet_directory_uri(); ?>/images/carousel_3.jpg);">
                                <div class="content-box">
                                    <p>AirFrance Secures Data Leak Protecting Intellectual Property</p>
                                    <span class="item-footer">Signify x CybelAngel</span>
                                </div>
                            </div>
                        </div>



                    </div>
                    <div class="navigation">
                        <div class="button-next"></div>
                        <div class="button-prev"></div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>

<section class="home-contact-us" style="background:url('<?php echo get_stylesheet_directory_uri(); ?>/images/contact-us-img.jpg');     background-size: 50%;
    background-repeat: no-repeat;
    background-position: right center;">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="contact-form">
                    <h2 class="title">See Beyond.</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();