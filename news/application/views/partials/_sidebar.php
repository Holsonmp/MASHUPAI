<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<aside class="sidebar">
<div class="sidebox widget">
              <h3 class="widget-title">Search</h3>
              <?php echo form_open('search', ['class'=>'search-form fields-white']); ?>
                <div class="form-group">
                  <input type="text" name='q' class="form-control" placeholder="Search something">
                </div>
                <!-- /.form-group -->
              </form>
              <!-- /.search-form -->
            </div>
            <!-- /.widget -->

    <?php $this->load->view("partials/_ad_spaces", ["ad_space" => "sidebar_top"]); ?>

    <div class="col-sm-12 col-xs-12 sidebar-widget widget-popular-posts sidebox widget">
        <div class="row">
            <!--Include popular posts partial-->
            <?php $this->load->view('partials/_popular_posts'); ?>
        </div>
    </div>

    <?php if (count($this->our_picks) > 0): ?>
        <div class="col-sm-12 col-xs-12 sidebar-widget sidebox widget">
            <div class="row">
                <!--Include our picks partial-->
                <?php $this->load->view('partials/_our_picks'); ?>
            </div>
        </div>
    <?php endif; ?>

    <div class="col-sm-12 col-xs-12 sidebar-widget sidebox widget">
        <div class="row">
            <!--Include categories partial-->
            <?php $this->load->view('partials/_categories'); ?>
        </div>
    </div>

    <?php $this->load->view("partials/_ad_spaces", ["ad_space" => "sidebar_bottom"]); ?>

    <div class="col-sm-12 col-xs-12 sidebar-widget sidebox widget">
        <div class="row">
            <!--Include random slider partial-->
            <?php $this->load->view('partials/_random_slider'); ?>
        </div>
    </div>
    <div class="col-sm-12 col-xs-12 sidebar-widget sidebox widget">
        <div class="row">
            <!--Include tags partial-->
            <?php $this->load->view('partials/_tags'); ?>
        </div>
    </div>
    <div class="col-sm-12 col-xs-12 sidebar-widget sidebox widget">
        <div class="row">
            <!--Include Widget Comments-->
            <?php $this->load->view('partials/_sidebar_widget_polls'); ?>
        </div>
    </div>

</aside><!--/Sidebar-->
