<?php
//   <!-- db connection -->

include_once("includes/dbh.inc.php");
?>

<?php

if(isset($_GET['updateid'])){
    $userid=$_GET['updateid'];

    $query = "select * from users where usersId = '{$userid}' limit 1"; 

    $result= mysqli_query($conn,$query);


    $row=mysqli_fetch_assoc($result);
    $name=$row["usersName"];
    $email=$row["usersEmail"];
    $username=$row["usersUid"];
    $passowrd=$row["usersPwd"];
}

        if(isset($_POST['submit'])){

            $userid=$_POST['id'];
            $name = $_POST['name'];
            $email = $_POST['email'];
            $username = $_POST['uid'];
            $passowrd = $_POST['pwd'];


            $query = "UPDATE users set usersId= '{$userid}',usersName='{$name}',usersEmail='{$email}',usersUid='{$username}',usersPwd='{$passowrd}' WHERE usersId = '{$userid}'";

            $result= mysqli_query($conn,$query);
    
            if($result)
            {
                header("location:admindisplay.php");
                
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

<div class="registration-form">
        <h1>Registration Form</h1>
        <hr>

    <form action="update.php" method="post">

        <input type="hidden" id="fname" name="id" placeholder="Name" <?php echo 'value="' . $userid . '"'; ?> required>

         <p>Name:</p>   
        <input type="text" id="fname" name="name" placeholder="Name" <?php echo 'value="' . $name . '"'; ?> required>
        <p>Email:</p>
        <input type="text" id="fname" name="email" placeholder="Email" <?php echo 'value="' . $email . '"'; ?> required>
        <p>User Name:</p>
        <input type="text" id="fname" name="uid" placeholder="Username" <?php echo 'value="' . $username . '"'; ?> required>
        <p>Password</p>
        <input type="password" id="fname" name="pwd" placeholder="Password" <?php echo 'value="' . $passowrd . '"'; ?> required>
        <button name="submit" type="submit" class="reg-btn">UPDATE</button>

        </form>
</section>
</body>
</html>