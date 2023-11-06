<?php
    $side = get_sub_field('side');
?>

<?php if ($args['side'] == $side) : ?>
    <div class="menu-dropdown-jobs d-none d-xl-block">
        <?php if ($title = get_sub_field('title')) echo '<div class="block-title">'.$title.'</div>'; ?>
        <?php if ($jobs = get_sub_field('posts')) : ?>
            <div class="block-jobs">
                <?php foreach ($jobs as $post) : setup_postdata($post); ?>
                    <?php $url = get_field('url'); ?>
                    <div class="block-jobs-item block-jobs-item--<?php echo $post->post_type ?>">
                        <div class="block-jobs-image"><?php the_post_thumbnail( array(130, 120) ); ?></div>
                        <div class="block-jobs-description">
                            <div class="block-jobs-title">
                                <?php
                                    $url = get_field('url') ? get_field('url') : get_the_permalink();
                                    $target = get_field('url') ? '_blank' : '';
                                ?>
                                <a href="<?php echo $url ?>" target="<?php echo $target ?>"><?php the_title(); ?></a>
                            </div>
                            <?php if ($location = get_field('location')) {
                                echo '<div class="block-jobs-location">'.$location.'</div>';
                            } else {
                                echo '<div class="block-jobs-date">'.get_the_date().'</div>';
                            } ?>
                        </div>
                    </div>
                <?php endforeach; ?>
                <?php wp_reset_postdata(); ?>
            </div>
        <?php endif; ?>
    </div>
<?php endif; ?>