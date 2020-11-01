<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="<?php echo $this->selected_lang->short_form ?>">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php echo xss_clean($title); ?> - <?php echo xss_clean($settings->site_title); ?></title>
		<meta name="description" content="<?php echo xss_clean($description); ?>"/>
		<meta name="keywords" content="<?php echo xss_clean($keywords); ?>"/>
		<meta name="author" content="Holduix"/>
		<meta name="robots" content="all"/>
		<meta name="revisit-after" content="1 Days"/>
		<meta property="og:locale" content="<?php echo $this->selected_lang->language_code ?>"/>
		<meta property="og:site_name" content="<?php echo $settings->application_name; ?>"/>
	<?php if (isset($page_type)): ?>
		<meta property="og:type" content="<?php echo $og_type; ?>"/>
		<meta property="og:title" content="<?php echo xss_clean($post->title); ?>"/>
		<meta property="og:description" content="<?php echo xss_clean($post->summary); ?>"/>
		<meta property="og:url" content="<?php echo $og_url; ?>"/>
		<meta property="og:image" content="<?php echo $og_image; ?>"/>
		<meta property="og:image:width" content="750"/>
		<meta property="og:image:height" content="415"/>
		<meta name="twitter:card" content="summary_large_image"/>
		<meta name="twitter:site" content="<?php echo $settings->application_name; ?>"/>
		<meta name="twitter:title" content="<?php echo xss_clean($post->title); ?>"/>
		<meta name="twitter:description" content="<?php echo xss_clean($post->summary); ?>"/>
		<meta name="twitter:image" content="<?php echo $og_image; ?>"/>
	<?php foreach ($og_tags as $tag): ?>
		<meta property="article:tag" content="<?php echo $tag->tag; ?>"/>
	<?php endforeach; ?>
	<?php else: ?>
		<meta property="og:image" content="<?php echo get_logo($general_settings); ?>"/>
		<meta property="og:image:width" content="180"/>
		<meta property="og:image:height" content="50"/>
		<meta property="og:type" content=website/>
		<meta property="og:title" content="<?php echo xss_clean($title); ?> - <?php echo xss_clean($settings->site_title); ?>"/>
		<meta property="og:description" content="<?php echo xss_clean($description); ?>"/>
		<meta property="og:url" content="<?php echo base_url(); ?>"/>
		<meta name="twitter:card" content="summary_large_image"/>
		<meta name="twitter:site" content="<?php echo $settings->application_name; ?>"/>
		<meta name="twitter:title" content="<?php echo xss_clean($title); ?> - <?php echo xss_clean($settings->site_title); ?>"/>
		<meta name="twitter:description" content="<?php echo xss_clean($description); ?>"/>
		<meta name="twitter:image" content="<?php echo get_logo($general_settings); ?>"/>
	<?php endif; ?>
		<link rel="canonical" href="<?php echo current_url(); ?>"/>
	<?php if ($general_settings->multilingual_system == 1):
	foreach ($languages as $language):
	if ($language->id == $site_lang->id):?>
		<link rel="alternate" hreflang="<?php echo $language->language_code ?>" href="<?php echo base_url(); ?>"/>
	<?php else: ?>
		<link rel="alternate" hreflang="<?php echo $language->language_code ?>" href="<?php echo base_url() . $language->short_form . "/"; ?>"/>
	<?php endif; endforeach; endif; ?>
	<?php if (empty($general_settings->favicon_path)): ?>
		<link rel="shortcut icon" type="image/png" href="<?php echo base_url(); ?>assets/img/favicon.png"/>
	<?php else: ?>
		<link rel="shortcut icon" type="image/png" href="<?php echo base_url() . html_escape($general_settings->favicon_path); ?>"/>
	<?php endif; ?>


		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/font-icons/css/icons.min.css"/>
		<!-- Bootstrap CSS -->

		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css">
		<!-- Slider CSS -->
		<link href="<?php echo base_url(); ?>assets/vendor/slick/slick.min.css" rel="stylesheet"/>
		<!-- Magnific Popup CSS -->
		<link href="<?php echo base_url(); ?>assets/css/magnific-popup.min.css" rel="stylesheet"/>
		<!-- Style CSS -->
		<link href="<?php echo base_url(); ?>assets/css/style-3.9.css" rel="stylesheet"/>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>themes/style/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>themes/style/css/plugins.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>themes/style/revolution/css/settings.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>themes/style/revolution/css/layers.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>themes/style/revolution/css/navigation.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>themes/style/type/type.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>themes/style/style.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>themes/v1/css/main.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>themes/style/css/color/green.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>themes/style/css/font/font2.css">

		<!-- Color CSS -->
	<?php if ($general_settings->site_color == '') : ?>
		<link href="<?php echo base_url(); ?>assets/css/colors/default.min.css" rel="stylesheet"/>
	<?php else : ?>
		<link href="<?php echo base_url(); ?>assets/css/colors/<?php echo html_escape($general_settings->site_color); ?>.min.css" rel="stylesheet"/>
	<?php endif; ?>
	<?php if ($selected_lang->text_direction == "rtl"): ?>
		<!-- RTL -->
		<link href="<?php echo base_url(); ?>assets/css/rtl.min.css" rel="stylesheet"/>
	<?php endif; ?>
	
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<!-- Jquery -->
		<?php echo $general_settings->head_code; ?>
	<?php if ($selected_lang->text_direction == "rtl"): ?>
		<script>var rtl = true;</script>
	<?php else: ?>
		<script>var rtl = false;</script>
	<?php endif; ?>
		<script>var csfr_token_name = '<?php echo $this->security->get_csrf_token_name(); ?>';var csfr_cookie_name = '<?php echo $this->config->item('csrf_cookie_name'); ?>';var base_url = '<?php echo base_url(); ?>';var is_recaptcha_enabled = false;var lang_folder = '<?php echo $this->selected_lang->folder_name; ?>';<?php if ($recaptcha_status == true): ?>is_recaptcha_enabled = true;<?php endif; ?></script>
	</head>
	<body>
			<?php
				$active_page = uri_string();
				if ($general_settings->site_lang != $selected_lang->id) {
					$active_page = $this->uri->segment(2);
				}
			?>		
		<div class="content-wrapper">
			<nav class="navbar absolute transparent navbar-expand-lg">
				<div class="container">
					<div class="navbar-brand"><a href="<?php echo base_url(); ?>"><img src="#" srcset="<?php echo base_url(); ?>assets/img/logo.png 1x" alt="" /></a></div>
					<div class="navbar-other ml-auto order-lg-3">
						<ul class="navbar-nav flex-row align-items-center" data-sm-skip="true">
							<li class="nav-item" style="margin-right: 35px;">
								<div class="navbar-hamburger d-lg-none d-xl-none ml-auto">
									<button class="hamburger animate plain" data-toggle="offcanvas-nav"><span></span></button>
								</div>
							</li>
						</ul>
					<!-- /.navbar-nav -->
					</div>
					<!-- /.navbar-other -->
					<div class="navbar-collapse offcanvas-nav">
						<div class="offcanvas-header d-lg-none d-xl-none">
							<a href="<?php echo base_url(); ?>"><img src="#" srcset="<?php echo base_url(); ?>assets/img/logo-light.png 1x" alt="" /></a>
							<button class="plain offcanvas-close offcanvas-nav-close"><i class="jam jam-close"></i></button>
						</div>
						<ul class="navbar-nav ml-auto">
							<li class="nav-item <?php echo ($active_page == 'index' || $active_page == "") ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>"><?php echo trans("home"); ?></a></li>
							<li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>about-us">A propos</a></li>
							<li class="nav-item"><a class="nav-link" href="https://marilys.co/ota">Ota Benga</a></li>
							<li class="nav-item"><a class="nav-link" href="https://marilys.co" target='_blank'>Marilys</a></li>
							<li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>blog">Blog</a></li>
							<li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>contact">Contact</a></li>
						</ul>
					<!-- /.navbar-nav -->
					</div>
				<!-- /.navbar-collapse -->
				</div>
		<!-- /.container -->
			</nav>





	<div id="overlay_bg" class="overlay-bg"></div>





