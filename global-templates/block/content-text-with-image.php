<?php
/**
 * Block Name: Text with image
 *
 */

$block_header = get_field('block_header');
$section_title = $block_header['title'];
$header_content = $block_header['content'];
$header_button = $block_header['button'];

$articles = get_field('articles');
?>
<section class="text-with-img">
    <div class="container">
        <?php if($block_header):?>
        <div class="row">
            <div class="col-12">
                <div class="section-head">
                    <?php if($section_title != ''): ?>
                    <h2 class="section-title"><?php echo $section_title; ?></h2>
                    <?php endif; ?>

                    <?php if($header_content != ''): ?>
                    <div class="content">
                        <?php echo $header_content; ?>
                    </div>
                    <?php endif; ?>
                    <?php if($header_button['url'] != ''): ?>
                    <a href="<?php echo $header_button['url']; ?>" class="btn btn-sweet"><?php echo $header_button['label']; ?></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <?php endif; ?>
        <?php if($articles): ?>
        <div class="row">
            <div class="col-12">
            
                <?php foreach($articles  as $article): 
                    $title = $article['title'];
                    $content = $article['content'];
                    $button = $article['button'];
                    $image = $article['image'];
                    $image_position = $article['image_position'];
                ?>   
                <div class="text-and-img-block <?php echo ($image_position == 'left')? 'img-left': 'img-right';?>">
                    <div class="content-box">
                        <div class="title-content-box">
                            <?php if($title != ''): ?>
                            <h2 class="title"><?php echo $title; ?></h2>
                            <?php endif; ?>
                            <?php if($content != ''): ?>
                            <div class="content">
                                <?php echo $content; ?>
                            </div>
                            <?php endif; ?>

                            <?php if($button['url'] != ''): ?>
                            <a href="<?php echo $button['url']; ?>" class="btn btn-white"><?php echo $button['label']; ?></a>
                            <?php endif; ?>

                        </div>
                    </div>
                    <div class="img-box">
                        <?php if($image): ?>
                        <div class="image-container">
                            <img src="<?php echo $image['url']; ?>"
                                alt="<?php echo $image['alt']; ?>">
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
                <?php endforeach; ?>

            </div>
        </div>
        <?php endif; ?>
    </div>
</section>