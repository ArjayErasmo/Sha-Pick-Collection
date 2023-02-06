<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single Product</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="<?=base_url('css/style.css')?>" rel="stylesheet">
    <link href="lib/slick/slick.css" rel="stylesheet">
    <link href="lib/slick/slick-theme.css" rel="stylesheet">
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            background-color: #dedada;
            font-family: 'Poppins', sans-serif;
        }
        .small-container{
            background-color: #fff;
            border-radius: 20px;
            align-items: center;
            max-width: 700px;
            margin: auto;
            margin-top: 3%;
            padding-top: 25px;
            padding-left: 25px;
            padding-right: 20px;
            box-shadow: 5px 0 15px 0 #555;
        }
        .row{
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            justify-content: space-around;
        }
        .single-product{
            margin-top: 80px;
        }
        .small-img-row{
            display: flex;
            justify-content: space-around;
        }
        .col-2 img{
            max-width: 100%;
            padding: 50px 0;
            padding-right: 15px;
        }
        .small-img-col{
            flex-basis: 24%;
            cursor: pointer;
        }
        .single-product .col-2 img{
            padding: 0;
        }
        .single-product .col-2{
            padding: 20px;
        }
        .col-2{
            flex-basis: 50%;
            min-width: 300px;
        }
        .col-2 h1{
            font-size: 50px;
            line-height: 60px;
            margin: 25px;
        }
        .col-2 input{
            width: 100px;
            padding-left: 37px ;
        }
        .single-product select{
            display: block;
            padding: 10px;
            margin-top: 20px;
        }
        .single-product h4{
            margin: 20px 0;
            font-size: 22px;
            font-weight: bold;
        }
        .single-product input{
            width: 20px;
            height: 40px;
            padding-left: 10px;
            font-size: 20px;
            margin-right: 5px;
            border: 1px solid #ff523b;
        }
        input:focus{
            outline: none;
        }
        a{
            padding-bottom: 0%;
            text-decoration: none;
            color: #555;
        }
        .single-product .fa{
            color: #ff523b;
            margin-left: 10px;
        }
        p{
            color: #555;
        }
        .btn{
            display: inline-block;
            background: #ff523b;
            color: #fff;
            padding: 8px 30px;
            margin: 30px 0;
            border-radius: 30px;
            transition: background 0.5s;
        }
        .btn:hover{
            background: #563434;
        }
        .single-product h3{
            padding-bottom: 5pxpx;
        }
    </style>
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

    <div class="small-container single product">
        <div class="row">
            <div class="col-2">
                <img src="<?= base_url('/'. 'img/' .$result['image'] )?>" width="100%" alt="Product Photo" id="ProductImg">
                <div class="small-img-row">
                </div>
            </div>
            <div class="col-2">
                <p>Home/ <?=($result['category'] )?></p>
                <br>
                <h2><b><?=  $result['name']?></b></h2>  
                <h3><span>₱</span><?=number_format($result['price'], 2)?></h3>
                <br>
                <!--Sizes&nbsp;&nbsp;&nbsp;&nbsp;
                <select>
                    <option>select size</option>
                    <option>37</option>
                    <option>38</option>
                    <option>39</option>
                    <option>40</option>
                    <option>41</option>
                    <option>42</option>
                    <option>43</option>
                    <option>44</option>
                </select>
                <br>
                <br>-->
                Quantity&nbsp;<input type="number" value="1"></input><br>
                <br>
                <br>
                <h5><b>Product Details</b></h5>
                <div class="description">
                    <p><?= ($result['description'] )?></p>
                </div>
                <br>
                <a class="btn" href='cart'><i class="fa fa-shopping-cart"></i>Add to Cart</a>
            </div>
        </div>
    </div>
</body>
</html>