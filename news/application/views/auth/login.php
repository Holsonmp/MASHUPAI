<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="wrapper light-wrapper page-title-wrapper">
		<div class="space100"></div>
      	<div class="container inner text-center">
        <h1 class="page-title"><?php echo trans("login"); ?></h1>
        <p class="lead">Aenean lacinia bibendum nulla sed consectetur</p>
      </div>
      <!-- /.container -->
	

<!-- Section: main -->
<section id="">
	<div class="container">
		<div class="row">

			<div class="page-content">
				<div class="col-sm-12 col-md-6 col-md-4 center-box">
					<div class="content page-contact page-login">

					
					
					<?php echo form_open('auth_controller/login_post'); ?>
					<div class="form_account">
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


						<div class="form-row">
							<div class="col-12">
							<div class="row">
								<div class="col-md-12">
								<div class="form-group">
									<label><?php echo trans("username_or_email"); ?></label>
									<input type="text" name="username" class="form-control"
								   placeholder="<?php echo trans("username_or_email"); ?>"
								   value="<?php echo html_escape(old('username')); ?>"
								   required <?php echo ($rtl == true) ? 'dir="rtl"' : ''; ?>>
								</div>
								</div>
								<div class="col-md-12">
								<div class="form-group mb-1 --password" id="show_hide_password">
									<label><?php echo trans("password"); ?></label>
									<div class="input-group">
									<input type="password" name="password" class="form-control"
								   placeholder="<?php echo trans("password"); ?>"
								   value="<?php echo html_escape(old('password')); ?>"
								   required <?php echo ($rtl == true) ? 'dir="rtl"' : ''; ?>>
									<div class="input-group-prepend hide_show">
										<a href=""><span class="input-group-text tio hidden_outlined"></span></a>
									</div>
									</div>
								</div>
								<a href="<?php echo lang_base_url(); ?>forgot-password" class="link-forget " style="margin-top:10px">
									<?php echo trans("forgot_password"); ?>?
								</a>
								</div>
								<div class="col-12 mt-4">
								<button type="submit" class="btn w-100 btn-block btn-custom">
									<?php echo html_escape(trans("login")); ?>
								</button>
								<a href="<?php echo base_url();?>register" class="btn mt-3 w-100 text-center ">Create new account</a>
								</div>
							</div>
							</div>
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

</div>