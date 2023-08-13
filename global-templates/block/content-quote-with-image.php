<?php
/**
 * Block Name: Quotes
 */

$author_image = get_field('author_image');
$quote = get_field('quote');
$ratings = get_field('rating');
$author_name = get_field('author_name');
$author_designation = get_field('author_designation');

?>
<section class="quote-with-img">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="quote-item">
                    <div class="image-box">
                        <?php if($author_image): ?>
                        <div class="author-img">
                            <img src="<?php echo $author_image['url']; ?>" alt="<?php echo $author_image['alt']; ?>">
                        </div>
                        <?php endif; ?>
                    </div>
                    <div class="content-box">
                 
                        <div class="ratings">
                            <?php if($ratings == 1): ?>
                            <span><i class="fa fa-star" aria-hidden="true"></i></span>
                            <?php endif; ?>
                            <?php if($ratings == 2): ?>
                            <span><i class="fa fa-star" aria-hidden="true"></i></span>
                            <span><i class="fa fa-star" aria-hidden="true"></i></span>
                            <?php endif; ?>
                            <?php if($ratings == 3): ?>
                            <span><i class="fa fa-star" aria-hidden="true"></i></span>
                            <span><i class="fa fa-star" aria-hidden="true"></i></span>
                            <span><i class="fa fa-star" aria-hidden="true"></i></span>
                            <?php endif; ?>
                            <?php if($ratings == 4): ?>
                            <span><i class="fa fa-star" aria-hidden="true"></i></span>
                            <span><i class="fa fa-star" aria-hidden="true"></i></span>
                            <span><i class="fa fa-star" aria-hidden="true"></i></span>
                            <span><i class="fa fa-star" aria-hidden="true"></i></span>
                            <?php endif; ?>
                            <?php if($ratings == 5): ?>
                            <span><i class="fa fa-star" aria-hidden="true"></i></span>
                            <span><i class="fa fa-star" aria-hidden="true"></i></span>
                            <span><i class="fa fa-star" aria-hidden="true"></i></span>
                            <span><i class="fa fa-star" aria-hidden="true"></i></span>
                            <span><i class="fa fa-star" aria-hidden="true"></i></span>
                            <?php endif; ?>
                        </div>
                        <div class="quote">
                            <?php echo $quote; ?>
                        </div>
                        <div class="author-info">
                            <div class="author-name">
                                <?php if($author_name != ''): ?>
                                <h4>— <?php echo $author_name; ?></h4>
                                <?php endif; ?>
                                <?php if($author_designation != ''): ?>
                                <span class="designation"><?php echo $author_designation; ?></span>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>