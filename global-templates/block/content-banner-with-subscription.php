
<?php
/**
 * Block Name: Banner with subscription
 */
$pre_title = get_field('pre_title');
$title = get_field('title');
$content = get_field('content');
$post_per_page = get_field('post_per_page');

?>


<section class="blog-banner">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="banner-content">
                <?php if($pre_title != ''): ?>
                <span class="pre-title"><?php echo $pre_title; ?></span>
                <?php endif; ?>

                <?php if($title != ''): ?>
                <h2 class="title"><?php echo $title; ?></h2>
                <?php endif; ?>

                    
                    <div class="content">
                    <?php echo $content; ?>
                    </div>
                    <div class="banner-newsletter">
                        <div class="form">
                            <div class="form-items">
                                <div class="left-box">
                                    <input type="text" class="form-control" placeholder="Company email" name="email">
                                    <span class="notes">We care about your data in our <a href="#">privacy policy</a>.</span>
                                </div>
                                <div class="right-box">
                                    <button class="btn btn-newsletter">Subscribe</button>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>