<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat&family=Poppins:wght@300&display=swap');
        *{
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        body{
            width: 100%;
            min-height: 100vh;
            background: linear-gradient(130deg, #e5cbcbca, #FF6F61) ;
        }
        .wrapper{
            width: 100%;
        }
        .title h1{
            color: #111;
            font-size: 46px;
            font-weight: bold;
            text-transform: uppercase;
            text-align: center;
            padding: 40px 0px;
        }
        .about{
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 50px;
            padding: 0px 80px;
        }
        .image-section{
            width: 90%;
            height: auto;
            margin: auto;
        }
        .image-section img{
            height: 230px;
            width: 280px;
            border-radius: 10%;
            border: 1px solid gray;
            display: block;
            margin: auto;
        }
        article{
            width: 90%;
        }
        article h3{
            font-size: 22px;
            font-weight: bold;
            color: #112;
        }
        article p{
            font-weight: bold;
            font-size: 17px;
            color: #111;
            margin-top: 25px;
        }
        article .button{
            margin-top: 35px;
        }
        article a{
            color: #111;
            padding: 10px 25px;
            font-size: 19px;
            font-weight: 300;
            text-decoration: none;
            border: 1px solid gray;
            border-radius: 5px;  
        }
        article a:hover{
            color: #fff;
            background-color: gray;
            transition: 0.5s ease;
        }
        @media screen and (max-width: 768px){
            .wrapper{
                margin-top: 15px;
            }
            .title h1{
                font-size: 28px;
                text-align: center;
            }
            .about{
                flex-direction: column;
                margin-top: 10px;
            }
            article{
                margin-top: 30px;
            }
            article h3{
                font-size: 18px;
            }
            article p{
                font-size: 15px;
            }
            article .button{
                margin-bottom: 50px;
            }
            article a{
                padding: 8px 20px;
                font-size: 17px;
                
            }
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="title">
            <h1>About Sha Pick Collection</h1>
        </div>
        <div class="about">
            <div class="image-section">
                <img src="img/shoplogo.png" alt="">
            </div>
            <article>
                <h3>Sha Pick Collection</h3>
                <p>Sha Pick Collection is an online e-commerce system application wherein the <br>
                owner is Ms. Shaina Marie J. Samarita, an online entrepreneur at a very young age. <br>
                Her shop consists of different variety of products like shoes, dresses, shirts, shorts and many more. <br> 
                She founded her shop in the year 2016 during her high school days. <br>
                <p>Browse and buy in my shop where all my products are all authentic and good quality in an affordable prices </p> 
                <p>Happy Shopping!</p>
                <div class="button">
                    <a href="">Learn More</a>
                </div>
            </article>
        </div>
    </div>
</body>
</html>