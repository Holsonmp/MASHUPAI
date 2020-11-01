<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<h1 class="title-index"><?php echo html_escape($home_title); ?></h1>
<div class="wrapper light-wrapper page-title-wrapper">
<div class="space100"></div>
      <div class="container inner text-center">
        <h1 class="page-title"><?php echo html_escape(trans("category")); ?></h1>
        <p class="lead"><?php echo html_escape($category->name); ?></p>
      </div>
      <!-- /.container -->
    </div>
<!-- Section: main -->
<section id="main">
	<div class="container">
		<div class="row">
			<!-- breadcrumb -->
			<div class="space70"></div>
			<div class="col-xs-12 col-sm-12 col-md-8">
				<div class="content">
					<!-- posts -->
					<div class="col-xs-12 col-sm-12 posts <?php echo ($layout == "layout_3" || $layout == "layout_6") ? 'p-0 posts-boxed' : ''; ?>">
						<div class="row">
							<?php $count = 0; ?>

							<?php foreach ($posts as $item): ?>

								<?php if ($count != 0 && $count % 2 == 0): ?>
									<div class="col-sm-12 col-xs-12"></div>
								<?php endif; ?>

								<!-- post item -->
								<?php $this->load->view('post/_post_item', ['item' => $item]); ?>
								<!-- /.post item -->

								<?php if ($count == 1): ?>

									<?php $this->load->view("partials/_ad_spaces", ["ad_space" => "category_top"]); ?>

									<!-- increment count -->
								<?php endif; ?>

								<?php $count++; ?>
							<?php endforeach; ?>
						</div>
					</div><!-- /.posts -->

					<div class="col-xs-12 col-sm-12">
						<div class="row">
							<?php $this->load->view("partials/_ad_spaces", ["ad_space" => "category_bottom"]); ?>
						</div>
					</div>
					<!-- Pagination -->
					<div class="col-xs-12 col-sm-12">
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


</div>