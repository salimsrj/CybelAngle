<?php
/**
 * Block Name: Home Features
 *
 */

$pre_title = get_field('pre_title');
$title = get_field('title');
$content = get_field('content');
$features_tab = get_field('features_tab');
?>
<section class="features">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php if($pre_title != ''): ?>
                <div class="pre-title">
                    <span><?php echo $pre_title; ?></span>
                </div>
                <?php endif; ?>
                <div class="content-box">
                    <?php if($title != ''): ?>
                    <h2 class="title"><?php echo $title; ?></h2>
                    <?php endif; ?>

                    <?php if($content != ''): ?>
                    <div class="content">
                        <?php echo $content; ?>
                    </div>
                    <?php endif; ?>
                </div>

                <?php if($features_tab): ?>
                <div class="features-tab">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <?php
                            $i = 1;
                            foreach($features_tab as $tab):
                            ?>
                            <div class="nav-link <?php if($i== 1){echo 'active'; }?>" id="nav-tab-<?php echo $i; ?>" data-bs-toggle="tab"
                                data-bs-target="#content_<?php echo $i; ?>" type="button" role="tab" aria-controls="content_<?php echo $i; ?>"
                                aria-selected="true">
                                <?php if($tab['tab_title'] != ''): ?>
                                <h3><?php echo $tab['tab_title']; ?></h3>
                                <?php endif; ?>
                                <?php if($tab['tab_subtitle'] != ''): ?>
                                <span><?php echo $tab['tab_subtitle']; ?></span>
                                <?php endif; ?>
                            </div>
                            <?php 
                            $i++;
                            endforeach; ?>
                            <!-- <div class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                aria-selected="true">
                                <h3>Xtended Visibility</h3>
                                <span>Multiple search methodologies find ‘unknowns’ across 1st to Nth-party systems; no
                                    other vendor can match it.</span>
                            </div> -->
                            <!-- <div class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
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
                            </div> -->

                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <?php
                        $i = 1;
                        foreach($features_tab as $tab):
                        ?>
                        <div class="tab-pane fade <?php if($i== 1){echo 'show active'; }?>" id="content_<?php echo $i; ?>" role="tabpanel"
                            aria-labelledby="nav-tab-<?php echo $i; ?>">
                            <div class="video_container">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/video1.png" alt="">
                            </div>

                            <?php if($tab['tab_content'] != ''): ?>
                                <h3><?php echo $tab['tab_content']; ?></h3>
                            <?php endif; ?>

                        </div>
                        <?php 
                            $i++;
                            endforeach;
                            ?>
                        <!-- <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                            aria-labelledby="nav-home-tab">
                            <div class="video_container">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/video1.png" alt="">
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            ...</div>
                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                            ...</div> -->
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>