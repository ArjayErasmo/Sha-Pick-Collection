<?= $this->include('admin/inc/top'); ?>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <?= $this->include('admin/inc/navbar'); ?>
    <?= $this->include('admin/inc/sidebar'); ?>
  </div>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><b>Products</b></h3>
          </div>
          <div class="col-sm-6"> 
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Product</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section>
      <div class="content">
        <div class="container-fluid">

        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <?php if(session()->getFlashdata('msg', 'Updated Successfully!')):?>
        <script> swal("Product Updated Successfully", "", "success");</script>
        <?php endif; ?>
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Edit Products</h3>
                  <div align="right"><a class="btn btn-danger" href="<?= site_url('admin/products') ?>" role="button">Cancel</a></div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <div>

                    <form action="<?= site_url('update/'.$products['id']) ?>" method="post">
                    <input type="hidden" name="_method" value="PUT" />
                      <label>Name</label>
                      <input type="text" name="name" value="<?= $products['name']; ?>" class="form-control" placeholder="Enter Product Name">
                      <label>Description</label>
                      <input type="text" name="description" value="<?= $products['description']; ?>" class="form-control" placeholder="Enter Product Description">
                      <label>Quantity</label>
                      <input type="text" name="quantity" value="<?= $products['quantity']; ?>" class="form-control" placeholder="Enter Product Quantity">
                      <label>Price</label>
                      <input type="text" name="price" value="<?= $products['price']; ?>" class="form-control" placeholder="Enter Product Price">
                      <br>
                      <div><button type="submit" class="btn btn-info">Update product</button>
                    </form>

                  </div>
                <!-- /.card-body -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
</body>
<?= $this->include('admin/inc/end'); ?>