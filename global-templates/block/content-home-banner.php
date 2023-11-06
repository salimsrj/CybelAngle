<?php
/**
 * Block Name: Home Banner
 *
 */

$title = get_field('title');
$content = get_field('content');
$buttons = get_field('buttons');
$background_image = get_field('background_image');
?>
<section class="home_banner" style="background: url(<?php echo $background_image['url']; ?>); background-size: 100%;
    background-repeat: no-repeat;">
    <div class="container">
        <div class="col-md-6">
            <div class="content-box">
                <div class="banner-box">
                    <div class="left-box">
                        <?php if($title != ''): ?>
                        <h1 class="title"><?php echo $title; ?></h1>
                        <?php endif; ?>
                        <?php if($content != ''): ?>
                        <div class="content">
                            <?php echo $content; ?>
                        </div>
                        <?php endif; ?>
                        <?php if($buttons): ?>
                        <div class="btn-container">
                            <ul>
                                <?php if($buttons['button_one']['url'] != ''):?>
                                <li><a class="btn btn-white" href="<?php echo $buttons['button_one']['url']; ?>"><?php echo $buttons['button_one']['label']; ?></a></li>
                                <?php endif; ?>
                                <?php if($buttons['button_two']['url'] != ''):?>
                                <li><a class="btn btn-pest" href="<?php echo $buttons['button_two']['url']; ?>"><?php echo $buttons['button_two']['label']; ?></a></li>
                                <?php endif; ?>
                            </ul>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="testimonial-new">
    <div class="container">
        <div class="row">
            <div class="col-12">
            <div class="swiper testimonial-new-slider">
                <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <!-- <img src="https://swiperjs.com/demos/images/nature-1.jpg" /> -->
                    <div class="testimonial-item">
                        <div>
                            <span class="testi-content">“CybelAngel identifies exposed data on connected storage devices that we do not see with other solutions.”</span>
                        </div>
                        <div class="author-info">
                            <div class="author-img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/author-img.jpeg" alt="">
                            </div>
                            <h4 class="author-name">— Jean-Yves Poichotte1</h4>
                            <span class="author-designation">Global Head of Cybersecurity, Louis Vuitton</span>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                <div class="testimonial-item">
                        <div>
                            <span class="testi-content">“CybelAngel identifies exposed data on connected storage devices that we do not see with other solutions.”</span>
                        </div>
                        <div class="author-info">
                            <div class="author-img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/author-img.jpeg" alt="">
                            </div>
                            <h4 class="author-name">— Jean-Yves Poichotte2</h4>
                            <span class="author-designation">Global Head of Cybersecurity, Louis Vuitton</span>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                <div class="testimonial-item">
                        <div>
                            <span class="testi-content">“CybelAngel identifies exposed data on connected storage devices that we do not see with other solutions.”</span>
                        </div>
                        <div class="author-info">
                            <div class="author-img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/author-img.jpeg" alt="">
                            </div>
                            <h4 class="author-name">— Jean-Yves Poichotte3</h4>
                            <span class="author-designation">Global Head of Cybersecurity, Louis Vuitton</span>
                        </div>
                    </div>
                </div>
             
                <div class="swiper-slide">
                <div class="testimonial-item">
                        <div>
                            <span class="testi-content">“CybelAngel identifies exposed data on connected storage devices that we do not see with other solutions.”</span>
                        </div>
                        <div class="author-info">
                            <div class="author-img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/author-img.jpeg" alt="">
                            </div>
                            <h4 class="author-name">— Jean-Yves Poichotte4</h4>
                            <span class="author-designation">Global Head of Cybersecurity, Louis Vuitton</span>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                <div class="testimonial-item">
                        <div>
                            <span class="testi-content">“CybelAngel identifies exposed data on connected storage devices that we do not see with other solutions.”</span>
                        </div>
                        <div class="author-info">
                            <div class="author-img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/author-img.jpeg" alt="">
                            </div>
                            <h4 class="author-name">— Jean-Yves Poichotte5</h4>
                            <span class="author-designation">Global Head of Cybersecurity, Louis Vuitton</span>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                <div class="testimonial-item">
                        <div>
                            <span class="testi-content">“CybelAngel identifies exposed data on connected storage devices that we do not see with other solutions.”</span>
                        </div>
                        <div class="author-info">
                            <div class="author-img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/author-img.jpeg" alt="">
                            </div>
                            <h4 class="author-name">— Jean-Yves Poichotte6</h4>
                            <span class="author-designation">Global Head of Cybersecurity, Louis Vuitton</span>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                <div class="testimonial-item">
                        <div>
                            <span class="testi-content">“CybelAngel identifies exposed data on connected storage devices that we do not see with other solutions.”</span>
                        </div>
                        <div class="author-info">
                            <div class="author-img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/author-img.jpeg" alt="">
                            </div>
                            <h4 class="author-name">— Jean-Yves Poichotte7</h4>
                            <span class="author-designation">Global Head of Cybersecurity, Louis Vuitton</span>
                        </div>
                    </div>
                </div>


                <div class="swiper-slide">
                <div class="testimonial-item">
                        <div>
                            <span class="testi-content">“CybelAngel identifies exposed data on connected storage devices that we do not see with other solutions.”</span>
                        </div>
                        <div class="author-info">
                            <div class="author-img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/author-img.jpeg" alt="">
                            </div>
                            <h4 class="author-name">— Jean-Yves Poichotte7</h4>
                            <span class="author-designation">Global Head of Cybersecurity, Louis Vuitton</span>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                <div class="testimonial-item">
                        <div>
                            <span class="testi-content">“CybelAngel identifies exposed data on connected storage devices that we do not see with other solutions.”</span>
                        </div>
                        <div class="author-info">
                            <div class="author-img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/author-img.jpeg" alt="">
                            </div>
                            <h4 class="author-name">— Jean-Yves Poichotte7</h4>
                            <span class="author-designation">Global Head of Cybersecurity, Louis Vuitton</span>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                <div class="testimonial-item">
                        <div>
                            <span class="testi-content">“CybelAngel identifies exposed data on connected storage devices that we do not see with other solutions.”</span>
                        </div>
                        <div class="author-info">
                            <div class="author-img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/author-img.jpeg" alt="">
                            </div>
                            <h4 class="author-name">— Jean-Yves Poichotte8</h4>
                            <span class="author-designation">Global Head of Cybersecurity, Louis Vuitton</span>
                        </div>
                    </div>
                </div>
                </div>
                <!-- <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div> -->
            </div>
            <div thumbsSlider="" class="swiper thumb-slider">
                <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="logo">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cushman.png" />
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="logo">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cushman.png" />
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="logo">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cushman.png" />
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="logo">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cushman.png" />
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="logo">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cushman.png" />
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="logo">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cushman.png" />
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="logo">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cushman.png" />
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="logo">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cushman.png" />
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="logo">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cushman.png" />
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="logo">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cushman.png" />
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>

</section>


<script>
    var swiper = new Swiper(".thumb-slider", {
      spaceBetween: 10,
      slidesPerView: 5,                                                                                                       
      freeMode: true,
      watchSlidesProgress: true,
      breakpoints: {
        0: {
          slidesPerView: 2,
          spaceBetween: 15,
        },
        500: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 3,
          spaceBetween: 40,
        },
        1024: {
          slidesPerView: 5,
          spaceBetween: 50,
        },
      },

      
    });
    var swiper2 = new Swiper(".testimonial-new-slider", {
      spaceBetween: 30,
      
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      thumbs: {
        swiper: swiper,
      },
    });
  </script>