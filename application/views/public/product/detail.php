<?php $this->load->view('public/templates/header'); ?> 
<div class="container">

    <div class="row">

        <aside class="span3">
            <div class="aside-inner">
                <div class="special">
                    <div class="titleHeader clearfix">
                        <h3>Featured</h3>
                    </div><!--end titleHeader-->

                    <ul class="vProductItemsTiny">
                        <?php
                        foreach ($featured->result_array() as $prh) {
                            ?>
                            <li class="span4 clearfix">
                                <div class="thumbImage">
                                    <a href="<?php echo base_url(); ?>public/products/detail/<?php echo $prh['permalink']; ?>">
                                        <img src="<?php echo base_url(); ?>upload/produk/thumb/<?php echo $prh['product_image_thumb']; ?>" alt="" style="width: 92px; height: 92px;">
                                    </a>
                                </div>
                                <div class="thumbSetting">
                                    <div class="thumbTitle">
                                        <a href="<?php echo base_url(); ?>public/products/detail/<?php echo $prh['permalink']; ?>" class="invarseColor">
                                            <?php echo ucwords($prh['product_name']); ?>
                                        </a>
                                    </div>
                                    <div class="thumbPrice">
                                        <span>Rp<?php echo number_format($prh['product_price']); ?></span>
                                    </div>
                                </div>
                            </li>
                        <?php } ?>
                    </ul>
                    <br>
                </div><!--end special-->

            </div><!--end aside-inner-->
        </aside><!--end span3-->


        <div class="span9">
            <div class="row">

                <div class="product-details clearfix">
                    <div class="span5">
                        <div class="product-title">
                            <h3><?php echo $product['product_name']; ?></h3>
                        </div>
                        <div class="product-img">
                            <a class="fancybox" href="<?php echo base_url(); ?>upload/produk/<?php echo $product['product_image']; ?>">
                                <img src="<?php echo base_url(); ?>upload/produk/<?php echo $product['product_image']; ?>" alt="">
                            </a>
                        </div><!--end product-img-->
                        <div class="product-img-thumb">
                            <a class="fancybox" href="<?php echo base_url(); ?>upload/produk/<?php echo $product['product_image']; ?>">
                                <img src="<?php echo base_url(); ?>upload/produk/thumb/<?php echo $product['product_image_thumb']; ?>" style="width: 68px; height: 60px" alt="">
                            </a>
                        </div><!--end flexslider-thumb-->
                    </div><!--end span5-->
				
                    <div class="span4">
                        <div class="product-set">
                            <div class="product-price">
                                <span>Rp<?php echo number_format($product['product_price']); ?></span>
                            </div><!--end product-price-->
                            <div class="product-info">
                                <dl class="dl-horizontal">
                                    <dt>Stock:</dt>
                                    <dd><?php echo $product['product_stock'];?></dd><span>pcs</span>

                                    <dt>Product Code:</dt>
                                    <dd><?php echo $product['product_code'];?></dd>

                                    <dt>Manufacture:</dt>
                                    <dd><?php echo $product['name'];?></dd>

                                    <dt>Review Points:</dt>
                                    <dd><?php echo $totalreviews; ?> Points</dd>
                                </dl>
                            </div><!--end product-info-->
                            <div class="product-inputs">
                                <div class="thumbButtons">
                                    <a href="<?php echo base_url();?>public/products/add_cart/<?php echo $product['permalink']; ?>">
                                        <button class="btn btn-primary btn-small" data-title="+To Cart" data-placement="top" rel="tooltip">
                                            <i class="icon-shopping-cart"></i> Add To Cart
                                        </button>
                                    </a>
                                </div>
                            </div><!--end product-inputs-->
                        </div><!--end product-set-->
                    </div><!--end span4-->

                </div><!--end product-details-->

            </div><!--end row-->


            <div class="product-tab">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#descraption" data-toggle="tab">Description</a>
                    </li>
                    <li>
                        <a href="#specfications" data-toggle="tab">Specfications</a>
                    </li>
                    <li>
                        <a href="#return-info" data-toggle="tab">Return Info</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Reviews <i class="icon-caret-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="#read-review" data-toggle="tab">Read Reviews</a></li>
                            <?php if ($this->session->userdata('user_email') != NULL) { ?>
                                <li><a href="#make-review" data-toggle="tab">Make Review</a></li>
                            <?php } ?>
                        </ul>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="descraption">
                        <p>
                            <?php echo $product['product_description']; ?>
                        </p>
                    </div>
                    <div class="tab-pane" id="specfications">
                        <table class="table table-compare">
                            <tr>
                                <td class="aligned-color"><h5>Processor</h5></td>
                                <td><?php echo $product['processor'];?></td>
                            </tr>
                            <tr>
                                <td class="aligned-color"><h5>Video Graphics</h5></td>
                                <td><?php echo $product['vga'];?></td>
                            </tr>
                            <tr>
                                <td class="aligned-color"><h5>Memory</h5></td>
                                <td><?php echo $product['memory'].'GB'.' DDR3';?></td>
                            </tr>
                            <tr>
                                <td class="aligned-color"><h5>Display Screen</h5></td>
                                <td><?php echo $product['screen'].' Inch';?></td>
                            </tr>
                            <tr>
                                <td class="aligned-color"><h5>Operating System</h5></td>
                                <td><?php echo $product['os'];?></td>
                            </tr>
                            <tr>
                                <td class="aligned-color"><h5>Storage</h5></td>
                                <td><?php echo $product['storage'];?></td>
                            </tr>
                            <tr>
                                <td class="aligned-color"><h5>Color</h5></td>
                                <td><?php echo $product['color'];?></td>
                            </tr>
                        </table>
                    </div>
                    <div class="tab-pane" id="return-info">
                        <h4>Read our Returning info</h4><br>
                        <p>
                            Suspendisse potenti. In non nisl sem, eu rutrum augue. Donec eu dolor vel massa ornare cursus id eget erat. Mauris in ante magna. Curabitur eget risus mi, non interdum lacus. Duis magna leo, rhoncus eget malesuada quis, semper a quam. Morbi imperdiet imperdiet lectus ac pellentesque. Integer diam sem, vulputate in feugiat ut, porttitor eu libero. Integer non dolor ipsum. Cras condimentum mattis turpis quis vestibulum. Nulla a augue ipsum. Donec aliquam velit vel metus fermentum dictum sodales metus condimentum. Nullam id massa quis nulla molestie ultrices eget sed nulla. Cras feugiat odio at tellus euismod lacinia.

                        </p>
                    </div>

                    <div class="tab-pane" id="read-review">
                        <?php
                        $message = $this->session->flashdata('message');
                        echo $message == '' ? '' : '<p id="message">' . $message . '</p>';
                        ?>

                        <?php
                        foreach ($reviews as $row) {
                            ?>
                            <div class="single-review clearfix">
                                <div class="review-header">
                                    <h4><?php echo $row->created_by; ?></h4>
                                    <small><?php echo $row->created_at; ?></small>
                                </div><!--end review-header-->

                                <div class="review-body">
                                    <p><?php echo $row->komentar; ?></p>
                                </div><!--end review-body-->
                            </div><!--end single-review-->
                            <?php
                        }
                        ?>
                    </div>

                    <?php if ($this->session->userdata('user_email') != NULL) { ?>

                        <div class="tab-pane" id="make-review">
                            <form method="POST" action="<?php echo base_url('public/products/add_komentar') ?>" class="form-horizontal">
                                <div class="control-group">
                                    <label class="control-label" for="inputReview">Your Review <span class="text-error">*</span></label>
                                    <div class="controls">
                                        <textarea name="komentar" id="inputReview" placeholder="Put your review here..."></textarea>
                                        <span class="help-inline"><?php echo form_error('komentar'); ?></span>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <div class="controls">
                                        <input type="hidden" name="id_product" value="<?php echo $product['id_product'] ?>">
                                        <input type="hidden" name="permalink" value="<?php echo $product['permalink'] ?>">
                                        <input type="hidden" name="id_user" value="<?php echo $this->session->userdata('id_user') ?>">
                                        <input type="hidden" name="created_by" value="<?php echo $this->session->userdata('user_name') ?>">
                                        <button type="submit" class="btn btn-primary" name="submit">Add Review</button>
                                    </div>
                                </div>
                            </form><!--end form-->
                        </div>
                    <?php } ?>
                </div><!--end tab-content-->
            </div><!--end product-tab-->

        </div><!--end span9-->

    </div><!--end row-->

</div><!--end conatiner-->
<?php $this->load->view('public/templates/footer'); ?>