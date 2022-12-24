<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/rstyle.css')?>">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  	<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
	
</head>
<body>
	<img class="wave" src="">
	<div class="container">
		<div class="img">
			<img src="<?php echo base_url('img/bg.svg')?>">
		</div>
		<div class="login-content">
			<form action="store" method="post" autocomplete="off">
				<img src="img/avatar.svg">
				<h2 class="title">Register</h2>
				<br>

				<?php if(isset($validation)):?>
                    <div class="alert alert-warning">
                        <?= $validation->listErrors() ?>
                    </div>
                <?php endif; ?>

                <div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Name</h5>
           		   		<input type="text" name="name" class="input">
           		   </div>
           		</div>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Email</h5>
           		   		<input type="text" name="email" class="input">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" name="password" class="input">
            	   </div>
            	</div>
                <div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Confirm Password</h5>
           		    	<input type="password" name="confirmpassword" class="input">
            	   </div>
            	</div>
            	<input type="submit" class="btn" value="Login">
				<br>
				<a href="signin">Already have an account? Log in</a>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="<?php echo base_url('js/imain.js')?>"></script>
</body>
</html>
