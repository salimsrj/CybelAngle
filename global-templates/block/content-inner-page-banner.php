<?php
/**
 * Block Name: Inner Page Banner
 */
$background_image = get_field('background_image');
$pre_title = get_field('pre_title');
$title = get_field('title');
$content = get_field('content');
$buttons = get_field('buttons');
?>
<section class="inner-page-banner" style="background: url(<?php echo $background_image['url']; ?>);     background-size: cover;
    background-repeat: no-repeat;
    background-position: center;">
    <div class="container">
        <div class="col-md-6">
            <div class="content-box">
                <div class="banner-box">
                    <div class="left-box">
                        <?php if($pre_title != ''): ?>
                        <span class="pre-header"><?php echo $pre_title; ?></span>
                        <?php endif; ?>
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
                                <?php if($buttons['button_one']['url']): ?>
                                <li><a class="btn btn-white" href="<?php echo $buttons['button_one']['url']; ?>"><?php echo $buttons['button_one']['label']; ?></a></li>
                                <?php endif; ?>
                                <?php if($buttons['button_two']['url']): ?>
                                <li><a class="btn btn-pest" href="<?php echo $buttons['button_one']['url']; ?>"><?php echo $buttons['button_two']['label']; ?></a></li>
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
<section class="inner-page-banner-without-img" style="background-color: #1A194F;">
    <div class="container">
        <div class="col-md-12">
            <div class="content-box">
                <div class="banner-box">
                    <div class="content-box">
                        <?php if($pre_title != ''): ?>
                        <span class="pre-header"><?php echo $pre_title; ?></span>
                        <?php endif; ?>
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
                                <?php if($buttons['button_one']['url']): ?>
                                <li><a class="btn btn-white" href="<?php echo $buttons['button_one']['url']; ?>"><?php echo $buttons['button_one']['label']; ?></a></li>
                                <?php endif; ?>
                                <?php if($buttons['button_two']['url']): ?>
                                <li><a class="btn btn-pink" href="<?php echo $buttons['button_one']['url']; ?>"><?php echo $buttons['button_two']['label']; ?></a></li>
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