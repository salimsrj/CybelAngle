<?php
/**
 * Block Name: Featurs with image
 */
$style = get_field('style');
$pre_title = get_field('pre_title');
$title = get_field('title');
$content = get_field('content');
$features = get_field('features');
$feature_image = get_field('feature_image');
$button = get_field('button');

?>
<?php if($style == 'style_1'): ?>
<section class="featurs-with-img">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-head">
                    <?php if($pre_title != ''): ?>
                        <span class="pre-title"><?php echo $pre_title; ?></span>
                    <?php endif; ?>
                    <?php if($title != ''): ?>
                        <h2 class="title"><?php echo $title; ?></h2>  
                    <?php endif; ?>                  
                </div>
                
                <div class="featurs-img-box">
                    <?php if($features): ?>
                    <div class="featurs-list">
                        <ul>
                            <?php foreach ($features as $feature): ?>
                            <li>
                                <div class="icon">
                                    <img src="<?php echo $feature['icon']['url']; ?>" alt="<?php echo $feature['icon']['alt']; ?>">
                                </div>
                                <div class="content">
                                    <h3><?php echo $feature['title']; ?></h3>
                                    <?php echo $feature['content']; ?>
                                </div>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <?php endif; ?>
                    <?php if($feature_image): ?>
                    <div class="featurs-img">
                        <div class="image-container">
                            <img src="<?php echo $feature_image['url']; ?>" alt="<?php echo $feature_image['alt']; ?>">
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
                
            </div>
        </div>
    </div>
</section>
<?php elseif($style == 'style_2'): ?>
<section class="featurs-with-img-style-2">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="content-box">
                    <?php if($pre_title != ''): ?>
                    <span class="pre-title"><?php echo $pre_title; ?></span>
                    <?php endif; ?>
                    <?php if($title != ''): ?>
                    <h2 class="title"><?php echo $title; ?></h2>
                    <?php endif; ?>  
                    <div class="content">
                        <?php echo $content; ?>
                    </div>
                    <?php if($button['url'] != ''): ?>
                    <a href="<?php echo $button['url']; ?>" class="btn btn-pest"><?php echo $button['label']; ?></a>
                    <?php endif; ?>
                </div>

                <?php if($feature_image): ?>
                <div class="image-box">
                    <div class="image-container">
                        <img src="<?php echo $feature_image['url']; ?>" alt="<?php echo $feature_image['alt']; ?>">
                    </div>
                </div>
                <?php endif; ?>


                <?php if($features): ?>

                <div class="service-list">
                    <ul>
                        <?php foreach ($features as $feature): ?>
                        <li>
                            <div class="service">
                                <div class="icon">
                                    <img src="<?php echo $feature['icon']['url']; ?>" alt="<?php echo $feature['icon']['alt']; ?>">
                                </div>
                                <div class="content">
                                    <h3><?php echo $feature['title']; ?></h3>
                                    <?php echo $feature['content']; ?>
                                </div>
                                <?php if($feature['link']['url'] != ''): ?>
                                <a href="<?php echo $feature['link']['url']; ?>" class="link"><?php echo $feature['link']['label']; ?></a> 
                                <?php endif; ?>
                            </div>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>