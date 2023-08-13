<?php
/**
 * Block Name: How it works
 */

$pre_title = get_field('pre_title');
$title = get_field('title');
$content = get_field('content');
$steps = get_field('steps');
$image = get_field('image');

?>
<section class="how-it-works">
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
                <div class="content-box">
                    <div class="left-box">
                        <div class="content">
                            <?php echo $content; ?>
                        </div>
                    </div>
                    <div class="right-box">
                        <?php if($steps): ?>
                        <div class="step-items">
                            <?php foreach($steps as $step): ?>
                            <div class="item">
                                <div class="icon">
                                    <img src="<?php echo $step['icon']['url']; ?>" alt="<?php echo $step['icon']['alt']; ?>">
                                </div>
                                <div class="content">
                                    <h4><?php echo $step['title']; ?></h4>
                                    <?php echo $step['content']; ?>
                                </div>
                            </div>
                            <?php endforeach; ?>

                        </div>
                        <?php endif; ?>
                    </div>
                </div>
                <?php if($image): ?>
                <div class="image-container">
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>