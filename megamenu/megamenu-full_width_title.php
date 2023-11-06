<?php
    $side = get_sub_field('side');
?>

<?php if ($args['side'] == $side) : ?>
    <div class="menu-dropdown-title d-none d-xl-block">
        <?php if ($title = get_sub_field('title')) echo '<div class="block-title">'.$title.'</div>'; ?>
    </div>
<?php endif; ?>