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
                        <a href="<?php echo base_url() ?>admin/user_managements">
                            <i class="icon-user"></i>
                            <span>Users Management</span>
                        </a>
                    </li>
                    
                    <li>
                        <a href="<?php echo base_url() ?>admin/state_managements">
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
                        <a class="active" href="javascript:;" >
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
                                <span class="hidden-sm wht-color">Edit Data State</span>
                            </header>
                            <div class="panel-body">
                                <form method="post" action="<?php echo base_url('admin/category_managements/process'); ?>" class="form-horizontal" role="form">

                                    <legend>&nbsp;&nbsp;&nbsp;&nbsp;1. Product Category Informations</legend>
                                    
                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="inputCategoryName">Category Name: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="inputCategoryName" name="category_name" placeholder="Category Name" value="<?php echo set_value('category_name', isset($categories['category_name']) ? $categories['category_name'] : ''); ?>" />
                                            <span class="help-inline"><?php echo form_error('category_name'); ?></span>
                                        </div>
                                    </div><!--end form-group-->
                                    
                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="inputDescription">Description: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <textarea class="form-control" id="inputDescription" name="deskripsi" placeholder="Description" value="<?php echo set_value('deskripsi', isset($categories['deskripsi']) ? $categories['deskripsi'] : ''); ?>" ><?php echo $categories['deskripsi'];?></textarea>
                                            <span class="help-inline"><?php echo form_error('deskripsi'); ?></span>
                                        </div>
                                    </div><!--end form-group-->
                                    <hr>
                                    
                                    <div class="form-group">
                                        <div class="col-lg-10">
                                            <input type="hidden" name="id_category" value="<?php echo $idCategory ?>">
                                            <br>
                                            <button type="submit" class="btn btn-primary">Update</button>
                                            <button type="reset" class="btn btn-primary">Reset</button>
                                        </div>
                                    </div><!--end control-group-->

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