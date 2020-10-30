<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<h1 class="title-index"><?php echo html_escape($home_title); ?></h1>
<div class="wrapper light-wrapper page-title-wrapper">
<div class="space100"></div>
      <div class="container inner text-center">
        <h1 class="page-title">Our Blog</h1>
        <p class="lead">Aenean lacinia bibendum nulla sed consectetur</p>
      </div>
      <!-- /.container -->
    </div>
<?php if ($layout == "layout_1" || $layout == "layout_2" || $layout == "layout_3"):
	if (!empty($this->slider_posts)):?>
		<!-- Section: slider -->
		<section id="slider" style="margin-top: 0px;">
			<div class="container-fluid">
				<div class="row">
					<!--Show if enabled-->
					<?php if ($general_settings->slider_active == 1) {
						$this->load->view('partials/_slider', $this->slider_posts);
					} ?>
				</div><!-- /.row -->
			</div> <!-- /.container-fluid -->
		</section>
		<!-- /.Section: slider -->
	<?php endif;
endif; ?>


    <!-- /.wrapper -->
    <div class="wrapper light-wrapper">
      <div class="container inner">
        <div class="row">
          <div class="col-lg-8">
            <div class="blog grid grid-view">
              <div class="row isotope">
                <div class="item post grid-sizer col-md-6">
                  <figure class="overlay overlay1 rounded mb-30"><a href="#"> <img src="style/images/art/b1.jpg" alt="" /></a>
                    <figcaption>
                      <h5 class="from-top mb-0">Read More</h5>
                    </figcaption>
                  </figure>
                  <div class="category"><a href="#" class="badge badge-pill bg-purple">Concept</a></div>
                  <h2 class="post-title"><a href="blog-post.html">Ligula tristique quis risus eget urna mollis ornare porttitor</a></h2>
                  <div class="post-content">
                    <p>Mauris convallis non ligula non interdum. Gravida vulputate convallis vestibulum. Cras imperdiet nun eu dolor vestibulum ultrices diam tempus.</p>
                  </div>
                  <!-- /.post-content -->
                  <div class="meta mb-0"><span class="date"><i class="jam jam-clock"></i>5 Jul 2018</span><span class="comments"><i class="jam jam-message-alt"></i><a href="#">3 Comments</a></span></div>
                </div>
              </div>
              <!-- /.row -->
            </div>
            <!-- /.blog -->
            <div class="space30 d-block d-md-none"></div>
            <div class="pagination">
              <ul>
                <li><a href="#" class="pl-0"><i class="jam jam-arrow-left"></i></a></li>
                <li class="active"><a href="#"><span>1</span></a></li>
                <li><a href="#"><span>2</span></a></li>
                <li><a href="#"><span>3</span></a></li>
                <li><a href="#" class="pr-0"><i class="jam jam-arrow-right"></i></a></li>
              </ul>
            </div>
            <!-- /.pagination -->
          </div>
          <!--/column -->
          <div class="space30 d-none d-md-block d-lg-none"></div>
          <aside class="col-lg-4 sidebar">
            <div class="sidebox widget">
              <h3 class="widget-title">Search</h3>
              <form class="search-form fields-white">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Search something">
                </div>
                <!-- /.form-group -->
              </form>
              <!-- /.search-form -->
            </div>
            <!-- /.widget -->
            <div class="sidebox widget">
              <h3 class="widget-title">About Us</h3>
              <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum. Nulla vitae elit libero, a pharetra augue. Donec id elit.</p>
              <ul class="social social-color social-s">
                <li><a href="#"><i class="jam jam-twitter"></i></a></li>
                <li><a href="#"><i class="jam jam-facebook"></i></a></li>
                <li><a href="#"><i class="jam jam-pinterest"></i></a></li>
                <li><a href="#"><i class="jam jam-vimeo"></i></a></li>
                <li><a href="#"><i class="jam jam-instagram"></i></a></li>
              </ul>
              <div class="clearfix"></div>
            </div>
            <!-- /.widget -->
            <div class="sidebox widget">
              <h3 class="widget-title">Popular Posts</h3>
              <ul class="image-list">
                <li>
                  <figure class="rounded"><a href="blog-post.html"><img src="style/images/art/a1.jpg" alt="" /></a></figure>
                  <div class="post-content">
                    <h6 class="post-title"> <a href="blog-post.html">Magna Mollis Ultricies Mauris</a> </h6>
                    <div class="meta"><span class="date"><i class="jam jam-clock"></i>12 Nov 2017</span><span class="comments"><i class="jam jam-message-alt"></i><a href="#">4</a></span></div>
                  </div>
                </li>
                <li>
                  <figure class="rounded"> <a href="blog-post.html"><img src="style/images/art/a2.jpg" alt="" /></a></figure>
                  <div class="post-content">
                    <h6 class="post-title"> <a href="blog-post.html">Ornare Nullam Risus Cursus</a> </h6>
                    <div class="meta"><span class="date"><i class="jam jam-clock"></i>12 Nov 2017</span><span class="comments"><i class="jam jam-message-alt"></i><a href="#">4</a></span></div>
                  </div>
                </li>
                <li>
                  <figure class="rounded"><a href="blog-post.html"><img src="style/images/art/a3.jpg" alt="" /></a></figure>
                  <div class="post-content">
                    <h6 class="post-title"> <a href="blog-post.html">Euismod Nullam Fusce</a> </h6>
                    <div class="meta"><span class="date"><i class="jam jam-clock"></i>12 Nov 2017</span><span class="comments"><i class="jam jam-message-alt"></i><a href="#">4</a></span></div>
                  </div>
                </li>
              </ul>
              <!-- /.image-list -->
            </div>
            <!-- /.widget -->
            <div class="sidebox widget">
              <h3 class="widget-title">Categories</h3>
              <ul class="icon-list">
                <li class="bullet-default"><i class="jam jam-chevron-right"></i><a href="#">Lifestyle (21)</a></li>
                <li class="bullet-default"><i class="jam jam-chevron-right"></i><a href="#">Photography (19)</a></li>
                <li class="bullet-default"><i class="jam jam-chevron-right"></i><a href="#">Journal (16)</a></li>
                <li class="bullet-default"><i class="jam jam-chevron-right"></i><a href="#">Works (7)</a></li>
                <li class="bullet-default"><i class="jam jam-chevron-right"></i><a href="#">Conceptual (12)</a></li>
                <li class="bullet-default"><i class="jam jam-chevron-right"></i><a href="#">Videography (14)</a></li>
              </ul>
            </div>
            <!-- /.widget -->
            <div class="sidebox widget">
              <h3 class="widget-title">Tags</h3>
              <ul class="list-unstyled tag-list">
                <li><a href="#" class="btn btn-s">Still Life</a></li>
                <li><a href="#" class="btn btn-s">Urban</a></li>
                <li><a href="#" class="btn btn-s">Nature</a></li>
                <li><a href="#" class="btn btn-s">Landscape</a></li>
                <li><a href="#" class="btn btn-s">Macro</a></li>
                <li><a href="#" class="btn btn-s">Fun</a></li>
                <li><a href="#" class="btn btn-s">Workshop</a></li>
                <li><a href="#" class="btn btn-s">Photography</a></li>
              </ul>
            </div>
            <!-- /.widget -->
            <div class="sidebox widget">
              <h3 class="widget-title">Archive</h3>
              <ul class="icon-list">
                <li class="bullet-default"><i class="jam jam-chevron-right"></i><a href="#">February 2019</a></li>
                <li class="bullet-default"><i class="jam jam-chevron-right"></i><a href="#">January 2019</a></li>
                <li class="bullet-default"><i class="jam jam-chevron-right"></i><a href="#">December 2018</a></li>
                <li class="bullet-default"><i class="jam jam-chevron-right"></i><a href="#">November 2018</a></li>
                <li class="bullet-default"><i class="jam jam-chevron-right"></i><a href="#">October 2018</a></li>
              </ul>
            </div>
            <!-- /.widget -->
          </aside>
          <!-- /column .sidebar -->
        </div>
        <!--/.row -->
      </div>
      <!-- /.container -->
    </div>
    <!-- /.wrapper -->
	
<!-- Section: main -->
<section id="main" class="margin-top-30">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-8">
				<div class="content">

					<?php if ($layout == "layout_4" || $layout == "layout_5" || $layout == "layout_6"): ?>
						<div class="first-tmp-slider">
							<!--Show if enabled-->
							<?php if ($general_settings->slider_active == 1) {
								$this->load->view('partials/_slider_second', $this->slider_posts);
							} ?>
						</div>
					<?php endif; ?>

					<!-- posts -->
					<div class="col-xs-12 col-sm-12 posts <?php echo ($layout == "layout_3" || $layout == "layout_6") ? 'p-0 posts-boxed' : ''; ?>">
						<div class="row">
							<!-- printf posts -->
							<?php $count = 0; ?>

							<?php foreach ($posts as $item): ?>
								<?php if ($count != 0 && $count % 2 == 0): ?>
									<div class="col-sm-12 col-xs-12"></div>
								<?php endif; ?>

								<!-- post item -->
								<?php $this->load->view('post/_post_item', ['item' => $item]); ?>
								<!-- /.post item -->

								<?php if ($count == 1): ?>

									<?php $this->load->view("partials/_ad_spaces", ["ad_space" => "index_top"]); ?>

									<!-- increment count -->
								<?php endif; ?>

								<?php $count++; ?>
							<?php endforeach; ?>
						</div>
					</div><!-- /.posts -->

					<div class="col-xs-12 col-sm-12 col-xs-12">
						<div class="row">
							<?php $this->load->view("partials/_ad_spaces", ["ad_space" => "index_bottom"]); ?>
						</div>
					</div>

					<div class="col-xs-12 col-sm-12 col-xs-12">
						<div class="row">
							<?php echo $this->pagination->create_links(); ?>
						</div>
					</div>

				</div>

			</div>

			<div class="col-xs-12 col-sm-12 col-md-4">
				<!--Sidebar-->
				<?php $this->load->view('partials/_sidebar'); ?>
			</div><!--/col-->

		</div>
	</div>
</section>
<!-- /.Section: main -->
