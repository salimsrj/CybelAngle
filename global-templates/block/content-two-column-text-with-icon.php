<?php
/**
 * Block Name: Two Column Text with Image.
 *
 */
$column_one = get_field('column_one');
$column_one_pre_title = $column_one['pre_title'];
$column_one_title = $column_one['title'];
$column_one_content = $column_one['content'];
$column_two = get_field('column_two');
$content_list = $column_two['contents'];
$fullwidth_image = get_field('fullwidth_image');
?>
<section class="who-we-are">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="content-box">
                    <?php if($column_one): ?>
                    <div class="left-box">
                        <?php if($column_one_pre_title != ''): ?>
                        <span class="pre-title"><?php echo $column_one_pre_title; ?></span>
                        <?php endif; ?>
                        <?php if($column_one_title != ''): ?>
                        <h2 class="title"><?php echo $column_one_title; ?></h2>
                        <?php endif; ?>

                        <?php if($column_one_content != ''): ?>
                        <div class="content">
                            <?php echo $column_one_content; ?>
                        </div>
                        <?php endif; ?>
                    </div>
                    <?php endif; ?>
                    
                    <?php if($column_two): ?>
                    <div class="right-box">
                        <?php if($content_list): ?>
                        <div class="content-list-with-icon">
                            <ul>
                                <?php foreach($content_list as $content): ?>
                                <li>
                                    <?php if($content['icon']):?>
                                    <div class="icon">
                                        <img src="<?php echo $content['icon']['url']; ?>"
                                            alt="<?php echo $content['icon']['alt']; ?>">
                                    </div>
                                    <?php endif; ?>
                                    <div class="content">
                                        <h3><?php echo $content['title']; ?></h3>
                                        <?php echo $content['content']; ?>
                                    </div>
                                </li>
                                <?php endforeach; ?>

                                <!-- <li>
                                    <div class="icon">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon-flash-green.png"
                                            alt="icon">
                                    </div>
                                    <div class="content">
                                        <h3>More Layers, Less Visibility</h3>
                                        <p>With international supply chains and everyone adopting a remote workforce,
                                            external risk has increased exponentially.</p>
                                        <p>Security teams are spending as much as 27% of their time dealing with false
                                            positives. (Trend Micro Poll 2021)</p>
                                    </div>
                                </li> -->
                            </ul>
                        </div>
                        <?php endif; ?>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <?php if($fullwidth_image): ?>
                <div class="image-container">
                    <img src="<?php echo $fullwidth_image['url']; ?>" alt="<?php echo $fullwidth_image['alt']; ?>">
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>