<?php $this->load->view('public/templates/header'); ?> 
<div class="container">
    <form action="<?php echo base_url()?>public/carts/update" name="form_cart" method="POST">
    <div class="row">

        <div class="span12">
            <?php if ($this->session->flashdata('success')): ?>
                <div  class="alert alert-success">
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
            <?php endif; ?>

            <?php if ($this->session->flashdata('error')): ?>
                <div  class="alert alert-error">
                    <?php echo $this->session->flashdata('error'); ?>
                </div>
            <?php endif; ?>
            <?php if ($this->cart->contents()): ?>
            
            <table class="table">
                <thead>
                    <tr>
                        <th><h5>Image</h5></th>
                        <th class="desc"><h5>Description</h5></th>
                        <th><h5>Quantity</h5></th>
                        <th><h5>Stock</h5></th>
                        <th><h5>Unit Price</h5></th>
                        <th><h5>Sub Price</h5></th>
                        <th><h5>Action</h5></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1 ?>
                    <?php foreach ($this->cart->contents() as $items): ?>
                        <?php echo form_hidden($i . '[rowid]', $items['rowid']); ?>
                        <tr>
                            <td>
                                <a href="<?php echo base_url()?>public/products/detail/<?php echo $items['link']; ?>">
                                    <?php if ($this->cart->has_options($items['rowid']) == TRUE): ?>
                                        <?php foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value): ?>
                                            <img src="<?php echo base_url() ?>upload/produk/thumb/<?php echo $option_value; ?>" style="width: 92px; height: 92px;" title="<?php echo $items['name']; ?>" alt=""/>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </a>
                            </td>
                            <td class="desc">
                                <h4><a href="<?php echo base_url()?>public/products/detail/<?php echo $items['link']; ?>" class="invarseColor">
                                        <?php echo $items['name']; ?>
                                    </a></h4>
                                <ul class="unstyled">
                                    <li>
                                    <?php if(!empty($items['stock'])){?>
                                        Available In Stock
                                    <?php }else{?>
                                        Not Available In Stock
                                    <?php }?>
                                    </li>
                                    <li>Code. <?php echo $items['product_code']; ?></li>
                                </ul>
                            </td>
                            <td><?php echo form_input(array('name' => $i . '[qty]', 'value' => $items['qty'], 'class' => 'input-mini')); ?></td>
                            <td class="stock">
                                <h3><?php echo number_format($items['stock']);?></h3>
                            </td>
                            <td class="sub-price">
                                <h3>Rp<?php echo number_format($items['price']);?></h3>
                            </td>
                            <td class="total-price">
                                <h3>Rp<?php echo number_format($items['subtotal']);?></h3>
                            </td>
                            <td><a href="<?php echo site_url('public/carts/delete/' . $items['rowid']); ?>" class="btn btn-small btn-danger" onclick="return confirm('Are you sure want to delete this?')"><i class="icon-trash"></i> Remove</a></td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td><h3><strong>Total</strong></h3></td>
                            <td><h3><strong>Rp<?php echo number_format($this->cart->total()); ?></strong></h3></td>
                            <td><button class="btn btn-small" type="submit" data-title="Refresh" data-placement="top" rel="tooltip"><i class="icon-refresh"></i> Refresh</button></td>
                        </tr>
                </tbody>
            </table>
           
        </div><!--end span12-->

        <div class="span7"></div>
        <div class="span5">
            <div class="cart-receipt">
                <table class="table table-receipt">
                    <tr>
                        <td class="alignRight"><a href="<?php echo base_url(); ?>public/products" class="btn">Continue Shopping</a></td>
                    </tr>
                </table>
            </div>
        </div><!--end span5-->
        
        <?php else: ?>
        <div class="span7">Your shopping cart is empty !</div>
        <div class="span5">
            <div class="cart-receipt">
                <table class="table table-receipt">
                    <tr>
                        <td class="alignLeft"><a href="<?php echo base_url(); ?>public/products" class="btn">Back To Shop</a></td>
                    </tr>
                </table>
            </div>
        </div><!--end span5-->
        <?php endif; ?>
    </div><!--end row-->
    </form>
</div><!--end conatiner-->
<?php $this->load->view('public/templates/footer'); ?>