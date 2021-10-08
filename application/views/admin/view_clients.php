  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><?php echo $title;?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url();?>Dashboard">Home</a></li>
              <li class="breadcrumb-item active"><?php echo $title;?></li>
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
        <span class="alert alert-success mx-auto"><?php echo $this->session->flashdata("success_msg");?></span>
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <div class="col-md-12">
            <!-- MAP & BOX PANE -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"><?php echo $title;?></h3>
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
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                        <th>Client ID</th>
                        <th>Company</th>
                        <th>Contact Name</th>
                        <th>Logo</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Quick Connect</th>
                        <th>Status</th>
                        <th>CRUD</th>
                      </tr>
                      </thead>
                      <tbody>
                      <?php
                       foreach ($h->result() as $row)  
                       {  

                      ?><tr>
                        <td><?php echo $row->client_id;?></td>
                        <td><?php echo $row->company;?></td>
                        <td><?php echo $row->client_name;?></td>
                        <td><img style="height: 50px; width:50px;" src="<?php echo base_url();?>assets/uploads/clients/<?php echo $row->logo;?>" alt="Logo Not Found"></td>
                        <td><?php echo $row->email;?></td>
                        <td><a target="new_blank" href="tel:<?php echo $row->mobile;?>"><?php echo $row->mobile;?></a></td>
                        <td align="center" style="word-spacing: 1em;"><label>
                          <a target="new_blank" href="tel:<?php echo $row->mobile;?>">
                            <i class="fas fa-phone-alt text-success"> </i>
                          </a>
                          <a target="new_blank" href="<?php echo $row->whatsapp;?>">
                            <i class="fab fa-whatsapp text-success"> </i>
                          </a>
                          <a target="new_blank" href="mailto:<?php echo $row->email;?>">
                            <i class="fas fa-envelope text-success"></i>
                          </a></label>
                        </td>
                        <td>Active</td>
                        <td align="center" style="word-spacing: 1em;">
                          <i class="fas fa-eye text-success"></i>
                          <i class="fas fa-edit text-info"></i>
                          <i class="fas fa-trash text-danger"></i>
                        </td>
                      </tr>
                       <?php }  
             ?>  
                      </tbody>
                      <tfoot>
                      <tr>
                        <th>Client ID</th>
                        <th>Name</th>
                        <th>Company</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Quick Connect</th>
                        <th>Status</th>
                        <th>CRUD</th>
                      </tr>
                      </tfoot>
                    </table>
                  </div>
                </div><!-- /.d-md-flex -->
              </div>
              <!-- /.card-body -->
            </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
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
