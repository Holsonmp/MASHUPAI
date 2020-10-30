<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php if ($layout == "layout_2" || $layout == "layout_5"): ?>

	<!--Post list item-->

	<div class="item post grid-sizer col-md-6">
                  <figure class="overlay overlay1 rounded mb-30"><a href="<?php echo generate_post_url($item); ?>"> <?php $this->load->view("post/_post_image", ['post_item' => $item, 'type' => 'image_slider']); ?></a>
                    <figcaption>
                      <h5 class="from-top mb-0"><?php echo html_escape(trans("readmore")); ?></h5>
                    </figcaption>
                  </figure>
                  <div class="category"><a href="<?php echo generate_category_url($item->parent_category_slug, $item->category_slug); ?>" class="badge badge-pill bg-green"><?php echo html_escape($item->category_name); ?></a></div>
                  <h2 class="post-title">					
					  <a href="<?php echo generate_post_url($item); ?>">
						<?php echo html_escape(character_limiter($item->title, 50, '...')); ?>
					</a></h2>
                  <div class="post-content">
                    <p><?php echo html_escape(character_limiter($item->summary, 130, '...')); ?></p>
                  </div>
                  <!-- /.post-content -->
                  	<div class="meta mb-0">
					 	<?php $this->load->view("post/_post_meta", ['item' => $item]); ?>
					</div>	
				  
				</div>

<?php elseif ($layout == "layout_3" || $layout == "layout_6"): ?>

				<div class="item post grid-sizer col-md-6">
                  <figure class="overlay overlay1 rounded mb-30"><a href="<?php echo generate_post_url($item); ?>"> <?php $this->load->view("post/_post_image", ['post_item' => $item, 'type' => 'image_slider']); ?></a>
                    <figcaption>
                      <h5 class="from-top mb-0"><?php echo html_escape(trans("readmore")); ?></h5>
                    </figcaption>
                  </figure>
                  <div class="category"><a href="<?php echo generate_category_url($item->parent_category_slug, $item->category_slug); ?>" class="badge badge-pill bg-green"><?php echo html_escape($item->category_name); ?></a></div>
                  <h2 class="post-title">					
					  <a href="<?php echo generate_post_url($item); ?>">
						<?php echo html_escape(character_limiter($item->title, 50, '...')); ?>
					</a></h2>
                  <div class="post-content">
                    <p><?php echo html_escape(character_limiter($item->summary, 130, '...')); ?></p>
                  </div>
                  <!-- /.post-content -->
                  	<div class="meta mb-0">
					 	<?php $this->load->view("post/_post_meta", ['item' => $item]); ?>
					</div>	
				  
				</div>



	<div class="col-sm-6 col-xs-12 item-boxed-cnt">


<?php else: ?>

	<!--post list item-->

				<div class="item post grid-sizer col-md-6">
                  <figure class="overlay overlay1 rounded mb-30"><a href="<?php echo generate_post_url($item); ?>"> <?php $this->load->view("post/_post_image", ['post_item' => $item, 'type' => 'image_slider']); ?></a>
                    <figcaption>
                      <h5 class="from-top mb-0"><?php echo html_escape(trans("readmore")); ?></h5>
                    </figcaption>
                  </figure>
                  <div class="category"><a href="<?php echo generate_category_url($item->parent_category_slug, $item->category_slug); ?>" class="badge badge-pill bg-green"><?php echo html_escape($item->category_name); ?></a></div>
                  <h2 class="post-title">					
					  <a href="<?php echo generate_post_url($item); ?>">
						<?php echo html_escape(character_limiter($item->title, 50, '...')); ?>
					</a></h2>
                  <div class="post-content">
                    <p><?php echo html_escape(character_limiter($item->summary, 130, '...')); ?></p>
                  </div>
                  <!-- /.post-content -->
                  	<div class="meta mb-0">
					 	<?php $this->load->view("post/_post_meta", ['item' => $item]); ?>
					</div>	
				  
				</div>
<?php endif; ?>




