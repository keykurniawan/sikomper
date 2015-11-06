<?php $this->load->view('admin/templates/header'); ?>
<link href="<?php echo base_url(); ?>assets/admin/assets/advanced-datatable/media/css/demo_page.css" rel="stylesheet" />
<link href="<?php echo base_url(); ?>assets/admin/assets/advanced-datatable/media/css/demo_table.css" rel="stylesheet" />
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
                        <a class="active" href="<?php echo base_url() ?>admin/country_managements">
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
                                <ul class="nav nav-tabs pull-right">
                                    <li><a href="<?php echo base_url() . 'admin/country_managements/gotoFormAdd'; ?>"><i class="icon-plus"></i> Add Data</a></li>
                                </ul>
                                <span class="hidden-sm wht-color">Country Management</span>
                            </header>
                            <div class="panel-body">                                
                                <div class="adv-table">
                                    <?php
                                    $message = $this->session->flashdata('message');
                                    echo $message == '' ? '' : '<p id="message">' . $message . '</p>';
                                    ?>
                                    <table  class="display table table-bordered table-striped" id="example">
                                        <thead>
                                            <tr>
                                                <th>Country Name</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($countries as $row) { ?>
                                                <tr>
                                                    <td><?php echo $row->country_name ?></td>
                                                    <td>
                                                        <a href="<?php echo base_url() . 'admin/country_managements/edit/' . $row->id_country ?>"><button class = "btn btn-success" title="Edit"><i class = "icon-pencil"></i></button></a>
                                                        <a href="<?php echo base_url() . 'admin/country_managements/delete/' . $row->id_country ?>" onclick="return confirm('Are you sure want to delete this?');"><button class = "btn btn-danger" title="Delete"><i class = "icon-trash "></i></button></a>
                                                    </td>
                                                </tr>
                                            <?php }
                                            ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Country Name</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <!-- page end-->
            </section>
        </section>
        <?php $this->load->view('admin/templates/footer'); ?>