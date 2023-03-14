<?php
/**
 * Block Name: Metric
 *
 */

$title = get_field('title');
$content = get_field('content');
$button = get_field('button');
$matric_list = get_field('matric_list');
?>
<section class="metric">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="content-box">
                    <?php if($title != ''): ?>
                    <h2 class="title"> <?php echo $title; ?></h2>
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
            <div class="col-md-6">
                <div class="matric-list">
                    <?php if($matric_list): ?>
                    <ul>
                        <?php foreach($matric_list as $matric): ?>
                        <li class="matric-item">
                            <?php if($matric['icon']): ?>
                            <div class="icon">
                                <img src="<?php echo $matric['icon']['url'];?>" alt="<?php echo $matric['icon']['alt'];?>">
                            </div>
                            <?php endif; ?>
                            <div class="number-with-text">
                                <div class="number-text"><span class="number"><?php echo $matric['number'];?></span><span><?php echo $matric['after_number_text'];?></span></div>
                                <?php if($matric['content'] != ''): ?>
                                <div class="content">
                                    <span><?php echo $matric['content']; ?></span>
                                </div>
                                <?php endif; ?>
                            </div>
                        </li> 
                        <?php endforeach; ?>

                        
                    </ul>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>