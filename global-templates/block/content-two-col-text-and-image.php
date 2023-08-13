<?php
/**
 * Block Name: Two column text and image
 */

$sub_title = get_field('sub_title');
$title = get_field('title');
$content = get_field('content');
$image = get_field('image');

?>
<section class="two-col-text-with-img">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="content-box">
                    <div class="section-head">
                        <?php if($sub_title != ''): ?>
                        <span class="sub-title"><?php echo $sub_title; ?></span>
                        <?php endif; ?>
                        <?php if($title != ''): ?>
                        <h2 class="title"><?php echo $title; ?></h2>
                        <?php endif; ?>
                    </div>
                    <div class="content">
                        <?php echo $content; ?>
                    </div>
                    <?php if($image): ?>
                    <div class="image-box">
                        <div class="image-container">
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['url']; ?>">
                        </div>
                    </div>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
</section>