<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Sitemap_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->urls = array();
	}


	//input values
	public function input_values()
	{
		$data = array(
			'frequency' => $this->input->post('frequency', true),
			'last_modification' => $this->input->post('last_modification', true),
			'lastmod_time' => $this->input->post('lastmod_time', true),
			'priority' => $this->input->post('priority', true),
		);
		return $data;
	}

	public function add($loc, $changefreq = NULL, $lastmod = NULL, $priority = NULL, $priority_value = NULL, $lastmod_time = NULL)
	{
		$item = new stdClass();
		$item->loc = $loc;
		$item->lastmod = $lastmod;
		$item->lastmod_time = $lastmod_time;
		$item->changefreq = $changefreq;
		$item->priority = $priority;
		$item->priority_value = $priority_value;
		$this->urls[] = $item;

		return true;
	}

	/**
	 * Generate the sitemap file and replace any output with the valid XML of the sitemap
	 *
	 * @param string $type Type of sitemap to be generated. Use 'urlset' for a normal sitemap. Use 'sitemapindex' for a sitemap index file.
	 * @access public
	 * @return void
	 */
	public function output($type = 'urlset')
	{

		$xml = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8" ?><urlset/>');
		$xml->addAttribute('xmlns', 'http://www.sitemaps.org/schemas/sitemap/0.9');
		if (!empty($this->urls)) {
			foreach ($this->urls as $url) {
				$child = $xml->addChild('url');
				$child->addChild('loc', strtolower($url->loc));

				if (isset($url->lastmod) && $url->lastmod != 'none') {
					if ($url->lastmod == 'server_response') {
						$child->addChild('lastmod', date("Y-m-d"));
					} else {
						$child->addChild('lastmod', $url->lastmod_time);
					}
				}

				if (isset($url->changefreq) && $url->changefreq != 'none') {
					$child->addChild('changefreq', $url->changefreq);
				}

				if (isset($url->priority) && $url->priority != 'none') {
					$child->addChild('priority', $url->priority_value);
				}
			}
		}
		header('Content-Disposition: attachment; filename="sitemap.xml"');
		$this->output->set_content_type('application/xml')->set_output($xml->saveXML());

	}


	/**
	 * Clear all items in the sitemap to be generated
	 *
	 * @access public
	 * @return boolean
	 */
	public function clear()
	{
		$this->urls = array();
		return true;
	}


	/**
	 * Base Url
	 */
	public function get_base_url($lang_id)
	{
		if ($lang_id == $this->general_settings->site_lang) {
			return base_url();
		} else {
			$lang = get_language($lang_id);
			if (!empty($lang)) {
				return base_url() . $lang->short_form . "/";
			}
		}
	}


	/**
	 * Page Urls
	 */
	public function add_page_urls($frequency, $last_modification, $priority, $lastmod_time)
	{
		$pages = $this->page_model->get_pages_sitemap();
		if (!empty($pages)) {
			foreach ($pages as $page) {
				if ($page->slug == 'index') {
					$priority_value = 1.0;
					$this->sitemap_model->add(lang_base_url(), $frequency, $last_modification, $priority, $priority_value, $lastmod_time);
				} else {
					if (!empty($page->link)) {
						if ((strpos($page->link, 'https') !== false) || (strpos($page->link, 'http') !== false)) {
							$priority_value = 0.8;
							$this->sitemap_model->add($page->link, $frequency, $last_modification, $priority, $priority_value, $lastmod_time);
						}
					} else {
						$base_url = $this->get_base_url($page->lang_id);
						$priority_value = 0.8;
						$this->sitemap_model->add($base_url . $page->slug, $frequency, $last_modification, $priority, $priority_value, $lastmod_time);
					}
				}
			}
		}
	}


	/**
	 * Static Page Urls
	 */
	public function add_static_urls($frequency, $last_modification, $priority, $lastmod_time)
	{
		$priority_value = 0.8;

		$this->sitemap_model->add(base_url(), $frequency, $last_modification, '1', '1', $lastmod_time);
		$this->sitemap_model->add(base_url() . "search", $frequency, $last_modification, $priority, $priority_value, $lastmod_time);

	}


	/**
	 * Post Urls
	 */
	public function add_post_urls($frequency, $last_modification, $priority, $lastmod_time)
	{
		$posts = $this->post_admin_model->get_sitemap_posts();
		$priority_value = 0.8;
		if (!empty($posts)) {
			foreach ($posts as $post) {
				$base_url = $this->get_base_url($post->lang_id);
				$this->sitemap_model->add($base_url . $post->title_slug, $frequency, $last_modification, $priority, $priority_value, $lastmod_time);
			}
		}
	}


	/**
	 * Category Urls
	 */
	public function add_category_urls($frequency, $last_modification, $priority, $lastmod_time)
	{
		$categories = $this->category_model->get_sitemap_categories();
		$priority_value = 0.8;
		if (!empty($categories)) {
			foreach ($categories as $category) {
				$base_url = $this->get_base_url($category->lang_id);
				$cat_url = $base_url;
				if (!empty($category->parent_slug)) {
					$cat_url = $base_url . $category->parent_slug . "/" . $category->slug;
				} else {
					$cat_url = $base_url . $category->slug;
				}
				$this->sitemap_model->add($cat_url, $frequency, $last_modification, $priority, $priority_value, $lastmod_time);
			}
		}
	}

	/**
	 * Tag Urls
	 */
	public function add_tag_urls($frequency, $last_modification, $priority, $lastmod_time)
	{

		$tags = $this->tag_model->get_sitemap_tags();
		$priority_value = 0.8;
		if (!empty($tags)) {
			foreach ($tags as $tag) {
				if (!empty($tag)) {
					$tag = $this->tag_model->get_tag($tag->tag_slug);
					$base_url = $this->get_base_url($tag->tag_lang_id);
					$this->sitemap_model->add($base_url . "tag/" . $tag->tag_slug, $frequency, $last_modification, $priority, $priority_value, $lastmod_time);
				}
			}
		}
	}


	public function download_sitemap()
	{
		$data = $this->input_values();
		$this->add_static_urls($data['frequency'], $data['last_modification'], $data['priority'], $data['lastmod_time']);
		$this->add_page_urls($data['frequency'], $data['last_modification'], $data['priority'], $data['lastmod_time']);
		$this->add_post_urls($data['frequency'], $data['last_modification'], $data['priority'], $data['lastmod_time']);
		$this->add_category_urls($data['frequency'], $data['last_modification'], $data['priority'], $data['lastmod_time']);
		$this->add_tag_urls($data['frequency'], $data['last_modification'], $data['priority'], $data['lastmod_time']);
		$this->sitemap_model->output('sitemapindex');
	}


	public function update_sitemap()
	{
		$full_path = FCPATH . "sitemap.xml";
		if (file_exists($full_path)) {
			unlink($full_path);
		}

		$this->add(base_url(), 'daily', 'server_response', '1', '1', NULL);
		$this->add(base_url() . "search", 'daily', 'server_response', '0.8', '0.8', NULL);
		$this->add_page_urls('daily', 'server_response', '0.8', NULL);
		$this->add_post_urls('daily', 'server_response', '0.8', NULL);
		$this->add_category_urls('daily', 'server_response', '0.8', NULL);
		$this->add_tag_urls('daily', 'server_response', '0.8', NULL);


		$xml = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8" ?><urlset/>');
		$xml->addAttribute('xmlns', 'http://www.sitemaps.org/schemas/sitemap/0.9');

		if (!empty($this->urls)) {
			foreach ($this->urls as $url) {
				$child = $xml->addChild('url');
				$child->addChild('loc', strtolower($url->loc));

				if (isset($url->lastmod) && $url->lastmod != 'none') {
					if ($url->lastmod == 'server_response') {
						$child->addChild('lastmod', date("Y-m-d"));
					} else {
						$child->addChild('lastmod', $url->lastmod_time);
					}
				}

				if (isset($url->changefreq) && $url->changefreq != 'none') {
					$child->addChild('changefreq', $url->changefreq);
				}

				if (isset($url->priority) && $url->priority != 'none') {
					$child->addChild('priority', $url->priority_value);
				}
			}
		}
		$xml->saveXML($full_path);
	}

}
