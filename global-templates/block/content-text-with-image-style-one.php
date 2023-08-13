<?php
/**
 * Block Name: Text With Image Style One
 */

$title = get_field('title');
$content = get_field('content');
$button = get_field('button');
$image = get_field('image');
$design = get_field('design');


?>
<section class="text-with-img" style="background-color: <?php echo $design['background_color']; ?>; padding-top: <?php echo $design['padding_top']; ?>px;  padding-bottom: <?php echo $design['padding_bottom']; ?>px;">
    <div class="container">
    <div class="row">
            <div class="col-12">
                <div class="program-posts">
                    <div class="program">
                        <div class="content-box">
                            <div class="title-content">
                                <?php if($title != ''): ?>   
                                <h3 class="title"><?php echo $title; ?></h3>
                                <?php endif; ?>
                                <div class="content">
                                    <?php echo $content; ?>
                                    <?php if($button['url'] != ''): ?>
									<p><a href="<?php echo $button['url']; ?>" class="link"><?php echo $button['label']; ?></a></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <?php if($image): ?>
                        <div class="image-box">
                            <div class="image-container">
                                <img src="<?php echo $image['url']; ?>" alt="image">
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>