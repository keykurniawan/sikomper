<?php $this->load->view('admin/templates/header'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/assets/bootstrap-datepicker/css/datepicker.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/assets/bootstrap-colorpicker/css/colorpicker.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/assets/bootstrap-fileupload/bootstrap-fileupload.css" />
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
                        <a href="javascript:;">
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
                        <a class="active" href="<?php echo base_url() ?>admin/banner_managements">
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
                                <span class="hidden-sm wht-color">View Data Banner</span>
                            </header>
                            <div class="panel-body">
                                <form method="post" role="form" action="<?php echo base_url('admin/banner_managements/process_edit'); ?>" class="form-horizontal" enctype="multipart/form-data">

                                    <legend>&nbsp;&nbsp;&nbsp;&nbsp;1. Banner Informations</legend>

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="inputBannerTitle">Banner Title: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" disabled="true" id="inputBannerTitle" name="title_banner" placeholder="Banner Title" value="<?php echo set_value('title_banner', isset($databanner['title_banner']) ? $databanner['title_banner'] : ''); ?>">
                                        </div>
                                    </div><!--end control-group-->

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="inputBannerDescription">Banner Description: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <textarea class="form-control" id="inputBannerDescription" maxlength="1000" name="description_banner" placeholder="Banner Description" value="<?php echo set_value('description_banner', isset($databanner['description_banner']) ? $databanner['description_banner'] : ''); ?>" disabled="true"><?php echo $databanner['description_banner']; ?></textarea>
                                        </div>
                                    </div><!--end form-group-->

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="gambar_sebelumnya">Banner Image:</label>
                                        <div class="col-lg-10">
                                            <input type="image" disabled="true" style="width: 440px;" src="<?php echo base_url(); ?>upload/banner/<?php echo $databanner['image_banner']; ?>" alt="">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="col-lg-2 col-sm-2 control-label">Banner Status: <span class="text-error">*</span></div>
                                        <div class="col-lg-10">
                                            <select class="form-control m-bot15" disabled="true" name="status_banner">
                                                <option value="">--Select a Status--</option>
                                                <option value="0" <?php if ($databanner['status_banner'] == False) {echo "selected";} ?>>Sembunyi</option>
                                                <option value="1" <?php if ($databanner['status_banner'] == TRUE) {echo "selected";} ?>>Tampil</option>
                                            </select>
                                            <span class="help-inline"><?php echo form_error('status_banner'); ?></span>
                                        </div>
                                    </div>
                                    <hr>

                                    <div class="form-group">
                                        <div class="col-lg-10">
                                            <input type="hidden" name="id_banner" value="<?php echo $idBanner ?>">
                                            <br>
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

