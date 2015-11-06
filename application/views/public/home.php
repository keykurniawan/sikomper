<?php $this->load->view('public/templates/header'); ?> 
<div class="container">

    <div id="fb-root"></div>
    <script>(function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id))
                return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v2.3";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
    <div class="row">

        <div class="span8">
            <div class="flexslider"><!--start flexslider banner-->
                <ul class="slides">
                    <?php
                    foreach ($banner_slide->result_array() as $bns) {
                        ?>
                        <li>
                            <img src="<?php echo base_url(); ?>upload/banner/<?php echo $bns['image_banner']; ?>" />
                        </li>
                    <?php } ?>
                </ul>
            </div><!--end flexslider banner-->
        </div><!--end span8-->

        <div class="span4">

            <div id="homeSpecial">
                <div class="titleHeader clearfix">
                    <h3>Featured Items</h3>
                    <div class="pagers">
                        <div class="btn-toolbar">
                            <div class="btn-group">
                                <button class="btn btn-mini vNext"><i class="icon-caret-down"></i></button>
                                <button class="btn btn-mini vPrev"><i class="icon-caret-up"></i></button>
                            </div>
                            <!--<a href="<?php echo base_url(); ?>public/products"><button class="btn btn-mini">View All</button></a>-->
                        </div>
                    </div>
                </div><!--end title Header-->

                <ul class="vProductItems cycle-slideshow vertical clearfix"
                    data-cycle-fx="carousel"
                    data-cycle-timeout=0
                    data-cycle-slides="> li"
                    data-cycle-next=".vPrev"
                    data-cycle-prev=".vNext"
                    data-cycle-carousel-visible="1"
                    data-cycle-carousel-vertical="true"
                    >
                    <?php
                        foreach ($produk_home->result_array() as $prh) {
                            ?>
                            <li class="span3 clearfix">
                                <div class="thumbnail">
                                    <a href="<?php echo base_url(); ?>public/products/detail/<?php echo $prh['permalink']; ?>">
                                        <img src="<?php echo base_url(); ?>upload/produk/thumb/<?php echo $prh['product_image_thumb']; ?>" alt="" style="width: 190px; height: 190px;" >
                                    </a>
                                </div>
                                <div class="thumbSetting">
                                    <div class="thumbTitle" style="font-size: 9px">
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
            </div><!--end home Special-->

        </div><!--end span4-->

    </div><!--end row-->

    <div class="row">

        <div class="span12">
            <div id="featuredItems">
                <!-- <div class="span12"> -->
                <div class="titleHeader clearfix">
                    <h3>Featured Items</h3>
                    <div class="pagers">
                        <div class="btn-toolbar">
                            <a href="<?php echo base_url(); ?>public/products"><button class="btn btn-mini">View All</button></a>
                        </div>
                    </div>
                </div><!--end title Header-->
                <!-- </div> -->

                <div class="row">
                    <ul class="hProductItems clearfix">
                        <?php
                        foreach ($produk_home->result_array() as $prh) {
                            ?>
                            <li class="span3 clearfix">
                                <div class="thumbnail">
                                    <a href="<?php echo base_url(); ?>public/products/detail/<?php echo $prh['permalink']; ?>">
                                        <img src="<?php echo base_url(); ?>upload/produk/thumb/<?php echo $prh['product_image_thumb']; ?>" alt="" style="width: 220px; height: 220px;" >
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

                                    <div class="thumbButtons">
                                        <a href="<?php echo base_url();?>public/products/add_cart/<?php echo $prh['permalink']; ?>">
                                            <button class="btn btn-primary btn-small" data-title="+To Cart" data-placement="top" rel="tooltip">
                                                <i class="icon-shopping-cart"></i>
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        <?php } ?>
                    </ul>
                </div><!--end row-->
            </div><!--end featured Items-->
        </div><!--end span12-->

    </div><!--end row-->

    <div class="row">

        <div class="span4">
            <div id="aboutUs">
                <div class="titleHeader clearfix">
                    <h3>About Us</h3>
                    <div class="pagers">
                        <div class="btn-toolbar">
                            <a href="<?php echo base_url('public/abouts'); ?>"> <button class="btn btn-mini">Know More</button> </a>
                        </div>
                    </div>
                </div><!--end title Header-->

                <p>
                    Adney's Shop merupakan salah satu penyedia jasa jual beli online yang terbentuk sekitar tahun 2014. 
                    Adney's Shop didirikan berdasarkan sistem kekeluargaan dengan mengedepankan profesionalitas. 
                    Kami percaya kami bisa berdiri sampai sekarang ini karena dukungan dari keluarga dan karyawan semuanya.
                </p>
            </div>
        </div><!--end span4-->

        <div class="span4">
            <div id="twitterFeed">                
                <div>
                    <a class="twitter-timeline" href="https://twitter.com/raisa6690" data-widget-id="594486457265364994">Tweets by @raisa6690</a>
                    <script>!function (d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
                            if (!d.getElementById(id)) {
                                js = d.createElement(s);
                                js.id = id;
                                js.src = p + "://platform.twitter.com/widgets.js";
                                fjs.parentNode.insertBefore(js, fjs);
                            }
                        }(document, "script", "twitter-wjs");</script>
                </div>
            </div><!--end twitter Feed-->
        </div><!--end span4-->

        <div class="span4">
            <div id="facebookFeed">
                <div class="titleHeader clearfix">
                    <div class="fb-page" data-href="https://www.facebook.com/pages/Pevita-Pearce/345235285596873?fref=ts" 
                         data-hide-cover="false" data-show-facepile="true" 
                         data-show-posts="false">
                        <div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/pages/Pevita-Pearce/345235285596873?fref=ts"><a href="https://www.facebook.com/pages/Pevita-Pearce/345235285596873?fref=ts">Pevita Pearce</a></blockquote>
                        </div>
                    </div>
                </div><!--end title Header-->
            </div><!--end facebook Feed-->
        </div><!--end span4-->
    </div><!--end row-->

</div><!--end container-->
<?php $this->load->view('public/templates/footer'); ?>
