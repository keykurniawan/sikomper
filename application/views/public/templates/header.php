<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
    <head>
        <!-- Basic Page Needs
  ================================================== -->
        <meta charset="utf-8">
        <title><?php echo $title; ?></title>
        <meta name="description" content="">
        <meta name="author" content="Kurniawan">
        <!-- Mobile Specific Metas
  ================================================== -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!-- CSS
  ================================================== -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css" media="screen">
        <!-- jquery ui css -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/jquery-ui-1.10.1.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/customize.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/font-awesome.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
        <!-- flexslider css-->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/flexslider.css">
        <!-- fancybox -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/js/fancybox/jquery.fancybox.css">
        <!--[if lt IE 9]>
                <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
                <script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
                <link rel="stylesheet" href="assets/css/font-awesome-ie7.css">
        <![endif]-->
        <!-- Favicons
        ================================================== -->
        <link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/favicon.html">
        <link rel="apple-touch-icon" href="<?php echo base_url() ?>assets/images/apple-touch-icon.html">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url() ?>assets/images/apple-touch-icon-72x72.html">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url() ?>assets/images/apple-touch-icon-114x114.html">        
    </head>

    <body>
        <div id="mainContainer" class="clearfix">

            <!--begain header-->
            <header>
                <div class="upperHeader">
                    <div class="container">
                        
                            <ul class="pull-right inline">
                                <?php if ($this->session->userdata('user_email') != NULL) { ?>
                                <li><a class="invarseColor" href="<?php echo base_url();?>public/account_managements">My Account</a></li>
                                <?php } ?>
                                <li class="divider-vertical"></li>
                                <li><a class="invarseColor" href="<?php echo base_url();?>public/carts">Shopping Cart ( <?php echo $this->cart->total_items()?>)</a></li>
                                <li class="divider-vertical"></li>
                                <!--<li><a class="invarseColor" href="#">Checkout</a></li>-->
                            </ul>
                        
                        <p>
                            <?php if ($this->session->userdata('user_email') != NULL) {
                                $user_name = $this->session->userdata('user_name');
                                ?>
                                Welcome to Adney's Shop, <a href="#"><?php echo "$user_name" ?></a> or <a href="<?php echo base_url() ?>public/logins/process_logout">Logout</a>
                            <?php } else { ?>
                                Welcome to Adney's Shop, <a href="<?php echo base_url() ?>public/logins">Login</a> or <a href="<?php echo base_url() ?>public/registers">Create new account</a>
                            <?php } ?>
                        </p>
                    </div><!--end container-->
                </div><!--end upperHeader-->

                <div class="middleHeader">
                    <div class="container">

                        <div class="middleContainer clearfix">

                            <div class="siteLogo pull-left">
                                <h1><a href="<?php echo base_url() ?>">Adney's Shop</a></h1>
                            </div>

                            <div class="pull-right">
                                <form method="#" action="#" class="siteSearch">
                                    <div class="input-append">
                                        <input type="text" class="span2" id="appendedInputButton" placeholder="Search...">
                                        <button class="btn btn-primary" type="submit" name=""><i class="icon-search"></i></button>
                                    </div>
                                </form><!--end form-->
                            </div><!--end pull-right-->

                            <div class="pull-right">
                                
                                    <div class="btn-group">
                                        <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                            <i class="icon-shopping-cart"></i>  <?php echo $this->cart->total_items()?> items
                                            <span class="caret"></span>
                                        </a>
                                        <div class="dropdown-menu cart-content pull-right">
                                            <table class="table-cart">
                                                <tbody>
                                                    <?php $i = 1 ?>
                                                    <?php foreach ($this->cart->contents() as $items): ?>
                                                    <?php echo form_hidden($i . '[rowid]', $items['rowid']); ?>
                                                    <tr>
                                                        <td class="cart-product-info">
                                                            <a href="<?php echo base_url() ?>public/products/detail/<?php echo $items['link']; ?>">
                                                                <?php if ($this->cart->has_options($items['rowid']) == TRUE): ?>
                                                                <?php foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value): ?>
                                                                <img src="<?php echo base_url() ?>upload/produk/thumb/<?php echo $option_value; ?>" style="width: 72px; height: 72px;" title="<?php echo $items['name']; ?>" alt=""/>
                                                                <?php endforeach; ?>
                                                                <?php endif; ?>
                                                            </a>
                                                            <div class="cart-product-desc">
                                                                <p><a class="invarseColor" href="<?php echo base_url()?>public/products/detail/<?php echo $items['link']; ?>"><?php echo $items['name']; ?></a></p>
                                                                <ul class="unstyled">
                                                                    <li><?php if(!empty($items['stock'])){ ?>
                                                                        Available In Stock
                                                                        <?php }else{ ?>
                                                                        Not Available In Stock
                                                                        <?php } ?></li>
                                                                    <li>Code. <?php echo $items['product_code']; ?></li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                        <td class="cart-product-setting">
                                                            <p><strong><?php echo form_input(array('name' => $i . '[qty]', 'value' => $items['qty'], 'style'=>'width:18px', 'disabled' => 'true')); ?> x Rp<?php echo number_format($items['price']);?></strong></p>
                                                            <a href="<?php echo site_url('public/carts/delete/' . $items['rowid']); ?>" class="remove-pro" rel="tooltip" data-title="Delete" onclick="return confirm('Are you sure want to delete this?')"><i class="icon-trash"></i></a>
                                                        </td>
                                                    </tr>
                                                    <?php $i++; ?>
                                                    <?php endforeach; ?>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <td class="cart-product-info">
                                                            <a href="<?php echo base_url();?>public/carts" class="btn btn-small">View cart</a>
                                                            <!--<a href="#" class="btn btn-small btn-primary">Checkout</a>-->
                                                        </td>
                                                        <td>
                                                            <h3>TOTAL<br>Rp<?php echo number_format($this->cart->total()); ?></h3>
                                                        </td>
                                                    </tr>
                                                    
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                
                            </div><!--end pull-right-->

                        </div><!--end middleCoontainer-->

                    </div><!--end container-->
                </div><!--end middleHeader-->
                <div class="mainNav">
                    <div class="container">
                        <div class="navbar">

                            <ul class="nav">
                                <li class="active"><a href="<?php echo base_url(); ?>"><i class="icon-home"></i></a></li>
                                <li>
                                    <a href="#">Menu &nbsp;<i class="icon-caret-down"></i></a>
                                    <div>
                                        <ul>
                                            <?php if ($this->session->userdata('user_email') == NULL) { ?>
                                            <li><a href="<?php echo base_url(); ?>public/logins"> <span>-</span> login</a></li>
                                            <li><a href="<?php echo base_url(); ?>public/registers"> <span>-</span> register</a></li>
                                            <?php }?>
                                            <li><a href="<?php echo base_url(); ?>public/products"> <span>-</span> Products</a></li>
                                            <li><a href="<?php echo base_url(); ?>public/carts"> <span>-</span> Cart</a></li>
                                            <!--<li><a href="checkout.html"> <span>-</span> Checkout</a></li>-->
                                            <li><a href="<?php echo base_url(); ?>public/abouts"> <span>-</span> About Us</a></li>
                                            <?php if ($this->session->userdata('user_email') != NULL) { ?>
                                            <li><a href="<?php echo base_url(); ?>public/recommended"> <span>-</span> Recommended</a></li>
                                            <?php }?>
                                        </ul>
                                    </div>
                                </li>
                            </ul><!--end nav-->

                        </div>
                    </div><!--end container-->
                </div><!--end mainNav-->	

            </header>
            <!-- end header -->