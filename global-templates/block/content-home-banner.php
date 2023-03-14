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