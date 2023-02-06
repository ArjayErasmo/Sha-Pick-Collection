<?= $this->include('user/include/top'); ?>

<body>
  <?= $this->include('user/include/navbar'); ?>

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">

  <!-- Sidebar -->
<div class="sidebar">
  <!-- Sidebar user panel (optional) -->
  <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
      <img src="<?= base_url('img\Arjay.jpg') ?>" class="img-circle elevation-2" alt="User Image">
    </div>
    <div class="info">
    <a href="#" class="d-block">Arjay Erasmo</a>
    </div>
  </div>

  <!-- SidebarSearch Form -->
  <div class="form-inline">
    <div class="input-group" data-widget="sidebar-search">
      <input class="form-control form-control-sidebar" type="search" placeholder="Search" style=" border: white;" aria-label="Search">
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
        <a href="<?= site_url('order_status') ?>" class="nav-link" >
        <i class="nav-icon fas fa-calendar-check"></i>
          <p>Status</p>
        </a>
      </li>

      <li class="nav-item">
        <a href="<?= site_url('orderH') ?>" class="nav-link">
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
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1></h1>
                    </div>
                    
                </div>
            </div>
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
              
                        <!-- Profile Image -->
                        <div class="card card-dark card-outline">
                            <div class="card-body box-profile">
                                <div class="text-center">
                                    <img class="profile-user-img img-fluid img-circle" src="<?= base_url('img\Arjay.jpg') ?>" alt="User profile picture">
                                </div>

                                <h3 class="profile-username text-center">Arjay Erasmo</h3>

                                <p class="text-muted text-center">erasmoarjhay4@gmail.com</p>
                                
                                <ul class="list-group list-group-unbordered mb-3">
                                    <li class="list-group-item"><i class="fas fa-user-tie fa-sm"></i>
                                        <b> </b> <a class="float-right">arjhay04</a>
                                    </li>
                                    <li class="list-group-item"><i class="fas fa-phone fa-sm"></i>
                                        <b> </b> <a class="float-right">09309669488</a>
                                    </li>
                                    <li class="list-group-item"><i class="fas fa-home fa-sm"></i>
                                        <b> </b> <a class="float-right">Poblacion, San Teodoro, Oriental Mindoro</a>
                                    </li>
                                </ul>
                                <div class="text-center">
                                <a href="<?= site_url('show');?>" class="btn btn"  style="color: #3f474e;"><b>Show Information</b></a>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

                    </div>


<!-- /.col -->
<div class="col-md-9">
                        <div class="card card-dark card-outline">
                            <div class="card-header p-2">
                                <ul class="nav nav-pills">
                                    <h3><li style="font-weight: bold"> Personal Information</li></h3>
                                </ul>   
                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="active tab-pane" id="information">
                                        
                                            <form action="<?= site_url('edit_profile/') ?>" method="post">
                                            <input type="hidden" name="_method" value="PUT" />
                                            <div class="form-group row">
                                                <label for="inputName" class="col-sm-2 col-form-label"><b>Name:</b></label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="name" value="" class="form-control" id="inputName" placeholder="Name">
                                                </div>
                                                
                                            </div>
                                            <div class="form-group row">
                                            <label for="inputEmail" class="col-sm-2 col-form-label">Username:</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="username" value="" class="form-control" id="inputEmail" placeholder="Username">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                            <label for="inputSkills" class="col-sm-2 col-form-label">Phone Number:</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="phone_number" value="" class="form-control" id="inputSkills" placeholder="Phone Number">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputExperience" class="col-sm-2 col-form-label">Address: </label>
                                                <div class="col-sm-8">
                                                    <input class="form-control" name="address" value="" id="inputExperience" placeholder="Address"></input>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class=" col-sm-4 mt-3">
                                                    <button type="submit" style="background-color: #CB8C58;" class="btn btn">Edit Profile</button>

                                                </div>
                                            </div>
                                            
                                        </form>
                                        
                                    </div>
                                    <!-- /.tab-pane -->
                                </div>
                                <!-- /.tab-content -->
                            </div><!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
    </div>

    <?= $this->include('user/include/end'); ?>

</body>