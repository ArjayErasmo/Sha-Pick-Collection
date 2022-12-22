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
                <h2>Register</h2>

                <?php if(isset($validation)):?>
                    <div class="alert alert-warning">
                        <?= $validation->listErrors() ?>
                    </div>
                <?php endif; ?>

            <form action="/store" method="post">
                <label>Name</label>
                <input type="text" name="name" class="form-control" value="<?=set_value('name')?>">
                <label>Email</label>
                <input type="text" name="email" class="form-control" value="<?=set_value('email')?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
                <label>Retype Password</label>
                <input type="password" name="confirmpassword" class="form-control">
                <br>
                <button type="submit" class="btn btn-primary" name="button">Register</button>
            </form>
            </div>
        </div>
    </div>
    
</body>
</html>