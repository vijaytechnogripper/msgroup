  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Team</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url();?>Dashboard">Home</a></li>
              <li class="breadcrumb-item active">Team</li>
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
          elseif ($this->session->flashdata('error_msg')){ ?>
            <div class="alert alert-danger alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h5><i class="icon fas fa-ban"></i> Error!</h5>
              <?php echo $this->session->flashdata("error_msg");?>
            </div>
         <?php }
         else { ?>
            <div class="alert alert-info alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h5><i class="icon fas fa-info"></i> Welcome !</h5>
              You can update Contact Info from here !
            </div>
         <?php }
        ?>

        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <div class="col-md-5">
            <!-- MAP & BOX PANE -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Add Team Member</h3>

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
                    <form method="post" enctype="multipart/form-data" action="<?php echo base_url();?>cms/insert_team" >
                      <div class="card-body">
                        <div class="form-group">
                          <label for="name">Name</label>
                          <input type="text" class="form-control" id="name" name="name" value="<?php echo set_value('name');?>" placeholder="Enter Full Name">
                          <span class="text-danger" for="name"><?php echo form_error("name"); ?></span>
                        </div>
                        <div class="form-group">
                          <label for="designation">Designantion</label>
                          <input type="text" class="form-control" id="designation" name="designation" value="<?php echo set_value('designation');?>" placeholder="Enter Designation">
                          <span class="text-danger" for="designation"><?php echo form_error("designation"); ?></span>
                        </div>
                        <div class="form-group">
                          <label>Role Rank</label>
                            <select id="role" name="role" class="form-control">
                                <option value="">Select Role Rank</option>
                                <option value="01">01</option>
                                <option value="02">02</option>
                                <option value="03">03</option>
                                <option value="04">04</option>
                                <option value="05">05</option>
                                <option value="06">06</option>
                            </select>
                            <span class="text-danger" for="role"><?php echo form_error("role"); ?></span>
                        </div>
                        

                        <div class="form-group">
                          <label for="email">Email Id</label>
                          <input type="text" class="form-control" id="email" name="email" value="<?php echo set_value('email');?>" placeholder="Enter Email ID">
                          <span class="text-danger" for="email"><?php echo form_error("email"); ?></span>
                        </div>
                        <div class="form-group">
                          <label for="mobile">Mobile</label>
                          <input type="text" class="form-control" id="mobile" name="mobile" value="<?php echo set_value('mobile');?>" placeholder="Enter Mobile Number">
                          <span class="text-danger" for="mobile"><?php echo form_error("mobile"); ?></span>
                        </div>
                        <div class="form-group">
                          <label for="whatsapp">WhatsApp</label>
                          <input type="text" class="form-control" id="whatsapp" name="whatsapp" value="<?php echo set_value('whatsapp');?>" placeholder="Enter Whatsapp Number">
                          <span class="text-danger" for="whatsapp"><?php echo form_error("whatsapp"); ?></span>
                        </div>
                        <div class="form-group">
                          <label for="Facebook">Facebook</label>
                          <input type="text" class="form-control" id="facebook" name="facebook" value="<?php echo set_value('facebook');?>" placeholder="Enter Facebook Link">
                          <span class="text-danger" for="facebook"><?php echo form_error("facebook"); ?></span>
                        </div>
                        <div class="form-group">
                          <label for="twitter">Twitter</label>
                          <input type="text" class="form-control" id="twitter" name="twitter" value="<?php echo set_value('twitter');?>" placeholder="Enter Twitter Link">
                          <span class="text-danger" for="twitter"><?php echo form_error("twitter"); ?></span>
                        </div>
                        <div class="form-group">
                          <label for="instagram">Instagram</label>
                          <input type="text" class="form-control" id="instagram" name="instagram" value="<?php echo set_value('instagram');?>" placeholder="Enter Instagram Link">
                          <span class="text-danger" for="instagram"><?php echo form_error("instagram"); ?></span>
                        </div>
                        <div class="form-group">
                          <label for="linkedin">Linkedin</label>
                          <input type="text" class="form-control" id="linkedin" name="linkedin" value="<?php echo set_value('linkedin');?>" placeholder="Enter Linkedin Link">
                          <span class="text-danger" for="linkedin"><?php echo form_error("linkedin"); ?></span>
                        </div>
                        <div class="form-group">
                          <label for="photo">Photo</label>
                          <input type="file" class="form-control" id="photo" name="photo" value="<?php echo set_value('photo');?>" placeholder="Enter Linkedin Link">
                          <span class="text-danger" for="photo"><?php echo form_error("photo"); ?></span>
                        </div>
                        <div class="form-group">
                          <label>Status</label>
                            <select id="status" name="status" class="form-control">
                                <option value="">Select Status</option>
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                            <span class="text-danger" for="role"><?php echo form_error("role"); ?></span>
                        </div>
                      </div>
                      <!-- /.card-body -->

                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
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
          <div class="col-md-7">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Team Quick Info</h3>

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
                      <div class="card-body">
                        <table id="example2" class="table table-bordered table-striped">
                          <thead>
                          <tr>
                            <th>Name</th>
                            <th>Designation</th>
                            <th>Quick Connect</th>
                          </tr>
                          </thead>
                          <tbody>
                          <?php
                           foreach ($team->result() as $row)  
                           {  
                          ?><tr>
                            <td><?php echo $row->name;?></td>
                            <td><?php echo $row->designation;?></td>
                            <td><?php echo $row->mobile;?></td>
                          </tr>
                           <?php }  
                            ?>  
                          </tbody>
                          <tfoot>
                          <tr>
                            <th>Contact</th>
                            <th>Designation</th>
                            <th>Quick Connect</th>     
                          </tr>
                          </tfoot>
                        </table>
                      </div>
                      <!-- /.card-body -->
                  </div>
                </div><!-- /.d-md-flex -->
              </div>
              
              <!-- /.card-body -->
            </div>

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
  <!-- /.control-sidebar