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
    <div class="wrapper white-wrapper">
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