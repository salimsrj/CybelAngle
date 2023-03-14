<?php
/**
 * Block Name: Text with image and list
 *
 */

$title = get_field('title');
$content = get_field('content');
$button = get_field('button');
$feature_list = get_field('feature_list');
?>
<section class="text-with-img-and-list">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="content-box">
                    <?php if($title != ''): ?>
                    <h2 class="title"><?php echo $title; ?></h2>
                    <?php endif; ?>
                    <?php if($content != ''): ?>
                    <div class="content">
                        <?php echo $content; ?>
                    </div>
                    <?php endif; ?>
                    <?php if($button): ?>
                    <a href="<?php echo $button['url']; ?>" class="btn btn-sweet"><?php echo $button['label']; ?></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <?php if($feature_list): ?>
                <div class="feature-list">
                    <ul>
                        <li>
                            <h3>Xtended Visibility</h3>
                            <p>Multiple search methodologies find ‘unknowns’ across 1st to Nth-party systems; no other
                                vendor can match it.</p>
                        </li>
                        <li>
                            <h3>Comprehensive Coverage</h3>
                            <p>CybelAngel blocks attacker entry with breadth to uncover internet-connected assets
                                (doors) and the exposures (keys) used for access.</p>
                        </li>
                        <li>
                            <h3>Relentless Pursuit</h3>
                            <p>Continuous scanning covers the entirety of the internet every 24 hours to find assets,
                                detect exposures and limit liability.</p>
                        </li>
                        <li>
                            <h3>Zero False Positives</h3>
                            <p>Advanced machine learning and human intelligence meticulously sift, score and prioritize
                                findings into only ‘must see’ critical alerts.</p>
                        </li>
                    </ul>
                </div>
                <?php endif; ?>
            </div>
            <div class="col-md-6">
                <div class="image-container">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/features.jpg" alt="features">
                </div>
            </div>
        </div>
    </div>
</section>