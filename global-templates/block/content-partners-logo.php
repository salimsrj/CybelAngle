<?php
/**
 * Template Name: Partners logo wtih text.
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
get_header();

$title = get_field('title');
$content = get_field('content');
$partners_logo = get_field('partners_logo');

?>
<section class="partners-logo" style="background:url(<?php echo get_stylesheet_directory_uri(); ?>/images/bg-2.png);">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="content-box">
                    <?php if($title != ''): ?>
                    <h2 class="title"><?php echo $title; ?></h2>
                    <?php endif; ?>
                    <?php echo $content; ?>
                </div> 
                <?php if($partners_logo): ?>          
                <div class="logo-container swiper">
                    <div class="swiper-wrapper">
                        <?php foreach($partners_logo as $partner): ?>
                        <div class="swiper-slide">
                            <div class="item">
                                <a href="<?php echo $partner['url']; ?>">
                                    <div class="image-container">
                                        <img src="<?php echo $partner['logo']['url']; ?>" alt="<?php echo $partner['logo']['alt']; ?>">
                                    </div>
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
</section>