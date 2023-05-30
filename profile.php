<?php
include 'dbcon.php';
session_start();
if(!isset($_SESSION['user'])){
    header('location:login.php');
    exit();
}
if(isset($_POST['book'])){      
    $datein=$_POST['checkin'];
    $dateout=$_POST['checkout'];
    $num=$_POST['Ncustomer'];
    global $errors;
    //validate date
    if(empty($datein) || empty($dateout) || empty($num)){
        $errors="Must write the check in-out date";
    }else{
        $stm="SELECT checkin FROM booking WHERE checkin='$datein'";
        $q=$conn->prepare($stm);
        $q->execute();
        $data=$q->fetch();
        if(!$data){
            $stm = "INSERT INTO `booking`( `checkin`, `checkout`, `Ncustomer`) VALUES ('$datein','$dateout','$num')";
            $conn->prepare($stm)->execute();
            $_POST['checkin']='';
            $_POST['checkout']='';
            $_POST['Ncustomer']='';
            header('location:home.php');      
        }else{
            $errors="This room is reserved in this date";
        }
    }
    echo $errors;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <style>
        input[type="date"],
        input[type="number"],
        input[type="text"],
        input[type="email"],
        input[type="password"] {
            font-size: 14px;   
            color: #fff;
            margin: 10px 0 0; 
            width: 100%;     
            border: none;
            padding: 1em;
            border-bottom: solid 1px #fff;   
            background: rgba(255, 255, 255, 0) ;
        }
        .right{
            position: absolute;
            top:40%;
            left:30%;
        }
        .pro{
            color: #fff;
        }
        body{
            background-image:url(images/222.jpg);
            background-size: cover;
            background-position: center;
        }
        fieldset{
            width: 550px;
            height: 600px;
            border-radius: 15px;
            margin-left: auto;
            margin-right: auto;
            margin-top: 50px;
            box-shadow:5px 5px 30px rgb(106, 125, 129); 
        }
        h1{ 
            font-size:40px;
        }
        input[type="submit"],
        .log {
            width: 40%;
            height: 40px;
            margin-top: 10px;
            background-color: brown;
            color: #fff;
            font-family: sans-serif;
            border: none;
            border-radius: 5px;
        }
        input[type="submit"]:hover,
        .log:hover {
            background-color: cornflowerblue;
        }
        a{
            text-decoration: none;
            color: #000;
        }
        .r,
        .r1{
            width: 50px;
            height: 30px;
            position: absolute;
            top: 20px;
            right: 10px;
            padding: 7px;
            background-color: rgb(240, 240, 104);
            border: none;
            border-radius: 5px;
        }
        .r:hover,
        .r1:hover{
            background-color: brown;
        }
        .r1{
            top: 60px;
        }
    </style>
</head>
<body>
    <div class="container">
        <fieldset>
            <legend><img src="images/person.png" style="width: 150px;height: 150px;border-radius: 50%;"></legend>
            <div class="row pro">
                <div class="col-md-12">
                    <h1><center>My account</center></h1>
                </div>
                <div class="col-md-6">
                    <p>name : <?php echo $_SESSION['user']['username']; ?></p>
                </div>
                <div class="col-md-6">
                    <p>email : <?php echo $_SESSION['user']['email']; ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <form action="<?php echo $_SERVER["PHP_SELF"] ; ?>" method="post">
                        <div class="form-group">
                            <input type="date" name="checkin" class="form-control" placeholder="Check-in">
                        </div>
                        <div class="form-group">
                            <input type="date" name="checkout" class="form-control" placeholder="Check-out">
                        </div>
                        <div class="form-group">
                            <input type="number" name="Ncustomer" class="form-control" placeholder="Number of customer" max="10" min="1">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="book" class="btn btn-primary" value="Booking">
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="log">
                        <center>
                           <a href="logout.php">Logout</a>
                        </center>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="log">
                        <center>
                            <a href="home.php">Home</a>
                        </center>
                    </div>
                </div>
            </div>
        </fieldset>
    </div>
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>