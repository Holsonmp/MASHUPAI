<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!-- Start Footer Section -->
		
		
		</div>

			
			<footer class="dark-wrapper inverse-text">
				
				<div class="container inner">
					<div class="row">
					<div class="col-md-12 col-lg-3 text-center text-lg-left">
						<div class="widget"> <img src="#" srcset="<?php echo base_url(); ?>assets/img/logo-light.png 1x" alt="" />
						<div class="space20"></div>
							<p>
							<?php echo html_escape($settings->about_footer); ?>
							</p>
						</div>
						<!-- /.widget -->
					</div>
					<!-- /column -->
					<div class="space30 d-lg-none d-xl-none"></div>
					<div class="col-6 col-md-3 col-lg-2 offset-lg-1">
						<div class="widget">
						<h5 class="widget-title">Need Help?</h5>
						<ul class="list-unstyled mb-0">
							<li><a href="https://docs.marilys.co">Support</a></li>
							<li><a href="https://www.marilys.co">Get Started</a></li>
							<li><a href="<?php echo base_url(); ?>terms-conditions">Terms of Use</a></li>
							<li><a href="<?php echo base_url(); ?>privacy-policy">Privacy Policy</a></li>
							<li><a href="<?php echo base_url(); ?>contact">Contact Us</a></li>
						</ul>
						</div>
						<!-- /.widget -->
					</div>
					<!-- /column -->
					<div class="col-6 col-md-3 col-lg-2">
						<div class="widget">
						<h5 class="widget-title">Learn More</h5>
						<ul class="list-unstyled mb-0">
							<li><a href="<?php echo base_url(); ?>about-us">About Us</a></li>
							<li><a href="<?php echo base_url(); ?>our-story">Our Story</a></li>
							<li><a href="<?php echo base_url(); ?>ota-benga">Projects</a></li>
							<li><a href="https://www.marilys.co/pricing">Pricing</a></li>
							<li><a href="<?php echo base_url(); ?>faq">Faqs</a></li>
						</ul>
						</div>
						<!-- /.widget -->
					</div>
					<!-- /column -->
					<div class="col-6 col-md-3 col-lg-2">
						<div class="widget">
						<h5 class="widget-title">Company</h5>
						<ul class="list-unstyled mb-0">
							<li><a href="<?php echo base_url(); ?>our-team">Our Team</a></li>
							<li><a href="<?php echo base_url(); ?>">Strategy</a></li>
							<li><a href="<?php echo base_url(); ?>services">Services</a></li>
							<li><a href="<?php echo base_url(); ?>about">Mission</a></li>
						</ul>
						</div>
						<!-- /.widget -->
					</div>
					<!-- /column -->
					<div class="col-6 col-md-3 col-lg-2">
						<div class="widget">
						<h5 class="widget-title">Contact</h5>
						<address> Kintambo Magasin, Kintambo, kinshasa RD Congo </address>
						<a href="mailto:contact@mashup.co">contact@mashup.co</a><br /> + (243) 80 78 90 000
						</div>
						<!-- /.widget -->
					</div>
					<!-- /column -->
					</div>
					<!-- /.row -->
				</div>
				<!-- /.container -->
				<div class="container inner pt-0 pb-40 d-flex align-items-center">
					<p class="mb-0 mr-auto"><?php echo $settings->copyright; ?></p>
					<ul class="social social-mute social-s ml-auto">
						<li><a href="#"><i class="jam jam-twitter"></i></a></li>
						<li><a href="#"><i class="jam jam-facebook"></i></a></li>
						<li><a href="#"><i class="jam jam-instagram"></i></a></li>
						<li><a href="#"><i class="jam jam-vimeo"></i></a></li>
						<li><a href="#"><i class="jam jam-youtube"></i></a></li>
					</ul>
				</div>
			</footer>
  			

	<!-- End Footer Section -->
	<?php if (!isset($_COOKIE["mash_cookies_warning"]) && $settings->cookies_warning): ?>
		<div class="cookies-warning">
			<div class="text"><?php echo $this->settings->cookies_warning_text; ?></div>
			<a href="javascript:void(0)" onclick="hide_cookies_warning();" class="icon-cl"> <i class="icon-close"></i></a>
		</div>
	<?php endif; ?>
	<!-- Scroll Up Link -->
	<a href="#" class="scrollup"><i class="icon-arrow-up"></i></a>
	<script src="<?php echo base_url(); ?>themes/style/js/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>themes/style/js/popper.min.js"></script>
	<script src="<?php echo base_url(); ?>themes/style/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/vendor/slick/slick.min.js"></script>
	<!-- Bootstrap js -->
	<!-- Plugins -->
	<script src="<?php echo base_url(); ?>assets/js/plugins.js"></script>
	<!-- Theme js -->
	<script src="<?php echo base_url(); ?>assets/js/script-3.9.js"></script>
	<script src="<?php echo base_url(); ?>themes/style/revolution/js/jquery.themepunch.tools.min.js"></script>
	<script src="<?php echo base_url(); ?>themes/style/revolution/js/jquery.themepunch.revolution.min.js"></script>
	<script src="<?php echo base_url(); ?>themes/style/revolution/js/extensions/revolution.extension.actions.min.js"></script>
	<script src="<?php echo base_url(); ?>themes/style/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
	<script src="<?php echo base_url(); ?>themes/style/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
	<script src="<?php echo base_url(); ?>themes/style/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
	<script src="<?php echo base_url(); ?>themes/style/revolution/js/extensions/revolution.extension.migration.min.js"></script>
	<script src="<?php echo base_url(); ?>themes/style/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
	<script src="<?php echo base_url(); ?>themes/style/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
	<script src="<?php echo base_url(); ?>themes/style/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
	<script src="<?php echo base_url(); ?>themes/style/revolution/js/extensions/revolution.extension.video.min.js"></script>
	<script src="<?php echo base_url(); ?>themes/style/js/plugins.js"></script>
	<script src="<?php echo base_url(); ?>themes/style/js/scripts.js"></script>	


	<?php if (isset($page_type)):
		echo $general_settings->facebook_comment;
	endif; ?>
	<script>$('<input>').attr({type: 'hidden', name: 'lang_folder', value: '<?php echo $this->selected_lang->folder_name; ?>'}).appendTo('form[method=post]');</script>
	<?php echo $general_settings->google_adsense_code; ?>
	<?php echo $general_settings->google_analytics; ?>
	</body>
</html>
