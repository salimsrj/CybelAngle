<?php
/**
 * Block Name: Home Contact
 *
 */

$background_image = get_field('background_image');
$shortcode = get_field('shortcode');
?>
<section class="home-contact-us" style="background:url('<?php echo $background_image['url']; ?>'); background-size: 50% 100%;
    background-repeat: no-repeat;
    background-position: right center;">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="contact-form">
                    <?php echo do_shortcode($shortcode); ?>
                </div>
            </div>
        </div>
    </div>
</section>