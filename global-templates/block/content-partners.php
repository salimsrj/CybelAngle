<?php
/**
 * Block Name: Partners
 *
 */

$content = get_field('content');
$partners_logo = get_field('partners_logo');
?>
<section class="partners">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="content-box">
                    <?php if($content != ''): ?>
                    <div class="content">
                        <span><?php echo $content; ?></span>
                    </div>
                    <?php endif; ?>
                    
                    <?php if($partners_logo): ?>
                    <div class="logo-carousel swiper">
                        <div class="swiper-wrapper">
                            <?php foreach($partners_logo as $partner): ?>
                            <div class="swiper-slide">                                
                                <div class="item">
                                    <a href="<?php echo $partner['url']; ?>">
                                        <img src="<?php echo $partner['logo']['url']; ?>"
                                            alt="<?php echo $partner['logo']['alt']; ?>">
                                    </a>
                                </div>                                
                            </div>  
                            <?php endforeach; ?>                          
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>