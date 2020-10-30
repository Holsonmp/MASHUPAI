<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Navigation_model extends CI_Model
{
	//input values
	public function input_values()
	{
		$data = array(
			'lang_id' => $this->input->post('lang_id', true),
			'title' => $this->input->post('title', true),
			'link' => $this->input->post('link', true),
			'page_order' => $this->input->post('page_order', true),
			'page_active' => $this->input->post('page_active', true),
			'parent_id' => $this->input->post('parent_id', true),
			'location' => "header"
		);
		return $data;
	}

	//add link
	public function add_link()
	{
		$data = $this->input_values();

		//slug for title
		if (empty($data["slug"])) {
			$data["slug"] = str_slug($data["title"]);
		}

		if (empty($data['link'])) {
			$data['link'] = "#";
		}

		return $this->db->insert('pages', $data);
	}

	//update link
	public function update_link($id)
	{
		$data = $this->input_values();
		//slug for title
		if (empty($data["slug"])) {
			$data["slug"] = str_slug($data["title"]);
		}

		$this->db->where('id', $id);
		return $this->db->update('pages', $data);
	}

	//get parent link
	public function get_parent_link($parent_id, $type)
	{
		if ($type == "page") {
			$this->db->where('id', $parent_id);
			$query = $this->db->get('pages');
			return $query->row();
		}
		if ($type == "category") {
			$this->db->where('id', $parent_id);
			$query = $this->db->get('categories');
			return $query->row();
		}
	}

	//get all menu links
	public function get_all_menu_links()
	{
		$query = $this->db->query("SELECT * FROM ((SELECT categories.id AS item_id, categories.lang_id AS item_lang_id, categories.name AS item_name, categories.slug AS item_slug, categories.category_order AS item_order, 'header' AS item_location, 'category' AS item_type, '#' AS item_link, categories.parent_id AS item_parent_id, categories.show_on_menu AS item_visibility FROM categories) UNION
		(SELECT pages.id AS item_id, pages.lang_id AS item_lang_id, pages.title AS item_name, pages.slug AS item_slug, pages.page_order AS item_order, pages.location AS item_location, 'page' AS item_type, pages.link AS item_link, pages.parent_id AS item_parent_id, pages.page_active AS item_visibility FROM pages)) AS menu_items ORDER BY item_order");
		if (!empty($query->result())) {
			return $query->result();
		}
		return array();
	}

	//get all menu links by lang
	public function get_all_menu_links_by_lang($lang_id)
	{
		$lang_id = clean_number($lang_id);
		$query = $this->db->query("SELECT * FROM ((SELECT categories.id AS item_id, categories.lang_id AS item_lang_id, categories.name AS item_name, categories.slug AS item_slug, categories.category_order AS item_order, 'header' AS item_location, 'category' AS item_type, '#' AS item_link, categories.parent_id AS item_parent_id, categories.show_on_menu AS item_visibility FROM categories WHERE categories.lang_id=" . $lang_id . ") UNION
		(SELECT pages.id AS item_id, pages.lang_id AS item_lang_id, pages.title AS item_name, pages.slug AS item_slug, pages.page_order AS item_order, pages.location AS item_location, 'page' AS item_type, pages.link AS item_link, pages.parent_id AS item_parent_id, pages.page_active AS item_visibility FROM pages WHERE pages.lang_id=" . $lang_id . ")) AS menu_items ORDER BY item_order");
		if (!empty($query->result())) {
			return $query->result();
		}
		return array();
	}

	//get menu links by lang
	public function get_menu_links_by_lang($lang_id)
	{
		$lang_id = clean_number($lang_id);
		$query = $this->db->query("SELECT * FROM ((SELECT categories.id AS item_id, categories.name AS item_name, categories.slug AS item_slug, categories.category_order AS item_order, 'header' AS item_location, 'category' AS item_type, '#' AS item_link FROM categories WHERE categories.show_on_menu = 1 AND categories.parent_id = 0 AND categories.lang_id=" . $lang_id . ") UNION
		(SELECT pages.id AS item_id, pages.title AS item_name, pages.slug AS item_slug, pages.page_order AS item_order, pages.location AS item_location, 'page' AS item_type, pages.link AS item_link FROM pages WHERE pages.page_active = 1 AND pages.parent_id = 0 AND pages.lang_id=" . $lang_id . ")) AS menu_items ORDER BY item_order");
		if (!empty($query->result())) {
			return $query->result();
		}
		return array();
	}

	//get sub links
	public function get_sub_links($parent_id, $type)
	{
		$parent_id = clean_number($parent_id);
		if ($type == 'page') {
			$this->db->select("pages.title as item_name, pages.slug as item_slug, pages.link as item_link, 'page' as item_type");
			$this->db->where('pages.parent_id', $parent_id);
			$this->db->where('pages.page_active', 1);
			$this->db->order_by('pages.page_order');
			$query = $this->db->get('pages');
			return $query->result();
		} elseif ($type == 'category') {
			$this->db->select("categories.name as item_name, categories.slug as item_slug, 'category' as item_type, categories.parent_id as item_parent_id, (SELECT slug FROM categories WHERE id = item_parent_id) as item_parent_slug");
			$this->db->where('categories.parent_id', $parent_id);
			$this->db->where('categories.show_on_menu', 1);
			$this->db->order_by('categories.category_order');
			$query = $this->db->get('categories');
			return $query->result();
		} else {
			return array();
		}
	}

	//update menu limit
	public function update_menu_limit()
	{
		$data = array(
			'menu_limit' => $this->input->post('menu_limit', true),
		);

		$this->db->where('id', 1);
		return $this->db->update('general_settings', $data);
	}
}
