<?php
    $side = get_sub_field('side');
?>

<?php if ($args['side'] == $side) : ?>
    <div class="menu-dropdown-posts d-none d-xl-block">
        <?php if ($title = get_sub_field('title')) echo '<div class="block-title">'.$title.'</div>'; ?>
        <?php if ($posts = get_sub_field('posts')) : ?>
            <div class="block-posts">
                <?php foreach ($posts as $post) : setup_postdata($post); ?>
                    <div class="block-posts-item">
                        <div class="block-posts-title">
                            <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
                        </div>
                    </div>
                <?php endforeach; ?>
                <?php wp_reset_postdata(); ?>
            </div>
        <?php endif; ?>
    </div>
<?php endif; ?>