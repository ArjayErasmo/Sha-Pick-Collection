<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sign in</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url('css/design.css')?>"></link>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="hero">
            <form action="/auth" method="post" autocomplete="off">

                <?php if(session()->getFlashdata('msg')):?>
                    <div class="alert alert-danger">
                <?= session()->getFlashdata('msg')?>
                </div>
                <?php endif;?>

                <div class="adminlogo">
                    <a href="#" style="color:black;"><i class="bi bi-person-circle"></i></a>
                </div>
                <div class="message-icon">
                    <span>Sign in</span>
                </div>
                <br>

                <div id="input-field">
                    <i class="bi bi-person"></i>
                    <input type="text" name="email" class="form-control" value="" placeholder="Email">
                </div>
                <div id="input-field">
                    <i class="bi bi-lock"></i>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>
                <br>
                <button type="submit" class="send-btn" name="button">Login</button>
                <br>
                <br>
                <div id="input-field">
                <a href="<?=site_url('registers');?>">Have no account, create new account</a>
                </div>
            </form>
    </div>
</body>
</html>