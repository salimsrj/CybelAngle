<?php
/**
 * Block Name: Home Features
 *
 */

$title = get_field('title');
?>
<section class="features">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="pre-title">
                    <span>Features</span>
                </div>
                <div class="content-box">
                    <h2 class="title">External Attack Surface Management from CybelAngel (EASMX)</h2>
                    <div class="content">
                        <p>We take pride in protecting a global network of 100’s of enterprise clients, knowing they are
                            more secure because of our advanced EASM protection.</p>
                    </div>
                </div>


                <div class="features-tab">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <div class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                aria-selected="true">
                                <h3>Xtended Visibility</h3>
                                <span>Multiple search methodologies find ‘unknowns’ across 1st to Nth-party systems; no
                                    other vendor can match it.</span>
                            </div>
                            <div class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile"
                                aria-selected="false">
                                <h3>Comprehensive Coverage</h3>
                                <span>CybelAngel blocks attacker entry with breadth to uncover internet-connected assets
                                    (doors) and the exposures (keys) used for access.</span>
                            </div>

                            <div class="nav-link" id="nav-contact-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact"
                                aria-selected="false">
                                <h3>Relentless Pursuit</h3>
                                <span>Continuous scanning covers the entirety of the internet every 24 hours to find
                                    assets, detect exposures and limit liability.</span>
                            </div>

                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                            aria-labelledby="nav-home-tab">
                            <div class="video_container">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/video1.png" alt="">
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            ...</div>
                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                            ...</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>