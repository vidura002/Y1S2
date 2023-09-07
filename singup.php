<!-- db connection -->
<?php
    include_once("includes/dbh.inc.php");
?> 

<!-- php signup action -->
<?php

if(isset($_POST["submit"]))
{

    $error = array();

    // $name = $_POST["name"];
    // $email = $_POST["email"];
    // $uid = $_POST["uid"];
    // $pwd = $_POST["pwd"];

    if(empty($_POST["name"])){
        $error[] = "Name cannot be empty";
    }

    if(empty($_POST["email"])){
        $error[] = "Email cannot be empty";
    }

    if(empty($_POST["uid"])){
        $error[] = "Username cannot be empty";
    }

    if(empty($_POST["pwd"])){
        $error[] = "Passowrd cannot be empty";
    }
    if(($_POST["pwd"])!= ($_POST["pwdrepeat"])){
        $error[] = "Passowrd & repassword not matching";
    }

    if(empty($error)){

        $name = mysqli_real_escape_string($conn,$_POST["name"]);
        $email = mysqli_real_escape_string($conn,$_POST["email"]);
        $uid = mysqli_real_escape_string($conn,$_POST["uid"]);
        $pwd = mysqli_real_escape_string($conn,$_POST["pwd"]);

        $query = "insert into users(usersName,usersEmail,usersUid,usersPwd) values('{$name}','{$email}','{$uid}','{$pwd}')";

        $result= mysqli_query($conn,$query);

        if($result){
            header('location:login.php?register=true');
        }else{
            $error[]="Registration fail";
        }
    }


}
       
?>  


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Wild Safari In SL</title>
<link rel="stylesheet" href="signup.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<section class="header">
    <nav>
        <a href="index.html"><img class="logo" src="img/logo.png.jpg" alt="logo"></a>
        <div class="nav-links">
            <ul>
            <li><a href="homepage.php">Home</a></li>
            </ul>
        </div>
    </nav>

    <div class="registration-form">
        <h1>Registration Form</h1>
        <hr>

    <form action="singup.php" method="post">
         <p>Name:</p>   
        <input type="text" id="fname" name="name" placeholder="Name" required>
        <p>Email:</p>
        <input type="text" id="fname" name="email" placeholder="Email" required>
        <p>User Name:</p>
        <input type="text" id="fname" name="uid" placeholder="Username" required>
        <p>Password</p>
        <input type="password" id="fname" name="pwd" placeholder="Password" required>
        <p>Repeate Password</p>
        <input type="password" id="lname" name="pwdrepeat" placeholder="Repeat Password" required>
        <br>
        <button name="submit" type="submit" class="reg-btn">Register</button>

        </form>
        <div class="login-bar">
        <p>Already have an account? <a href="login.php">Login</a></p>
        </div>

</section>

</body>
</html>