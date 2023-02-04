<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single Product</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Poppins:wght@300&display=swap" rel="stylesheet">
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
            margin-top: 8%;
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
            width: 50px;
            height: 40px;
            padding-left: 10px;
            font-size: 20px;
            margin-right: 10px;
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
    <div class="small-container single product">
        <div class="row">
            <div class="col-2">
                <img src="<?= base_url($result['image'] )?>" width="100%" alt="Product Photo" id="ProductImg">
                <div class="small-img-row">
                </div>
            </div>
            <div class="col-2">
                <p>Home/ Tshirts</p>
                <br>
                <h2><b><?=  $result['name']?></b></h2>  
                <h3><span>₱</span><?=number_format($result['price'], 2)?></h3>
                <br>
                Sizes&nbsp;&nbsp;&nbsp;
                <select>
                    <option>Select Size</option>
                    <option>XXL</option>
                    <option>XL</option>
                    <option>Large</option>
                    <option>Medium</option>
                    <option>S</option>
                    <option>XS</option>
                </select>
                <br>
                Quantity&nbsp;&nbsp;&nbsp;<input type="number" value="1"></input><br>
                <br>
                <h3>Product Details<i class="fa fa-indent"></i></h3>
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