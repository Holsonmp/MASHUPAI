<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include APPPATH . "third_party/image-resize/ImageResize.php";
include APPPATH . "third_party/image-resize/ImageResizeException.php";

use \Gumlet\ImageResize;
use \Gumlet\ImageResizeException;

class Upload_model extends CI_Model
{
	//upload temp image
	public function upload_temp_image($file_name, $response)
	{
		if (isset($_FILES[$file_name])) {
			if (empty($_FILES[$file_name]['name'])) {
				return null;
			}
		}
		$config['upload_path'] = './uploads/temp/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['file_name'] = 'img_' . generate_unique_id();
		$this->load->library('upload', $config);

		if ($this->upload->do_upload($file_name)) {
			$data = array('upload_data' => $this->upload->data());
			if (isset($data['upload_data']['full_path'])) {
				if ($response == 'array') {
					return $data['upload_data'];
				} else {
					return $data['upload_data']['full_path'];
				}
			}
			return null;
		} else {
			return null;
		}
	}

	//post gif image upload
	public function post_gif_image_upload($file_name)
	{
		rename(FCPATH . 'uploads/temp/' . $file_name, FCPATH . 'uploads/images/' . $file_name);
		return 'uploads/images/' . $file_name;
	}

	//post big image upload
	public function post_big_image_upload($path)
	{
		try {
			$image = new ImageResize($path);
			$image->quality_jpg = 85;
			$image->resizeToWidth(750);
			$new_path = 'uploads/images/image_750x_' . uniqid() . '.jpg';
			$image->save(FCPATH . $new_path, IMAGETYPE_JPEG);
			return $new_path;
		} catch (ImageResizeException $e) {
			return null;
		}
	}

	//post mid image upload
	public function post_mid_image_upload($path)
	{
		try {
			$image = new ImageResize($path);
			$image->quality_jpg = 85;
			$image->crop(750, 415, true);
			$new_path = 'uploads/images/image_750x415_' . uniqid() . '.jpg';
			$image->save(FCPATH . $new_path, IMAGETYPE_JPEG);
			return $new_path;
		} catch (ImageResizeException $e) {
			return null;
		}
	}

	//post small image upload
	public function post_small_image_upload($path)
	{
		try {
			$image = new ImageResize($path);
			$image->quality_jpg = 85;
			$image->crop(100, 75, true);
			$new_path = 'uploads/images/image_100x75_' . uniqid() . '.jpg';
			$image->save(FCPATH . $new_path, IMAGETYPE_JPEG);
			return $new_path;
		} catch (ImageResizeException $e) {
			return null;
		}
	}

	//post slider image upload
	public function post_slider_image_upload($path)
	{
		try {
			$image = new ImageResize($path);
			$image->quality_jpg = 85;
			$image->crop(650, 433, true);
			$new_path = 'uploads/images/image_650x433_' . uniqid() . '.jpg';
			$image->save(FCPATH . $new_path, IMAGETYPE_JPEG);
			return $new_path;
		} catch (ImageResizeException $e) {
			return null;
		}
	}

	//gallery big image upload
	public function gallery_big_image_upload($path)
	{
		try {
			$image = new ImageResize($path);
			$image->quality_jpg = 85;
			$image->resizeToWidth(1920);
			$new_path = 'uploads/gallery/image_1920x_' . uniqid() . '.jpg';
			$image->save(FCPATH . $new_path, IMAGETYPE_JPEG);
			return $new_path;
		} catch (ImageResizeException $e) {
			return null;
		}
	}

	//gallery small image upload
	public function gallery_small_image_upload($path)
	{
		try {
			$image = new ImageResize($path);
			$image->quality_jpg = 85;
			$image->resizeToWidth(500);
			$new_path = 'uploads/gallery/image_500x_' . uniqid() . '.jpg';
			$image->save(FCPATH . $new_path, IMAGETYPE_JPEG);
			return $new_path;
		} catch (ImageResizeException $e) {
			return null;
		}
	}

	//gallery gif image upload
	public function gallery_gif_image_upload($file_name)
	{
		rename(FCPATH . 'uploads/temp/' . $file_name, FCPATH . 'uploads/gallery/' . $file_name);
		return 'uploads/gallery/' . $file_name;
	}

	//logo image upload
	public function logo_upload($file_name)
	{
		$config['upload_path'] = './uploads/logo/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['file_name'] = 'logo_' . uniqid();
		$this->load->library('upload', $config);

		if ($this->upload->do_upload($file_name)) {
			$data = array('upload_data' => $this->upload->data());
			if (isset($data['upload_data']['full_path'])) {
				return 'uploads/logo/' . $data['upload_data']['file_name'];
			}
			return null;
		} else {
			return null;
		}
	}

	//favicon image upload
	public function favicon_upload($file_name)
	{
		$config['upload_path'] = './uploads/logo/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['file_name'] = 'favicon_' . uniqid();
		$this->load->library('upload', $config);

		if ($this->upload->do_upload($file_name)) {
			$data = array('upload_data' => $this->upload->data());
			if (isset($data['upload_data']['full_path'])) {
				return 'uploads/logo/' . $data['upload_data']['file_name'];
			}
			return null;
		} else {
			return null;
		}
	}

	//avatar image upload
	public function avatar_upload($user_id, $path)
	{
		try {
			$image = new ImageResize($path);
			$image->quality_jpg = 85;
			$image->crop(200, 200, true);
			$new_path = 'uploads/profile/avatar_' . $user_id . '_' . uniqid() . '.jpg';
			$image->save(FCPATH . $new_path, IMAGETYPE_JPEG);
			return $new_path;
		} catch (ImageResizeException $e) {
			return null;
		}
	}

	//ad upload
	public function ad_upload($file_name)
	{
		$config['upload_path'] = './uploads/blocks/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['file_name'] = 'block_' . uniqid();
		$this->load->library('upload', $config);

		if ($this->upload->do_upload($file_name)) {
			$data = array('upload_data' => $this->upload->data());
			if (isset($data['upload_data']['full_path'])) {
				return 'uploads/blocks/' . $data['upload_data']['file_name'];
			}
			return null;
		} else {
			return null;
		}
	}

	//upload file
	public function upload_file($file_name)
	{
		$name = @pathinfo(@$_FILES[$file_name]['name'], PATHINFO_FILENAME);
		$name = str_slug($name);
		if (empty($name)) {
			$name = "file_" . uniqid();
		}
		$config['upload_path'] = './uploads/files/';
		$config['allowed_types'] = '*';
		$config['file_name'] = $name;
		$this->load->library('upload', $config);
		if ($this->upload->do_upload($file_name)) {
			$data = array('upload_data' => $this->upload->data());
			if (isset($data['upload_data']['full_path'])) {
				return $data['upload_data']['file_name'];
			}
			return null;
		} else {
			return null;
		}
	}

	//get file original name
	public function get_file_original_name($data)
	{
		if (!empty($data['client_name'])) {
			return pathinfo($data['client_name'], PATHINFO_FILENAME);
		}
		return '';
	}

	//delete temp image
	public function delete_temp_image($path)
	{
		if (file_exists($path)) {
			@unlink($path);
		}
	}
}
