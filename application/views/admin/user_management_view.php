<?php $this->load->view('admin/templates/header'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/assets/bootstrap-datepicker/css/datepicker.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/assets/bootstrap-colorpicker/css/colorpicker.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/assets/bootstrap-daterangepicker/daterangepicker.css" />
<body>

    <section id="container" >
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
                        <a class="active" href="<?php echo base_url() ?>admin/user_managements">
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
                    <div class="col-lg-12">
                        <section class="panel">
                            <header class="panel-heading tab-bg-dark-navy-blue tab-right ">
                                <span class="hidden-sm wht-color">View Data User</span>
                            </header>
                            <div class="panel-body">
                                <form class="form-horizontal" role="form">

                                    <legend>&nbsp;&nbsp;&nbsp;&nbsp;1. Personal Informations</legend>
                                    
                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="inputUserName">Username: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" disabled="true" class="form-control" id="inputUserName" name="user_name" placeholder="Username" value="<?php echo set_value('user_name', isset($users['user_name']) ? $users['user_name'] : ''); ?>">
                                        </div>
                                    </div><!--end control-group-->

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="inputEmailAddress">E-Mail Address: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" disabled="true" class="form-control" id="inputEmailAddress" name="user_email" placeholder="example@example.com" value="<?php echo set_value('user_email', isset($users['user_email']) ? $users['user_email'] : ''); ?>">
                                        </div>
                                    </div><!--end form-group-->

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="inputTele">Phone Number: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" disabled="true" class="form-control" id="inputTele" name="user_phone" placeholder="(02)-1598-548" value="<?php echo set_value('user_phone', isset($users['user_phone']) ? $users['user_phone'] : ''); ?>">
                                        </div>
                                    </div><!--end form-group-->
                                    
                                    <div class="form-group">
                                        <div class="col-lg-2 col-sm-2 control-label">Level: <span class="text-error">*</span></div>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="inputLevel" disabled="true" name="id_country" value="<?php echo set_value('status', isset($view['status']) ? $view['status'] : '') ?>">
                                        </div>
                                    </div><!--end form-group-->
                                    
                                    <legend>&nbsp;&nbsp;&nbsp;&nbsp;2. Delivery Informations</legend>

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="inputFirstAdd">First Address: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" disabled="true" id="inputFirstAdd" name="first_address" placeholder="First Address" value="<?php echo set_value('first_address', isset($users['first_address']) ? $users['first_address'] : ''); ?>">
                                        </div>
                                    </div><!--end control-group-->

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="inputSecondAdd">Second Address:</label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" disabled="true" id="inputSecondAdd" name="second_address" placeholder="Second Address" value="<?php echo set_value('second_address', isset($users['second_address']) ? $users['second_address'] : ''); ?>">
                                        </div>
                                    </div><!--end control-group-->

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="inputCity">City: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" disabled="true" id="inputCity" name="user_city" placeholder="City" value="<?php echo set_value('user_city', isset($users['user_city']) ? $users['user_city'] : ''); ?>">
                                        </div>
                                    </div><!--end control-group-->

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="inputPostCode">Post Code: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="inputPostCode" disabled="true" name="user_zip" placeholder="Zip Code" value="<?php echo set_value('user_zip', isset($users['user_zip']) ? $users['user_zip'] : ''); ?>">
                                        </div>
                                    </div><!--end control-group-->

                                    <div class="form-group">
                                        <div class="col-lg-2 col-sm-2 control-label">Country: <span class="text-error">*</span></div>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="inputCountry" disabled="true" name="id_country" value="<?php echo set_value('country_name', isset($view['country_name']) ? $view['country_name'] : '') ?>">
                                        </div>
                                    </div><!--end control-group-->

                                    <div class="form-group">
                                        <div class="col-lg-2 col-sm-2 control-label">Region/States: <span class="text-error">*</span></div>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="inputStateName" disabled="true" name="id_state" value="<?php echo set_value('state', isset($view['state']) ? $view['state'] : '') ?>">
                                        </div>
                                    </div><!--end form-group-->
                                    
                                </form><!--end form-->
                            </div>
                        </section>
                    </div>
                </div>
                <!-- page end-->
            </section>
        </section>
        <!--main content end-->
        <?php $this->load->view('admin/templates/footer'); ?>