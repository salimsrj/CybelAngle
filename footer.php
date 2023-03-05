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
								<a href="#" class="logo">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/CA-Logo-Footer.png" alt="">
								</a>
								<div class="content">
									<p>Start today on a path to a more secure tomorrow with a Complimentary External Exposure Scan and see what you've been missing.</p>
								</div>
							</div>
						</div>
						<div class="footer-col-2">
							<div class="widget">
								<h3 class="title">solutions</h3>
								<ul>
									<li><a href="#">Banking & Finance</a></li>
									<li><a href="#">Manufacturing</a></li>
									<li><a href="#">Retail</a></li>
									<li><a href="#">IT & Consulting</a></li>
									<li><a href="#">Telco/Mobile</a></li>
									<li><a href="#">Asset Discovery</a></li>
									<li><a href="#">Data Breech Prevention</a></li>
									<li><a href="#">Account Takeover Prevention</a></li>
								</ul>
							</div>
						</div>
						<div class="footer-col-3">
							<div class="widget">
								<h3 class="title">cybersecurity Challenges</h3>
								<ul>
									<li><a href="#">cybersecurity Challenges</a></li>
									<li><a href="#">Manufacturing</a></li>
									<li><a href="#">Retail</a></li>
									<li><a href="#">IT & Consulting</a></li>
									<li><a href="#">Telco/Mobile</a></li>
									<li><a href="#">Asset Discovery</a></li>
									<li><a href="#">Data Breech Prevention</a></li>
									<li><a href="#">Account Takeover Prevention</a></li>
								</ul>
							</div>
						</div>
						<div class="footer-col-4">
							<div class="widget">
								<h3 class="title">Blog</h3>
								<ul>
									<li><a href="#">Banking & Finance</a></li>
									<li><a href="#">Manufacturing</a></li>
									<li><a href="#">Retail</a></li>
									<li><a href="#">IT & Consulting</a></li>
									<li><a href="#">Telco/Mobile</a></li>
									<li><a href="#">Asset Discovery</a></li>
									<li><a href="#">Data Breech Prevention</a></li>
									<li><a href="#">Account Takeover Prevention</a></li>
								</ul>
							</div>
						</div>
						<div class="footer-col-5">
							<div class="widget">
								<h3 class="title">Quick Links</h3>
								<ul>
									<li><a href="#">Privacy Notice for California Residents</a></li>
									<li><a href="#">Manufacturing</a></li>
									<li><a href="#">Retail</a></li>
									<li><a href="#">IT & Consulting</a></li>
									<li><a href="#">Telco/Mobile</a></li>
									<li><a href="#">Asset Discovery</a></li>
									<li><a href="#">Data Breech Prevention</a></li>
									<li><a href="#">Account Takeover Prevention</a></li>
								</ul>
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
					<div class="copyright">
						<span>© 2023 CybelAngel. All rights reserved.</span>
					</div>
					
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
							<ul>
								<li><a href="#"><span><i class="fa fa-twitter" aria-hidden="true"></i></span></a></li>
								<li><a href="#"><span><i class="fa fa-linkedin-square" aria-hidden="true"></i></span></a></li>
								<li><a href="#"><span><i class="fa fa-facebook" aria-hidden="true"></i></span></a></li>
								<li><a href="#"><span><i class="fa fa-github" aria-hidden="true"></i></span></a></li>
							</ul>
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

