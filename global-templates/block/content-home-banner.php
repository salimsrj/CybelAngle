<?php
/**
 * Block Name: Home Banner
 *
 */

$title = get_field('title');
?>
<section class="home_banner" style="background: url(<?php echo get_stylesheet_directory_uri(); ?>/images/home-banner.jpg); background-size: 100%;
    background-repeat: no-repeat;">
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