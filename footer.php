<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$social_links = get_field('social_links', 'option');
$copyright = get_field('copyright', 'option');
$footer_logo_and_text = get_field('footer_logo_and_text', 'option');
$footerLogo = $footer_logo_and_text['logo'];
$footerText = $footer_logo_and_text['text'];
?>




<footer class="footer">
	<div class="footer-top">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="newsletter">
						<div class="left-box">
							<h2 class="title">Cyber news straight to your inbox</h2>
							<p>Stay up to date with the latest news, announcements, and articles.</p>
						</div>
						<div class="right-box">
							<div class="form">
								<div class="row">
									<div class="col-md-8">
										<input type = "text" class = "form-control" placeholder = "Enter your email" name = "email">
									</div>
									<div class="col-md-4">
										<button class="btn btn-newsletter">Subscribe</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-middle">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="footer-columns">
						<div class="footer-col-1">
							
							<div class="footer-logo">
								<?php if($footerLogo): ?>
								<a href="#" class="logo">
									<img src="<?php echo $footerLogo['url']; ?>" alt="<?php echo $footerLogo['alt']; ?>">
								</a>
								<?php endif; ?>
								<?php if($footerText): ?>
								<div class="content">
									<?php echo $footerText; ?>
								</div>
								<?php endif; ?>
							</div>
						</div>
						<div class="footer-col-2">
							<div class="widget">
							<?php if ( is_active_sidebar( 'footer_one' ) ) : ?>
								<?php dynamic_sidebar('footer_one'); ?>
							<?php endif; ?>

								<!-- <h3 class="title">solutions</h3>
								<ul>
									<li><a href="#">Banking & Finance</a></li>
									<li><a href="#">Manufacturing</a></li>
									<li><a href="#">Retail</a></li>
									<li><a href="#">IT & Consulting</a></li>
									<li><a href="#">Telco/Mobile</a></li>
									<li><a href="#">Asset Discovery</a></li>
									<li><a href="#">Data Breech Prevention</a></li>
									<li><a href="#">Account Takeover Prevention</a></li>
								</ul> -->
							</div>
						</div>
						<div class="footer-col-3">
							<div class="widget">
							<?php if ( is_active_sidebar( 'footer_two' ) ) : ?>
								<?php dynamic_sidebar('footer_two'); ?>
							<?php endif; ?>
								<!-- <h3 class="title">cybersecurity Challenges</h3>
								<ul>
									<li><a href="#">cybersecurity Challenges</a></li>
									<li><a href="#">Ransomware Prevention</a></li>
									<li><a href="#">Data Leaks</a></li>
									<li><a href="#">Exposed Credentials</a></li>
									<li><a href="#">Cloud Migration</a></li>
									<li><a href="#">Explore the Platform</a></li>
								</ul> -->
							</div>
						</div>
						<div class="footer-col-4">
							<div class="widget">

							<?php if ( is_active_sidebar( 'footer_three' ) ) : ?>
								<?php dynamic_sidebar('footer_three'); ?>
							<?php endif; ?>
								<!-- <h3 class="title">Blog</h3>
								<ul>
									<li><a href="#">Resource Center</a></li>
									<li><a href="#">Whitepapers & Guides</a></li>
									<li><a href="#">Ecplore by Topic</a></li>
									<li><a href="#">Webinars</a></li>
									<li><a href="#">Case Studies</a></li>
									<li><a href="#">Events</a></li>
									
								</ul> -->
							</div>
						</div>
						<div class="footer-col-5">
							<div class="widget">
							<?php if ( is_active_sidebar( 'footer_four' ) ) : ?>
								<?php dynamic_sidebar('footer_four'); ?>
							<?php endif; ?>
								<!-- <h3 class="title">Quick Links</h3>
								<ul>
									<li><a href="#">Privacy Notice for California Residents</a></li>
									<li><a href="#">Contact Us</a></li>
									<li><a href="#">Login</a></li>
									<li><a href="#">Support</a></li>
									<li><a href="#">Gartner 5 Star Insights</a></li>
									<li><a href="#">Press Release</a></li>
									<li><a href="#">Request a Demo</a></li>
									<li><a href="#">Partner With Us</a></li>
								</ul> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<?php if($copyright != ''): ?>
					<div class="copyright">
						<span><?php echo $copyright; ?></span>
					</div>
					<?php endif; ?>
					
				</div>
				<div class="col-md-6">
					<div class="social-menu">
						<div class="footer-menu">
							<ul>
								<li><a href="#">Terms & Conditions</a></li>
								<li><a href="#">Privacy Policy</a></li>
							</ul>
						</div>
						<div class="social-icons">
							<?php if($social_links): ?>
							<ul>
								<?php if($social_links['twitter'] != ''): ?>
								<li><a target="_blank" href="<?php echo $social_links['twitter']; ?>"><span><i class="fa fa-twitter" aria-hidden="true"></i></span></a></li>
								<?php endif; ?>
								<?php if($social_links['linkedin'] != ''): ?>
								<li><a target="_blank" href="<?php echo $social_links['linkedin']; ?>"><span><i class="fa fa-linkedin-square" aria-hidden="true"></i></span></a></li>
								<?php endif; ?>
								<?php if($social_links['facebook'] != ''): ?>
								<li><a target="_blank" href="<?php echo $social_links['facebook']; ?>"><span><i class="fa fa-facebook" aria-hidden="true"></i></span></a></li>
								<?php endif; ?>
								<?php if($social_links['github'] != ''): ?>
								<li><a target="_blank" href="<?php echo $social_links['github']; ?>"><span><i class="fa fa-github" aria-hidden="true"></i></span></a></li>
								<?php endif; ?>
							</ul>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>




</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

