<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.min.css">
    <title>Document</title>
    <style>
       a{
        text-decoration: none;
        }
        li{
            list-style: none;
        }
        .flex{
            display: flex;
        }
        .flex_space{
            display: flex;
         }
        .content{
            max-width: 100%;
            max-height: 120px;
            margin: auto;
            background-color: rgb(13, 86, 99);

        }
        header{
            height: 10vh;
            line-height: 10vh;
            padding: 0 20px;
        }
        header img{
            margin: 20px 0;
        }
        header ul{
            display: inline-block;
        }

        header ul li{
            display: inline-block;
            text-transform: uppercase;
            padding: 10px 40px;
        }
        header ul li a{
            color: #000;
            margin: 0 10px;
            transition: 0.5s;
        }
        header ul li a:hover{
            color:  #e2ea42;
        }
        header i{
            margin: 0 20px;
        }
        header .navlinks span{
            display: none;
        }
        @media only screen and(max-width=768px){
            header ul{
                position: absolute;
                top: 100px;
                left: 0;
                width: 100%;
                height: 100vh;
                background: rgb(55, 199, 166);
                overflow: hidden;
                transition: max-height 0.5s;
                text-align: center;
                z-index: 9;
            }
            header ul li{
            display: block;
            }
            header li a{
                color: white;
            }
            header i{
                color: white;
            }
            header .navlinks span{
                color : black;
                display: block;
                cursor: pointer;
                line-height: 10vh;
                font-size:25px
            }
            .content{
                max-height:400px:
            }
        }

    </style>
</head>
<body>
    <header>
        <div class="content flex_space">
            <div class="logo">
            <img src="images/moon.png" style="width: 150px;height: 90px;border-radius: 50%;">
            </div>
            <div class="navlinks">
                <ul id="menulist">
                    <li><i class="fa fa-home"></i><a href="home.php" class="home">HOME</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                    <li><a href="room.php">ROOM</a></li>
                    <li><a href="login.php">Login</a></li>
                    <?php
                        if(isset($_SESSION)){
                    ?>
                    <li><a href="profile.php">My account</a></li>
                    
                    <?php
                        }else{
                    ?>
                    <li><a href="Register.php">Register</a></li>
                    
                    <?php
                        }
                    ?>
                </ul>
            </div>
        </div>
    </header>
    
</body>
</html>