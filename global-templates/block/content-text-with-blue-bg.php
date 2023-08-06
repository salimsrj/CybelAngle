<?php
/**
 * Block Name: Text with blue background.
 *
 */
$title = get_field('title');
$content = get_field('content');
$buttons = get_field('buttons');
$image = get_field('image');
?>
<section class="content-with-img-bluebg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="content-box">
                    <?php if($title != ''): ?>
                        <h2 class="title"><?php echo $title; ?></h2>
                    <?php endif; ?>
                    
                    <div class="content">
                        <?php echo $content; ?>
                    </div>
                    
                    <?php if($buttons): ?>
                    <div class="btn-container">
                        <ul>
                            <?php if($buttons['button_one']['url']): ?>
                            <li><a class="btn btn-white" href="<?php echo $buttons['button_one']['url']; ?>"><?php echo $buttons['button_one']['label']; ?></a></li>
                            <?php endif; ?>
                            <?php if($buttons['button_two']['url']): ?>
                            <li><a class="btn btn-sweet" href="<?php echo $buttons['button_two']['url']; ?>"><?php echo $buttons['button_two']['label']; ?></a></li>
                            <?php endif; ?>
                        </ul>
                    </div>
                    <?php  endif; ?>
                </div>
                <?php if($image): ?>
                <div class="image-box">
                    <div class="image-container">
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                    </div>
                </div>
                <?php endif;?>
            </div>
        </div>
    </div>
</section>