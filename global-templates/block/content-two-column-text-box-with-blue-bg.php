<?php
/**
 * Block Name: Banner
 */
$icon = get_field('icon');
$title = get_field('title');
$content = get_field('content');
$button = get_field('button');
$content_list = get_field('content_list');
?>
<section class="text-block-blue-bg">
    
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="content-box">   
                    <div class="left-box">
                        <?php if($icon): ?>
                        <div class="icon">
                            <img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>">
                        </div>
                        <?php endif; ?>
                        <?php if($title != ""): ?>
                        <h3 class="title"><?php echo $title; ?></h3>
                        <?php endif; ?>
                        <div class="content">
                            <?php echo $content; ?>
                        </div>
                        <a href="#" class="btn btn-pest">Get in touch</a>
                    </div>
                    <div class="right-box">

                        <div class="content-list">
                            <ul>
                                <?php
                                if (have_rows('content_list')):
                                    while (have_rows('content_list')) : the_row();
                                ?>
                                        <li>
                                            <div class="content">
                                                <h4><?php the_sub_field('title'); ?></h4>
                                                <p><?php the_sub_field('content'); ?></p>
                                            </div>
                                        </li>
                                <?php
                                    endwhile;
                                endif;
                                ?>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



