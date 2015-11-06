<?php $this->load->view('public/templates/header'); ?> 
<div class="container">

    <div class="row">

        <aside class="span3">

            <div class="categories">
                <div class="titleHeader clearfix">
                    <h3>Categories</h3>
                </div><!--end titleHeader-->
                <ul class="unstyled">
                    <li><a class="invarseColor" href="<?php echo base_url(); ?>public/products">All Products (<?php echo $total; ?>)</a></li>
                    <?php
                    foreach ($list_category as $rows) {
                        ?>
                        <li>
                            <a class="invarseColor" href="<?php echo base_url('public/products/category/' . $rows->permalink); ?>">
                                <?php
                                $jml = '0';
                                if ($rows->total_product != NULL) {
                                    $jml = $rows->total_product;
                                }
                                echo $rows->category_name . " (" . $jml . ")";
                                ?>
                            </a>
                        </li>
                        <?php
                    }
                    ?>
                </ul>
            </div><!--end categories-->

        </aside><!--end aside-->

        <div class="span9">            
            <div class="titleHeader clearfix">
                <h3>Product / <?php echo $category['category_name']; ?></h3>
            </div><!--end titleHeader-->

            <div class="productFilter clearfix">

                <div class="sortBy inline pull-left">
                    Sort By
                    <select name="sortItem" onchange="sortingby(this.value)">
                        <option value="name_asc" <?php echo ($filter=='nama' && $sort=='asc')?'selected':""?>>Name (A-Z)</option>
                        <option value="name_desc" <?php echo ($filter=='nama' && $sort=='desc')?'selected':""?>>Name (Z-A)</option>
                        <option value="price_lowhigh" <?php echo ($filter=='harga' && $sort=='asc')?'selected':""?>>Price (Low-Hight)</option>
                        <option value="price_highlow" <?php echo ($filter=='harga' && $sort=='desc')?'selected':""?>>Price (Height-Low)</option>
                    </select>
                </div>

            </div><!--end productFilter-->

            <div class="row">
                <?php if($products==null){?>
                <div class="alert alert-error" style="margin-left: 20px">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <h4>Oh, We're So Sorry</h4>
                    There is no product that matches the category.
                </div><!--end alert-->
                <?php } else { ?>
                <ul class="hProductItems clearfix">                    
                    <?php
                    foreach ($products as $prk) {
                        ?>
                        <li class="span3 clearfix">
                            <div class="thumbnail">
                                <a href="<?php echo base_url(); ?>public/products/detail/<?php echo $prk['permalink']; ?>">
                                    <img src="<?php echo base_url(); ?>upload/produk/thumb/<?php echo $prk['product_image_thumb']; ?>" alt="" style="width: 220px; height: 220px;">
                                </a>
                            </div>
                            <div class="thumbSetting">
                                <div class="thumbTitle">
                                    <a href="<?php echo base_url(); ?>public/products/detail/<?php echo $prk['permalink']; ?>" class="invarseColor">
                                        <?php echo ucwords($prk['nama']); ?>
                                    </a>
                                </div>
                                <div class="thumbPrice">
                                    <span>Rp<?php echo number_format($prk['harga']); ?></span>
                                </div>

                                <div class="thumbButtons">
                                    <a href="<?php echo base_url();?>public/products/add_cart/<?php echo $prk['permalink']; ?>">
                                        <button class="btn btn-primary btn-small" data-title="+To Cart" data-placement="top" rel="tooltip">
                                            <i class="icon-shopping-cart"></i>
                                        </button>
                                    </a>
                                    <button class="btn btn-small" data-title="+To WishList" data-placement="top" rel="tooltip">
                                        <i class="icon-heart"></i>
                                    </button>
                                </div>
                            </div>
                        </li>
                    <?php } ?>
                </ul>
                <?php }?>
            </div><!--end row-->

            <div class="pagination pagination-right">
                <ul>
                    <?php echo $this->pagination->create_links(); ?>
                </ul>
            </div><!--end pagination-->

        </div><!--end span9-->

    </div><!--end row-->

</div><!--end container-->

<script>
    function sortingby(type){
        switch(type){
            case "name_asc":
                document.location="<?php echo base_url('public/products/category/'.$products[0]['pklink'].'/nama/asc')?>";
                break;
            case "name_desc":
                 document.location="<?php echo base_url('public/products/category/'.$products[0]['pklink'].'/nama/desc')?>";
                break;
            case "price_lowhigh":
                 document.location="<?php echo base_url('public/products/category/'.$products[0]['pklink'].'/harga/asc')?>";
                break;
            case "price_highlow":
                 document.location="<?php echo base_url('public/products/category/'.$products[0]['pklink'].'/harga/desc')?>";
                break;
        }
    }
</script>
<?php $this->load->view('public/templates/footer'); ?>
