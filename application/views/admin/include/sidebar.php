<?php 
foreach ($user as $row) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MS Group -  <?php echo $title;?> </title>
  <link rel="icon" href="<?php echo base_url();?>assets/admin/my_assets/img/vijay.png" type="image/gif">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/dist/css/adminlte.min.css">
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Preloader -->
<!--   <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="<?php echo base_url();?>assets/admin/my_assets/img/vijaynimje_logo.png" alt="MS Group">
  </div> -->

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo base_url();?>Dashboard" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo base_url();?>login/logout" class="nav-link">Logout</a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img style="background:#fff;" src="<?php echo base_url();?>assets/images/fav.png" alt="M S Group icon" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">MS Group</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img style="object-fit: cover; width:80px !important; height:80px !important; border-radius:100px;" src="<?php echo base_url();?>assets/admin/upload/userimage/<?php echo $row['userimage']?>" class="img-circle" alt="User Image">
        </div>
      </div>
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a style="align: center;" href="#" class="d-block"><?php echo $row['firstname'] ?> <?php echo $row['lastname'] ?></a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="<?php echo base_url()?>Dashboard" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-people-arrows text-success"></i>
              <p>
                CMS
                <i class="right fas fa-angle-left text-success"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url()?>Clients/add_client" class="nav-link">
                  <i class="fas fa-user-plus nav-icon text-success"></i>
                  <p>Sliders</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url()?>cms/achivements" class="nav-link">
                  <i class="fas fa-user-plus nav-icon text-success"></i>
                  <p>Achivements</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url()?>Clients/view_clients" class="nav-link">
                  <i class="fas fa-users nav-icon text-success"></i>
                  <p>Team</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-people-arrows text-success"></i>
              <p>
                Products
                <i class="right fas fa-angle-left text-success"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url()?>Clients/add_client" class="nav-link">
                  <i class="fas fa-user-plus nav-icon text-success"></i>
                  <p>Add Clients</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url()?>Clients/view_clients" class="nav-link">
                  <i class="fas fa-users nav-icon text-success"></i>
                  <p>View Clients</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-people-arrows text-success"></i>
              <p>
                Clients
                <i class="right fas fa-angle-left text-success"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url()?>Clients/add_client" class="nav-link">
                  <i class="fas fa-user-plus nav-icon text-success"></i>
                  <p>Add Clients</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url()?>Clients/view_clients" class="nav-link">
                  <i class="fas fa-users nav-icon text-success"></i>
                  <p>View Clients</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user-graduate text-warning"></i>
              <p>
                Resources
                <i class="right fas fa-angle-left text-warning"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/charts/chartjs.html" class="nav-link">
                  <i class="nav-icon fas fa-user-edit text-warning"></i>
                  <p>Add Resource</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/flot.html" class="nav-link">
                  <i class="nav-icon fas fa-user-cog text-warning"></i>
                  <p>View Resources</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th text-info"></i>
              <p>
                Projects
                <i class="right fas fa-angle-left text-info"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/charts/chartjs.html" class="nav-link">
                  <i class="fas fa-project-diagram nav-icon text-info"></i>
                  <p>Add Projects</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/flot.html" class="nav-link">
                  <i class="fas fa-tasks nav-icon text-info"></i>
                  <p>View Projects</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-money-bill-alt text-lime"></i>
              <p>
                Payments
                <i class="right fas fa-angle-left text-lime"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/charts/chartjs.html" class="nav-link">
                  <!-- <i class="far fa-circle nav-icon text-lime"></i> -->
                  <i class="fas fa-cash-register nav-icon text-lime"></i>
                  <p>Add Payments</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/flot.html" class="nav-link">
                  <i class="fas fa-money-check-alt nav-icon text-lime"></i>
                  <p>View Payments</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-line text-fuchsia"></i>
              <p>
                Reports
                <i class="right fas fa-angle-left text-fuchsia"></i>

              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/charts/chartjs.html" class="nav-link">
                  <i class="fas fa-chart-pie nav-icon text-fuchsia"></i>
                  <p>Total Projects</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/flot.html" class="nav-link">
                  <i class="fas fa-chart-bar nav-icon text-fuchsia"></i>
                  <p>Total Earnings</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url();?>login/logout" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt text-danger"></i>
              <p>Logout</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <?php }?>