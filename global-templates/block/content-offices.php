<?php
/**
 * Block Name: Offices
 */

$background_image = get_field('background_image');
$section_head = get_field('section_head');
$office_locations = get_field('office_locations');



?>
<section class="contact-address" style="background: url(<?php echo $background_image['url']; ?>);background-position: center center;
    background-size: cover;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="content-box">
                    <?php if($section_head): ?>
                    <div class="section-head">
                        <?php if($section_head['pre_title'] != ''): ?>
                        <span class="pre-title"><?php echo $section_head['pre_title']; ?></span>
                        <?php endif; ?>

                        <?php if($section_head['title'] != ''): ?>
                        <h2 class="title"><?php echo $section_head['title']; ?></h2>
                        <?php endif; ?>
                        <div class="content">
                        <?php echo $section_head['content']; ?>
                        </div>
                    </div>
                    <?php endif; ?>
                    
                    <?php if($office_locations): ?>
                    <div class="address">
                        <?php foreach($office_locations as $location): ?>
                        <div class="item">
                            <div class="flag">
                                <img src="<?php echo $location['flag']['url']; ?>" alt="<?php echo $location['flag']['alt']; ?>">
                            </div>
                                <h3><?php echo $location['location']; ?></h3>
                                <p><?php echo $location['address']; ?></p>
                                <?php if( $location['email'] != ''): ?>
                                <a href="mailto:<?php echo $location['email']; ?>" class="link"><?php echo $location['email']; ?></a>
                                <?php endif; ?>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>