<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="wrapper light-wrapper page-title-wrapper">
<div class="space100"></div>
      <div class="container inner text-center">
        <h1 class="page-title"><?php echo trans("login"); ?></h1>
        <p class="lead">Aenean lacinia bibendum nulla sed consectetur</p>
      </div>
      <!-- /.container -->
	</div>
<!-- Section: main -->
<section id="">
	<div class="container">
		<div class="row">

			<div class="page-content">
				<div class="col-sm-12 col-md-6 col-md-4 center-box">
					<div class="content page-contact page-login">

					<div class="form_account">

						<div class="form-row">
							<div class="col-12">
							<div class="row">
								<div class="col-md-12">
								<div class="form-group">
									<label>Email / Username</label>
									<input type="email" class="form-control" placeholder="E-mail / Username" />
								</div>
								</div>
								<div class="col-md-12">
								<div class="form-group mb-1 --password" id="show_hide_password">
									<label>Password</label>
									<div class="input-group">
									<input type="password" class="form-control" data-toggle="password" placeholder="+6 Characters"
										required="" />
									<div class="input-group-prepend hide_show">
										<a href=""><span class="input-group-text tio hidden_outlined"></span></a>
									</div>
									</div>
								</div>
								<a href="#" class="btn mt-2 font-s-12 font-w-400 c-gray p-0">Forgot Passowrd?</a>
								</div>
								<div class="col-12 mt-4">
								<a href="#" class="btn rounded-6 btn_xl_primary btn_login effect-letter">Sign in</a>
								<a href="#" class="btn mt-3 font-s-15 c-dark text-center w-100">Create new account</a>
								</div>
							</div>
							</div>
						</div>
						</div>
          




						<h1 class="page-title text-center"><?php echo trans("login"); ?></h1>

						<!-- form start -->
						<?php echo form_open('auth_controller/login_post'); ?>
						<input type="hidden" name="redirect_url" value="<?php echo lang_base_url(); ?>">

						<?php if (!empty($general_settings->facebook_app_id)): ?>
							<a href="<?php echo base_url(); ?>connect-with-facebook" class="btn btn-social btn-social-facebook">
								<i class="icon-facebook"></i>&nbsp;<?php echo trans("connect_with_facebook"); ?>
							</a>
						<?php endif; ?>
						<?php if (!empty($general_settings->google_client_id)): ?>
							<a href="<?php echo base_url(); ?>connect-with-google" class="btn btn-social btn-social-google">
								<i class="icon-google"></i>&nbsp;<?php echo trans("connect_with_google"); ?>
							</a>
						<?php endif; ?>

						<?php if (!empty($general_settings->facebook_app_id) || !empty($general_settings->google_client_id)): ?>
							<p class="p-auth-modal-or">
								<span><?php echo trans("or_login_with_email"); ?></span>
							</p>
						<?php endif; ?>

						<!-- include message block -->
						<?php $this->load->view('partials/_messages'); ?>

						<div class="form-group has-feedback">
							<input type="text" name="username" class="form-control"
								   placeholder="<?php echo trans("username_or_email"); ?>"
								   value="<?php echo html_escape(old('username')); ?>"
								   required <?php echo ($rtl == true) ? 'dir="rtl"' : ''; ?>>
						</div>

						<div class="form-group has-feedback">
							<input type="password" name="password" class="form-control"
								   placeholder="<?php echo trans("password"); ?>"
								   value="<?php echo html_escape(old('password')); ?>"
								   required <?php echo ($rtl == true) ? 'dir="rtl"' : ''; ?>>
						</div>

						<div class="row">
							<div class="col-sm-12 col-xs-12">
								<button type="submit" class="btn btn-block btn-custom">
									<?php echo html_escape(trans("login")); ?>
								</button>
							</div>
							<div class="col-sm-12 col-xs-12 m-t-10">
								<a href="<?php echo lang_base_url(); ?>forgot-password" class="link-forget">
									<?php echo trans("forgot_password"); ?>?
								</a>
							</div>
						</div>

						<?php echo form_close(); ?><!-- form end -->

					</div>

				</div>

			</div>
		</div>
	</div>
</section>
<!-- /.Section: main -->

						