<?php
/**
 * Block Name: Banner Without Image
 */

$pre_title = get_field('pre_title');
$title = get_field('title');
$content = get_field('content');
$background_image = get_field('background_image');
$button = get_field('button');
?>
<section class="inner-banner-without-img" style="background: url(<?php echo$background_image['url']; ?>);background-position: center center;
    background-size: cover;">
    <div class="container">
        <div class="col-12">
            <div class="banner-content">
                <div class="banner">
                    <?php if($pre_title != ''): ?>
                    <span class="pre-title"><?php echo $pre_title; ?></span>
                    <?php endif; ?>
                    <?php if($title != ''): ?>
                    <h1 class="title"><?php echo $title; ?></h1>
                    <?php endif; ?>

                    <div class="content">
                       <?php echo $content; ?>
                    </div>
                    <?php if($button['url'] != ''): ?>
                    <a href="<?php echo $button['url']; ?>" class="btn btn-green"><?php echo $button['label']; ?></a>
                    <?php endif; ?>

                        <div class="buttons-container">
                            <ul>
                                <?php if($button['button_one']['url'] != ''): ?>
                                <li><a href="<?php echo $button['button_one']['url']; ?>" class="btn btn-white"><?php echo $button['button_one']['label']; ?></a></li>
                                <?php endif; ?>
                                <?php if($button['button_two']['url'] != ''): ?>
                                <li><a href="<?php echo $button['button_two']['url']; ?>" class="btn btn-pest"><?php echo $button['button_two']['label']; ?></a></li>
                                <?php endif; ?>
                            </ul>
                        </div>


                    
                </div>
            </div>
        </div>
    </div>
    </div>
</section>