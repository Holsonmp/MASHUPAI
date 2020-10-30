<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Rss_controller extends Admin_Core_Controller
{
    public function __construct()
    {
        parent::__construct();

        //load the library
        $this->load->library('feed');
        $this->load->helper('xml');
    }


    /**
     * Rss All Posts
     */
    public function rss_all_posts()
    {
        if ($this->general_settings->show_rss == 1):
            $data['feed_name'] = $this->settings->site_title . " - " . trans("all_posts");
            $data['encoding'] = 'utf-8';
            $data['feed_url'] = lang_base_url() . "rss/posts";
            $data['page_description'] = $this->settings->site_title;
            $data['page_language'] = $this->get_lang();
            $data['creator_email'] = '';
            $data['posts'] = $this->post_model->get_posts();
            header("Content-Type: application/rss+xml; charset=utf-8");

            $this->load->view('rss', $data);
        endif;
    }

    /**
     * Rss Popular Posts
     */
    public function rss_popular_posts()
    {
        if ($this->general_settings->show_rss == 1):
            $data['feed_name'] = $this->settings->site_title . " - " . trans("popular_posts");
            $data['encoding'] = 'utf-8';
            $data['feed_url'] = lang_base_url() . "rss/popular-posts";
            $data['page_description'] = $this->settings->site_title;
            $data['page_language'] = $this->get_lang();
            $data['creator_email'] = '';
            $data['posts'] = $this->post_model->get_popular_posts(5);
            header("Content-Type: application/rss+xml; charset=utf-8");

            $this->load->view('rss', $data);
        endif;
    }

    /**
     * Rss Latest Posts
     */
    public function rss_latest_posts()
    {
        if ($this->general_settings->show_rss == 1):
            $data['feed_name'] = $this->settings->site_title . " - " . trans("latest_posts");
            $data['encoding'] = 'utf-8';
            $data['feed_url'] = lang_base_url() . "rss/latest-posts";
            $data['page_description'] = $this->settings->site_title;
            $data['page_language'] = $this->get_lang();
            $data['creator_email'] = '';
            $data['posts'] = $this->post_model->get_last_posts(5);
            header("Content-Type: application/rss+xml; charset=utf-8");

            $this->load->view('rss', $data);
        endif;
    }


    /**
     * Rss By Category
     */
    public function rss_by_category($slug)
    {
        if ($this->general_settings->show_rss == 1):
            $slug = clean_slug($slug);
            $data['category'] = $this->category_model->get_category_by_slug($slug);
            if (empty($data['category'])) {
                redirect(lang_base_url());
            }
            $data['feed_name'] = $this->settings->site_title . " - " . trans("category") . ": " . $data['category']->name;
            $data['encoding'] = 'utf-8';
            $data['feed_url'] = lang_base_url() . "rss/category/" . $data['category']->slug;
            $data['page_description'] = $this->settings->site_title;
            $data['page_language'] = $this->get_lang();
            $data['creator_email'] = '';
            $data['posts'] = $this->post_model->get_posts_by_category($data['category']->id);
            header("Content-Type: application/rss+xml; charset=utf-8");
            $this->load->view('rss', $data);
        endif;
    }

    public function get_lang()
    {
        return $this->selected_lang->short_form;
    }
}
