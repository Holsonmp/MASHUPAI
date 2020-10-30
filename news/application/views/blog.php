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
        <div class="blog grid grid-view">
          <div class="row isotope">
            <div class="item post grid-sizer col-md-6 col-lg-4">
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
            <!-- /.post -->
            <div class="item post grid-sizer col-md-6 col-lg-4">
              <figure class="overlay overlay1 rounded mb-30"><a href="#"> <img src="style/images/art/b2.jpg" alt="" /></a>
                <figcaption>
                  <h5 class="from-top mb-0">Read More</h5>
                </figcaption>
              </figure>
              <div class="category"><a href="#" class="badge badge-pill bg-meander">Business</a></div>
              <h2 class="post-title"><a href="blog-post.html">Nullam id dolor elit id nibh pharetra augue venenatis</a></h2>
              <div class="post-content">
                <p>Mauris convallis non ligula non interdum. Gravida vulputate convallis vestibulum. Cras imperdiet nun eu dolor vestibulum ultrices diam tempus.</p>
              </div>
              <!-- /.post-content -->
              <div class="meta mb-0"><span class="date"><i class="jam jam-clock"></i>18 Jun 2018</span><span class="comments"><i class="jam jam-message-alt"></i><a href="#">5 Comments</a></span></div>
            </div>
            <!-- /.post -->
            <div class="item post grid-sizer col-md-6 col-lg-4">
              <figure class="overlay overlay1 rounded mb-30"><a href="#"> <img src="style/images/art/b3.jpg" alt="" /></a>
                <figcaption>
                  <h5 class="from-top mb-0">Read More</h5>
                </figcaption>
              </figure>
              <div class="category"><a href="#" class="badge badge-pill bg-pink">Design</a></div>
              <h2 class="post-title"><a href="blog-post.html">Ultricies fusce porta elit pharetra augue faucibus</a></h2>
              <div class="post-content">
                <p>Mauris convallis non ligula non interdum. Gravida vulputate convallis vestibulum. Cras imperdiet nun eu dolor vestibulum ultrices diam tempus.</p>
              </div>
              <!-- /.post-content -->
              <div class="meta mb-0"><span class="date"><i class="jam jam-clock"></i>14 May 2018</span><span class="comments"><i class="jam jam-message-alt"></i><a href="#">7 Comments</a></span></div>
            </div>
            <!-- /.post -->
            <div class="item post grid-sizer col-md-6 col-lg-4">
              <figure class="overlay overlay1 rounded mb-30"><a href="#"> <img src="style/images/art/b4.jpg" alt="" /></a>
                <figcaption>
                  <h5 class="from-top mb-0">Read More</h5>
                </figcaption>
              </figure>
              <div class="category"><a href="#" class="badge badge-pill bg-violet">Ideas</a></div>
              <h2 class="post-title"><a href="blog-post.html">Morbi leo risus porta eget metus est non commodolacus</a></h2>
              <div class="post-content">
                <p>Mauris convallis non ligula non interdum. Gravida vulputate convallis vestibulum. Cras imperdiet nun eu dolor vestibulum ultrices diam tempus.</p>
              </div>
              <!-- /.post-content -->
              <div class="meta mb-0"><span class="date"><i class="jam jam-clock"></i>9 Apr 2018</span><span class="comments"><i class="jam jam-message-alt"></i><a href="#">4 Comments</a></span></div>
            </div>
            <!-- /.post -->
            <div class="item post grid-sizer col-md-6 col-lg-4">
              <figure class="overlay overlay1 rounded mb-30"><a href="#"> <img src="style/images/art/b5.jpg" alt="" /></a>
                <figcaption>
                  <h5 class="from-top mb-0">Read More</h5>
                </figcaption>
              </figure>
              <div class="category"><a href="#" class="badge badge-pill bg-green">Workspace</a></div>
              <h2 class="post-title"><a href="blog-post.html">Mollis adipiscing lorem quis mollis eget lacinia faucibus</a></h2>
              <div class="post-content">
                <p>Mauris convallis non ligula non interdum. Gravida vulputate convallis vestibulum. Cras imperdiet nun eu dolor vestibulum ultrices diam tempus.</p>
              </div>
              <!-- /.post-content -->
              <div class="meta mb-0"><span class="date"><i class="jam jam-clock"></i>23 Feb 2018</span><span class="comments"><i class="jam jam-message-alt"></i><a href="#">8 Comments</a></span></div>
            </div>
            <!-- /.post -->
            <div class="item post grid-sizer col-md-6 col-lg-4">
              <figure class="overlay overlay1 rounded mb-30"><a href="#"> <img src="style/images/art/b6.jpg" alt="" /></a>
                <figcaption>
                  <h5 class="from-top mb-0">Read More</h5>
                </figcaption>
              </figure>
              <div class="category"><a href="#" class="badge badge-pill bg-red">Teamwork</a></div>
              <h2 class="post-title"><a href="blog-post.html">Fusce mattis euismod sed diam eget risus amet tempus</a></h2>
              <div class="post-content">
                <p>Mauris convallis non ligula non interdum. Gravida vulputate convallis vestibulum. Cras imperdiet nun eu dolor vestibulum ultrices diam tempus.</p>
              </div>
              <!-- /.post-content -->
              <div class="meta mb-0"><span class="date"><i class="jam jam-clock"></i>15 Jan 2018</span><span class="comments"><i class="jam jam-message-alt"></i><a href="#">7 Comments</a></span></div>
            </div>
            <!-- /.post -->
            <div class="item post grid-sizer col-md-6 col-lg-4">
              <figure class="overlay overlay1 rounded mb-30"><a href="#"> <img src="style/images/art/b7.jpg" alt="" /></a>
                <figcaption>
                  <h5 class="from-top mb-0">Read More</h5>
                </figcaption>
              </figure>
              <div class="category"><a href="#" class="badge badge-pill bg-teal">Inspiration</a></div>
              <h2 class="post-title"><a href="blog-post.html">Tellus vulputate non magna eget urna mollis lacinia mollis</a></h2>
              <div class="post-content">
                <p>Mauris convallis non ligula non interdum. Gravida vulputate convallis vestibulum. Cras imperdiet nun eu dolor vestibulum ultrices diam tempus.</p>
              </div>
              <!-- /.post-content -->
              <div class="meta mb-0"><span class="date"><i class="jam jam-clock"></i>12 Dec 2017</span><span class="comments"><i class="jam jam-message-alt"></i><a href="#">3 Comments</a></span></div>
            </div>
            <!-- /.post -->
            <div class="item post grid-sizer col-md-6 col-lg-4">
              <figure class="overlay overlay1 rounded mb-30"><a href="#"> <img src="style/images/art/b8.jpg" alt="" /></a>
                <figcaption>
                  <h5 class="from-top mb-0">Read More</h5>
                </figcaption>
              </figure>
              <div class="category"><a href="#" class="badge badge-pill bg-yellow">Planning</a></div>
              <h2 class="post-title"><a href="blog-post.html">Elit parturient tristique ornare vel ornare posuere porttitor</a></h2>
              <div class="post-content">
                <p>Mauris convallis non ligula non interdum. Gravida vulputate convallis vestibulum. Cras imperdiet nun eu dolor vestibulum ultrices diam tempus.</p>
              </div>
              <!-- /.post-content -->
              <div class="meta mb-0"><span class="date"><i class="jam jam-clock"></i>25 Nov 2017</span><span class="comments"><i class="jam jam-message-alt"></i><a href="#">2 Comments</a></span></div>
            </div>
            <!-- /.post -->
            <div class="item post grid-sizer col-md-6 col-lg-4">
              <figure class="overlay overlay1 rounded mb-30"><a href="#"> <img src="style/images/art/b9.jpg" alt="" /></a>
                <figcaption>
                  <h5 class="from-top mb-0">Read More</h5>
                </figcaption>
              </figure>
              <div class="category"><a href="#" class="badge badge-pill bg-blue">Ideas</a></div>
              <h2 class="post-title"><a href="blog-post.html">Condimentum vehicula vitae elit libero lacinia interdum</a></h2>
              <div class="post-content">
                <p>Mauris convallis non ligula non interdum. Gravida vulputate convallis vestibulum. Cras imperdiet nun eu dolor vestibulum ultrices diam tempus.</p>
              </div>
              <!-- /.post-content -->
              <div class="meta mb-0"><span class="date"><i class="jam jam-clock"></i>4 Oct 2017</span><span class="comments"><i class="jam jam-message-alt"></i><a href="#">5 Comments</a></span></div>
            </div>
            <!-- /.post -->
            <div class="item post grid-sizer col-md-6 col-lg-4">
              <figure class="overlay overlay1 rounded mb-30"><a href="#"> <img src="style/images/art/b10.jpg" alt="" /></a>
                <figcaption>
                  <h5 class="from-top mb-0">Read More</h5>
                </figcaption>
              </figure>
              <div class="category"><a href="#" class="badge badge-pill bg-leaf">Teamwork</a></div>
              <h2 class="post-title"><a href="blog-post.html">Donec ullamcorper nulla non metus auctor fringilla</a></h2>
              <div class="post-content">
                <p>Mauris convallis non ligula non interdum. Gravida vulputate convallis vestibulum. Cras imperdiet nun eu dolor vestibulum ultrices diam tempus.</p>
              </div>
              <!-- /.post-content -->
              <div class="meta mb-0"><span class="date"><i class="jam jam-clock"></i>12 Sep 2017</span><span class="comments"><i class="jam jam-message-alt"></i><a href="#">3 Comments</a></span></div>
            </div>
            <!-- /.post -->
            <div class="item post grid-sizer col-md-6 col-lg-4">
              <figure class="overlay overlay1 rounded mb-30"><a href="#"> <img src="style/images/art/b11.jpg" alt="" /></a>
                <figcaption>
                  <h5 class="from-top mb-0">Read More</h5>
                </figcaption>
              </figure>
              <div class="category"><a href="#" class="badge badge-pill bg-rose">Presentation</a></div>
              <h2 class="post-title"><a href="blog-post.html">Nulla vitae elit libero a pharetra augue mollis venenatis</a></h2>
              <div class="post-content">
                <p>Mauris convallis non ligula non interdum. Gravida vulputate convallis vestibulum. Cras imperdiet nun eu dolor vestibulum ultrices diam tempus.</p>
              </div>
              <!-- /.post-content -->
              <div class="meta mb-0"><span class="date"><i class="jam jam-clock"></i>25 Aug 2017</span><span class="comments"><i class="jam jam-message-alt"></i><a href="#">2 Comments</a></span></div>
            </div>
            <!-- /.post -->
            <div class="item post grid-sizer col-md-6 col-lg-4">
              <figure class="overlay overlay1 rounded mb-30"><a href="#"> <img src="style/images/art/b12.jpg" alt="" /></a>
                <figcaption>
                  <h5 class="from-top mb-0">Read More</h5>
                </figcaption>
              </figure>
              <div class="category"><a href="#" class="badge badge-pill bg-orange">Strategy</a></div>
              <h2 class="post-title"><a href="blog-post.html">Integer posuere erat a ante venenatis dapibus posuere velit aliquet</a></h2>
              <div class="post-content">
                <p>Mauris convallis non ligula non interdum. Gravida vulputate convallis vestibulum. Cras imperdiet nun eu dolor vestibulum ultrices diam tempus.</p>
              </div>
              <!-- /.post-content -->
              <div class="meta mb-0"><span class="date"><i class="jam jam-clock"></i>4 Jul 2017</span><span class="comments"><i class="jam jam-message-alt"></i><a href="#">5 Comments</a></span></div>
            </div>
            <!-- /.post -->
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
