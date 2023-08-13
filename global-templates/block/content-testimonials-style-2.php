<?php
/**
 * Block Name: Testimonial Style Two
 *
 */
$testimonials = get_field('testimonials');
?>
<section class="testimonial-style2">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php if($testimonials): ?>
                <div class="testimonal-carousel swiper">
                    <div class="swiper-wrapper">
                        <?php foreach($testimonials as $testimonial): 
                            $ratings = $testimonial['ratings'];
                            $text = $testimonial['text'];
                            $author_name = $testimonial['author_name'];
                            $author_info = $testimonial['author_info'];
                            $author_image = $testimonial['author_image'];
                            ?>
                        <div class="swiper-slide ">
                            <div class="item"
                                style="background:url(<?php echo $testimonial['background_image']['url']; ?>); background-size: cover;">
                                <div class="content-box">
                                    <div class="logo">
                                        <img src="<?php echo $testimonial['logo']['url']; ?>"
                                            alt="<?php echo $testimonial['logo']['alt']; ?>">
                                    </div>
                                    <span class="ratings">
                                        <?php if($ratings == 1): ?>
                                        <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                        <?php endif; ?>
                                        <?php if($ratings == 2): ?>
                                        <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                        <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                        <?php endif; ?>
                                        <?php if($ratings == 3): ?>
                                        <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                        <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                        <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                        <?php endif; ?>
                                        <?php if($ratings == 4): ?>
                                        <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                        <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                        <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                        <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                        <?php endif; ?>
                                        <?php if($ratings == 5): ?>
                                        <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                        <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                        <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                        <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                        <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                        <?php endif; ?>
                                    </span>
                                    <?php if($text != ''): ?>
                                    <h3>“<?php echo $text; ?>”</h3>
                                    <?php endif; ?>
                                    <div class="auther-info">
                                        <?php if($author_name != ''): ?>
                                        <h4 class="name">— <?php echo $author_name; ?></h4>
                                        <?php endif; ?>

                                        <?php if($author_info != ''): ?>
                                        <div class="info">
                                            <p><?php echo $author_info; ?></p>
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                
                                <?php if($author_image):
                                    ?>
                                <div class="image-box">
                                    <div class="image-container">
                                        <img src="<?php echo $author_image['url']; ?>"
                                            alt="<?php echo $author_image['alt']; ?>">
                                    </div>
                                </div>
                                <?php endif; ?>

                            </div>
                        </div>
                        <?php endforeach; ?>

                        
                    </div>
                    <div class="swiper-pagination"></div>

                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>