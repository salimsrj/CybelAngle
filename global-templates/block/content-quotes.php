<?php
/**
 * Block Name: Quotes
 */

$quote_text = get_field('quote_text');
$author_name = get_field('author_name');
$author_info = get_field('author_info');
$author_image = get_field('author_image');

?>

<section class="quotes">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="quote">
                    <div class="content">
                        <?php echo $quote_text; ?>
                    </div>
                    <div class="author-info">
                        <?php if($author_image): ?>
                        <div class="image-container">
                            <img src="<?php echo $author_image['url']; ?>" alt="<?php echo $author_image['alt']; ?>">
                        </div>
                        <?php endif; ?>
                        <h4><?php echo $author_name; ?></h4>
                        <p><?php echo $author_info; ?></p>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>