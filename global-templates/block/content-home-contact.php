<?php
/**
 * Block Name: Home Contact
 *
 */

$title = get_field('title');
?>
<section class="home-contact-us" style="background:url('<?php echo get_stylesheet_directory_uri(); ?>/images/contact-us-img.jpg');     background-size: 50% 100%;
    background-repeat: no-repeat;
    background-position: right center;">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="contact-form">
                    <?php echo do_shortcode('[gravityform id="1" title="true"]' ); ?>
                </div>
            </div>
        </div>
    </div>
</section>