<?php
/**
 * Block Name: Three Column Text With Icon.
 */
$title = get_field('title');
$column_one = get_field('column_one');
$style = get_field('style');
$column_one_icon = $column_one['icon'];
$column_one_title = $column_one['title'];
$column_one_content = $column_one['content'];
$column_one_link = $column_one['link'];

$column_two = get_field('column_two');
$column_two_contents = $column_two['contents'];

// $column_three = get_field('column_three');
// $column_three_contents = $column_three['contents'];



?>
<section class="<?php if($style == 'style_2'){ echo 'three-column-text-without-icon';} else {echo 'three-column-text-with-icon';} ?>">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="flex-content-box">
                    <?php if($column_one): ?>
                    <div class="left-col">
                        <div class="first-item">
                            <article>
                                <?php if($column_one_icon): ?>
                                <div class="icon">
                                    <img src="<?php echo $column_one_icon['url']; ?>"
                                        alt="<?php echo $column_one_icon['alt']; ?>">
                                </div>
                                <?php endif; ?>
                                <?php if($column_one_title != ''): ?>
                                <h2 class="title"><?php echo $column_one_title;  ?></h2>
                                <?php endif; ?>
                                <div class="content">
                                    <?php echo $column_one_content; ?>
                                </div>
                                <?php if($column_one_link['url'] != ''): ?>
                                <a href="<?php echo $column_one_link['url']; ?>" class="link"><?php echo $column_one_link['label']; ?></a>
                                <?php endif; ?>
                            </article>
                        </div>
                    </div>
                    <?php endif; ?>

                        

                    <?php if($column_two_contents): ?>
                    <div class="right-col">
                        <?php foreach($column_two_contents as $content): ?>
                        <div class="item">
                            <article>
                                <?php if($content['icon']['url'] != ''): ?>
                                <div class="icon">
                                    <img src="<?php echo $content['icon']['url']; ?>"
                                        alt="<?php echo $content['icon']['alt']; ?>">
                                </div>
                                <?php endif; ?>
                                
                                <h3 class="title"><?php echo $content['title']; ?></h3>
                                <div class="content">
                                    <?php echo $content['content']; ?>
                                </div>
                                <?php if($content['link']['url'] != ''): ?>
                                <a href="<?php echo $content['link']['url'] ; ?>" class="link"><?php echo $content['link']['label'] ; ?></a>
                                <?php endif; ?>
                            </article>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>