<?php
/*
 * Custom Helpers
 *
 */
if (strpos($_SERVER['REQUEST_URI'], '/index.php') !== false) {
	$ci =& get_instance();
	$ci->load->helper('url');
	redirect(current_url());
	exit();
}

//post method
if (!function_exists('post_method')) {
	function post_method()
	{
		$ci =& get_instance();
		if ($ci->input->method(FALSE) != 'post') {
			exit();
		}
	}
}

//get method
if (!function_exists('get_method')) {
	function get_method()
	{
		$ci =& get_instance();
		if ($ci->input->method(FALSE) != 'get') {
			exit();
		}
	}
}

//lang base url
if (!function_exists('lang_base_url')) {
	function lang_base_url()
	{
		// Get a reference to the controller object
		$ci =& get_instance();
		return $ci->lang_base_url;
	}
}
//admin url
if (!function_exists('admin_url')) {
	function admin_url()
	{
		require APPPATH . "config/route_slugs.php";
		return base_url() . $custom_slug_array["admin"] . "/";
	}
}

//admin url
if (!function_exists('check_user_permission')) {
	function check_user_permission($d)
	{
		return true;
	}
}
//check auth
if (!function_exists('auth_check')) {
	function auth_check()
	{
		// Get a reference to the controller object
		$ci =& get_instance();
		$ci->load->model('auth_model');
		return $ci->auth_model->is_logged_in();
	}
}

//check admin
if (!function_exists('is_admin')) {
	function is_admin()
	{
		// Get a reference to the controller object
		$ci =& get_instance();
		$ci->load->model('auth_model');
		return $ci->auth_model->is_admin();
	}
}

//check author
if (!function_exists('is_author')) {
	function is_author()
	{
		// Get a reference to the controller object
		$ci =& get_instance();
		$ci->load->model('auth_model');
		return $ci->auth_model->is_author();
	}
}

//prevent author
if (!function_exists('prevent_author')) {
	function prevent_author()
	{
		//check auth
		if (is_author()) {
			redirect(base_url() . 'admin');
		}
	}
}

//get logged user
if (!function_exists('user')) {
	function user()
	{
		// Get a reference to the controller object
		$ci =& get_instance();
		return $ci->auth_model->get_logged_user();
	}
}

//get user by id
if (!function_exists('get_user')) {
	function get_user($user_id)
	{
		// Get a reference to the controller object
		$ci =& get_instance();
		return $ci->auth_model->get_user($user_id);
	}
}

//generate post url
if (!function_exists('generate_post_url')) {
	function generate_post_url($post)
	{
		if (!empty($post)) {
			return lang_base_url() . $post->title_slug;
		}
		return "#";
	}
}

//generate category url
if (!function_exists('generate_category_url')) {
	function generate_category_url($parent_slug, $slug)
	{
		if (!empty($parent_slug)) {
			return lang_base_url() . $parent_slug . "/" . $slug;
		} else {
			return lang_base_url() . $slug;
		}
	}
}

//generate profile url
if (!function_exists('generate_profile_url')) {
	function generate_profile_url($user)
	{
		if (!empty($user)) {
			return lang_base_url() . "profile/" . $user->slug;
		}
		return "#";
	}
}

//generate menu item url
if (!function_exists('generate_menu_item_url')) {
	function generate_menu_item_url($item)
	{
		if (empty($item)) {
			return lang_base_url() . "#";
		}

		if ($item->item_type == 'page') {
			if (!empty($item->item_link)) {
				return $item->item_link;
			} else {
				return lang_base_url() . $item->item_slug;
			}
		} elseif ($item->item_type == 'category') {
			if (!empty($item->item_parent_slug)) {
				return lang_base_url() . $item->item_parent_slug . "/" . $item->item_slug;
			} else {
				return lang_base_url() . $item->item_slug;
			}
		} else {
			return lang_base_url() . "#";
		}
	}
}

//get comment count
if (!function_exists('helper_get_comment_count')) {
	function helper_get_comment_count($post_id)
	{
		// Get a reference to the controller object
		$ci =& get_instance();
		$ci->load->model('comment_model');
		return $ci->comment_model->get_post_comment_count($post_id);
	}
}

//get subcomments
if (!function_exists('helper_get_subcomments')) {
	function helper_get_subcomments($comment_id)
	{
		// Get a reference to the controller object
		$ci =& get_instance();
		$ci->load->model('comment_model');
		return $ci->comment_model->get_subcomments($comment_id);
	}
}

//get category
if (!function_exists('helper_get_category')) {
	function helper_get_category($category_id)
	{
		// Get a reference to the controller object
		$ci =& get_instance();
		return $ci->category_model->get_category($category_id);
	}
}

//get category post count
if (!function_exists('get_post_count_by_category')) {
	function get_post_count_by_category($category_id)
	{
		// Get a reference to the controller object
		$ci =& get_instance();
		return $ci->post_model->get_post_count_by_category($category_id);
	}
}

//get subcategories
if (!function_exists('helper_get_subcategories')) {
	function helper_get_subcategories($parent_id)
	{
		// Get a reference to the controller objectene
		$ci =& get_instance();
		return $ci->category_model->get_subcategories_by_parent_id($parent_id);
	}
}


//get category array
if (!function_exists('get_category_array')) {
	function get_category_array($id)
	{
		// Get a reference to the controller object
		$ci =& get_instance();
		return $ci->category_model->get_category_array($id);
	}
}

//get category tree
if (!function_exists('get_category_tree')) {
	function get_category_tree($id)
	{
		// Get a reference to the controller object
		$ci =& get_instance();
		return $ci->category_model->get_category_tree($id);
	}
}

//get ad codes
if (!function_exists('helper_get_ad_codes')) {
	function helper_get_ad_codes($ad_space)
	{
		// Get a reference to the controller object
		$ci =& get_instance();
		return $ci->ad_model->get_ad_codes($ad_space);
	}
}

//get parent link
if (!function_exists('helper_get_parent_link')) {
	function helper_get_parent_link($parent_id, $type)
	{
		// Get a reference to the controller object
		$ci =& get_instance();
		return $ci->navigation_model->get_parent_link($parent_id, $type);
	}
}

//get sub menu links
if (!function_exists('get_sub_links')) {
	function get_sub_links($parent_id, $type)
	{
		// Get a reference to the controller object
		$ci =& get_instance();
		return $ci->navigation_model->get_sub_links($parent_id, $type);
	}
}

//get page title
if (!function_exists('get_page_title')) {
	function get_page_title($page)
	{
		if (!empty($page)) {
			return $page->title;
		} else {
			return "";
		}
	}
}

//get page description
if (!function_exists('get_page_description')) {
	function get_page_description($page)
	{
		if (!empty($page)) {
			return $page->page_description;
		} else {
			return "";
		}
	}
}

//get page keywords
if (!function_exists('get_page_keywords')) {
	function get_page_keywords($page)
	{
		if (!empty($page)) {
			return $page->page_keywords;
		} else {
			return "";
		}
	}
}
//get gallery album
if (!function_exists('get_gallery_album')) {
	function get_gallery_album($id)
	{
		$ci =& get_instance();
		return $ci->gallery_category_model->get_album($id);
	}
}

//get gallery category
if (!function_exists('get_gallery_category')) {
	function get_gallery_category($id)
	{
		$ci =& get_instance();
		return $ci->gallery_category_model->get_category($id);
	}
}

//get page keywords
if (!function_exists('get_gallery_cover_image')) {
	function get_gallery_cover_image($album_id)
	{
		$ci =& get_instance();
		return $ci->gallery_model->get_cover_image($album_id);
	}
}

//print old form data
if (!function_exists('old')) {
	function old($field)
	{
		$ci =& get_instance();
		if (isset($ci->session->flashdata('form_data')[$field])) {
			return html_escape($ci->session->flashdata('form_data')[$field]);
		}
	}
}

//delete image from server
if (!function_exists('delete_image')) {
	function delete_image_from_server($path)
	{
		$full_path = FCPATH . $path;
		if (strlen($path) > 15 && file_exists($full_path)) {
			unlink($full_path);
		}
	}
}


//get logo
if (!function_exists('get_logo')) {
	function get_logo($settings)
	{
		if (!empty($settings)) {
			if (!empty($settings->logo_path) && file_exists(FCPATH . $settings->logo_path)) {
				return base_url() . $settings->logo_path;
			}
		}
		return base_url() . "assets/img/logo.png";
	}
}

//get mobile logo
if (!function_exists('get_mobile_logo')) {
	function get_mobile_logo($settings)
	{
		if (!empty($settings)) {
			if (!empty($settings->logo_path) && file_exists(FCPATH . $settings->mobile_logo_path)) {
				return base_url() . $settings->mobile_logo_path;
			}
		}
		return base_url() . "assets/img/logo-mobile.png";
	}
}

//get favicon
if (!function_exists('get_favicon')) {
	function get_favicon($settings)
	{
		if (!empty($settings)) {
			if (!empty($settings->favicon_path) && file_exists(FCPATH . $settings->favicon_path)) {
				return base_url() . $settings->favicon_path;
			} else {
				return base_url() . "assets/img/favicon.png";
			}
		} else {
			return base_url() . "assets/img/favicon.png";
		}
	}
}

//get user avatar
if (!function_exists('get_user_avatar')) {
	function get_user_avatar($user)
	{
		if (!empty($user)) {
			if (!empty($user->avatar) && file_exists(FCPATH . $user->avatar)) {
				return base_url() . $user->avatar;
			} elseif (!empty($user->avatar)) {
				return $user->avatar;
			} else {
				return base_url() . "assets/img/user.png";
			}
		} else {
			return base_url() . "assets/img/user.png";
		}
	}
}

//get user avatar by id
if (!function_exists('get_user_avatar_by_id')) {
	function get_user_avatar_by_id($user_id)
	{
		$ci =& get_instance();

		$user = $ci->auth_model->get_user($user_id);
		if (!empty($user)) {
			if (!empty($user->avatar) && file_exists(FCPATH . $user->avatar)) {
				return base_url() . $user->avatar;
			} elseif (!empty($user->avatar)) {
				return $user->avatar;
			} else {
				return base_url() . "assets/img/user.png";
			}
		} else {
			return base_url() . "assets/img/user.png";
		}
	}
}

//get translated message
if (!function_exists('trans')) {
	function trans($string)
	{
		$ci =& get_instance();
		return $ci->lang->line($string);
	}
}

//date format
if (!function_exists('helper_date_format')) {
	function helper_date_format($datetime)
	{
		$ci =& get_instance();
		$date = date("M j, Y", strtotime($datetime));
		$date = str_replace("Jan", $ci->lang->line("January"), $date);
		$date = str_replace("Feb", $ci->lang->line("February"), $date);
		$date = str_replace("Mar", $ci->lang->line("March"), $date);
		$date = str_replace("Apr", $ci->lang->line("April"), $date);
		$date = str_replace("May", $ci->lang->line("May"), $date);
		$date = str_replace("Jun", $ci->lang->line("June"), $date);
		$date = str_replace("Jul", $ci->lang->line("July"), $date);
		$date = str_replace("Aug", $ci->lang->line("August"), $date);
		$date = str_replace("Sep", $ci->lang->line("September"), $date);
		$date = str_replace("Oct", $ci->lang->line("October"), $date);
		$date = str_replace("Nov", $ci->lang->line("November"), $date);
		$date = str_replace("Dec", $ci->lang->line("December"), $date);
		return $date;

	}
}

//date format for comments
if (!function_exists('helper_comment_date_format')) {
	function helper_comment_date_format($datetime)
	{
		$ci =& get_instance();
		$date = date("M j, Y g:i a", strtotime($datetime));
		$date = str_replace("Jan", $ci->lang->line("January"), $date);
		$date = str_replace("Feb", $ci->lang->line("February"), $date);
		$date = str_replace("Mar", $ci->lang->line("March"), $date);
		$date = str_replace("Apr", $ci->lang->line("April"), $date);
		$date = str_replace("May", $ci->lang->line("May"), $date);
		$date = str_replace("Jun", $ci->lang->line("June"), $date);
		$date = str_replace("Jul", $ci->lang->line("July"), $date);
		$date = str_replace("Aug", $ci->lang->line("August"), $date);
		$date = str_replace("Sep", $ci->lang->line("September"), $date);
		$date = str_replace("Oct", $ci->lang->line("October"), $date);
		$date = str_replace("Nov", $ci->lang->line("November"), $date);
		$date = str_replace("Dec", $ci->lang->line("December"), $date);
		return $date;
	}
}

//delete file from server
if (!function_exists('delete_file_from_server')) {
	function delete_file_from_server($path)
	{
		$full_path = FCPATH . $path;
		if (strlen($path) > 15 && file_exists($full_path)) {
			unlink($full_path);
		}
	}
}

//get settings
if (!function_exists('get_settings')) {
	function get_settings($lang_id)
	{
		$ci =& get_instance();
		$ci->load->model('settings_model');
		return $ci->settings_model->get_settings($lang_id);
	}
}

//get general settings
if (!function_exists('get_general_settings')) {
	function get_general_settings()
	{
		$ci =& get_instance();
		$ci->load->model('settings_model');
		return $ci->settings_model->get_general_settings();
	}
}

//get language
if (!function_exists('get_language')) {
	function get_language($lang_id)
	{
		$ci =& get_instance();
		return $ci->language_model->get_language($lang_id);
	}
}

//get total vote count
if (!function_exists('get_total_vote_count')) {
	function get_total_vote_count($poll_id)
	{
		// Get a reference to the controller object
		$ci =& get_instance();
		return $ci->poll_model->get_total_vote_count($poll_id);
	}
}

//get option vote count
if (!function_exists('get_option_vote_count')) {
	function get_option_vote_count($poll_id, $option)
	{
		// Get a reference to the controller object
		$ci =& get_instance();
		return $ci->poll_model->get_option_vote_count($poll_id, $option);
	}
}
//get post images
if (!function_exists('get_post_additional_images')) {
	function get_post_additional_images($post_id)
	{
		$ci =& get_instance();
		return $ci->post_file_model->get_post_additional_images($post_id);
	}
}
//get post files
if (!function_exists('get_post_files')) {
	function get_post_files($post_id)
	{
		$ci =& get_instance();
		return $ci->post_file_model->get_post_files($post_id);
	}
}
//is reaction voted
if (!function_exists('is_reaction_voted')) {
	function is_reaction_voted($post_id, $reaction)
	{
		if (isset($_SESSION["inf_reaction_" . $reaction . "_" . $post_id]) && $_SESSION["inf_reaction_" . $reaction . "_" . $post_id] == '1') {
			return true;
		} else {
			return false;
		}
	}
}

//set cookie
if (!function_exists('helper_setcookie')) {
	function helper_setcookie($name, $value)
	{
		setcookie($name, $value, time() + (86400 * 30), "/"); //30 days
	}
}

//get post comment count
if (!function_exists('get_post_comment_count')) {
	function get_post_comment_count($post_id)
	{
		// Get a reference to the controller object
		$ci =& get_instance();
		return $ci->comment_model->get_post_comment_count($post_id);
	}
}

//get subcomments
if (!function_exists('get_subcomments')) {
	function get_subcomments($parent_id)
	{
		$ci =& get_instance();
		return $ci->comment_model->get_subcomments($parent_id);
	}
}

//set cached data by lang
if (!function_exists('set_cache_data')) {
	function set_cache_data($key, $data)
	{
		$ci =& get_instance();
		$key = $key . "_lang" . $ci->selected_lang->id;
		if ($ci->general_settings->cache_system == 1) {
			$ci->load->driver('cache', array('adapter' => 'apc', 'backup' => 'file'));
			$ci->cache->save($key, $data, $ci->general_settings->cache_refresh_time);
		}
	}
}

//get cached data by lang
if (!function_exists('get_cached_data')) {
	function get_cached_data($key)
	{
		$ci =& get_instance();
		$key = $key . "_lang" . $ci->selected_lang->id;
		if ($ci->general_settings->cache_system == 1) {
			$ci->load->driver('cache', array('adapter' => 'apc', 'backup' => 'file'));
			if ($data = $ci->cache->get($key)) {
				return $data;
			}
		}
		return false;
	}
}

//reset cache data
if (!function_exists('reset_cache_data')) {
	function reset_cache_data()
	{
		$ci =& get_instance();
		$path = $ci->config->item('cache_path');

		$cache_path = ($path == '') ? APPPATH . 'cache/' : $path;

		$handle = opendir($cache_path);
		while (($file = readdir($handle)) !== FALSE) {
			//Leave the directory protection alone
			if ($file != '.htaccess' && $file != 'index.html') {
				@unlink($cache_path . '/' . $file);
			}
		}
		closedir($handle);
	}
}

//reset cache data on change
if (!function_exists('reset_cache_data_on_change')) {
	function reset_cache_data_on_change()
	{
		$ci =& get_instance();
		$settings = $ci->settings_model->get_general_settings();
		if ($settings->refresh_cache_database_changes == 1) {
			reset_cache_data();
		}
	}
}

//reset flash data
if (!function_exists('reset_flash_data')) {
	function reset_flash_data()
	{
		$ci =& get_instance();
		$ci->session->set_flashdata('errors', "");
		$ci->session->set_flashdata('error', "");
		$ci->session->set_flashdata('success', "");
	}
}

//get post image
if (!function_exists('get_post_image')) {
	function get_post_image($post, $size)
	{
		if (!empty($post)) {
			if (!empty($post->image_url)) {
				return $post->image_url;
			} else {
				$img = "image_" . $size;
				return base_url() . $post->$img;
			}
		}
	}
}

//check user follows
if (!function_exists('is_user_follows')) {
	function is_user_follows($following_id, $follower_id)
	{
		$ci =& get_instance();
		return $ci->profile_model->is_user_follows($following_id, $follower_id);
	}
}

//generate unique id
if (!function_exists('generate_unique_id')) {
	function generate_unique_id()
	{
		$id = uniqid("", TRUE);
		$id = str_replace(".", "-", $id);
		return $id . "-" . rand(10000000, 99999999);
	}
}

//generate slug
if (!function_exists('str_slug')) {
	function str_slug($str)
	{
		return url_title(convert_accented_characters($str), "-", true);
	}
}

//get recaptcha
if (!function_exists('generate_recaptcha')) {
	function generate_recaptcha()
	{
		$ci =& get_instance();
		if ($ci->recaptcha_status) {
			$ci->load->library('recaptcha');
			echo '<div class="form-group">';
			echo $ci->recaptcha->getWidget();
			echo $ci->recaptcha->getScriptTag();
			echo ' </div>';
		}
	}
}

//print date
if (!function_exists('formatted_date')) {
	function formatted_date($timestamp)
	{
		return date("Y-m-d / h:i", strtotime($timestamp));
	}
}

//set session
if (!function_exists('set_session')) {
	function set_session($name, $value)
	{
		$ci =& get_instance();
		$ci->session->set_userdata($name, $value);
	}
}

//get session
if (!function_exists('get_session')) {
	function get_session($name)
	{
		$ci =& get_instance();
		$ci->session->userdata($name);
	}
}

//clean slug
if (!function_exists('clean_slug')) {
	function clean_slug($slug)
	{
		$ci =& get_instance();
		$slug = urldecode($slug);
		$slug = $ci->security->xss_clean($slug);
		$slug = remove_special_characters($slug, true);
		return $slug;
	}
}

//clean number
if (!function_exists('clean_number')) {
	function clean_number($num)
	{
		$ci =& get_instance();
		$num = $ci->security->xss_clean($num);
		$num = str_slug($num);
		$num = intval($num);
		return $num;
	}
}

//remove special characters
if (!function_exists('remove_special_characters')) {
	function remove_special_characters($str, $is_slug = false)
	{
		$str = str_replace('#', '', $str);
		$str = str_replace(';', '', $str);
		$str = str_replace('!', '', $str);
		$str = str_replace('"', '', $str);
		$str = str_replace('$', '', $str);
		$str = str_replace('%', '', $str);
		$str = str_replace('(', '', $str);
		$str = str_replace(')', '', $str);
		$str = str_replace('*', '', $str);
		$str = str_replace('+', '', $str);
		$str = str_replace('/', '', $str);
		$str = str_replace('\'', '', $str);
		$str = str_replace('<', '', $str);
		$str = str_replace('>', '', $str);
		$str = str_replace('=', '', $str);
		$str = str_replace('?', '', $str);
		$str = str_replace('[', '', $str);
		$str = str_replace(']', '', $str);
		$str = str_replace('\\', '', $str);
		$str = str_replace('^', '', $str);
		$str = str_replace('`', '', $str);
		$str = str_replace('{', '', $str);
		$str = str_replace('}', '', $str);
		$str = str_replace('|', '', $str);
		$str = str_replace('~', '', $str);
		if ($is_slug == true) {
			$str = str_replace(" ", '-', $str);
			$str = str_replace("'", '', $str);
		}
		return $str;
	}
}


//remove forbidden characters
if (!function_exists('remove_forbidden_characters')) {
	function remove_forbidden_characters($str)
	{
		$str = str_replace(';', '', $str);
		$str = str_replace('"', '', $str);
		$str = str_replace('$', '', $str);
		$str = str_replace('%', '', $str);
		$str = str_replace('*', '', $str);
		$str = str_replace('/', '', $str);
		$str = str_replace('\'', '', $str);
		$str = str_replace('<', '', $str);
		$str = str_replace('>', '', $str);
		$str = str_replace('=', '', $str);
		$str = str_replace('?', '', $str);
		$str = str_replace('[', '', $str);
		$str = str_replace(']', '', $str);
		$str = str_replace('\\', '', $str);
		$str = str_replace('^', '', $str);
		$str = str_replace('`', '', $str);
		$str = str_replace('{', '', $str);
		$str = str_replace('}', '', $str);
		$str = str_replace('|', '', $str);
		$str = str_replace('~', '', $str);
		return $str;
	}
}

function time_ago($timestamp)
{
	$time_ago = strtotime($timestamp);
	$current_time = time();
	$time_difference = $current_time - $time_ago;
	$seconds = $time_difference;
	$minutes = round($seconds / 60);           // value 60 is seconds
	$hours = round($seconds / 3600);           //value 3600 is 60 minutes * 60 sec
	$days = round($seconds / 86400);          //86400 = 24 * 60 * 60;
	$weeks = round($seconds / 604800);          // 7*24*60*60;
	$months = round($seconds / 2629440);     //((365+365+365+365+366)/5/12)*24*60*60
	$years = round($seconds / 31553280);     //(365+365+365+365+366)/5 * 24 * 60 * 60
	if ($seconds <= 60) {
		return trans("just_now");
	} else if ($minutes <= 60) {
		if ($minutes == 1) {
			return "1 " . trans("minute_ago");
		} else {
			return "$minutes " . trans("minutes_ago");
		}
	} else if ($hours <= 24) {
		if ($hours == 1) {
			return "1 " . trans("hour_ago");
		} else {
			return "$hours " . trans("hours_ago");
		}
	} else if ($days <= 30) {
		if ($days == 1) {
			return "1 " . trans("day_ago");
		} else {
			return "$days " . trans("days_ago");
		}
	} else if ($months <= 12) {
		if ($months == 1) {
			return "1 " . trans("month_ago");
		} else {
			return "$months " . trans("months_ago");
		}
	} else {
		if ($years == 1) {
			return "1 " . trans("year_ago");
		} else {
			return "$years " . trans("years_ago");
		}
	}
}

if (!function_exists('limit_character')) {
	function limit_character($string, $n, $end = '...')
	{
		if (strlen($string) > $n) {
			$string = substr($string, 0, $n) . $end;
		}
		return $string;
	}
}

if (!function_exists('is_user_online')) {
	function is_user_online($timestamp)
	{
		$time_ago = strtotime($timestamp);
		$current_time = time();
		$time_difference = $current_time - $time_ago;
		$seconds = $time_difference;
		$minutes = round($seconds / 60);
		if ($minutes <= 2) {
			return true;
		} else {
			return false;
		}
	}
}

if (!function_exists('convert_to_xml_character')) {
	function convert_to_xml_character($string)
	{
		return str_replace(array('&', '<', '>', '\'', '"'), array('&amp;', '&lt;', '&gt;', '&apos;', '&quot;'), $string);
	}
}

//clear expired session files
if (!function_exists('clear_expired_session_files')) {
	function clear_expired_session_files()
	{
		$ci =& get_instance();
		if ($ci->config->item('sess_driver') == 'files') {
			if ($handle = opendir(APPPATH . 'session')) {
				foreach (glob(APPPATH . "session/ci_session*") as $filename) {
					if (filemtime($filename) + 259200 < time()) {
						@unlink($filename);
					}
				}
			}
		}
	}
}
?>
