<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="<?php echo base_url('css/design.css')?>"></link>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
</head>
<body>
    <div class="hero">
        
            <form action="<?=base_url('save');?>" method="post" autocomplete="off">
                <?= csrf_field(); ?>

                <?php if(!empty(session()->getFlashdata('fail'))) : ?>
                    <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
                <?php endif ?>
                <?php if(!empty(session()->getFlashdata('success'))) : ?>
                    <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
                <?php endif ?>

                <div class="adminlogo">
                <a href="#" style="color:black;"><i class="bi bi-person-circle"></i></a>
                </div>
                <div class="message-icon">
                <span>Sign up</span>
                </div>
                <br>

                <div id="input-field">
                    <i class="bi bi-person-vcard"></i>
                    <input type="text" class="form-control" name="name" placeholder="Enter your name" value="<?= set_value ('name'); ?>">
                    <span class="text-danger"><?= isset($validation)? display_error($validation,'name') : ''?></span>
                </div>
                <div id="input-field">
                    <i class="bi bi-person"></i>
                    <input type="text" class="form-control" name="email" placeholder="Enter your email" value="<?= set_value ('email'); ?>">
                    <span class="text-danger"><?= isset($validation)? display_error($validation,'email') : ''?></span>
                </div>
                <div id="input-field">
                    <i class="bi bi-lock"></i>
                    <input type="password" class="form-control" name="password" placeholder="Enter your password" value="<?= set_value ('password'); ?>">
                    <span class="text-danger"><?= isset($validation)? display_error($validation,'password') : ''?></span>
                </div>
                <div id="input-field">
                    <i class="bi bi-lock"></i>
                    <input type="password" class="form-control" name="cpassword" placeholder="Enter confirm password" value="<?= set_value ('cpassword'); ?>">
                    <span class="text-danger"><?= isset($validation)? display_error($validation,'cpassword') : ''?></span>
                </div>
                <br>
                <button class="send-btn" type="submit">Sign in</button>
                <br>
                <br>
                <div id="input-field">
                <a href="<?=site_url('login');?>">I already have an account, log in now</a>
                </div>
            </form>
        
    </div>
</body>
</html>