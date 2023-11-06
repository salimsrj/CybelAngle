<?php
    $side = get_sub_field('side');
    $res_title = get_sub_field('res_title');
    $selected_posts = get_sub_field('resource_post_obj');
    $link = get_sub_field('link');
    //print_r($selected_posts);
?>

<?php if ($args['side'] == $side) : ?>
<div class="articles">
    <?php if($res_title != ''): ?>
    <h2 class="title"><?php echo $res_title; ?></h2>
    <?php endif; ?>

    <?php if( $selected_posts ): 
    foreach( $selected_posts as $selected_post ): 
    $permalink = get_permalink($selected_post->ID);  
      ?>
    <div class="item">
        <div class="image-container" style="background:url('<?php echo get_stylesheet_directory_uri(); ?>/images/resource-img.jpg'); background-size: cover; background-position: center;">
            
        </div>
        <div class="content-box">
            <h3 class="title"><?php echo $selected_post->post_title; ?></h3>
            <div class="content">
            <?php 
            $content =$selected_post->post_content;
            $trimmed_content = wp_trim_words( $content, 12, '..' );
            echo '<p>'.$trimmed_content.'</p>'; ?> 
            </div>
            <a href="<?php echo $permalink; ?>" class="read-more">Read More</a>
        </div>
    </div>
    
    <?php endforeach; 
    endif;
    ?>


       <?php if($link){ ?>
        <div class="link-container">
        <a href="<?php echo $link['url']; ?>" class="link"><?php echo $link['label']; ?></a>
    </div>
        <?php } ?> 
</div>
<?php endif; ?>