<?php $this->load->view('admin/templates/header'); ?>
<link href="<?php echo base_url(); ?>assets/admin/assets/advanced-datatable/media/css/demo_page.css" rel="stylesheet" />
<link href="<?php echo base_url(); ?>assets/admin/assets/advanced-datatable/media/css/demo_table.css" rel="stylesheet" />
<link href="<?php echo base_url(); ?>assets/admin/css/table-responsive.css" rel="stylesheet" />
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
                                <ul class="nav nav-tabs pull-right">
                                    <li><a href="<?php echo base_url() . 'admin/product_managements/gotoFormAdd'; ?>"><i class="icon-plus"></i> Add Data</a></li>
                                </ul>
                                <span class="hidden-sm wht-color">Product Management</span>
                            </header>
                            <div class="panel-body">
                                <div class="adv-table">
                                    <?php
                                    $message = $this->session->flashdata('message');
                                    echo $message == '' ? '' : '<p id="message">' . $message . '</p>';
                                    ?>
                                    <section id="unseen">
                                        <table  class="display table table-bordered table-striped table-condensed" id="example">
                                            <thead>
                                                <tr>
                                                    <th>Image</th>
                                                    <th>Code</th>
                                                    <th>Name</th>
                                                    <th>Price (IDR)</th>
                                                    <th>Category</th>
                                                    <th>Stock</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $no = 1;
                                                foreach ($product_list as $row) {
                                                    ?>
                                                    <tr>
                                                        <!--<td><?php echo $row->product_image ?></td>-->
                                                        <td>
                                                            <!-- Modal -->
                                                            <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal<?php echo $no;?>" class="modal fade">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                                            <h4 class="modal-title"><?php echo ucwords($row->product_name) ?></h4>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                                <?php if (empty($row->product_image)) { ?>
                                                                                    <img src="<?php echo base_url(); ?>upload/produk/not.jpg" alt="">
                                                                                <?php } else { ?>
                                                                                    <img src="<?php echo base_url(); ?>upload/produk/<?php echo $row->product_image; ?>" alt="">
                                                                                <?php } ?>
                                                                            </div>
                                                                        <div class="modal-footer">
                                                                            <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- modal -->
                                                            <?php if(empty($row->product_image)){?>
                                                            <img  width="150px" src="<?php echo base_url(); ?>upload/produk/thumb/not.jpg" alt="">
                                                            <?php } else { ?>
                                                            <img  width="150px" src="<?php echo base_url(); ?>upload/produk/thumb/<?php echo $row->product_image_thumb; ?>" alt="">
                                                            <?php }?>
                                                            <p><a data-toggle="modal" href="#myModal<?php echo $no;?>" class="btn btn-primary btn-small">Lebih besar</a></p>  
                                                        </td>
                                                        <td><?php echo $row->product_code ?></td>
                                                        <td><?php echo ucwords($row->product_name) ?></td>
                                                        <td><?php echo number_format($row->product_price) ?></td>
                                                        <td><?php echo ucwords($row->category_name) ?></td>
                                                        <td><?php echo $row->product_stock ?></td>
                                                        <td>
                                                            <?php if ($row->status == TRUE) { ?>
                                                                Published<br/>
                                                            <?php } else { ?>
                                                                Draft<br/>
                                                            <?php } ?>
                                                        </td>
                                                        <td>
                                                            <a href="<?php echo base_url() . 'admin/product_managements/gotoFormView/' . $row->id_product ?>">
                                                                <button class = "btn btn-info" data-toggle="tooltip" title="View" data-placemen="bottom"><i class = "icon-eye-open"></i></button>
                                                            </a>
                                                            <a href="<?php echo base_url() . 'admin/product_managements/gotoFormEdit/' . $row->id_product ?>">
                                                                <button class = "btn btn-success" title="Edit"><i class = "icon-pencil"></i></button>
                                                            </a>
                                                            <a href="<?php echo base_url() . 'admin/product_managements/delete/' . $row->id_product ?>" onclick="return confirm('Are you sure want to delete this?');">
                                                                <button class = "btn btn-danger" title="Delete"><i class = "icon-trash "></i></button>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                    $no++;
                                                }
                                                ?>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>Image</th>
                                                    <th>Code</th>
                                                    <th>Name</th>
                                                    <th>Price (IDR)</th>
                                                    <th>Category</th>
                                                    <th>Stock</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </section>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <!-- page end-->
            </section>
        </section>
        <!--main content end-->
<?php $this->load->view('admin/templates/footer'); ?>