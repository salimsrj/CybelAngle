<?php
/**
 * Template Name: Blog
 *
 * This template can be used to override the default template and sidebar setup
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
get_header();
?>
<section class="blog-banner">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="banner-content">
                    <span class="pre-title">Blog</span>
                    <h2 class="title">Cybersecurity Reads</h2>
                    <div class="content">
                        <p>Receive cybersecurity posts in your inbox!</p>
                    </div>
                    <div class="banner-newsletter">
                        <div class="form">
                            <div class="form-items">
                                <div class="left-box">
                                    <input type="text" class="form-control" placeholder="Company email" name="email">
                                    <span class="notes">We care about your data in our <a href="#">privacy policy</a>.</span>
                                </div>
                                <div class="right-box">
                                    <button class="btn btn-newsletter">Subscribe</button>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="blog-sec">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="blog-container">
                    <div class="single-post">
                        <article>
                            <div class="image-container">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cyber-security-banner.jpg"
                                    alt="">
                            </div>
                            <div class="post-meta">
                                <span>5 min read</span>&nbsp;&nbsp;•&nbsp;&nbsp;<span>20 Jan 2022</span>
                            </div>
                            <a href="#">
                                <h2 class="title">An International Cybersecurity Collaboration Like No Other</h2>
                            </a>
                            <div class="content">
                                <p>Q&A on preemptive cybersecurity with CybelAngel’s CISO Todd Carroll Originally published on betanews.com As cyberattacks become more sophisticated, so traditional security techniques may no longer be up to the task of protecting systems. What’s needed is an approach that can spot the routes an attacker may use and help close them down. We spoke to</p>
                            </div>
                            <div class="tags">
                                <ul>
                                    <li><a href="#" class="link">Product Release</a></li>
                                    <li><a href="#" class="link">Research</a></li>
                                    <li><a href="#" class="link">Tips & Tricks</a></li>
                                </ul>
                            </div>
                        </article>

                    </div>
                    <!-- <div class="section-head">
                        <span class="pre-title">News Features</span>
                        <h2 class="section-title">CybelAngel in the News</h2>
                        <div class="content">
                            <p>Featured news posts covering everything Cybel.</p>
                        </div>
                    </div> -->

                    <div class="blog-list">
                        <div class="item">
                            <article>
                                <div class="image-container">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/news-img-1.jpg"
                                        alt="news image">
                                </div>
                                <div class="post-meta">
                                    <span>5 min read</span>&nbsp;&nbsp;•&nbsp;&nbsp;<span>20 Jan 2022</span>
                                </div>
                                <a href="#">
                                    <h3 class="title">Why your security strategy needs to be preemptive</h3>
                                </a>
                                <div class="content">
                                    <p>Q&A on preemptive cybersecurity with CybelAngel’s CISO Todd Carroll Originally
                                        published on betanews.com As cyberattacks...</p>
                                </div>
                                <div class="tags">
                                    <ul>
                                        <li><a href="#" class="link">Product Release</a></li>
                                        <li><a href="#" class="link">Research</a></li>
                                        <li><a href="#" class="link">Tips & Tricks</a></li>
                                    </ul>
                                </div>


                            </article>
                        </div>
                        <div class="item">
                            <article>
                                <div class="image-container">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/news-img-2.jpg"
                                        alt="news image">
                                </div>
                                <div class="post-meta">
                                    <span>5 min read</span>&nbsp;&nbsp;•&nbsp;&nbsp;<span>20 Jan 2022</span>
                                </div>
                                <a href="#">
                                    <h3 class="title">Why your security strategy needs to be preemptive</h3>
                                </a>
                                <div class="content">
                                    <p>Q&A on preemptive cybersecurity with CybelAngel’s CISO Todd Carroll Originally
                                        published on betanews.com As cyberattacks...</p>
                                </div>
                                <div class="tags">
                                <ul>                                    
                                    <li><a href="#" class="link">Research</a></li>
                                    <li><a href="#" class="link">Tips & Tricks</a></li>
                                </ul>
                                </div>

                            </article>
                        </div>

                        <div class="item">
                            <article>
                                <div class="image-container">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/news-img-3.jpg"
                                        alt="news image">
                                </div>
                                <div class="post-meta">
                                    <span>5 min read</span>&nbsp;&nbsp;•&nbsp;&nbsp;<span>20 Jan 2022</span>
                                </div>
                                <a href="#">
                                    <h3 class="title">Why your security strategy needs to be preemptive</h3>
                                </a>
                                <div class="content">
                                    <p>Q&A on preemptive cybersecurity with CybelAngel’s CISO Todd Carroll Originally
                                        published on betanews.com As cyberattacks...</p>
                                </div>
                                <div class="tags">
                                <ul>
                                    <li><a href="#" class="link">Article</a></li>
                                    <li><a href="#" class="link">Research</a></li>                                    
                                </ul>
                                </div>

                            </article>
                        </div>

                        <div class="item">
                            <article>
                                <div class="image-container">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/news-img-4.jpg"
                                        alt="news image">
                                </div>
                                <div class="post-meta">
                                    <span>5 min read</span>&nbsp;&nbsp;•&nbsp;&nbsp;<span>20 Jan 2022</span>
                                </div>
                                <a href="#">
                                    <h3 class="title">Why your security strategy needs to be preemptive</h3>
                                </a>
                                <div class="content">
                                    <p>Q&A on preemptive cybersecurity with CybelAngel’s CISO Todd Carroll Originally
                                        published on betanews.com As cyberattacks...</p>
                                </div>
                                <div class="tags">
                                    <ul>
                                        <li><a href="#" class="link">In the News</a></li>
                                    </ul>
                                </div>

                            </article>
                        </div>

                        <div class="item">
                            <article>
                                <div class="image-container">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/news-img-5.jpg"
                                        alt="news image">
                                </div>
                                <div class="post-meta">
                                    <span>5 min read</span>&nbsp;&nbsp;•&nbsp;&nbsp;<span>20 Jan 2022</span>
                                </div>
                                <a href="#">
                                    <h3 class="title">Why your security strategy needs to be preemptive</h3>
                                </a>
                                <div class="content">
                                    <p>Q&A on preemptive cybersecurity with CybelAngel’s CISO Todd Carroll Originally
                                        published on betanews.com As cyberattacks...</p>
                                </div>
                                <div class="tags">
                                    <ul>
                                        <li><a href="#" class="link">In the News</a></li>
                                    </ul>
                                </div>

                            </article>
                        </div>

                        <div class="item">
                            <article>
                                <div class="image-container">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/news-img-6.jpg"
                                        alt="news image">
                                </div>
                                <div class="post-meta">
                                    <span>5 min read</span>&nbsp;&nbsp;•&nbsp;&nbsp;<span>20 Jan 2022</span>
                                </div>
                                <a href="#">
                                    <h3 class="title">Why your security strategy needs to be preemptive</h3>
                                </a>
                                <div class="content">
                                    <p>Q&A on preemptive cybersecurity with CybelAngel’s CISO Todd Carroll Originally
                                        published on betanews.com As cyberattacks...</p>
                                </div>
                                <div class="tags">
                                    <ul>
                                        <li><a href="#" class="link">In the News</a></li>
                                    </ul>
                                </div>

                            </article>
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
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cushman.png"
                                            alt="logo">
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="item">
                                <a href="#">
                                    <div class="image-container">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/elkem.png"
                                            alt="logo">
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="item">
                                <a href="#">
                                    <div class="image-container">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/lous-vuitton.png"
                                            alt="logo">
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="item">
                                <a href="#">
                                    <div class="image-container">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/airfrance-logo.png"
                                            alt="logo">
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="item">
                                <a href="#">
                                    <div class="image-container">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/technicolor.png"
                                            alt="logo">
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