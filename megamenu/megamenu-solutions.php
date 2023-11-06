<?php
    $side = get_sub_field('side');
?>

<?php if ($args['side'] == $side) : ?>
    <div class="menu-dropdown-solutions d-none d-xl-block">
        <?php if ($title = get_sub_field('title')) echo '<div class="block-title">'.$title.'</div>'; ?>
        <?php if ($text = get_sub_field('text')) echo '<div class="block-text">'.$text.'</div>'; ?>
        <?php if ($subtitle = get_sub_field('title_2')) echo '<div class="block-subtitle">'.$subtitle.'</div>'; ?>
        <?php if ($solutions = get_sub_field('posts')) : ?>
            <div class="block-solutions">
                <?php foreach ($solutions as $post) : setup_postdata($post); ?>
                    <?php $icon = get_field('menu_icon'); ?>
                    <div class="block-solutions-item">
                        <div class="block-solutions-image"><?php if ($icon) echo '<img class="img-fluid" src="'.$icon['sizes']['thumbnail'].'" alt="" />' ?></div>
                        <div class="block-solutions-title">
                            <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
                        </div>
                    </div>
                <?php endforeach; ?>
                <?php wp_reset_postdata(); ?>
            </div>
        <?php endif; ?>
    </div>
<?php endif; ?>