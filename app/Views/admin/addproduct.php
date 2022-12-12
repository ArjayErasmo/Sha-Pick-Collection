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
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <?php if(session()->getFlashdata('msg')):?>
                    <div class="alert alert-warning">
                        <?= session()->getFlashdata('msg')?>
                    </div>
                <?php endif;?>
                <form action="saveproduct" method ="post">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter product name">
                    <label>Description</label>
                    <input type="text" name="description" class="form-control" placeholder="Enter product description">
                    <label>Quantity</label>
                    <input type="text" name="quantity" class="form-control" placeholder="Enter product quantity">
                    <label>Price</label>
                    <input type="text" name="price" class="form-control" placeholder="Enter product price">
                    <label for="image">Select a photo</label>
                    <input type="file" name="image" id="image" class="form-control ">
                    <br>
                    <button type="submit" name="submit" class="btn btn-success">Save</button>
                </form>
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