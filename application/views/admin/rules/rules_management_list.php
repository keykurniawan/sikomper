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
                        <a class="active"  href="<?php echo base_url() ?>admin/rules_management">
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
                                <span class="hidden-sm wht-color">Rules Management</span>
                            </header>
                            <div class="panel-body">
                                <select multiple style="width:1100px;height:400px;" onchange ="select_rule(this.value)">
                                    <?php foreach($array_rules as $key=>$rule){?>
                                        <option value="<?php echo $rule['id_rule']?>"><?php echo $rule['kode']?> | <?php echo $rule['rule_text']?></option>
                                    <?php } ?>
                                </select>
                                <br />
                                <br />
                                <a href="javascript:hapus()" class="btn btn-danger">Delete Selected Rule</a>
                            </div>
                        </section>
                        <section class="panel">
                            <header class="panel-heading tab-bg-dark-navy-blue tab-right ">
                                <span class="hidden-sm wht-color">Add Rules</span>
                            </header>
                          <div class="panel-body">
                              <form class="form-horizontal tasi-form" method="post" action="<?php echo site_url('admin/rules_management/add')?>">
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Tipe Kebutuhan</label>
                                      <div class="col-lg-10">
                                          <select class="form-control m-bot15" name="tipe_kebutuhan">
                                            <?php foreach($tipe_kebutuhan as $k){?>
                                              <option value="<?php echo $k->id_kriteria?>"><?php echo $k->kriteria_name?></option>
                                            <?php } ?>  
                                          </select>
                                          <div align="center">AND</div>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Harga</label>
                                      <div class="col-lg-10">
                                          <select class="form-control m-bot15" name="harga">
                                            <?php foreach($harga as $k){?>
                                              <option value="<?php echo $k->id_kriteria?>"><?php echo $k->kriteria_name?></option>
                                            <?php } ?>  
                                          </select>
                                          <div align="center">AND</div>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Processor</label>
                                      <div class="col-lg-10">
                                          <select class="form-control m-bot15" name="processor">
                                            <?php foreach($processor as $k){?>
                                              <option value="<?php echo $k->id_kriteria?>"><?php echo $k->kriteria_name?></option>
                                            <?php } ?>  
                                          </select>
                                          <div align="center">AND</div>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Memori</label>
                                      <div class="col-lg-10">
                                          <select class="form-control m-bot15" name="memori">
                                            <?php foreach($memori as $k){?>
                                              <option value="<?php echo $k->id_kriteria?>"><?php echo $k->kriteria_name?></option>
                                            <?php } ?>  
                                          </select>
                                          <div align="center">AND</div>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Storage</label>
                                      <div class="col-lg-10">
                                          <select class="form-control m-bot15" name="storage">
                                            <?php foreach($storage as $k){?>
                                              <option value="<?php echo $k->id_kriteria?>"><?php echo $k->kriteria_name?></option>
                                            <?php } ?>  
                                          </select>
                                          <div align="center">AND</div>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Brand</label>
                                      <div class="col-lg-10">
                                          <select class="form-control m-bot15" name="brand">
                                            <?php foreach($brand as $k){?>
                                              <option value="<?php echo $k->id_kriteria?>"><?php echo $k->kriteria_name?></option>
                                            <?php } ?>  
                                          </select>
                                          <div align="center">THEN</div>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Produk</label>
                                      <div class="col-lg-10">
                                          <select class="form-control m-bot15" name="produk">
                                            <?php foreach($produk as $k){?>
                                              <option value="<?php echo $k->id_product?>"><?php echo $k->product_name?></option>
                                            <?php } ?>  
                                          </select>
                                      </div>
                                  </div>
                                  <button type="submit" class="btn btn-primary btn-lg pull-right">Simpan</button>
                              </form>
                          </div>
                      </section>
                    </div>
                </div>
                <!-- page end-->
            </section>
        </section>
        <form id="delete_rule" method="post" action="<?php echo site_url('admin/rules_management/delete')?>">
            <input type="hidden" name="id_rule" id="id_rule" />
        </form>
        <script type="text/javascript">
            var id_rule = null;
            function select_rule(id){
                id_rule = id;
            }
            function hapus(){
                if(id_rule!=null){
                    if(confirm("are you sure to delete selected rules?")){
                        document.getElementById('id_rule').value = id_rule;
                        document.getElementById("delete_rule").submit();
                    }
                }else{
                    alert('no selected rules');
                }
            }
        </script>
        <!--main content end-->
<?php $this->load->view('admin/templates/footer'); ?>