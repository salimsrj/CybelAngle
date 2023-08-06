<?php
/**
 * Block Name: Two Column Text with Image.
 *
 */
$title = get_field('title');
?>
<section class="who-we-are">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="content-box">
                    <div class="left-box">
                        <span class="pre-title">Who we are</span>
                        <h2 class="title">Trust the Supply Chains’ Skills, Verify its Security.</h2>
                        <div class="content">
                            <p>External Risk Protection Solutions search for your data across external publicly
                                accessible networks to help you see risks ahead of time.</p>
                            <p>Your dedicated human analyst empowered by machine learning finds and delivers to your SOC
                                teams fully investigated incidents, zero false positives.</p>
                            <p>Our Data Breach Prevention locates your data where ever it leaks along the supply chain.
                            </p>
                        </div>
                    </div>

                    <div class="right-box">
                        <div class="content-list-with-icon">
                            <ul>
                                <li>
                                    <div class="icon">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon-chat-green.png"
                                            alt="icon">
                                    </div>
                                    <div class="content">
                                        <h3>Third-Party Access Opens Doors to Risks</h3>
                                        <p>Roughly 20% of ransomware attacks have secondary targets or motives. (Verizon
                                            DBIR 2021)</p>
                                        <p>66% of the incidents attackers focused on the suppliers’ code in order to
                                            further compromise targeted customers. (ENISA Supply Chains 2021)</p>
                                    </div>
                                </li>

                                <li>
                                    <div class="icon">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon-flash-green.png"
                                            alt="icon">
                                    </div>
                                    <div class="content">
                                        <h3>More Layers, Less Visibility</h3>
                                        <p>With international supply chains and everyone adopting a remote workforce,
                                            external risk has increased exponentially.</p>
                                        <p>Security teams are spending as much as 27% of their time dealing with false
                                            positives. (Trend Micro Poll 2021)</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="image-container">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tech.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>