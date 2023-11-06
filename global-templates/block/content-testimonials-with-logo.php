<?php
/**
 * Block Name: Testimonials
 *
 */

$testimonials = get_field('testimonials');
$image = get_field('image');
?>
<section class="testimonials">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="testimonial-box">
                    <?php if($testimonials): ?>
                    <div class="testimonial-list swiper">
                        <div class="swiper-wrapper">
                            <?php foreach($testimonials as $testimonial): 
                            $ratings = $testimonial['ratings'];
                            $text = $testimonial['text'];
                            $author_name = $testimonial['author_name'];
                            $author_info = $testimonial['author_info'];
                            ?>
                            <div class="swiper-slide">
                                <div class="item">
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
                            </div>






                        
                        <?php endforeach; ?>
                        </div>

                        <div class="navigation">
                            <div class="button-next"></div>
                            <div class="button-prev"></div>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php if($image): ?>
                    <div class="image-box">
                        <div class="image-container">
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                        </div>
                    </div>
                    <?php endif; ?>
                </div>


            </div>
        </div>
    </div>
</section>