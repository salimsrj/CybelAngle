<?php
/**
 * Block Name: Programs
 */

$section_header = get_field('section_header');
$programs = get_field('programs');
?>
<section class="programs">
    <div class="container">
        <div class="row">
            <?php if($section_header != ''): ?>
            <div class="col-md-12">
                <div class="section-head">
                    <?php if($section_header['title'] != ''): ?>
                    <h2 class="section-title"><?php echo $section_header['title']; ?></h2>
                    <?php endif; ?>
                    <div class="content">
                        <?php echo $section_header['content']; ?>
                    </div>
                </div>
            </div>
            <?php endif; ?>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="program-posts">
                    <?php if (have_rows('programs')): ?>
                        <?php while (have_rows('programs')) : the_row(); ?>
                            <div class="program">
                                <div class="content-box">
                                    <div class="title-content">
                                        <h3 class="title"><?php the_sub_field('title'); ?></h3>
                                        <div class="content">
                                            <?php the_sub_field('content'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-box">
                                    <div class="image-container">
                                        <?php $image = get_sub_field('image'); ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>