  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Add Client</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url();?>Dashboard">Home</a></li>
              <li class="breadcrumb-item active">Add Client</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">CPU Traffic</span>
                <span class="info-box-number">
                  10
                  <small>%</small>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Likes</span>
                <span class="info-box-number">41,410</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Sales</span>
                <span class="info-box-number">760</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">New Members</span>
                <span class="info-box-number">2,000</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <div class="col-md-8">
            <!-- MAP & BOX PANE -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Add Client</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="d-md-flex">
                  <div class="p-1 flex-fill" style="overflow: hidden">
                    <form method="POST" action="<?php echo base_url();?>Clients/insert_client">
                      <div class="card-body">
                      <div class="form-group">
                          <label for="exampleInputEmail1">Comapany Name</label>
                          <input type="text" class="form-control" id="company" name="company" value="<?php echo set_value('company');?>" placeholder="Enter Client's Comapny Name">
                          <span class="text-danger" for="country"><?php echo form_error("company"); ?></span>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Contact Person Name</label>
                          <input type="text" class="form-control" id="client_name" name="client_name" value="<?php echo set_value('client_name') ;?>" placeholder="Enter Contact Person Name" >
                          <span class="text-danger" for="country"><?php echo form_error("client_name"); ?></span>
                        </div>
                        <div class="row">
                          <div class="form-group col-6">
                            <label for="exampleInputEmail1">Email Id</label>
                            <input type="text" class="form-control" id="email" name="email" value="<?php echo set_value('email') ;?>" placeholder="Enter Client's Email Id">
                            <span class="text-danger" for="country"><?php echo form_error("email"); ?></span>
                          </div>
                          <div class="form-group col-6">
                            <label for="exampleInputEmail1">Confirm Email Id</label>
                            <input type="text" class="form-control" id="c_email" name="c_email" value="<?php echo set_value('c_email');?>" placeholder="Confirm Client's Email Id">
                            <span class="text-danger" for="country"><?php echo form_error("c_email"); ?></span>
                          </div>
                        </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Office Number</label>
                            <input type="text" class="form-control" id="office_number" name="office_number" value="<?php echo set_value('office_number');?>" placeholder="Enter Office Number">
                            <span class="text-danger" for="office_number"><?php echo form_error("office_number"); ?></span>
                            <p class="text-danger">*Do not add Country Code</p>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Mobile Number</label>
                            <input type="text" class="form-control" id="mobile" name="mobile" value="<?php echo set_value('mobile');?>" placeholder="Enter Client's Mobile Number">
                            <span class="text-danger" for="country"><?php echo form_error("mobile"); ?></span>
                            <p class="text-danger">*Do not add Country Code</p>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Whatsapp Number </label>
                            <p><input type="checkbox" id="same_num" name="same_num" onclick="myFunction()">Same As Mobile Number</p>
                            <input type="text" class="form-control" id="whatsapp" name="whatsapp" value="<?php echo set_value('whatsapp');?>" placeholder="Enter Client's Whatsapp Number">
                            <span class="text-danger" for="country"><?php echo form_error("whatsapp"); ?></span>
                            <p class="text-danger">*Do not add Country Code</p>
                          </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Address</label>
                          <input type="text" class="form-control" id="address" name="address" value="<?php echo set_value('address');?>" placeholder="Enter Client's Address">
                          <span class="text-danger" for="country"><?php echo form_error("address"); ?></span>
                        </div>
                        <div class="row">
                          <div class="col-sm-6">
                            <!-- select -->
                            <div class="form-group">
                              <label>Country</label>
                              <select id="country" name="country" class="form-control">
                                <option value="">Select Country</option>
                                <?php foreach ($countries as $countries):?>
                                <option value="<?php echo $countries->id; ?>"><?php echo $countries->name;?></option>
                                <?php endforeach;?>
                              </select>
                              <span class="text-danger" for="country"><?php echo form_error("country"); ?></span>
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label for="state">State</label>
                              <select id="state" name="state" disabled="" class="form-control">
                                <option value="">Select State</option>
                              </select>
                              <span class="text-danger" for="country"><?php echo form_error("state"); ?></span>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-6">
                            <!-- select -->
                            <div class="form-group">
                              <label for="city">City/District</label>
                              <select id="city" name="city" disabled="" class="form-control">
                                <option value="">Select City/District</option>
                              </select>
                              <span class="text-danger" for="country"><?php echo form_error("city"); ?></span>
                            </div>
                          </div>
                           <div class="form-group col-6">
                            <label for="exampleInputEmail1">PIN / Zip Code</label>
                            <input type="text" class="form-control" id="pin_zip" name="pin_zip" value="<?php echo set_value('pin_zip');?>" placeholder="Enter PIN / Zip Code">
                            <span class="text-danger" for="country"><?php echo form_error("pin_zip"); ?></span>
                          </div>
                          <div class="form-group col-6">
                            <label for="exampleInputEmail1">Select Logo</label>
                            <input type="file" class="form-control" id="logo" name="logo" value="<?php echo set_value('logo');?>">
                            <span class="text-danger" for="logo"><?php echo form_error("logo"); ?></span>
                          </div>
                        </div>
                      </div>
                      <!-- /.card-body -->

                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                    </form>
                  </div>
                </div><!-- /.d-md-flex -->
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->

          <div class="col-md-4">
            <!-- Info Boxes Style 2 -->
            <div class="info-box mb-3 bg-warning">
              <span class="info-box-icon"><i class="fas fa-tag"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Inventory</span>
                <span class="info-box-number">5,200</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
            <div class="info-box mb-3 bg-success">
              <span class="info-box-icon"><i class="far fa-heart"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Mentions</span>
                <span class="info-box-number">92,050</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
            <div class="info-box mb-3 bg-danger">
              <span class="info-box-icon"><i class="fas fa-cloud-download-alt"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Downloads</span>
                <span class="info-box-number">114,381</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
            <div class="info-box mb-3 bg-info">
              <span class="info-box-icon"><i class="far fa-comment"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Direct Messages</span>
                <span class="info-box-number">163,921</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->