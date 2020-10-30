<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php if ($layout == "layout_2" || $layout == "layout_5"): ?>

	<!--Post list item-->
	<div class="post-item-horizontal">
		<div class="item-image">
			<a href="<?php echo generate_category_url($item->parent_category_slug, $item->category_slug); ?>">
                <span class="label-post-category">
					<?php echo html_escape($item->category_name); ?>
                </span>
			</a>
			<a href="<?php echo generate_post_url($item); ?>">
				<?php $this->load->view("post/_post_image", ['post_item' => $item, 'type' => 'image_slider']); ?>
			</a>
		</div>

		<div class="item-content">

			<h3 class="title">
				<a href="<?php echo generate_post_url($item); ?>">
					<?php echo html_escape(character_limiter($item->title, 55, '...')); ?>
				</a>
			</h3>
			<?php $this->load->view("post/_post_meta", ['item' => $item]); ?>
			<p class="summary">
				<?php echo html_escape(character_limiter($item->summary, 130, '...')); ?>
			</p>
			<div class="post-buttons">
				<a href="<?php echo generate_post_url($item); ?>" class="pull-right read-more">
					<?php echo html_escape(trans("readmore")); ?>
					<i class="icon-arrow-right read-more-i" aria-hidden="true"></i>
				</a>
			</div>
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



<?php else: ?>

	<!--post list item-->
	<div class="col-sm-12 post-item">
		<div class="row">
			<div class="post-image">
				<a href="<?php echo generate_post_url($item); ?>">
					<?php $this->load->view("post/_post_image", ['post_item' => $item, 'type' => 'image_mid']); ?>
				</a>
			</div>

			<div class="post-footer">
				<div class="text-center">
					<!--if related category exists-->
					<p class="default-post-label-category">
						<a href="<?php echo generate_category_url($item->parent_category_slug, $item->category_slug); ?>">
                            <span class="label-post-category">
                          	<?php echo html_escape($item->category_name); ?>
                            </span>
						</a>
					</p>
					<h3 class="title">
						<a href="<?php echo generate_post_url($item); ?>">
							<?php echo html_escape($item->title); ?>
						</a>
					</h3>
					<?php $this->load->view("post/_post_meta", ['item' => $item]); ?>
				</div>
				<p class="summary text-center">
					<?php echo html_escape($item->summary); ?>
				</p>

				<div class="post-buttons">
					<a href="<?php echo generate_post_url($item); ?>" class="pull-right read-more">
						<?php echo html_escape(trans("readmore")); ?>
						<i class="icon-arrow-right read-more-i" aria-hidden="true"></i>
					</a>
				</div>

			</div><!-- /.post footer -->
		</div><!-- /.row -->
	</div>

<?php endif; ?>




