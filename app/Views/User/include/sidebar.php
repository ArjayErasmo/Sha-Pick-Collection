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
          <a href="<?= site_url('order_status') ?>" class="nav-link" style="background-color: #3f474e;">
          <i class="nav-icon fas fa-calendar-check"></i>
            <p>Status</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="<?= site_url('order_history') ?>" class="nav-link" style="background-color: #3f474e;">
          <i class="nav-icon fas fa-file-alt"></i>
            <p>History</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="<?= site_url('profile') ?>" class="nav-link active" style="background-color: #3f474e;">
            <i class="nav-icon fas fa-user"></i>
            <p>Profile Settings</p>
          </a>
        </li>
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        </div>
        <li class="nav-item">
          <a href="<?= site_url('logout') ?>" class="nav-link">
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