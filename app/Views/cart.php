<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Cart - Sha Pick Colletion</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="eCommerce HTML Template Free Download" name="keywords">
        <meta content="eCommerce HTML Template Free Download" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/slick/slick.css" rel="stylesheet">
        <link href="lib/slick/slick-theme.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
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
                            <a href="mainpage" class="nav-item nav-link">Home</a>
                            <a href="productlist" class="nav-item nav-link">Products</a>
                            <a href="cart" class="nav-item nav-link active">Cart</a>
                            <a href="checkout" class="nav-item nav-link">Checkout</a>
                            <a href="contact" class="nav-item nav-link">Contact us</a>
                            <a href="myaccount" class="nav-item nav-link">My Account</a>
                        </div>
                        <div class="navbar-nav ml-auto">
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">User Account</a>
                                <div class="dropdown-menu">
                                    <a href="signin" class="dropdown-item">Sign in</a>
                                    <a href="registers" class="dropdown-item">Register</a>
                                </div>
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
                                <img src="img/shoplogo.png" alt="Logo">
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
                            <a href='cart' class="btn cart">
                                <i class="fa fa-shopping-cart"></i>
                            </a>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
        <!-- Bottom Bar End -->
        
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap">
            <div class="container-fluid">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="mainpage">Home</a></li>
                    <li class="breadcrumb-item"><a href="productlist">Products</a></li>
                    <li class="breadcrumb-item active">Cart</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb End -->
        
        <!-- Cart Start -->
        <form method="post" action="checkout">
        <div class="cart-page">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="cart-page-inner">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th></th>
                                            <th>Product</th>
                                            <th>Details</th>
                                            <th>Price</th>
                                            <th>Total</th>
                                            <th>Remove</th>
                                        </tr>
                                    </thead>
                                    <tbody class="align-middle">
                                        <form action="checkout" method="post">
                                        <?php foreach($cart_item as $item):?>
                                          
                                            <input type="hidden" name="userid" value="<?=$item['user_id']?>">
                                            <input type="hidden" name="amount[]" value="<?=$item['price']?>">
                                        <tr>
                                        <td class="product-remove" style="border-left:1px solid black; font-family: Poppins, sans-serif; border-bottom: black;"><input class="checkCart" data-id="<?=$item['cartid']?>" data-price="<?=$item['price']?>" type="checkbox" value="<?= $item['menu_id'] ?>" name="menuid[]"></td>
                                            <td>
                                                <div class="img">
                                                    <a href="#"><img src="<?='/' . 'img/' . ($item['image'])?>" alt="Image"></a>
                                                    <p><?=$item['name']?></p>
                                                </div>
                                            </td>
                                            <td><?=$item['detail']?></td>
                                            <td><?=$item['price']?></td>
                                           
                                            <td><?=$item['total']?></td>
                                            <td><a href="deleteCart/<?=$item['cartid']?>" ><i class="fa fa-trash"></i></a></td>
                                        </tr>
                                        <?php endforeach;?>
                                        <button type="submit" id="submit" class="d-none"></button>
                                        <form>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="cart-page-inner">
                            <div class="row">
                                <!--<div class="col-md-12">
                                    <div class="coupon">
                                        <input type="text" placeholder="Coupon Code">
                                        <button>Apply Code</button>
                                    </div>
                                </div>-->
                                <div class="col-md-12">
                                    <div class="cart-summary">
                                        <div class="cart-content">
                                            <h1>Cart Summary</h1>

                                            <h2>Grand Total<span id="total">0</span></h2>
                                            <input type="number"class="d-none" id="temp" >
                                        </div>
                                        <div class="cart-btn">
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button id="triggerSubmit">Checkout</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 </form>
        <!-- Cart End -->
        
        <!-- Footer Start -->
        <div class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>Get in Touch</h2>
                            <div class="contact-info">
                                <p><i class="fa fa-map-marker"></i>Sitio Mahogany Leuteboro 2, Socorro Oriental Mindoro,Philippines</p>
                                <p><i class="fa fa-envelope"></i>shainamariesamarita14@gmail.com</p>
                                <p><i class="fa fa-phone"></i>0905 474 2754</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>Follow Us</h2>
                            <div class="contact-info">
                                <div class="social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href="https://www.facebook.com/profile.php?id=100076261489001"><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                    <a href=""><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>Company Info</h2>
                            <ul>
                                <li><a href="<?= site_url('aboutUs'); ?>">About Us</a></li>
                                <li><a href="<?= site_url('privacypolicy'); ?>">Privacy Policy</a></li>
                                <li><a href="<?= site_url('termscondition'); ?>">Terms & Condition</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>Purchase Info</h2>
                            <ul>
                                <li><a href="<?= site_url('paymentpolicy'); ?>">Payment Policy</a></li>
                                <li><a href="<?= site_url('shippingpolicy'); ?>">Shipping Policy</a></li>
                                <li><a href="<?= site_url('returnpolicy'); ?>">Return Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <!--<div class="row payment align-items-center">
                    <div class="col-md-6">
                        <div class="payment-method">
                            <h2>We Accept:</h2>
                            <img src="img/payment-method.png" alt="Payment Method" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="payment-security">
                            <h2>Secured By:</h2>
                            <img src="img/godaddy.svg" alt="Payment Security" />
                            <img src="img/norton.svg" alt="Payment Security" />
                            <img src="img/ssl.svg" alt="Payment Security" />
                        </div>
                    </div>
                </div>-->
            </div>
        </div>
        <!-- Footer End -->
        
        <!-- Footer Bottom Start -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 copyright">
                        <!--<p>Copyright &copy; <a href="https://htmlcodex.com">HTML Codex</a>. All Rights Reserved</p>-->
                    </div>

                    <div class="col-md-6 template-by">
                        <!--<p>Template By <a href="https://htmlcodex.com">HTML Codex</a></p>-->
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->       
        
        <!-- Back to Top -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/slick/slick.min.js"></script>
        
        <!-- Template Javascript -->
        <script src="js/main.js"></script>
        <script>
            $(".checkCart").on('change', function() {
            var price = Number(this.dataset.price);
            var id = this.dataset.price;
            var result = $(this).prop("checked")
            if(result == true) {
                if($("#temp").val() == 0){
                    $("#temp").val(price)
                    var total = price
                   
                }
                else{
                    var total = Number($("#temp").val()) + price
                    $("#temp").val(total)
                }
            }
            else{
                var total =  Number($("#temp").val()) - price
                $("#temp").val(total)
            }
            $("#total").text(total)
            
          
            })

            $("#triggerSubmit").click(function() {
                $("#submit").click();
            })
        </script>
    </body>
</html>
