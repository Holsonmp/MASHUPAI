<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
    
        <div class="wrapper light-wrapper page-title-wrapper">
            <div class="space90"></div>
            <div class="container inner text-center">
                <h1 class="page-title">Contact Us</h1>
                <p class="lead">Aenean lacinia bibendum nulla sed consectetur</p>
            </div>
            <!-- /.container -->
        </div>
    <!-- Section: main -->

        <!-- /.wrapper -->
        <div class="wrapper light-wrapper">
            <div class="container inner">
                    <div class="boxed">
                    <div class="bg-white shadow rounded">
                        <div class="image-block-wrapper">
                        <div class="image-block col-lg-6 p-0">
                            <div class="google-map map-full">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3172.4564967931838!2d-122.03250858386237!3d37.33169997984258!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb5b6e94ffe23%3A0x63bb79532baa6af4!2sApple+Campus!5e0!3m2!1sen!2str!4v1553850783971!5m2!1sen!2str" style="width:100%; height: 100%; border:0" allowfullscreen></iframe>
                            </div>
                            <!--/.google-map -->
                        </div>
                        <!--/.image-block -->
                        <div class="container">
                            <div class="row">
                            <div class="col-lg-6 offset-lg-6">
                                <div class="box d-flex">
                                <div class="align-self-center">
                                    <h3>Information de Contact</h3>
                                    <p>Fusce dapibus, tellus commodo, tortor mauris condimentum utellus fermentum, porta sem malesuada magna. Sed posuere consectetur est at lobortis. Morbi leo risus, porta ac consectetur.</p>
                                    <ul class="icon-list">
                                    <li><i class="icofont-location-arrow"></i><?php echo html_escape($settings->contact_address); ?></li>
                                    <li><i class="icofont-envelope"></i><a href="mailto:<?php echo html_escape($settings->contact_email); ?>" class="nocolor"><?php echo html_escape($settings->contact_email); ?></a></li>
                                    <li><i class="icofont-ui-dial-phone"></i><?php echo html_escape($settings->contact_phone); ?> </li>
                                    </ul>
                                </div>
                                </div>
                                <!-- /.box -->
                            </div>
                            <!--/column -->
                            </div>
                            <!--/.row -->
                        </div>
                        <!--/.container-fluid -->
                        </div>
                        <!--/.image-block-wrapper -->
                    </div>
                <!-- /.bg -->
                </div>
                <!-- /.boxed -->
                <div class="space90"></div>
                <div class="row">
                <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                    <h2 class="section-title text-center"><?php echo trans("leave_message"); ?></h2>
                    <p class="text-center">Nullam quis risus eget urna mollis ornare vel eu leo. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Integer posuere erat. Praesent commodo cursus.</p>
                    <div class="space30"></div>
                    
                    <?php echo form_open('home_controller/contact_post', ['id' => 'contact-form', 'class' => 'fields-white']); ?>
                                    
                    <div class="sec"></div>
                    <div class="controls">
                        <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                            <input id="form_name" type="text" class="form-control" name="name"
                                               placeholder="<?php echo trans("name"); ?>*" maxlength="199" minlength="1"
                                               pattern=".*\S+.*" value="<?php echo old('name'); ?>" required <?php echo ($rtl == true) ? 'dir="rtl"' : ''; ?> required="required" data-error="Vous devrez siaisir un nom.">
                            <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            <input id="form_email" type="email" name="email" class="form-control" placeholder="<?php echo trans("email"); ?>  *"
                                               value="<?php echo old('email'); ?>" <?php echo ($rtl == true) ? 'dir="rtl"' : ''; ?> required="required" data-error="Valid email is required.">
                            <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        </div>
                        <div class="form-row">
                        <div class="col-md-12">
                            <div class="form-group">
                            <textarea id="form_message" name="message" class="form-control"  rows="4" required="required" data-error="Message is required." placeholder="<?php echo trans("message"); ?>  *" maxlength="4970"
                                              minlength="5"
                                               <?php echo ($rtl == true) ? 'dir="rtl"' : ''; ?>><?php echo old('message'); ?></textarea>
                            <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-12">
                         <div class="form-group">
                                    <label class="custom-checkbox">
                                            <input type="checkbox" class="checkbox_terms_conditions" required="required" data-error="Vous devriez accepter les conditions générales d'utilisations.">
                                            <span class="checkbox-icon"><i class="icon-check"></i></span>
                                            <?php echo trans("terms_conditions_exp"); ?>&nbsp;<a href="<?php echo lang_base_url(); ?>terms-conditions" class="link-terms" target="_blank"><strong><?php echo trans("terms_conditions"); ?></strong></a>
                                        </label>
                                        <div class="help-block with-errors"></div>
                        
                                        </div>  
                                                </div>                        
                        <div class="col-md-12">
                            <input type="submit" class="btn btn-send" value="Send message">
                        </div>
                        </div>
                        <div class="form-row">
                        <div class="col-md-12">
                            <p class="text-muted"><strong>*</strong> These fields are required.</p>
                        </div>
                        </div>
                    </div>
                    </form>
                    <!-- /form -->
                </div>
                <!-- /column -->
                </div>
                <!-- /.row -->
            </div>
        <!-- /.container -->
        </div>
    <!-- /.wrapper -->
