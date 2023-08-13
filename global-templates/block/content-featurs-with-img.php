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
$sub_title = get_field('sub_title');
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

<?php elseif($style == 'style_3'): ?>

<section class="features-three-col-with-img">
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

                    
                    <div class="content">
                        <?php echo $content; ?>
                    </div>                    
                </div>

                <div class="three-col-box">

                    <?php if($features): ?>
                    <div class="col-one">
                    <?php 
                    $i = 1;
                    foreach ($features as $feature):
                        if ($i % 2 !== 0):
                        ?>
                        <div class="feature-item">
                            <div class="icon">
                                <img src="<?php echo $feature['icon']['url']; ?>" alt="<?php echo $feature['icon']['alt']; ?>">
                            </div>
                            <h3 class="title"><?php echo $feature['title']; ?></h3>
                            <div class="content">
                                <?php echo $feature['content']; ?>
                            </div>
                        </div>
                        <?php 
                        endif;
                    $i++;
                    endforeach; ?>

                        
                    </div>
                    <?php endif; ?>

                    <?php if($feature_image): ?>
                    <div class="col-two">
                        <div class="featured-img">
                            <img src="<?php echo $feature_image['url']; ?>" alt="<?php echo $feature_image['alt']; ?>">
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php if($features): ?>
                    <div class="col-three">
                    <?php 
                    $i = 1;
                    foreach ($features as $feature):
                        if ($i % 2 === 0):
                        ?>
                        <div class="feature-item">
                            <div class="icon">
                                <img src="<?php echo $feature['icon']['url']; ?>" alt="<?php echo $feature['icon']['alt']; ?>">
                            </div>
                            <h3 class="title"><?php echo $feature['title']; ?></h3>
                            <div class="content">
                                <?php echo $feature['content']; ?>
                            </div>
                        </div>
                        <?php 
                        endif;
                    $i++;
                    endforeach; ?>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php elseif($style == 'style_4'): ?>
    <section class="features-with-steps" style="background: url(<?php echo get_stylesheet_directory_uri(); ?>/images/features_section_bg.png);     background-size: cover;
    background-repeat: no-repeat;
    background-position: center;">
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
                        
                        <div class="button-container">
                        <?php if($button['url'] != ''): ?>
                            <a href="<?php echo $button['url']; ?>" class="btn btn-sweet"><?php echo $button['label']; ?></a>
                        <?php endif; ?>
                        </div>
                    </div>

                    <div class="steps">
                        <?php if($sub_title != ''): ?>
                        <h3 class="title"><?php echo $sub_title; ?></h3>
                        <?php endif; ?>
                        <div class="step-container">

                        <?php if($feature_image): ?>
                            <div class="image-container">
                                <img src="<?php echo $feature_image['url']; ?>" alt="<?php echo $feature_image['alt']; ?>">
                            </div>  
                        <?php endif; ?>


                                                  
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>