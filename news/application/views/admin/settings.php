<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="row">
	<div class="col-md-12">
		<!-- form start -->
		<?php echo form_open_multipart('admin_controller/settings_post'); ?>

		<div class="form-group">
			<label><?php echo trans("settings_language"); ?></label>
			<select name="lang_id" class="form-control max-400" onchange="window.location.href = '<?php echo base_url(); ?>'+'admin/settings?lang='+this.value;">
				<?php foreach ($languages as $language): ?>
					<option value="<?php echo $language->id; ?>" <?php echo ($selected_lang == $language->id) ? 'selected' : ''; ?>><?php echo $language->name; ?></option>
				<?php endforeach; ?>
			</select>
		</div>

		<input type="hidden" name="logo_path" value="<?php echo html_escape($general_settings->logo_path); ?>">
		<input type="hidden" name="favicon_path" value="<?php echo html_escape($general_settings->favicon_path); ?>">

		<!-- Custom Tabs -->
		<div class="nav-tabs-custom">
			<ul class="nav nav-tabs">
				<li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true"><?php echo trans('general_settings'); ?></a></li>
				<li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false"><?php echo trans('visual_settings'); ?></a></li>
				<li class=""><a href="#tab_3" data-toggle="tab" aria-expanded="false"><?php echo trans('contact_settings'); ?></a></li>
				<li class=""><a href="#tab_4" data-toggle="tab" aria-expanded="false"><?php echo trans('social_media_settings'); ?></a></li>
				<li class=""><a href="#tab_5" data-toggle="tab" aria-expanded="false"><?php echo trans('facebook_comments'); ?></a></li>
				<li class=""><a href="#tab_6" data-toggle="tab" aria-expanded="false"><?php echo trans('head_code'); ?></a></li>
				<li class=""><a href="#tab_7" data-toggle="tab" aria-expanded="false"><?php echo trans('cookies_warning'); ?></a></li>
				<li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
			</ul>
			<div class="tab-content settings-tab-content">
				<!-- include message block -->
				<?php if (!empty($this->session->flashdata("mes_settings"))):
					$this->load->view('admin/includes/_messages');
				endif; ?>

				<div class="tab-pane active" id="tab_1">

					<div class="form-group">
						<label class="control-label"><?php echo trans('timezone'); ?></label>
						<input type="text" class="form-control max-600" name="timezone" placeholder="<?php echo trans('timezone'); ?>"
							   value="<?php echo html_escape($general_settings->timezone); ?>" <?php echo ($rtl == true) ? 'dir="rtl"' : ''; ?>>
						<a href="http://php.net/manual/en/timezones.php" target="_blank">Timeszones</a>
					</div>

					<div class="form-group">
						<label class="control-label"><?php echo trans('app_name'); ?></label>
						<input type="text" class="form-control max-600" name="application_name" placeholder="<?php echo trans('app_name'); ?>"
							   value="<?php echo html_escape($form_settings->application_name); ?>">
					</div>
					<?php require APPPATH . "config/route_slugs.php"; ?>
					<div class="form-group">
						<label class="control-label"><?php echo trans('admin_panel_link'); ?></label>
						<input type="text" class="form-control max-600" name="admin_panel_link" placeholder="<?php echo trans('admin_panel_link'); ?>"
							   value="<?php echo (isset($custom_slug_array["admin"])) ? $custom_slug_array["admin"] : 'admin'; ?>">
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-sm-3 col-xs-12 col-option">
								<label><?php echo trans('multilingual_system'); ?></label>
							</div>
							<div class="col-md-2 col-sm-4 col-xs-12 col-option">
								<input type="radio" name="multilingual_system" value="1" id="multilingual_system_1"
									   class="square-purple" <?php echo ($general_settings->multilingual_system == 1) ? 'checked' : ''; ?>>
								<label for="multilingual_system_1" class="option-label"><?php echo trans('enable'); ?></label>
							</div>
							<div class="col-md-2 col-sm-4 col-xs-12 col-option">
								<input type="radio" name="multilingual_system" value="0" id="multilingual_system_2"
									   class="square-purple" <?php echo ($general_settings->multilingual_system != 1) ? 'checked' : ''; ?>>
								<label for="multilingual_system_2" class="option-label"><?php echo trans('disable'); ?></label>
							</div>
						</div>
					</div>


					<div class="form-group">
						<div class="row">
							<div class="col-sm-3 col-xs-12 col-option">
								<label><?php echo trans('registration_system'); ?></label>
							</div>
							<div class="col-md-2 col-sm-4 col-xs-12 col-option">
								<input type="radio" name="registration_system" value="1" id="registration_system_1"
									   class="square-purple" <?php echo ($general_settings->registration_system == 1) ? 'checked' : ''; ?>>
								<label for="registration_system_1" class="option-label"><?php echo trans('enable'); ?></label>
							</div>
							<div class="col-md-2 col-sm-4 col-xs-12 col-option">
								<input type="radio" name="registration_system" value="0" id="registration_system_2"
									   class="square-purple" <?php echo ($general_settings->registration_system != 1) ? 'checked' : ''; ?>>
								<label for="registration_system_2" class="option-label"><?php echo trans('disable'); ?></label>
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="row">
							<div class="col-sm-3 col-xs-12 col-option">
								<label><?php echo trans('approve_posts_before_publishing'); ?></label>
							</div>
							<div class="col-md-2 col-sm-4 col-xs-12 col-option">
								<input type="radio" name="approve_posts_before_publishing" value="1" id="approve_posts_before_publishing_1"
									   class="square-purple" <?php echo ($general_settings->approve_posts_before_publishing == 1) ? 'checked' : ''; ?>>
								<label for="approve_posts_before_publishing_1" class="option-label"><?php echo trans('enable'); ?></label>
							</div>
							<div class="col-md-2 col-sm-4 col-xs-12 col-option">
								<input type="radio" name="approve_posts_before_publishing" value="0" id="approve_posts_before_publishing_2"
									   class="square-purple" <?php echo ($general_settings->approve_posts_before_publishing != 1) ? 'checked' : ''; ?>>
								<label for="approve_posts_before_publishing_2" class="option-label"><?php echo trans('disable'); ?></label>
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="row">
							<div class="col-sm-3 col-xs-12 col-option">
								<label><?php echo trans('comment_system'); ?></label>
							</div>
							<div class="col-md-2 col-sm-4 col-xs-12 col-option">
								<input type="radio" name="comment_system" value="1" id="comment_system_1"
									   class="square-purple" <?php echo ($general_settings->comment_system == 1) ? 'checked' : ''; ?>>
								<label for="comment_system_1" class="option-label"><?php echo trans('enable'); ?></label>
							</div>
							<div class="col-md-2 col-sm-4 col-xs-12 col-option">
								<input type="radio" name="comment_system" value="0" id="comment_system_2"
									   class="square-purple" <?php echo ($general_settings->comment_system != 1) ? 'checked' : ''; ?>>
								<label for="comment_system_2" class="option-label"><?php echo trans('disable'); ?></label>
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="row">
							<div class="col-sm-3 col-xs-12 col-option">
								<label><?php echo trans('comment_approval_system'); ?></label>
							</div>
							<div class="col-md-2 col-sm-4 col-xs-12 col-option">
								<input type="radio" name="comment_approval_system" value="1" id="comment_approval_system_1"
									   class="square-purple" <?php echo ($general_settings->comment_approval_system == 1) ? 'checked' : ''; ?>>
								<label for="comment_approval_system_1" class="option-label"><?php echo trans('enable'); ?></label>
							</div>
							<div class="col-md-2 col-sm-4 col-xs-12 col-option">
								<input type="radio" name="comment_approval_system" value="0" id="comment_approval_system_2"
									   class="square-purple" <?php echo ($general_settings->comment_approval_system != 1) ? 'checked' : ''; ?>>
								<label for="comment_approval_system_2" class="option-label"><?php echo trans('disable'); ?></label>
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="row">
							<div class="col-sm-3 col-xs-12 col-option">
								<label><?php echo trans('slider'); ?></label>
							</div>
							<div class="col-md-2 col-sm-4 col-xs-12 col-option">
								<input type="radio" name="slider_active" value="1" id="slider_active_1"
									   class="square-purple" <?php echo ($general_settings->slider_active == 1) ? 'checked' : ''; ?>>
								<label for="slider_active_1" class="option-label"><?php echo trans('enable'); ?></label>
							</div>
							<div class="col-md-2 col-sm-4 col-xs-12 col-option">
								<input type="radio" name="slider_active" value="0" id="slider_active_2"
									   class="square-purple" <?php echo ($general_settings->slider_active != 1) ? 'checked' : ''; ?>>
								<label for="slider_active_2" class="option-label"><?php echo trans('disable'); ?></label>
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="row">
							<div class="col-sm-3 col-xs-12 col-option">
								<label><?php echo trans('emoji_reactions'); ?></label>
							</div>
							<div class="col-md-2 col-sm-4 col-xs-12 col-option">
								<input type="radio" id="emoji_reactions_1" name="emoji_reactions" value="1" class="square-purple" checked>
								<label for="emoji_reactions_1" class="cursor-pointer" <?php echo ($general_settings->emoji_reactions == "1") ? 'checked' : ''; ?>><?php echo trans('enable'); ?></label>
							</div>
							<div class="col-md-2 col-sm-4 col-xs-12 col-option">
								<input type="radio" id="emoji_reactions_2" name="emoji_reactions" value="0" class="square-purple" <?php echo ($general_settings->emoji_reactions != "1") ? 'checked' : ''; ?>>
								<label for="emoji_reactions_2" class="cursor-pointer"><?php echo trans('disable'); ?></label>
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="row">
							<div class="col-sm-3 col-xs-12 col-option">
								<label><?php echo trans('emoji_reactions_type'); ?></label>
							</div>
							<div class="col-md-2 col-sm-4 col-xs-12 col-option">
								<input type="radio" id="emoji_reactions_type_1" name="emoji_reactions_type" value="gif" class="square-purple" checked>
								<label for="emoji_reactions_type_1" class="cursor-pointer" <?php echo ($general_settings->emoji_reactions_type == "gif") ? 'checked' : ''; ?>><?php echo trans('gif_animated'); ?></label>
							</div>
							<div class="col-md-2 col-sm-4 col-xs-12 col-option">
								<input type="radio" id="emoji_reactions_type_2" name="emoji_reactions_type" value="png" class="square-purple" <?php echo ($general_settings->emoji_reactions_type != "gif") ? 'checked' : ''; ?>>
								<label for="emoji_reactions_type_2" class="cursor-pointer"><?php echo trans('png_not_animated'); ?></label>
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="row">
							<div class="col-sm-3 col-xs-12 col-option">
								<label><?php echo trans('show_post_view_counts'); ?></label>
							</div>
							<div class="col-md-2 col-sm-4 col-xs-12 col-option">
								<input type="radio" name="show_pageviews" value="1" id="show_pageviews_1"
									   class="square-purple" <?php echo ($general_settings->show_pageviews == 1) ? 'checked' : ''; ?>>
								<label for="show_pageviews_1" class="option-label"><?php echo trans('enable'); ?></label>
							</div>
							<div class="col-md-2 col-sm-4 col-xs-12 col-option">
								<input type="radio" name="show_pageviews" value="0" id="show_pageviews_2"
									   class="square-purple" <?php echo ($general_settings->show_pageviews != 1) ? 'checked' : ''; ?>>
								<label for="show_pageviews_2" class="option-label"><?php echo trans('disable'); ?></label>
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="row">
							<div class="col-sm-3 col-xs-12 col-option">
								<label><?php echo trans('rss'); ?></label>
							</div>
							<div class="col-md-2 col-sm-4 col-xs-12 col-option">
								<input type="radio" name="show_rss" value="1" id="show_rss_1"
									   class="square-purple" <?php echo ($general_settings->show_rss == 1) ? 'checked' : ''; ?>>
								<label for="show_rss_1" class="option-label"><?php echo trans('enable'); ?></label>
							</div>
							<div class="col-md-2 col-sm-4 col-xs-12 col-option">
								<input type="radio" name="show_rss" value="0" id="show_rss_2"
									   class="square-purple" <?php echo ($general_settings->show_rss != 1) ? 'checked' : ''; ?>>
								<label for="show_rss_2" class="option-label"><?php echo trans('disable'); ?></label>
							</div>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label"><?php echo trans('pagination_number_posts'); ?></label>
						<input type="number" class="form-control" name="pagination_per_page" value="<?php echo html_escape($general_settings->pagination_per_page); ?>" required style="max-width: 300px;">
					</div>

					<div class="form-group">
						<label class="control-label"><?php echo trans('optional_url_name'); ?></label>
						<input type="text" class="form-control" name="optional_url_button_name"
							   placeholder="<?php echo trans('optional_url_name'); ?>"
							   value="<?php echo html_escape($form_settings->optional_url_button_name); ?>">
					</div>


					<div class="form-group">
						<label class="control-label"><?php echo trans('footer_about_section'); ?></label>
						<textarea class="form-control text-area" name="about_footer" placeholder="<?php echo trans('footer_about_section'); ?>"
								  style="min-height: 70px;"><?php echo html_escape($form_settings->about_footer); ?></textarea>
					</div>

					<div class="form-group">
						<label class="control-label"><?php echo trans('copyright'); ?></label>
						<input type="text" class="form-control" name="copyright"
							   placeholder="<?php echo trans('copyright'); ?>"
							   value="<?php echo html_escape($form_settings->copyright); ?>">
					</div>
				</div><!-- /.tab-pane -->

				<div class="tab-pane" id="tab_2">

					<div class="form-group">
						<label class="control-label"><?php echo trans('select_color'); ?></label>
						<div class="col-sm-12">
							<div class="row">
								<div class="custom-checkbox">
									<input type="radio" name="site_color" id="color1" value="default"
										   class="regular-checkbox" <?php echo ($general_settings->site_color === "default" ||
										$general_settings->site_color === "") ? "checked" : ""; ?>/>
									<label for="color1" style="background-color: #0494b1;"></label>
								</div>

								<div class="custom-checkbox">
									<input type="radio" name="site_color" id="color2" value="red"
										   class="regular-checkbox"
										<?php echo ($general_settings->site_color === "red") ? "checked" : ""; ?>/>
									<label for="color2" style="background-color: #e74c3c;"></label>
								</div>

								<div class="custom-checkbox">
									<input type="radio" name="site_color" id="color3" value="green"
										   class="regular-checkbox"
										<?php echo ($general_settings->site_color === "green") ? "checked" : ""; ?>/>
									<label for="color3" style="background-color: #44bb97;"></label>
								</div>

								<div class="custom-checkbox">
									<input type="radio" name="site_color" id="color4" value="orange"
										   class="regular-checkbox" <?php echo ($general_settings->site_color === "orange") ? "checked" : ""; ?>/>
									<label for="color4" style="background-color: #f48b3d;"></label>
								</div>

								<div class="custom-checkbox">
									<input type="radio" name="site_color" id="color5" value="purple"
										   class="regular-checkbox" <?php echo ($general_settings->site_color === "purple") ? "checked" : ""; ?>/>
									<label for="color5" style=" background-color: #8260a8;"></label>
								</div>

								<div class="custom-checkbox">
									<input type="radio" name="site_color" id="color6" value="mountain-meadow"
										   class="regular-checkbox" <?php echo ($general_settings->site_color === "mountain-meadow") ? "checked" : ""; ?>/>
									<label for="color6" style="background-color: #16a085;"></label>
								</div>

								<div class="custom-checkbox">
									<input type="radio" name="site_color" id="color7" value="blue"
										   class="regular-checkbox" <?php echo ($general_settings->site_color === "blue") ? "checked" : ""; ?>/>
									<label for="color7" style=" background-color: #01b1d7;"></label>
								</div>

								<div class="custom-checkbox">
									<input type="radio" name="site_color" id="color8" value="yellow"
										   class="regular-checkbox" <?php echo ($general_settings->site_color === "yellow") ? "checked" : ""; ?>/>
									<label for="color8" style=" background-color: #f2d438;"></label>
								</div>

								<div class="custom-checkbox">
									<input type="radio" name="site_color" id="color9" value="dark"
										   class="regular-checkbox" <?php echo ($general_settings->site_color === "dark") ? "checked" : ""; ?>/>
									<label for="color9" style="background-color: #555;"></label>
								</div>

								<div class="custom-checkbox">
									<input type="radio" name="site_color" id="color10" value="pink"
										   class="regular-checkbox" <?php echo ($general_settings->site_color === "pink") ? "checked" : ""; ?>/>
									<label for="color10" style="background-color: #e25abc;"></label>
								</div>

							</div>
						</div>
					</div>
					<br>
					<div class="form-group" style="margin-top: 45px;">
						<label class="control-label"><?php echo trans('logo'); ?> (180x50 px)</label>
						<div class="row">
							<div class="col-sm-3">
								<?php if (!empty($general_settings->logo_path)): ?>
									<img src="<?php echo base_url() . html_escape($general_settings->logo_path); ?>" alt="" style="max-width: 200px; background-color: #f7f7f7; padding: 10px;">
								<?php endif; ?>
							</div>
						</div>
						<div class="row" style="margin-top: 5px;">
							<div class="col-sm-12">
								<a class='btn btn-success btn-sm btn-file-upload'>
									<?php echo trans('change_logo'); ?>
									<input type="file" name="logo" size="40"
										   accept=".png, .jpg, .jpeg, .gif"
										   onchange="$('#upload-file-info1').html($(this).val());">
								</a>
							</div>
						</div>

						<span class='label label-info' id="upload-file-info1"></span>
					</div>

					<div class="form-group" style="margin-top: 45px;">
						<label class="control-label"><?php echo trans('mobile_logo'); ?> (180x50 px)</label>
						<div class="row">
							<div class="col-sm-3">
								<?php if (!empty($general_settings->mobile_logo_path)): ?>
									<img src="<?php echo base_url() . $general_settings->mobile_logo_path; ?>" alt="" style="max-width: 200px; background-color: #f7f7f7; padding: 10px;">
								<?php endif; ?>
							</div>
						</div>
						<div class="row" style="margin-top: 5px;">
							<div class="col-sm-12">
								<a class='btn btn-success btn-sm btn-file-upload'>
									<?php echo trans('change_logo'); ?>
									<input type="file" name="mobile_logo" size="40"
										   accept=".png, .jpg, .jpeg, .gif"
										   onchange="$('#upload-file-info2').html($(this).val());">
								</a>
							</div>
						</div>

						<span class='label label-info' id="upload-file-info2"></span>
					</div>

					<br>
					<div class="form-group" style="margin-top: 15px;">
						<label class="control-label" style="margin-top: 10px;"><?php echo trans('favicon'); ?></label>

						<div class="row">
							<div class="col-sm-3">
								<?php if (!empty($general_settings->favicon_path)): ?>
									<img src="<?php echo base_url() . html_escape($general_settings->favicon_path); ?>" alt="" style="max-width: 200px;">
								<?php endif; ?>
							</div>
						</div>
						<div class="row" style="margin-top: 5px;">
							<div class="col-sm-12">
								<a class='btn btn-success btn-sm btn-file-upload'>
									<?php echo trans('change_favicon'); ?>
									<input type="file" name="favicon" size="40"
										   accept=".png, .jpg, .jpeg, .gif"
										   onchange="$('#upload-file-info2').html($(this).val());">
								</a>
							</div>
						</div>

						<span class='label label-info' id="upload-file-info2"></span>
					</div>
				</div><!-- /.tab-pane -->

				<div class="tab-pane" id="tab_3">
					<div class="form-group">
						<label class="control-label"><?php echo trans('address'); ?></label>
						<input type="text" class="form-control" name="contact_address"
							   placeholder="<?php echo trans('address'); ?>" value="<?php echo html_escape($form_settings->contact_address); ?>">
					</div>

					<div class="form-group">
						<label class="control-label"><?php echo trans('email'); ?></label>
						<input type="text" class="form-control" name="contact_email"
							   placeholder="<?php echo trans('email'); ?>" value="<?php echo html_escape($form_settings->contact_email); ?>">
					</div>

					<div class="form-group">
						<label class="control-label"><?php echo trans('phone'); ?></label>
						<input type="text" class="form-control" name="contact_phone"
							   placeholder="<?php echo trans('phone'); ?>" value="<?php echo html_escape($form_settings->contact_phone); ?>">
					</div>

					<div class="form-group">
						<label class="control-label"><?php echo trans('contact_text'); ?></label>
						<textarea class="tinyMCE form-control" name="contact_text"><?php echo $form_settings->contact_text; ?></textarea>
					</div>


				</div><!-- /.tab-pane -->

				<div class="tab-pane" id="tab_4">
					<div class="form-group">
						<label class="control-label">Facebook <?php echo trans('url'); ?></label>
						<input type="text" class="form-control" name="facebook_url"
							   placeholder="Facebook <?php echo trans('url'); ?>" value="<?php echo html_escape($form_settings->facebook_url); ?>">
					</div>

					<div class="form-group">
						<label class="control-label">Twitter <?php echo trans('url'); ?></label>
						<input type="text" class="form-control"
							   name="twitter_url" placeholder="Twitter <?php echo trans('url'); ?>"
							   value="<?php echo html_escape($form_settings->twitter_url); ?>">
					</div>

					<div class="form-group">
						<label class="control-label">Instagram <?php echo trans('url'); ?></label>
						<input type="text" class="form-control" name="instagram_url" placeholder="Instagram <?php echo trans('url'); ?>"
							   value="<?php echo html_escape($form_settings->instagram_url); ?>">
					</div>

					<div class="form-group">
						<label class="control-label">Pinterest <?php echo trans('url'); ?></label>
						<input type="text" class="form-control" name="pinterest_url" placeholder="Pinterest <?php echo trans('url'); ?>"
							   value="<?php echo html_escape($form_settings->pinterest_url); ?>">
					</div>

					<div class="form-group">
						<label class="control-label">LinkedIn <?php echo trans('url'); ?></label>
						<input type="text" class="form-control" name="linkedin_url" placeholder="LinkedIn <?php echo trans('url'); ?>"
							   value="<?php echo html_escape($form_settings->linkedin_url); ?>">
					</div>

					<div class="form-group">
						<label class="control-label">VK <?php echo trans('url'); ?></label>
						<input type="text" class="form-control" name="vk_url"
							   placeholder="VK <?php echo trans('url'); ?>" value="<?php echo html_escape($form_settings->vk_url); ?>">
					</div>
				</div><!-- /.tab-pane -->

				<div class="tab-pane" id="tab_5">

					<div class="form-group">
						<label class="control-label"><?php echo trans('facebook_comments_code'); ?></label>
						<textarea class="form-control text-area" name="facebook_comment" placeholder="<?php echo trans('facebook_comments_code'); ?>"
								  style="min-height: 140px;"><?php echo html_escape($general_settings->facebook_comment); ?></textarea>
					</div>

				</div><!-- /.tab-pane -->

				<div class="tab-pane" id="tab_6">

					<div class="form-group">
						<label class="control-label"><?php echo trans('head_code'); ?></label>
						<textarea class="form-control text-area" name="head_code" placeholder="<?php echo trans('head_code'); ?>"
								  style="min-height: 140px;"><?php echo html_escape($general_settings->head_code); ?></textarea>
					</div>

				</div><!-- /.tab-pane -->
				<div class="tab-pane" id="tab_7">
					<div class="form-group">
						<div class="row">
							<div class="col-sm-3 col-xs-12 col-option">
								<label><?php echo trans('show_cookies_warning'); ?></label>
							</div>
							<div class="col-md-2 col-sm-4 col-xs-12 col-option">
								<input type="radio" name="cookies_warning" value="1" id="cookies_warning_1"
									   class="square-purple" <?php echo ($settings->cookies_warning == 1) ? 'checked' : ''; ?>>
								<label for="cookies_warning_1" class="option-label"><?php echo trans('yes'); ?></label>
							</div>
							<div class="col-md-2 col-sm-4 col-xs-12 col-option">
								<input type="radio" name="cookies_warning" value="0" id="cookies_warning_2"
									   class="square-purple" <?php echo ($settings->cookies_warning != 1) ? 'checked' : ''; ?>>
								<label for="cookies_warning_2" class="option-label"><?php echo trans('no'); ?></label>
							</div>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label"><?php echo trans('cookies_warning_text'); ?></label>
						<textarea class="tinyMCE form-control" name="cookies_warning_text"><?php echo $settings->cookies_warning_text; ?></textarea>
					</div>
				</div>
			</div><!-- /.tab-content -->
			<div class="box-footer">
				<button type="submit" class="btn btn-primary pull-right"><?php echo trans('save_changes'); ?></button>
			</div>
		</div><!-- nav-tabs-custom -->

		<?php echo form_close(); ?>
	</div><!-- /.col -->
</div>

<div class="row">
	<div class="col-lg-5 col-md-12">
		<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title"><?php echo trans('google_recaptcha'); ?></h3>
			</div>
			<!-- /.box-header -->

			<!-- form start -->
			<?php echo form_open('admin_controller/recaptcha_settings_post'); ?>
			<div class="box-body">
				<!-- include message block -->
				<?php if (empty($this->session->flashdata("mes_settings"))):
					$this->load->view('admin/includes/_messages');
				endif; ?>
				<div class="form-group">
					<label class="control-label"><?php echo trans('site_key'); ?></label>
					<input type="text" class="form-control" name="recaptcha_site_key" placeholder="<?php echo trans('site_key'); ?>"
						   value="<?php echo $general_settings->recaptcha_site_key; ?>">
				</div>

				<div class="form-group">
					<label class="control-label"><?php echo trans('secret_key'); ?></label>
					<input type="text" class="form-control" name="recaptcha_secret_key" placeholder="<?php echo trans('secret_key'); ?>"
						   value="<?php echo $general_settings->recaptcha_secret_key; ?>">
				</div>

				<div class="form-group">
					<label class="control-label"><?php echo trans('language'); ?></label>
					<input type="text" class="form-control" name="recaptcha_lang" placeholder="<?php echo trans('language'); ?>"
						   value="<?php echo $general_settings->recaptcha_lang; ?>">
					<a href="https://developers.google.com/recaptcha/docs/language" target="_blank">https://developers.google.com/recaptcha/docs/language</a>
				</div>

				<!-- /.box-body -->
				<div class="box-footer" style="padding-left: 0; padding-right: 0;">
					<button type="submit" class="btn btn-primary pull-right"><?php echo trans('save_changes'); ?></button>
				</div>
				<!-- /.box-footer -->

				<?php echo form_close(); ?><!-- form end -->
			</div>
			<!-- /.box -->
		</div>
	</div>
</div>

<style>
	.tox-tinymce {
		height: 340px !important;
	}
</style>
