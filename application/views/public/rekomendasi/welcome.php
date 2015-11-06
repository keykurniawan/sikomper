<?php $this->load->view('public/templates/header'); ?> 
<div class="container">
    <div class="row">
        <div class="span9">
            <article class="blog-article">

                <div class="blog-content" style="margin-bottom:-50px;">
                    <div class="blog-content-title">
                        <h1><a  class="invarseColor">Selamat Datang</a></h1>
                    </div>
                    <div class="blog-content-entry">
                        <b><p>
                            Untuk bisa mendapatkan rekomendasi produk yang anda butuhkan sesuai dengan kriteria yang diharapkan, silahkan ikuti langkah-langkah berikut:
                        </p></b>
                    </div>
                </div><!--end blog-content-->
                <div class="user-comments" >
                    <ul class="media-list">
                        <li class="media">
                            <a class="pull-left" href="#">
                                <img class="media-object" src="<?php echo base_url() ?>assets/img/requirement.jpg" alt="user-avatar" style="width: 64px; height: 64px;">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">
                                    <b><a href="#" class="invarseColor">1. Pilih Tipe Kebutuhan</a></b>
                                </h4>
                                <p>
                                    <b>Silahkan anda untuk menjawab dan memilih tipe kebutuhan yang sesuai dengan kondisi produk laptop yang anda butuhkan.</b>
                                </p>
                            </div>
                        </li>
                        <li class="media">
                            <a class="pull-left" href="#">
                                <img class="media-object" src="<?php echo base_url() ?>assets/img/harga.jpg" alt="user-avatar" style="width: 64px; height: 64px;">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">
                                    <b><a href="#" class="invarseColor">2. Pilih Harga</a></b>
                                </h4>
                                <p>
                                    <b>Silahkan anda untuk menjawab dan memilih kisaran harga yang anda inginkan untuk produk laptop yang anda butuhkan.</b>
                                </p>
                            </div>
                        </li>
                        <li class="media">
                            <a class="pull-left" href="#">
                                <img class="media-object" src="<?php echo base_url() ?>assets/img/processor.jpg" alt="user-avatar" style="width: 64px; height: 64px;">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">
                                    <b><a href="#" class="invarseColor">3. Pilih Tipe Processor</a></b>
                                </h4>
                                <p>
                                    <b>Silahkan anda untuk menjawab dan memilih tipe processor yang anda inginkan ada dalam produk laptop yang anda butuhkan.</b>
                                </p>
                            </div>
                        </li>
                        <li class="media">
                            <a class="pull-left" href="#">
                                <img class="media-object" src="<?php echo base_url() ?>assets/img/ram.jpg" alt="user-avatar" style="width: 64px; height: 64px;">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">
                                    <b><a href="#" class="invarseColor">4. Pilih Memory</a></b>
                                </h4>
                                <p>
                                    <b>Silahkan anda untuk menjawab dan memilih besaran memory yang anda inginkan untuk membantu kinerja produk laptop yang anda butuhkan.</b>
                                </p>
                            </div>
                        </li>
                        <li class="media">
                            <a class="pull-left" href="#">
                                <img class="media-object" src="<?php echo base_url() ?>assets/img/harddisk.jpg" alt="user-avatar" style="width: 64px; height: 64px;">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">
                                    <b><a href="#" class="invarseColor">5. Pilih Kapasitas Hardisk</a></b>
                                </h4>
                                <p>
                                    <b>Silahkan anda menjawab dan memilih kapasitas penyimpanan data yang anda inginkan untuk produk laptop yang anda butuhkan.</b>
                                </p>
                            </div>
                        </li>
                        <li class="media">
                            <a class="pull-left" href="#">
                                <img class="media-object" src="<?php echo base_url() ?>assets/img/brand.jpg" alt="user-avatar" style="width: 64px; height: 64px;">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">
                                    <b><a href="#" class="invarseColor">6. Pilih Vendor Laptop</a></b>
                                </h4>
                                <p>
                                    <b>Silahkan anda menjawab dan memilih tipe vendor atau brand produk laptop yang anda butuhkan.</b>
                                </p>
                            </div>
                        </li>

                    </ul><!--end media-list-->
                </div>
                <br />
                <br />
                <form action="<?php echo base_url() . 'public/recommended/parameter' ?>" method="post">
                    <input type="hidden" name="param_id" value="1" /> 
                    <button  type="submit" class="btn btn-primary pull-right">MULAI</button>
                </form>
            </article><!--end article-->

        </div><!--end span9-->

    </div>
</div><!--end container-->
<?php $this->load->view('public/templates/footer'); ?>
