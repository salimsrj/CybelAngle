<?php
/**
 * Template Name: Solution
 *
 * This template can be used to override the default template and sidebar setup
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
get_header();
?>
<section class="inner-page-banner" style="background: url(<?php echo get_stylesheet_directory_uri(); ?>/images/solution_banner.jpg);     background-size: cover;
    background-repeat: no-repeat;
    background-position: center;">
    <div class="container">
        <div class="col-md-6">
            <div class="content-box">
                <div class="banner-box">
                    <div class="left-box">
                        <h1 class="title">Third-Party Access Opens Doors to Risks</h1>
                        <div class="content">
                            <p>Your digital security is only as good as your partners’ digital security. Your IT
                                vendors, manufacturers, suppliers, and service providers all pose some risk to your
                                network.</p>
                        </div>
                        <div class="btn-container">
                            <ul>
                                <li><a class="btn btn-white" href="#">Explore Case Studies</a></li>
                                <li><a class="btn btn-pest" href="#">Get in touch</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="who-we-are">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="content-box">
                    <div class="left-box">
                        <span class="pre-title">Who we are</span>
                        <h2 class="title">Trust the Supply Chains’ Skills, Verify its Security.</h2>
                        <div class="content">
                            <p>External Risk Protection Solutions search for your data across external publicly accessible networks to help you see risks ahead of time.</p>
                            <p>Your dedicated human analyst empowered by machine learning finds and delivers to your SOC teams fully investigated incidents, zero false positives.</p>
                            <p>Our Data Breach Prevention locates your data where ever it leaks along the supply chain.</p>
                        </div>
                    </div>

                    <div class="right-box">
                        <div class="content-list-with-icon">
                            <ul>
                                <li>
                                    <div class="icon">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon-chat-green.png" alt="icon">
                                    </div>
                                    <div class="content">
                                        <h3>Third-Party Access Opens Doors to Risks</h3>
                                        <p>Roughly 20% of ransomware attacks have secondary targets or motives. (Verizon DBIR 2021)</p>
                                        <p>66% of the incidents attackers focused on the suppliers’ code in order to further compromise targeted customers. (ENISA Supply Chains 2021)</p>
                                    </div>
                                </li>

                                <li>
                                    <div class="icon">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon-flash-green.png" alt="icon">
                                    </div>
                                    <div class="content">
                                        <h3>More Layers, Less Visibility</h3>
                                        <p>With international supply chains and everyone adopting a remote workforce, external risk has increased exponentially.</p>
                                        <p>Security teams are spending as much as 27% of their time dealing with false positives. (Trend Micro Poll 2021)</p>
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

<section class="three-column-text-with-icon">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="flex-content-box">
                    <div class="left-col">
                        <div class="first-item">
                            <article>
                            <div class="icon">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon-flash-2.png" alt="icon-flash-2">
                            </div>
                            <h2 class="title">Supply Chain Attacks are prevented thanks to our robust and relentless defense.</h2>
                            <div class="content">
                                <p>Prevent supply chain attacks now:</p>
                            </div>
                            <a href="#" class="link">Try our 21 day Free Trial</a>
                            </article>
                        </div>
                    </div>

                    <div class="right-col">
                        <div class="item">
                            <article>
                                <div class="icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon-chat-2.png" alt="icon">
                                </div>
                                <h3 class="title">Dedicated Analyst</h3>
                                <div class="content">
                                    <p>Whether you have a team of 2 or 200, our shared team inboxes keep everyone on the same page and in the loop.</p>
                                </div>
                                <a href="#" class="link">View integration</a>
                            </article>
                        </div>

                        <div class="item">
                            <article>
                                <div class="icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon-chat-2.png" alt="icon">
                                </div>
                                <h3 class="title">Dedicated Analyst</h3>
                                <div class="content">
                                    <p>Whether you have a team of 2 or 200, our shared team inboxes keep everyone on the same page and in the loop.</p>
                                </div>
                                <a href="#" class="link">View integration</a>
                            </article>
                        </div>

                        <div class="item">
                            <article>
                                <div class="icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon-chat-2.png" alt="icon">
                                </div>
                                <h3 class="title">Dedicated Analyst</h3>
                                <div class="content">
                                    <p>Whether you have a team of 2 or 200, our shared team inboxes keep everyone on the same page and in the loop.</p>
                                </div>
                                <a href="#" class="link">View integration</a>
                            </article>
                        </div>

                        <div class="item">
                            <article>
                                <div class="icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon-chat-2.png" alt="icon">
                                </div>
                                <h3 class="title">Dedicated Analyst</h3>
                                <div class="content">
                                    <p>Whether you have a team of 2 or 200, our shared team inboxes keep everyone on the same page and in the loop.</p>
                                </div>
                                <a href="#" class="link">View integration</a>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>





<?php
get_footer();