<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<h1 class="title-index"><?php echo html_escape($page->title); ?></h1>
<div class="wrapper light-wrapper page-title-wrapper">
    <div class="space100"></div>
      <div class="container inner text-center">
        <h1 class="page-title"><?php echo html_escape($page->title); ?></h1>
        <p class="lead">Aenean lacinia bibendum nulla sed consectetur</p>
      </div>
      <!-- /.container -->
    </div>
    </div>
    <!-- /.offcanvas-info -->
    <div class="wrapper light-wrapper">
        <div class="container inner pt-20">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="blog classic-view boxed">
                         <div class="post mb-0">
                                <div class="post-content">
                                   <p>
                                        <?php echo $page->page_content; ?>
                                    </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<section id="main">
    <div class="container">
        <div class="row">
            <!-- breadcrumb -->
        <div class="">
            <div class="page-content">
                <!--If right column active-->
                <?php if ($page->right_column_active == 0): ?>

                    <div class="col-lg-12">
                        <div class="content page-about page-res">

                            <!--  page content -->
                            <div class="">
                                <?php echo $page->page_content; ?>
                            </div>

                        </div>
                    </div>


                <?php else: ?>

                    <div class="col-sm-12 col-md-8">
                        <div class="content page-about page-res">

                            <?php if ($page->title_active == 1): ?>
                                <h1 class="page-title"><?php echo html_escape($page->title); ?></h1>
                            <?php endif; ?>


                            <!-- page content -->
                            <div class="text-style">
                                <?php echo $page->page_content; ?>
                            </div>

                        </div>

                    </div>

                    <div class="col-sm-12 col-md-4">
                        <!--Sidebar-->
                        <?php $this->load->view('partials/_sidebar'); ?>
                    </div><!--/col-->

                <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.Section: main -->
</div>