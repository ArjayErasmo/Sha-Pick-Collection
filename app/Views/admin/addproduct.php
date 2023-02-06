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
            <h1><b>Products</b></h1>
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
                <h3 class="card-title">Add Products</h3>
                <div align="right"><a class="btn btn-secondary" href="products" role="button">Go back</a></div>
              </div>
              <!-- /.card-header --> 
              <div class="card-body">
              <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
              <?php if (!empty(session()->getFlashdata('msg', 'Successfully Added!'))) : ?>
               <script> swal("Product Added Successfully", "", "success");</script>
                <?php endif;?>
                <form action="<?= site_url('admin/saveproduct') ?>" method ="post" autocomplete="off" enctype="multipart/form-data">
                  <?php if(isset($validation)):?>
                      <div class="alert alert-warning">
                         <?= $validation->listErrors() ?>
                      </div>
                  <?php endif; ?>
                    <label>Name</label>
                    <span></span>
                    <input type="text" name="name" class="form-control" placeholder="Enter Product Name">
                    <br>
                    <label>Description</label>
                    <span></span>
                    <input type="text" name="description" class="form-control" placeholder="Enter Product Description">
                    <br>
                    <label>Quantity</label>
                    <span></span>
                    <input type="text" name="quantity" class="form-control" placeholder="Enter Product Quantity">
                    <br>
                    <label>Price</label>
                    <span></span>
                    <input type="text" name="price" class="form-control" placeholder="Enter Product Price">
                    <br>
                    <label>Category</label>
                    <span></span>
                    <input type="text" name="category" class="form-control" placeholder="Enter Product Category">

                    <br>
                    <label for="image">Upload Image</label>
                    <input type="file" name="image" id="image"size="30">

                    <br>
                    <div><button type="submit" style="float:right" class="btn btn-info">Add new product</button></div>
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