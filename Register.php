<?php
session_start();
if(isset($_SESSION['user'])){
    header('location:profile.php');
    exit();
}
if(isset($_POST['submit'])){

    include 'dbcon.php';
    $username=filter_var($_POST['username'],FILTER_SANITIZE_STRING);
    $email=filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
    $password=filter_var($_POST['password'],FILTER_SANITIZE_STRING);

    $errors =[];
    //validate name
    if(empty($username)){
        $errors[]="Must write the name";
    }elseif(strlen($username)>100){
        $errors[]="The name is too long";
    }

    //validate email
    if(empty($email)){
        $errors[]="Must write the email";
    }elseif(filter_var($email,FILTER_VALIDATE_EMAIL)==false){
        $errors[]="The email is not correct";
    }

    $stm="SELECT email FROM register WHERE email='$email'";
    $q=$conn->prepare($stm);
    $q->execute();
    $data=$q->fetch();

    if($data){
        $errors[]="Email already exists";
    }
    //validate password
    if(empty($password)){
        $errors[]="Must write the password";
    }elseif(strlen($password)<6){
        $errors[]="The password is too short";
    }

    //insert or error
    if(empty($$errors)){
        // echo "insert";
        $password=password_hash($password,PASSWORD_DEFAULT);
        $stm = "INSERT INTO `register`(`username`, `email`, `password`) VALUES ('$username','$email','$password')";
        $conn->prepare($stm)->execute();
        $_POST['username']='';
        $_POST['email']='';

        $_SESSION['user']=[
            "username"=>$username,
            "email"=>$email,
        ];
        
        header('location:profile.php');
    }
}

?>

<html>
<head>
    <title>Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        body{
            background-image:url(images/222.jpg);
            background-size: cover;
            background-position: center;
        }

        fieldset{
            width: 550px;
            height: 600px;
            border-radius: 15px;
margin: 50px auto;
            box-shadow:5px 5px 30px rgb(106, 125, 129); 
        }

        h1{
            font-size: 40px;
        }

        input[type="text"], input[type="email"], input[type="password"]{
            font-size: 14px;   
            color: #fff;
            margin: 10px 0 0; 
            width: 300px;;     
            border: none;
            padding: 1em;
            border-bottom: solid 1px #fff;  
            background: rgba(255, 255, 255, 0) ;
        }

        input[type="submit"], .log{
            width: 40%;
            height: 40px;
            background-color: brown;
            color: #fff;
            font-family: sans-serif;
            border-radius: 20px;
            margin: 10px auto;
            display: block;
        }

        input[type="submit"]:hover{
            background-color: cornflowerblue;
        }

        a{
            text-decoration: none;
            color: #000;
        }

        .r{
            width: 50px;
            height: 30px;
            position: absolute;
            top: 20px;
            left: 90%;
            border: 1;
            padding: 7px;
        }

        .r:hover, .r1:hover{
            background-color: brown;
        }

        .r1{
            width: 50px;
            height: 30px;
            position: absolute;
            top: 60px;
            left: 90%;
            padding: 7px;
        }

       
    </style>
</head>
<body>
    <div class="container">
        <fieldset>
            <legend>
                <img src="images/person.png" style="width: 150px;height: 150px;border-radius: 50%;">
            </legend>
            <h1><center>Create an account</center></h1>
            <form action="Register.php" method="POST">
                <?php
                    if(isset($errors)){
                        if(!empty($errors)){
                            foreach($errors as $msg){
                                echo '<div class="alert alert-danger" role="alert">'.$msg.'</div>';
                            }
                        }
                    }
                ?>
                <div class="form-group">
                    <input type="text" value="<?php if(isset($_POST['username'])){echo $_POST['username']; }?>" name="username"  placeholder="Enter your name" class="form-control">
                </div>
                <div class="form-group">
                    <input type="text" value="<?php if(isset($_POST['email'])){echo $_POST['email']; }?>" name="email"  placeholder="Enter your email address" class="form-control">
                </div>
                <div class="form-group">
                    <input type="password" name="password"  placeholder="Enter your password" class="form-control">
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" value="Save" class="btn btn-primary">
                </div>
                <div class="log">
                    <center>
                        <a href="login.php">Login</a>
                    </center>
                </div>
                <div class="log">
                    <center>
                        <a href="home.php">HOME</a><br>
                    </center>
                </div>
            </form>
        </fieldset>
    </div>
</body>
</html>