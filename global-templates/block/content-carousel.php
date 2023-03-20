<?php
/**
 * Block Name: Carousel
 *
 */

$header = get_field('header');
$header_title = $header['title'];
$header_content = $header['content'];
$header_buttons = $header['buttons'];
$button_one = $header_buttons['button_one'];
$button_two = $header_buttons['button_two'];
$carousel = get_field('carousel');
?>
<section class="button-with-carousel">
    <div class="container">
        <?php if($header): ?>
        <div class="row section-head">
            <div class="col-md-7">
                <div class="">
                    <?php if($header_title != ''): ?>
                        <h2 class="title"><?php echo $header_title; ?></h2>
                    <?php endif; ?>
                    <?php if($header_content != ''): ?>
                        <p><?php echo $header_content; ?></p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-md-5">
                <?php if($header_buttons): ?>
                <div class="button-container">
                    <ul>
                        <?php if($button_one): ?>
                        <li><a href="<?php echo $button_one['url']; ?>" class="btn btn-white"><?php echo $button_one['label']; ?></a></li>
                        <?php endif; ?>
                        <?php if($button_two): ?>
                        <li><a href="<?php echo $button_two['label']; ?>" class="btn btn-sweet"><?php echo $button_two['label']; ?></a></li>
                        <?php endif; ?>
                    </ul>
                </div>
                <?php endif; ?>
            </div>
        </div>
        <?php endif; ?>

        <div class="row">
            <div class="col-12">
                <div class="carousel-box swiper">                    
                    <div class="swiper-wrapper">
                        
                        <?php foreach($carousel as $slide): ?>
                            <div class="swiper-slide">
                                <div class="item"
                                    style="background:url(<?php echo $slide['image']['url']; ?>);">
                                    <div class="content-box">
                                        <p><?php echo $slide['title'] ?></p>
                                        <span class="item-footer"><?php echo $slide['author'] ?></span>
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
            </div>
        </div>
    </div>
</section>