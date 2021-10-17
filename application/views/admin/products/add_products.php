Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Add Products</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url();?>Dashboard">Home</a></li>
              <li class="breadcrumb-item active">Add Products</li>
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
        <?php 
          if ($this->session->flashdata('success_msg')) { ?>
            <div class="alert alert-success alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h5><i class="icon fas fa-check"></i> Success!</h5>
              <?php echo $this->session->flashdata("success_msg");?>
            </div>
          <?php }
        ?>

        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <div class="col-md-12">
            <!-- MAP & BOX PANE -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Add Products</h3>

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
                    <form method="POST" action="<?php echo base_url();?>Products/insert_categories" >
                      <div class="row">
                        <div class="col-md-6">
                          <div class="card-body">
                            <div class="form-group">
                              <label for="product_name">Product Name</label>
                              <input type="text" class="form-control" id="product_name" name="product_name" value="<?php echo set_value('product_name');?>" placeholder="Enter Product Name">
                              <span class="text-danger" for="product_name"><?php echo form_error("product_name"); ?></span>
                            </div>
                            <div class="form-group">
                              <label>Parent Category</label>
                                <select id="parent_category" name="parent_category" class="form-control" value="<?php echo set_select('parent_category');?>">
                                    <option value="">Select Parent Category</option>
                                    <option value="none">None</option>
                                    <?php foreach ($category as $category):?>
                                    <option value="<?php echo $category->parent_name; ?>"><?php echo $category->parent_name;?></option>
                                    <?php endforeach;?>
                                </select>
                                <span class="text-danger" for="parent_category"><?php echo form_error("parent_category"); ?></span>
                            </div>
                            <div class="form-group">
                              <label>Category</label>
                                <select id="category" name="category" class="form-control" value="<?php echo set_select('category');?>">
                                    <option value="">Select Category</option>
                                    <
                                </select>
                                <span class="text-danger" for="category"><?php echo form_error("category"); ?></span>
                            </div>
                            <div class="form-group">
                              <label for="internal_diameter">Internal Diameter of Pipes (MM)</label>
                              <input type="text" class="form-control" id="internal_diameter" name="internal_diameter" value="<?php echo set_value('internal_diameter');?>" placeholder="Enter Internal Diameter of Pipes">
                              <span class="text-danger" for="internal_diameter"><?php echo form_error("internal_diameter"); ?></span>
                            </div>
                            <div class="form-group">
                              <label for="">Barrel Wall Thickness (MM)</label>
                              <input type="text" class="form-control" id="barrel_wall_thikness" name="barrel_wall_thikness" value="<?php echo set_value('barrel_wall_thikness');?>" placeholder="Barrel Wall Thickness">
                              <span class="text-danger" for="barrel_wall_thikness"><?php echo form_error("barrel_wall_thikness"); ?></span>
                            </div>
                            <div class="form-group">
                              <label for="pipe_size">Pipe Size</label>
                              <input type="text" class="form-control" id="pipe_size" name="pipe_size" value="<?php echo set_value('pipe_size');?>" placeholder="Pipe Size">
                              <span class="text-danger" for="pipe_size"><?php echo form_error("pipe_size"); ?></span>
                            </div>
                            <div class="form-group">
                              <label for="pipe_shape">Pipe Shape</label>
                              <input type="text" class="form-control" id="pipe_shape" name="pipe_shape" value="<?php echo set_value('pipe_shape');?>" placeholder="Pipe Shape">
                              <span class="text-danger" for="pipe_shape"><?php echo form_error("pipe_shape"); ?></span>
                            </div>
                            <div class="form-group">
                              <label for="pipe_type">Pipe Type</label>
                              <input type="text" class="form-control" id="pipe_type" name="pipe_type" value="<?php echo set_value('pipe_type');?>" placeholder="Pipe Type">
                              <span class="text-danger" for="pipe_type"><?php echo form_error("pipe_type"); ?></span>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="card-body">
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label>Select Product Image</label>
                                  <input type="file" name="product_image" onchange="preview_image(event)">
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <img style="max-width: 300px; height:auto;" id="output_image"/>
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="pipe_description">Pipe Description</label>
                              <textarea class="form-control" rows="10" id="pipe_description" name="pipe_description" value="<?php echo set_value('pipe_description');?>" placeholder="Enter Pipe Description"></textarea>
                              <span class="text-danger" for="pipe_description"><?php echo form_error("pipe_description"); ?></span>
                            </div> 
                          </div>
                        </div>

                      </div>

                      <div class="card-body">
                      	
                      </div>
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
  <!-- /.control-sidebar