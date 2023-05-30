<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-bMz5LmKfT+usLz1h2VpB0bKdf2gKmJm7Ua7HqA6C6yYpGfO8UOZaiQ3Qb1jvQKDrh4vLJrX6mz9aE0iRZx5vCw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .left{
            padding: 30px;
        }
        .right{
            height: 55٪;
            padding: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .right img{
            width: 100%;
            height: auto;
            max-width: 600px;
        }

        .heading h1{
            font-size: 100px;
            font-weight: 500;
            opacity: 0.1;
            font-family: serif;
            position: absolute;
            top: 15px;
        }

        .heading h2{
            font-size: 45px;
            font-weight: 400;
            font-family: serif;
            margin: 20px 0;
        }

        .about{
            position: relative;
        }

        .about .left{
            margin-top: 30px;
        }

        .us{
            font-size: 20px;
            line-height: 1.5;
        }

        .services{
            margin-top: 30px;
        }

        .services i{
            font-size: 50px;
            margin-right: 20px;
        }

        @media (max-width: 767px){
            .left, .right{
                width: 100%;
            }

            .heading h1{
                font-size: 50px;
                top: -10px;
            }

            .heading h2{
                font-size: 30px;
            }

            .right img{
               max-width: 100%;
                height: auto;
            }
        }
    </style>
</head>
<body>
    <?php
    include("header.php");
    ?>
    <section class="about">
        <div class="container">
            <div class="row">
                <div class="col-md-6 left">
                    <div class="heading">
                        <h1>WELCOME</h1>
                        <h2>Moon Hotel</h2>
                    </div>
                    <br>
                    <br>
                    <p class="us">The Moon Hotel is located in the west of the city of Aden in Yemen<br>
                        The hotel offers the best services and comfort them aal for you ,<br>
                        and because it matters to us comfortably,the hotel also<br>
                        offers you free Wi-Fi during your stay in the hotel,<br>
                        and the food delivery service to you as soon as possible</p>
                    <div class="services">
                        <h3>Our services</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <i class="fas fa-bicycle"></i>
                                <p>Free delivery</p>
                            </div>
                            <div class="col-md-6">
                                <i class="fas fa-wifi"></i>
                                <p>Free Wi-Fi</p>
                            </div>
                        </div>
                    </div>
               </div>
                <div class="col-md-6 right">
                    <img src="images/view.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>