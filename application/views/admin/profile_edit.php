<?php $this->load->view('admin/templates/header'); ?>  
<body>

    <section id="container" class="">
        <!--header start-->
        <header class="header white-bg">
            <div class="sidebar-toggle-box">
                <div data-original-title="Toggle Navigation" data-placement="right" class="icon-reorder tooltips"></div>
            </div>
            <!--logo start-->
            <a href="<?php echo base_url(); ?>admin/homes" class="logo">Adney's<span>Shop</span></a>
            <!--logo end-->
            <?php $this->load->view('admin/templates/top-nav'); ?>
        </header>
        <!--header end-->
        <!--sidebar start-->
        <aside>
            <div id="sidebar"  class="nav-collapse ">
                <!-- sidebar menu start-->
                <ul class="sidebar-menu" id="nav-accordion">
                    <li>
                        <a href="<?php echo base_url(); ?>admin/homes">
                            <i class="icon-dashboard"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo base_url() ?>admin/user_managements">
                            <i class="icon-user"></i>
                            <span>Users Management</span>
                        </a>
                    </li>

                    <li>
                        <a  href="<?php echo base_url() ?>admin/state_managements">
                            <i class="icon-building"></i>
                            <span>States Management</span>
                        </a>
                    </li>

                    <li>
                        <a  href="<?php echo base_url() ?>admin/country_managements">
                            <i class="icon-flag"></i>
                            <span>Countries Management</span>
                        </a>
                    </li>
                    
                    <li class="sub-menu">
                        <a href="javascript:;" >
                            <i class="icon-coffee"></i>
                            <span>Products Management</span>
                        </a>
                        <ul class="sub">
                            <li><a  href="<?php echo base_url() ?>admin/product_managements">Products</a></li>
                            <li><a  href="<?php echo base_url() ?>admin/brand_managements">Brands</a></li>
                            <li><a  href="<?php echo base_url() ?>admin/category_managements">Categories</a></li>
                        </ul>
                    </li>
                    
                    <li>
                        <a  href="<?php echo base_url() ?>admin/banner_managements">
                            <i class="icon-desktop"></i>
                            <span>Banners Management</span>
                        </a>
                    </li>

                    <li>
                        <a  href="<?php echo base_url() ?>admin/rules_management">
                            <i class="icon-desktop"></i>
                            <span>Rules Management</span>
                        </a>
                    </li>
                </ul>
                <!-- sidebar menu end-->
            </div>
        </aside>
        <!--sidebar end-->
        <!--main content start-->
        <section id="main-content">
            <section class="wrapper">
                <!-- page start-->
                <div class="row">
                    <aside class="profile-nav col-lg-3">
                        <section class="panel">
                            <div class="user-heading round">
                                <a href="#">
                                    <img src="<?php echo base_url(); ?>assets/admin/img/profile-avatar.jpg" alt="">
                                </a>
                                <h1><?php echo "$user_name" ?></h1>
                                <p><?php echo "$user_email" ?></p>
                            </div>

                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="<?php echo base_url(); ?>admin/profiles"> <i class="icon-user"></i> Profile</a></li>
                                <li class="active"><a href="<?php echo base_url() . 'admin/profiles/edit/' . $users['id_user'] ?>"> <i class="icon-edit"></i> Edit profile</a></li>
                            </ul>

                        </section>
                    </aside>
                    <aside class="profile-info col-lg-9">                      
                        <section class="panel">
                            <div class="bio-graph-heading">
                                Aliquam ac magna metus. Nam sed arcu non tellus fringilla fringilla ut vel ispum. Aliquam ac magna metus.
                            </div>
                            <div class="panel-body bio-graph-info">
                                <h1>Profile Info</h1>
                                <div class="panel-body">
                                <form method="post" action="<?php echo base_url('admin/profiles/process'); ?>" class="form-horizontal" role="form">                                    
                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="inputUserName">Name: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="inputUserName" name="user_name" placeholder="Username" value="<?php echo set_value('user_name', isset($users['user_name']) ? $users['user_name'] : ''); ?>">
                                            <span class="help-inline"><?php echo form_error('user_name'); ?></span>
                                        </div>
                                    </div><!--end control-group-->

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="inputEmailAddress">E-Mail: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="inputEmailAddress" name="user_email" placeholder="example@example.com" value="<?php echo set_value('user_email', isset($users['user_email']) ? $users['user_email'] : ''); ?>">
                                            <span class="help-inline"><?php echo form_error('user_email'); ?></span>
                                        </div>
                                    </div><!--end form-group-->

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="inputTele">Phone Number: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="inputTele" name="user_phone" placeholder="(02)-1598-548" value="<?php echo set_value('user_phone', isset($users['user_phone']) ? $users['user_phone'] : ''); ?>">
                                            <span class="help-inline"><?php echo form_error('user_phone'); ?></span>
                                        </div>
                                    </div><!--end form-group-->
                                    
                                    <div class="form-group">
                                        <div class="col-lg-2 col-sm-2 control-label">Level: <span class="text-error">*</span></div>
                                        <div class="col-lg-10">
                                            <?php echo form_dropdown('id_status', $level_list, set_value('id_status', isset($users['id_status']) ? $users['id_status'] : ''), 'class="form-control m-bot15"'); ?>
                                            <span class="help-inline"><?php echo form_error('id_status'); ?></span>
                                        </div>
                                    </div><!--end form-group-->

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="inputFirstAdd">First Address: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="inputFirstAdd" name="first_address" placeholder="First Address" value="<?php echo set_value('first_address', isset($users['first_address']) ? $users['first_address'] : ''); ?>">
                                            <span class="help-inline"><?php echo form_error('user_phone'); ?></span>
                                        </div>
                                    </div><!--end control-group-->

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="inputSecondAdd">Second Address:</label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="inputSecondAdd" name="second_address" placeholder="Second Address" value="<?php echo set_value('second_address', isset($users['second_address']) ? $users['second_address'] : ''); ?>">
                                        </div>
                                    </div><!--end control-group-->

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="inputCity">City: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="inputCity" name="user_city" placeholder="City" value="<?php echo set_value('user_city', isset($users['user_city']) ? $users['user_city'] : ''); ?>">
                                            <span class="help-inline"><?php echo form_error('user_city'); ?></span>
                                        </div>
                                    </div><!--end control-group-->

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="inputPostCode">Post Code: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="inputPostCode" name="user_zip" placeholder="Zip Code" value="<?php echo set_value('user_zip', isset($users['user_zip']) ? $users['user_zip'] : ''); ?>">
                                            <span class="help-inline"><?php echo form_error('user_zip'); ?></span>
                                        </div>
                                    </div><!--end control-group-->

                                    <div class="form-group">
                                        <div class="col-lg-2 col-sm-2 control-label">Country: <span class="text-error">*</span></div>
                                        <div class="col-lg-10">
                                            <?php echo form_dropdown('id_country', $country_list, set_value('id_country', isset($users['id_country']) ? $users['id_country'] : ''), 'class="form-control m-bot15"'); ?>
                                            <span class="help-inline"><?php echo form_error('id_country'); ?></span>
                                        </div>
                                    </div><!--end control-group-->

                                    <div class="form-group">
                                        <div class="col-lg-2 col-sm-2 control-label">Region/States: <span class="text-error">*</span></div>
                                        <div class="col-lg-10">
                                            <?php echo form_dropdown('id_state', $states_list, set_value('id_state', isset($users['id_state']) ? $users['id_state'] : ''), 'class="form-control m-bot15"'); ?>
                                            <span class="help-inline"><?php echo form_error('id_state'); ?></span>
                                        </div>
                                    </div><!--end form-group-->

                                    <legend>&nbsp;&nbsp;&nbsp;&nbsp;Set Your Password</legend>

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="inputPass">Password: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="password" class="form-control" id="inputPass" name="user_password" placeholder="**********" value="<?php echo set_value('user_password', isset($users['user_password']) ? $users['user_password'] : ''); ?>">
                                            <span class="help-inline"><?php echo form_error('user_password'); ?></span>
                                        </div>
                                    </div><!--end control-group-->

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="inputConPass">Re-Type Password: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="password" class="form-control" id="inputConPass" name="confirm_password" placeholder="**********" value="<?php echo set_value('confirm_password', isset($users['confirm_password']) ? $users['confirm_password'] : ''); ?>">
                                            <span class="help-inline"><?php echo form_error('confirm_password'); ?></span>
                                        </div>
                                    </div><!--end control-group-->
                                    <hr>
                                    
                                    <div class="form-group">
                                        <div class="col-lg-10">
                                            <label class="checkbox">
                                                <input type="checkbox" value="1" name="user_agree"> I'v read and agreed on <a href="#">Terms &amp; Condations</a>
                                                <span class="help-inline"><?php echo form_error('user_agree'); ?></span>
                                                <input type="hidden" name="id_user" value="<?php echo $idUser ?>">
                                            </label>
                                            <br>
                                            <button type="submit" class="btn btn-primary">Update</button>
                                            <button type="reset" class="btn btn-primary">Reset</button>
                                        </div>
                                    </div><!--end control-group-->

                                </form><!--end form-->
                            </div>
                            </div>
                        </section>

                    </aside>
                </div>

                <!-- page end-->
            </section>
        </section>
        <!--main content end-->
        <?php $this->load->view('admin/templates/footer'); ?>
