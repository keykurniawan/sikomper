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
                                <li class="active"><a href="<?php echo base_url(); ?>admin/profiles"> <i class="icon-user"></i> Profile</a></li>
                                <li><a href="<?php echo base_url() . 'admin/profiles/edit/' . $users['id_user'] ?>"> <i class="icon-edit"></i> Edit profile</a></li>
                            </ul>

                        </section>
                    </aside>
                    <aside class="profile-info col-lg-9">                      
                        <section class="panel">
                            <div class="bio-graph-heading">
                                Aliquam ac magna metus. Nam sed arcu non tellus fringilla fringilla ut vel ispum. Aliquam ac magna metus.
                            </div>
                            <div class="panel-body bio-graph-info">
                                <h1>Bio Graph</h1>
                                <?php
                                $message = $this->session->flashdata('message');
                                echo $message == '' ? '' : '<p id="message">' . $message . '</p>';
                                ?>
                                <div class="panel-body">
                                    <table id="profile" class="table table-striped table-advance table-hover">
                                        <tbody>
                                            <tr>
                                                <td>Name</td>
                                                <td>:</td>
                                                <td><?php echo $users['user_name'] ?></td>
                                            </tr>
                                            <tr>
                                                <td>Email</td>
                                                <td>:</td>
                                                <td><?php echo $users['user_email'] ?></td>
                                            </tr>
                                            <tr>
                                                <td>Level</td>
                                                <td>:</td>
                                                <td><?php echo $users['status'] ?></td>
                                            </tr>
                                            <tr>
                                                <td>Phone number</td>
                                                <td>:</td>
                                                <td><?php echo $users['user_phone'] ?></td>
                                            </tr>
                                            <tr>
                                                <td>First Address</td>
                                                <td>:</td>
                                                <td><?php echo $users['first_address'] ?></td>
                                            </tr>
                                            <tr>
                                                <td>Second Address</td>
                                                <td>:</td>
                                                <td><?php echo $users['second_address'] ?></td>
                                            </tr>
                                            <tr>
                                                <td>City</td>
                                                <td>:</td>
                                                <td><?php echo $users['user_city'] ?></td>
                                            </tr>
                                            <tr>
                                                <td>Postal Code</td>
                                                <td>:</td>
                                                <td><?php echo $users['user_zip'] ?></td>
                                            </tr>
                                            <tr>
                                                <td>Region/State</td>
                                                <td>:</td>
                                                <td><?php echo $users['state'] ?></td>
                                            </tr>
                                            <tr>
                                                <td>Country</td>
                                                <td>:</td>
                                                <td><?php echo $users['country_name'] ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
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
