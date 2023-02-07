<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Men's Wear Products</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="<?=base_url('css/style.css')?>" rel="stylesheet">
    <link href="lib/slick/slick.css" rel="stylesheet">
    <link href="lib/slick/slick-theme.css" rel="stylesheet">
</head>
<body>
    <!-- Top bar Start -->
    <div class="top-bar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <i class="fa fa-envelope"></i>
                        shainamariesamarita14@gmail.com
                    </div>
                    <div class="col-sm-6">
                        <i class="fa fa-phone-alt"></i>
                        0905 474 2754
                    </div>
                </div>
            </div>
        </div>
        <!-- Top bar End -->

        <!-- Nav Bar Start -->
        <div class="nav">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                            <a href="<?=base_url('mainpage')?>" class="nav-item nav-link">Home</a>
                            <a href="<?=base_url('productlist')?>" class="nav-item nav-link">Products</a>
                            <a href="<?=base_url('cart')?>" class="nav-item nav-link">Cart</a>
                            <a href="<?=base_url('checkout')?>" class="nav-item nav-link">Checkout</a>
                            <a href="<?=base_url('myaccount')?>" class="nav-item nav-link">My Account</a>
                            <a href="<?=base_url('wishlist')?>" class="nav-item nav-link">Wishlist</a>
                            <a href="<?=base_url('contact')?>" class="nav-item nav-link">Contact us</a>
                        </div>
                        <div class="navbar-nav ml-auto">
                            <div class="nav-item dropdown">
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End --> 

        <!-- Bottom Bar Start -->
        <div class="bottom-bar">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <div class="logo">
                            <a href="index.html">
                                <img src="<?=base_url('img/shoplogo.png')?>" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="search">
                            <input type="text" placeholder="Search">
                            <button><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="user">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bottom Bar End --> 
</body>
</html>