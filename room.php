<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
    body{
        background-image: url(images/hotel.jpeg);
    }
    img{
        width: 250px;
        height: 300px;
        border: 1;
    }
    .type li{
        font-size: 30px;
        font-family: sans-serif;
    }
    .a{
        background-color: rgb(18, 141, 163);
        width: 30%;
        height: 400px;
        float: left;
        border-radius: 10px;
        padding-top: 10px;
        margin: 7px;
    }
    .a:hover{
        background-color: rgb(14, 74, 85);
    }
    .b{
        background-color: rgb(76, 163, 18);
        width: 30%;
        height: 400px;
        float: left;
        border-radius: 10px;
        padding-top: 10px;
        margin: 7px;
    }
    .b:hover{
        background-color: rgb(43, 87, 14);
    }
    .c{
        background-color: rgb(163, 18, 49);
        width: 30%;
        height: 400px;
        float: left;
        border-radius: 10px;
        padding-top: 10px;
        margin: 7px;
    }
    .c:hover{
        background-color: rgb(107, 19, 38);
    }
    p{
        font-family: sans-serif;
    }
    input[type="checkbox"]{
        font-size: 10px;
        font-family: sans-serif;
    }
    button{
        font-size: 20px;
        padding: 5px;
        margin: 6px;
        background: #fff;
        border-radius: 5px;
    }
    button:hover{
        background: gray;
    }
    .nav-tabs{
        border: none;
    }
    </style>
</head>
<body>
    <?php 
    include("header.php");
    ?>
    <br>
    <br>
    <br>

    <ul class="nav nav-tabs type">
        <li class="nav-item">
            <a class="nav-link active" href="#normal" data-toggle="tab">NORMAL :</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#medium" data-toggle="tab">MEDIUM :</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#five_stars" data-toggle="tab">FIVE_STARS :</a>
        </li>
    </ul>

    <div class="tab-content">
        <div id="normal" class="tab-pane active">
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="normal/n1.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Salary = 10000RY</h5>
                            <form class="for" action="profile.php" method="post">
                                <button  name="BOOKING" value="BOOKING" class="btn btn-primary">BOOKING</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="normal/n2.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Salary = 7000RY</h5>
                            <form class="for" action="profile.php" method="post">
                                <button  name="BOOKING" value="BOOKING" class="btn btn-primary">BOOKING</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="normal/n3.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Salary = 5000RY</h5>
                            <form class="for" action="profile.php" method="post">
                                <button  name="BOOKING" value="BOOKING" class="btn btn-primary">BOOKING</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="medium" class="tab-pane">
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="medium/M1.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Salary = 15000RY</h5>
                            <form class="for" action="profile.php" method="post">
                                <button  name="BOOKING" value="BOOKING" class="btn btn-primary">BOOKING</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="medium/M2.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Salary = 18000RY</h5>
                            <form class="for" action="profile.php" method="post">
                                <button  name="BOOKING" value="BOOKING" class="btn btn-primary">BOOKING</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="medium/M3.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Salary = 20000RY</h5>
                            <form class="for" action="profile.php" method="post">
                                <button  name="BOOKING" value="BOOKING" class="btn btn-primary">BOOKING</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="five_stars" class="tab-pane">
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="five_stars/f1.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Salary = 25000RY</h5>
                            <form class="for" action="profile.php" method="post">
                                <button  name="BOOKING" value="BOOKING" class="btn btn-primary">BOOKING</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="five_stars/f2.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Salary = 28000RY</h5>
                            <form class="for" action="profile.php" method="post">
                                <button  name="BOOKING" value="BOOKING" class="btn btn-primary">BOOKING</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="five_stars/f3.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Salary = 30000RY</h5>
                            <form class="for" action="profile.php" method="post">
                                <button  name="BOOKING" value="BOOKING" class="btn btn-primary">BOOKING</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>