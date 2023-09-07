<!-- db connection -->
<?php
    include_once("includes/dbh.inc.php");
?> 

<!----- php actions----->

<?php
    // session_start();
    if(isset($_POST["submit"]))
    {
        $Username = mysqli_real_escape_string($conn,$_POST['usersUid']);
        $Password = mysqli_real_escape_string($conn,$_POST['usersPwd']);

        $query = "select * from users where usersEmail = '{$Username}' and usersPwd = '{$Password}' limit 1";
        // SELECT * FROM `users` WHERE usersUid = 'vidura2'and usersPwd ='vidura123'; 
        

        $result_set = mysqli_query($conn,$query);

        if($result_set){
            if(mysqli_num_rows($result_set)==1){
                $user = mysqli_fetch_assoc($result_set);
                $_SESSION['usersId'] = $user["usersId"];

                if($Username == 'admin@gmail.com'){
                    header("location:admindisplay.php?login=true");
                }else{
                    header("location:homepage.php?login=true");
                }
                
            }else{
                header("location:login.php?login=fales");
            }
        }
        // else{
        //     header("location:login.php?login=fales");
        //     exit();
        // }

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wild Safari In SL</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<section class="login-header">
<nav>
        <a href="index.html"><img class="logo" src="img/logo.png.jpg" alt="logo"></a>
       
    </nav>

    <div class="box">
        <div class="container">
            <div class="input-field">
                <div class="form">   
                    <form action="login.php" method="post">
                    
                        <input type="text" id="fname" name="usersUid" placeholder="Email" required>
                        <i class="fa fa-user"></i>
                    <br>        
                        <input type="password" id="lname" name="usersPwd" placeholder="Password" required>
                        <i class="fa fa-lock"></i>
                    <br>
                        <button name="submit" type="submit" class="submit">Login</button>
                    </form>
                </div>
                <div class="">
                    <span>You don't have an account</span>
                    <a href="singup.php" class="hero-btn">Register</a> 
              </div>
        </div>
    </div>
</section>
</body>
</html>

