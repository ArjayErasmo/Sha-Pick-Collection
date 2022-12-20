<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
    <link rel="stylesheet" href="<?php echo base_url('css/design.css')?>"></link>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
</head>
<body>
    <div class="hero">
            <form action="<?= base_url('check')?>" method="post" autocomplete="off">
                <?= csrf_field(); ?>

                <?php if(!empty(session()->getFlashdata('fail'))) : ?>
                    <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
                <?php endif ?>

                <div class="adminlogo">
                <a href="#" style="color:black;"><i class="bi bi-person-circle"></i></a>
                </div>
                <div class="message-icon">
                <span>Sign in</span>
                </div>
                <br>
                <div id="input-field">
                    <i class="bi bi-person"></i>
                    <input type="text" class="form-control" name="email" placeholder="Enter your email" value="<?= set_value('email');?>">
                    <span class="text-danger"><?= isset($validation)? display_error($validation,'email') : ''?></span>
                </div>
                <div id="input-field">
                    <i class="bi bi-lock"></i>
                    <input type="password" class="form-control" name="password" placeholder="Enter your password">
                    <span class="text-danger"><?= isset($validation)? display_error($validation,'password') : ''?></span>
                </div>
                <br>
                <div class="form-group">
                    <button class="send-btn" type="submit" >Sign in</button>
                </div>
                <br>
                <div id="input-field">
                <a href="<?=site_url('register');?>">Have no account, create new account</a>
                </div>
            </form>
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>