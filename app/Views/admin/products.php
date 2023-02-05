<?= $this->include('admin/inc/top')?>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
    <?= $this->include('admin/inc/navbar')?>
    <?= $this->include('admin/inc/sidebar')?>

    

</div>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Dashboard</h1>
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
    <div>
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>

                <p>New Orders</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>53<sup style="font-size: 20px">%</sup></h3>

                <p>Bounce Rate</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>

                <p>User Registrations</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>

                <p>Unique Visitors</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
          <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <br>
              
              <div align="right"><button type="submit" class="btn btn-success"><a href="addproduct" style="color:white">Add Products</a></button>&nbsp;&nbsp;&nbsp;&nbsp;</div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>description</th>
                    <th>quantity</th>
                    <th>price</th>
                    <th>image</th>
                    <th>action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($products as $pr): ?>
                  <tr>
                  <td><?= $pr['id']?></td>
                    <td><?= $pr['name']?></td>
                    <td><?= $pr['description']?></td>
                    <td><?= $pr['quantity']?></td>
                    <td><?= $pr['price']?></td>
                    <td><img src="<?= base_url(). '/'  . 'img/'. $pr['image']?>" width = "150" height = "150"></td>
                    <td>
                      <a href="<?= base_url('admin/edit/'. $pr['id'])?>" class="btn btn-success btn-sm">Edit</a>
                    </td>
                  </tr>
                    <?php endforeach;?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>description</th>
                    <th>quantity</th>
                    <th>price</th>
                    <th>image</th>
                    <th>action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

          </div>
        </div>
      </div>
    </section>
    

</body>

<?= $this->include('admin/inc/end')?>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
