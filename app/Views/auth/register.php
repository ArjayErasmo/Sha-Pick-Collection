<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row" style="margin-top-45px">
            <h4>Sign Up</h4><hr>
            <form action="<?=base_url('save');?>" method="post" autocomplete="off">
                <?= csrf_field(); ?>

                <?php if(!empty(session()->getFlashdata('fail'))) : ?>
                    <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
                <?php endif ?>
                <?php if(!empty(session()->getFlashdata('success'))) : ?>
                    <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
                <?php endif ?>


                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter your name" value="<?= set_value ('name'); ?>">
                    <span class="text-danger"><?= isset($validation)? display_error($validation,'name') : ''?></span>
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Enter your email" value="<?= set_value ('email'); ?>">
                    <span class="text-danger"><?= isset($validation)? display_error($validation,'email') : ''?></span>
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Enter your password" value="<?= set_value ('password'); ?>">
                    <span class="text-danger"><?= isset($validation)? display_error($validation,'password') : ''?></span>
                </div>
                <div class="form-group">
                    <label for="">Confirm Password</label>
                    <input type="password" class="form-control" name="cpassword" placeholder="Enter confirm password" value="<?= set_value ('cpassword'); ?>">
                    <span class="text-danger"><?= isset($validation)? display_error($validation,'cpassword') : ''?></span>
                </div>
                <br>
                <div class="form-group">
                <button class="btn btn-primary btn-block" type="submit">Sign in</button>
                </div>
                <br>
                <a href="<?=site_url('login');?>">I already have an account, log in now</a>
            </form>
        </div>
    </div>
</body>
</html>