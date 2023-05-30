<?php
    session_start();
    if(isset($_SESSION['user'])){
        header('location:profile.php');
        exit();
    }
    if(isset($_POST['submit'])){
        include 'dbcon.php';
        $email=filter_var($_POST['email'],FILTER_SANITIZE_STRING);
        $password=filter_var($_POST['password'],FILTER_SANITIZE_EMAIL);

        $errors =[];
        
        //validate email
        if(empty($email)){
            $errors[]="Most write the email";
        }

        //validate password
        if(empty($password)){
            $errors[]="Most write the pass";
        }

    //insert or error
    if(empty($errors)){
        
        $stm="SELECT * FROM register WHERE email='$email'";
        $q=$conn->prepare($stm);
        $q->execute();
        $data=$q->fetch();
        if(!$data){
            $errors[]="error of login";
        }else{
            $password_hash =$data['password'];

            if(password_verify($password,$password_hash)){
                $errors[]="error of login";
            }else{
                $_SESSION['user']=[
                    "username"=>$data['username'],
                    "email"=>$email,
                ];
              
                header('location:profile.php');

            }
        }
    }
}

?>
<html>
    <head>
    <style>
        button{
         font-size: 14px;   
            margin: 10px 0 0; 
            width: 220px;;     
            border: none;
            padding: 10px;
            background-color: brown;
            color: #000;
            font-family: sans-serif; 
        }
        </style>
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
    crossorigin="anonymous">
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
            margin-left: 50px;
            box-shadow:5px 5px 30px rgb(106, 125, 129); 
        }
        h1{ 
            font-size: 40px;
            color:#000;
        }
        input[type="text"],input[type="email"],input[type="password"]{
            font-size: 14px;   
            color: #fff;
            margin: 10px 0 0; 
            width: 300px;;     
            border: none;
            padding: 1em;
            border-bottom: solid 1px #fff;  
            background: rgba(255, 255, 255, 0) ;
        }
        input[type="submit"],.log ,.log1 {
            width: 40%;
            height: 30px;
            background-color: brown;
            color: #000;
            font-family: sans-serif;
        }
        input[type="submit"] :hover{
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
            padding: 7px;}
       .r:hover,.r1:hover{
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
        .log{
            margin:6px;
            padding:4px;
           
        }
       
        .form-group{
            color:#fff;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <fieldset>
                    <legend><img src="images/person.png" style="width: 150px;height: 150px;border-radius: 50%;"></legend>
                    <h1><center>Log in</center></h1>
                    <form action="login.php" method="POST">
                        <?php
                            if(isset($errors)){
                                if(!empty($errors)){
                                    foreach($errors as $msg){
                                        echo $msg . "<br>";
                                    }
                                }
                            }
                        ?>
                        <br>
                        <div class="form-group">
                            <label for="email" >Email address:</label>
                            <input type="email" class="form-control" id="email" name="email" value="<?php if(isset($_POST['email'])){echo $_POST['email']; }?>" placeholder="Enter your email address">
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" name="submit" value="Login">
                        </div>
                        <br> 
                        <div class="log">
                            <center>
                                <a href="Register.php">create account</a><br>
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
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" 
    integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
    crossorigin="anonymous"></script>
</body>
</html>