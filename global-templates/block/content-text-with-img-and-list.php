<?php
/**
 * Block Name: Text with image and list
 *
 */

$title = get_field('title');
$content = get_field('content');
$button = get_field('button');
$feature_list = get_field('feature_list');
$feature_image = get_field('feature_image');

?>
<section class="text-with-img-and-list">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="content-box">
                    <?php if($title != ''): ?>
                    <h2 class="title"><?php echo $title; ?></h2>
                    <?php endif; ?>
                    <?php if($content != ''): ?>
                    <div class="content">
                        <?php echo $content; ?>
                    </div>
                    <?php endif; ?>
                    <?php if($button): ?>
                    <a href="<?php echo $button['url']; ?>" class="btn btn-sweet"><?php echo $button['label']; ?></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <?php if($feature_list): ?>
                <div class="feature-list">
                    <ul>
                        <?php foreach($feature_list as $feature): ?>
                        <li>
                        <h3><?php echo $feature['title']; ?></h3>
                        <?php echo $feature['content']; ?>
                        </li>
                        <?php endforeach; ?>
                            
                        
                    </ul>
                </div>
                <?php endif; ?>
            </div>
            <div class="col-md-6">
            <?php if($feature_image): ?>
                <div class="image-container">
                    <img src="<?php echo $feature_image['url']; ?>" alt="<?php echo $feature_image['alt']; ?>">
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>