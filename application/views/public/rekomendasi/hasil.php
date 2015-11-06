<?php $this->load->view('public/templates/header'); ?> 
<div class="container">
	<div class="row">
		<div class="span9">
			<article class="blog-article">
				
				<div class="blog-content" style="margin-bottom:-40px;">
					<div class="blog-content-title">
						<h1><a  class="invarseColor">Hasil Rekomendasi</a></h1>
					</div>
					<div class="blog-content-entry">
						<p>
							Berdasarkan kriteria parameter yang telah anda tentukan, maka produk laptop yang kami rekomendasikan untuk anda ialah:
						</p>
					</div>
				</div><!--end blog-content-->
				<br />
				<br />
				<?php if(count($produk)>1){ ?>
					<div class="row">
						<ul class="hProductItems clearfix">
							<?php foreach($produk as $p){?>
								<li class="span3 clearfix">
									<div class="thumbnail">
										<a href="<?php echo base_url(); ?>public/products/detail/<?php echo $p->permalink; ?>"><img src="<?php echo base_url(); ?>upload/produk/<?php echo $p->product_image; ?>" style="width: 212px; height: 192px;" alt=""></a>
									</div>
									<div class="thumbSetting">
										<div class="thumbTitle">
											<a href="#" class="invarseColor">
												<?php echo $p->name;?>
											</a>
										</div>
										<div class="thumbPrice">
											<span>Rp<?php echo number_format($p->product_price); ?></span>
										</div>
									</div>
								</li>
							<?php } ?>
						</ul>
					</div>
				<?php }else if(count($produk)==1){ ?>
					<div class="row">
						<div class="product-details clearfix">
							<div class="span5">
								<div class="product-title">
									<h3><?php echo $produk[0]->product_name; ?></h3>
								</div>
								<div class="product-img">
									<a class="fancybox" href="<?php echo base_url(); ?>upload/produk/<?php echo $produk[0]->product_image; ?>">
										<img src="<?php echo base_url(); ?>upload/produk/<?php echo $produk[0]->product_image; ?>" style="width: 292px; height: 292px;">
									</a>
								</div><!--end product-img-->
								
							</div><!--end span5-->	

							<div class="span4">
								<div class="product-set">
									<div class="product-price">
										<span>Rp<?php echo number_format($produk[0]->product_price); ?></span>
									</div><!--end product-price-->
									<div class="product-info">
										<dl class="dl-horizontal">
											<dt>Stock:</dt>
											<dd><?php echo $produk[0]->product_stock;?></dd><span>pcs</span>
												<dt>Product Code:</dt>
											<dd><?php echo $produk[0]->product_code;?></dd>
												<dt>Manufacture:</dt>
											<dd><?php echo $produk[0]->name;?></dd>
										</dl>
									</div><!--end product-info-->
									<br/>
									<span><b>Kriteria Pilihan Anda</b></span>
									<div class="product-info">
										<dl class="dl-horizontal">
											<dt>Tipe Kebutuhan:</dt>
											<dd><?php echo $kriteria[0]->kriteria_name;?></dd>
											<dt>Harga:</dt>
											<dd><?php echo $kriteria[1]->kriteria_name;?></dd>
											<dt>Processor:</dt>
											<dd><?php echo $kriteria[2]->kriteria_name;?></dd>
											<dt>Memory:</dt>
											<dd><?php echo $kriteria[3]->kriteria_name;?></dd>
											<dt>Storage:</dt>
											<dd><?php echo $kriteria[4]->kriteria_name;?></dd>
											<dt>Brand:</dt>
											<dd><?php echo $kriteria[5]->kriteria_name;?></dd>
										</dl>
									</div><!--end product-info-->
									<div class="product-inputs">
										<div class="thumbButtons">
											<a href="<?php echo base_url();?>public/products/add_cart/<?php echo $produk[0]->permalink; ?>">
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
		                </ul>
		                <div class="tab-content">
		                    <div class="tab-pane active" id="descraption">
		                        <p>
		                            <?php echo $produk[0]->product_description; ?>
		                        </p>
		                    </div>
		                    <div class="tab-pane" id="specfications">
		                        <table class="table table-compare">
		                            <tr>
		                                <td class="aligned-color"><h5>Processor</h5></td>
		                                <td><?php echo $produk[0]->processor;?></td>
		                            </tr>
		                            <tr>
		                                <td class="aligned-color"><h5>Video Graphics</h5></td>
		                                <td><?php echo $produk[0]->vga;?></td>
		                            </tr>
		                            <tr>
		                                <td class="aligned-color"><h5>Memory</h5></td>
		                                <td><?php echo $produk[0]->memory.'GB'.' DDR3';?></td>
		                            </tr>
		                            <tr>
		                                <td class="aligned-color"><h5>Display Screen</h5></td>
		                                <td><?php echo $produk[0]->screen.' Inch';?></td>
		                            </tr>
		                            <tr>
		                                <td class="aligned-color"><h5>Operating System</h5></td>
		                                <td><?php echo $produk[0]->os;?></td>
		                            </tr>
		                            <tr>
		                                <td class="aligned-color"><h5>Storage</h5></td>
		                                <td><?php echo $produk[0]->storage;?></td>
		                            </tr>
		                            <tr>
		                                <td class="aligned-color"><h5>Color</h5></td>
		                                <td><?php echo $produk[0]->color;?></td>
		                            </tr>
		                        </table>
		                    </div>                    
		                </div><!--end tab-content-->
					</div><!--end product-tab-->
				<?php } ?>
				<br />
				<br />
				<!--<form action="#" method="post">
					<input type="hidden" name="param_id" value="1" /> 
					<button  type="submit" class="btn btn-primary pull-right">Simpan Rekomendasi</button>
				</form>-->
			</article><!--end article-->
			
		</div><!--end span9-->
		<?php if(count($produk)>1){ ?>
			<div class="span3">
				<article class="blog-article">
					<div class="blog-content" style="margin-top:18px;">
						<div class="blog-content-title">
							<h2><a  class="invarseColor">Kriteria yang Anda pilih</a></h2>
						</div>
						<div class="blog-content-entry">
							<div class="product-set">
								<div class="product-info">
									<dl class="dl-horizontal">
										<?php 
										foreach ($jawaban as $j) {
											?>
											<dt><?php echo $j->parameter_name?>:</dt>
											<dd><?php echo $j->kriteria_name?></dd>
											<?php
										}
										?>
										
										
									</dl>
								</div><!--end product-info-->
							</div><!--end product-info-->
						</div>
					</div><!--end blog-content-->
				</article>
			</div>
		<?php } ?>
	</div>
</div><!--end container-->
<?php $this->load->view('public/templates/footer'); ?>
