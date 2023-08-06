<?php
/**
 * Block Name: Banner
 */
$title = get_field('title');
$content = get_field('content');
$buttons = get_field('buttons');
$background_image = get_field('background_image');
$banner_image = get_field('banner_image');
?>




<section class="banner-style-3" style="background: url('<?php echo $background_image['url']; ?>'); background-size: cover;
    background-position: center;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="banner-content">
                    <?php if($title != ''): ?>
                    <h1 class="title"><?php echo $title; ?></h1>
                    <?php endif; ?>
                    <div class="content">
                        <?php echo $content; ?>
                    </div>
                    <?php if($buttons): ?>
                    <div class="buttons-container">
                        <ul>
                            <?php if($buttons['button_one']['url'] != ''): ?>
                            <li><a class="btn btn-white" href="<?php echo $buttons['button_one']['url']; ?>"><?php echo $buttons['button_one']['label']; ?></a></li>
                            <?php endif; ?>
                            <?php if($buttons['button_two']['url'] != ''): ?>
                            <li><a class="btn btn-pest" href="<?php echo $buttons['button_two']['url']; ?>"><?php echo $buttons['button_two']['label']; ?></a></li>
                            <?php endif; ?>
                        </ul>
                    </div>
                    <?php endif; ?>
                </div>
                <?php if($banner_image):?>
                <div class="banner-image">
                    <div class="image-container">
                        <img src="<?php echo $banner_image['url']; ?>" alt="<?php echo $banner_image['alt']; ?>">
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>