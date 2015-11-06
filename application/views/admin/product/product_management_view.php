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
                        <a href="javascript:;" class="active">
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
                                <span class="hidden-sm wht-color">View Data Product</span>
                            </header>
                            <div class="panel-body">
                                <form method="post" role="form" class="form-horizontal" enctype="multipart/form-data">

                                    <legend>&nbsp;&nbsp;&nbsp;&nbsp;1. Product Informations</legend>

                                    <div class="form-group">
                                        <div class="col-lg-2 col-sm-2 control-label">Brand: <span class="text-error">*</span></div>
                                        <div class="col-lg-10">
                                            <?php echo form_dropdown('id_brand', $brands, set_value('id_brand', isset($dataproducts['id_brand']) ? $dataproducts['id_brand'] : ''), 'class="form-control m-bot15" disabled="true"'); ?>
                                        </div>
                                    </div><!--end form-group-->
                                    
                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="inputProductName">Product Name:</label>
                                        <div class="col-lg-10">
                                            <input type="text" disabled="true" class="form-control" id="inputProductName" name="product_name" placeholder="Product Name" value="<?php echo set_value('product_name', isset($dataproducts['product_name']) ? $dataproducts['product_name'] : ''); ?>">
                                        </div>
                                    </div><!--end control-group-->
                                    
                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="ProductCode">Product Code:</label>
                                        <div class="col-lg-10">
                                            <input type="text" disabled="true" class="form-control" id="ProductCode" name="product_code" placeholder="Product Code" value="<?php echo set_value('product_code', isset($dataproducts['product_code']) ? $dataproducts['product_code'] : ''); ?>">
                                        </div>
                                    </div><!--end control-group-->

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="inputProductDescription">Product Description:</label>
                                        <div class="col-lg-10">
                                            <textarea class="form-control" disabled="true" id="inputDescription" maxlength="1000" name="product_description" placeholder="Product Description" value="<?php echo set_value('product_description', isset($dataproducts['product_description']) ? $dataproducts['product_description'] : ''); ?>" ><?php echo $dataproducts['product_description'];?></textarea>
                                        </div>
                                    </div><!--end form-group-->

                                    <div class="form-group">
                                        <div class="col-lg-2 col-sm-2 control-label">Product Category:</div>
                                        <div class="col-lg-10">
                                            <?php echo form_dropdown('id_category', $category, set_value('id_category', isset($dataproducts['id_category']) ? $dataproducts['id_category'] : ''), 'class="form-control m-bot15" disabled="true"'); ?>
                                        </div>
                                    </div><!--end form-group-->
                                    
                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="gambar_sebelumnya">Product Image:</label>
                                        <div class="col-lg-10">
                                            <?php if(empty($dataproducts['product_image'])){?>
                                            <input type="image" disabled="true" style="width: 440px;" src="<?php echo base_url(); ?>upload/produk/not.jpg" alt="">
                                            <?php } else { ?>
                                            <input type="image" disabled="true" style="width: 440px;" src="<?php echo base_url(); ?>upload/produk/<?php echo $dataproducts['product_image']; ?>" alt="">
                                            <?php }?>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="inputProductPrice">Product Price:</label>
                                        <div class="col-lg-10">
                                            <div class="input-group m-bot15">
                                                <span class="input-group-addon">Rp</span>
                                                <input type="text" disabled="true" class="form-control" id="inputProductPrice" maxlength="12" name="product_price" placeholder="Product Price" value="<?php echo number_format(set_value('product_price', isset($dataproducts['product_price']) ? $dataproducts['product_price'] : '')); ?>">
                                            </div>
                                        </div>
                                    </div><!--end control-group-->

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="inputProcessor">Processor: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" disabled="true" class="form-control" id="inputProcessor" maxlength="50" name="processor" placeholder="Processor" value="<?php echo set_value('processor', isset($dataproducts['processor']) ? $dataproducts['processor'] : ''); ?>">
                                        </div>
                                    </div><!--end control-group-->
                                    
                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="inputMemory">Memory (RAM): <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <div class="input-group m-bot15">
                                                <input type="text" disabled="true" class="form-control" id="inputMemory" maxlength="50" name="memory" placeholder="Memory" value="<?php echo set_value('memory', isset($dataproducts['memory']) ? $dataproducts['memory'] : ''); ?>">
                                                <span class="input-group-addon">GB</span>
                                            </div>
                                        </div>
                                    </div><!--end control-group-->

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="inputVga">VGA (Type Graphics): <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" disabled="true" class="form-control" id="inputVga" maxlength="50" name="vga" placeholder="VGA" value="<?php echo set_value('vga', isset($dataproducts['vga']) ? $dataproducts['vga'] : ''); ?>">
                                        </div>
                                    </div><!--end control-group-->

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="inputScreen">Screen Size: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <div class="input-group m-bot15">
                                                <input type="text" disabled="true" class="form-control" id="inputScreen" maxlength="5" name="screen" placeholder="Screen Size" value="<?php echo set_value('screen', isset($dataproducts['screen']) ? $dataproducts['screen'] : ''); ?>">
                                                <span class="input-group-addon">inch</span>
                                            </div>
                                        </div>
                                    </div><!--end control-group-->

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="inputOs">Operating System: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" disabled="true" class="form-control" id="inputOs" maxlength="50" name="os" placeholder="Operating System" value="<?php echo set_value('os', isset($dataproducts['os']) ? $dataproducts['os'] : ''); ?>">
                                        </div>
                                    </div><!--end control-group-->

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="inputStorage">Storage: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" disabled="true" class="form-control" id="inputStorage" maxlength="50" name="storage" placeholder="Storage" value="<?php echo set_value('storage', isset($dataproducts['storage']) ? $dataproducts['storage'] : ''); ?>">
                                        </div>
                                    </div><!--end control-group-->

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="inputColor">Color: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" disabled="true" id="inputColor" maxlength="50" name="color" placeholder="Color" value="<?php echo set_value('color', isset($dataproducts['color']) ? $dataproducts['color'] : ''); ?>">
                                        </div>
                                    </div><!--end control-group-->

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="inputProductStock">Product Stock:</label>
                                        <div class="col-lg-10">
                                            <div class="input-group m-bot15">
                                                <input type="text" disabled="true" class="form-control" id="inputProductStock" maxlength="4" name="product_stock" placeholder="Product Stock" value="<?php echo set_value('product_stock', isset($dataproducts['product_stock']) ? $dataproducts['product_stock'] : ''); ?>">
                                                <span class="input-group-addon">pcs</span>
                                            </div>
                                        </div>
                                    </div><!--end control-group-->
                                    
                                    <div class="form-group">
                                        <div class="col-lg-2 col-sm-2 control-label">Product Status: <span class="text-error">*</span></div>
                                        <div class="col-lg-10">
                                            <select class="form-control m-bot15" name="product_status" disabled="true">
                                                <option value="">--Select a Status--</option>
                                                <option value="0" <?php if ($dataproducts['status'] == False) {echo "selected";} ?>>Draft</option>
                                                <option value="1" <?php if ($dataproducts['status'] == TRUE) {echo "selected";} ?>>Published</option>
                                            </select>
                                            <span class="help-inline"><?php echo form_error('product_status'); ?></span>
                                        </div>
                                    </div>

                                    <hr>

                                    <div class="form-group">
                                        <div class="col-lg-10">
                                            <input type="hidden" name="id_product" value="<?php echo $idProduct ?>">
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

