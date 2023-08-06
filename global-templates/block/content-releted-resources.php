<?php
/**
 * Block Name: Releted Resources
 *
 */
$title = get_field('title');
$content = get_field('content');
$button = get_field('button');
?>
<section class="releted-resources">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-head">
                    <div class="left-box">
                        <?php if($title != ''): ?>
                        <h2 class="section-title"><?php echo $title; ?></h2>
                        <?php endif; ?>
                        <?php echo $content; ?>
                    </div>
                    <div class="right-box">
                        <?php if($button['url'] != ''):?>
                        <a href="<?php echo $button['label']; ?>" class="btn btn-sweet"><?php echo $button['label']; ?></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">




            <?php
                $resources = get_field('resources');
                if( $resources ): ?>
                <div class="resources">                   
                <?php foreach( $resources as $resource ):
                
                setup_postdata($resource); 
                
                ?>
                  <div class="item">
                        <article>
                            <div class="image-container" style="background: url(<?php echo get_the_post_thumbnail_url($resource->ID, 'full'); ?>); background-size: cover;
                            background-position: center;">
                                <div class="post-meta">
                                    <div class="left-box">
                                        <span>1 min Read</span>
                                        <span class="date"><?php echo get_the_date( 'M j, Y',  $resource->ID); ?></span>
                                    </div>

                                    <div class="right-box">
                                        <span>Shadow IT</span>
                                    </div>
                                </div>
                            </div>
                            <h3 class="title"><?php echo get_the_title( $resource->ID ); ?></h3>
                            <?php 
                            $content = get_the_content();
                            $trimmed_content = wp_trim_words( $content, 30, '..' );
                            echo '<p>'.$trimmed_content.'</p>'; ?>
                            <a href="<?php echo get_the_permalink($resource->ID); ?>" class="link">Read post</a>
                        </article>
                    </div>
                <?php endforeach; ?>
                </div>
                <?php 
                    // Reset the global post object so that the rest of the page works correctly.
                    wp_reset_postdata(); ?>
                <?php endif; ?>
            </div>
        </div>

    </div>
</section>