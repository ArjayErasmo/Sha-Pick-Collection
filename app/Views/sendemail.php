<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Email</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<?php $validation = \Config\Services::validation(); ?>
<body class="bg-dark bg-gradient min-vh-100">
    <div class="container">
        <div class="row my-5">
            <div class="col-lg-6 mmx-auto">
                <div class="card shadow">
                    <div class="card-header">
                        <h3 class="text-secondary">Contact Us</h3>
                    </div>
                    <div class="card-body p-5">

                        <?php if(session()->getFlashdata('success')): ?>
                            <div class="alert alert-success" role="alert">
                            <?= session()->getFlashdata('success'); ?>
                            </div>
                        <?php endif;?>

                        <?php if(session()->getFlashdata('error')): ?>
                            <div class="alert alert-danger" role="alert">
                            <?= session()->getFlashdata('error'); ?>
                            </div>
                        <?php endif;?>

                        <form action="<?= base_url('send')?>" method ="POST" enctype="multipart/form-data" novalidate>
                            <div class="mb-3">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control <?= ($validation->getError('email'))?'is-invalid':''?>" placeholder="Enter your email" value="<?= set_value('email')?>">
                                <?php if($validation->getError('email')): ?>
                                    <div class="invalid-feedback"><?= $validation->getError('email') ?></div>
                                    <?php endif;?>
                            </div>
                            <div class="mb-3">
                                <label for="subject">Subject</label>
                                <input type="text" name="subject" id="subject" class="form-control <?= ($validation->getError('subject'))?'is-invalid':''?>" placeholder="Subject" value="<?= set_value('subject')?>">
                                <?php if($validation->getError('subject')): ?>
                                    <div class="invalid-feedback"><?= $validation->getError('subject') ?></div>
                                    <?php endif;?>
                            </div>
                            <div class="mb-3">
                                <label for="message">Message</label>
                                <textarea name="message" id="message"  rows="4" class="form-control <?= ($validation->getError('message'))?'is-invalid':''?>" placeholder="Message"><?= set_value('message')?></textarea>
                                <?php if($validation->getError('message')): ?>
                                    <div class="invalid-feedback"><?= $validation->getError('message') ?></div>
                                    <?php endif;?>
                            </div> 
                            <div class="mb-3">
                                <label for="file">Choose File</label>
                                <input type="file" name="file" id="file" class="form-control <?= ($validation->getError('file'))?'is-invalid':''?>">
                                <?php if($validation->getError('file')): ?>
                                    <div class="invalid-feedback"><?= $validation->getError('file') ?></div>
                                    <?php endif;?>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class= "btn btn-dark bg-gradient">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>