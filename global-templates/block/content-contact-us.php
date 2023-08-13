<?php
/**
 * Block Name: Contact Us
 */

$form_shortcode = get_field('form_shortcode');
$background_image = get_field('background_image');
$style = get_field('style');
?>
<?php if($style == 'style_1'): ?>
<section class="home-contact-us" style="background:url('<?php echo $background_image['url']; ?>');     background-size: 50%;
    background-repeat: no-repeat;
    background-position: right center;">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="contact-form">
                    <?php echo do_shortcode($form_shortcode); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php elseif($style == 'style_2'): ?>

<section class="inner-contact" style="background:url('<?php echo $background_image['url']; ?>'); background-size: 50% 100%;
    background-repeat: no-repeat;
    background-position: left center;">
    <div class="container">
        <div class="row">
            <div class="offset-md-6 col-md-6">
                <div class="contact-form">
                    <?php echo do_shortcode($form_shortcode); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>