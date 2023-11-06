<?php
    $side = get_sub_field('side');
    $image = get_sub_field('image');
?>

<?php if ($args['side'] == $side) : ?>
    <div class="menu-dropdown-image d-none d-xl-block"><div class="block-image">
        <?php if ($image) echo '<img class="img-fluid" src="'.$image['sizes']['medium_large'].'" alt="" />'; ?>
    </div></div>
<?php endif; ?>