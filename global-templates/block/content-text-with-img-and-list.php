<?php
/**
 * Block Name: Text with image and list
 *
 */

$title = get_field('title');
?>
<section class="text-with-img-and-list">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="content-box">
                    <h2 class="title">External Attack Surface Management from CybelAngel (EASMX)</h2>
                    <div class="content">
                        <p>We take pride in protecting a global network of 100’s of enterprise clients, knowing they are
                            more secure because of our advanced EASM protection.</p>
                    </div>
                    <a href="#" class="btn btn-sweet">Learn More</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
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
            </div>
            <div class="col-md-6">
                <div class="image-container">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/features.jpg" alt="features">
                </div>
            </div>
        </div>
    </div>
</section>