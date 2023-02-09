<?= $this->include('User/inc/top'); ?>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <?= $this->include('User/inc/navbar'); ?>
    </div>

    <!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">

<!-- Sidebar -->
<div class="sidebar">
  <!-- Sidebar user panel (optional) -->
  <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
      <img src="<?php base_url(); ?>/dist/img/1.jpg" class="img-circle elevation-2" alt="User Image">
    </div>
    <div class="info">
      <a style="color: white;" href="#" class="d-block"><?= session()->get('name') ?></a>
    </div>
  </div>
  <!-- SidebarSearch Form -->
  <div class="form-inline">
    <div class="input-group" data-widget="sidebar-search">
      <input class="form-control form-control-sidebar" type="search" placeholder="Search" style="background-color: white; border: white;" aria-label="Search">
      <div class="input-group-append">
        <button class="btn btn-sidebar">
          <i class="fas fa-search fa-fw"></i>
        </button>
      </div>
    </div>
  </div>

  <!-- Sidebar Menu -->
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
      <li class="nav-item mt-5">
        <a href="<?= site_url('order_status') ?>" class="nav-link ">
        <i class="nav-icon fas fa-calendar-check"></i>
          <p>Status</p>
        </a>
      </li>

      <li class="nav-item">
        <a href="<?= site_url('order_history') ?>" class="nav-link active" style="background-color: #3f474e;">
        <i class="nav-icon fas fa-file-alt"></i>
          <p>My Orders</p>
        </a>
      </li>

      <li class="nav-item">
        <a href='myaccount' class="nav-link" >
          <i class="nav-icon fas fa-user"></i>
          <p>Profile Settings</p>
        </a>
      </li>
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      </div>
      <li class="nav-item">
        <a href="<?= site_url('signin') ?>" class="nav-link">
          <i class="nav-icon fas fa-power-off"></i>
          <p>
            Log Out
          </p>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>DataTables</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">DataTables</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Order History</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Total</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($placeorder as $orders):?>
                                        <tr>
                                            <td><img src="<?= base_url().'/'.'img/'.$orders['image'] ?>" height="130" width="95"></td>
                                            <td><?= $orders['name'] ?></td>
                                            <td><?= $orders['total'] ?></td>
                                            <td><?= $orders['state'] ?></td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                   
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <?= $this->include('User/inc/end'); ?>