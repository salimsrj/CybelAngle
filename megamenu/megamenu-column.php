<?php
    $side = get_sub_field('side');
?>

<?php if ($args['side'] == $side) : ?>
    <div class="<?php echo $side == 'left' ? 'menu-dropdown-column' : 'menu-dropdown-block' ?>">
        <?php if ($columns = get_sub_field('columns')) {

            echo '<div class="block-columns">';
                foreach ($columns as $column) {
                    echo '<div class="block-columns-item">';
                        $icon = '';
                        if($column['icon']){
                            $icon = '<img src="'.$column['icon']['url'].'">';
                        }
                        echo '<div class="mega-menu-col-item"><span class="icon">'.$icon.'</span>';
                        echo '<div class="title-content">';
                        if ($column['title_link']) echo '<div class="block-columns-title"><a class="link" href="'.$column['title_link']['url'].'" target="'.$column['title_link']['target'].'">'.$column['title_link']['title'].'</a></div>';
                        if ($column['text']) echo '<div class="block-columns-text d-none d-lg-block content">' . $column['text'] . '</div>';
                        echo '</div></div>';
                        if ($column['link']) {
                            echo '<div class="block-columns-links">';
                                foreach ($column['link'] as $link) {
                                    if ($link['type'] == 'page') {
                                        echo '<div class="block-columns-links-item"><a href="'.$link['page'].'">'.$link['page_name'].'</a></div>';
                                    } else if ($link['type'] == 'link') {
                                        echo '<div class="block-columns-links-item"><a href="'.$link['link']['url'].'" target="'.$link['link']['target'].'">'.$link['link']['title'].'</a></div>';
                                    }
                                }
                            echo '</div>';
                        }
                        
                        // if ($buttons = $column['buttons']) {
                        //     echo '<div class="block-buttons">';
                        //         foreach($buttons as $button) {
                        //            // get_template_part('content','buttons', $button);
                        //         }
                        //     echo '</div>';
                        // }
                    echo '</div>';
                }
            echo '</div>';
        } ?>
    </div>
<?php endif; ?>