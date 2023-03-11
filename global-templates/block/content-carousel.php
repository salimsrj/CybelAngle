<?php
/**
 * Block Name: Carousel
 *
 */

$title = get_field('title');
?>
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