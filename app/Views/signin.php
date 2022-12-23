<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-md-center">
            <div class="col-5">
            <h2>Sign In</h2>

<?php if(session()->getFlashdata('msg')):?>
    <div class="alert alert-danger">
    <?= session()->getFlashdata('msg')?>
    </div>
<?php endif;?>

            <form action="/auth" method="post">
                <label>Email</label>
                <input type="text" name="email" class="form-control" value="">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
                <br>
                <button type="submit" class="btn btn-primary" name="button">Login</button>
            </form>
            </div>
        </div>
    </div>
</body>
</html>