<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Wild Safari In SL</title>
<link rel="stylesheet" href="profile.css">
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
                <li><a href="visit.php">Visit</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="profile.php">Profile</a></li>
            </ul>
        </div>
    </nav>

    <div class="profile">
       <i i class="fa fa-user"></i>
        <h1>My Profile</h1>

        <form action="singup.php" method="post">
         <p>Name:</p>   
        <input type="text" id="fname" name="name" placeholder="Name" >
        <p>Email:</p>
        <input type="text" id="fname" name="email" placeholder="Email" >
        <p>User Name:</p>
        <input type="text" id="fname" name="uid" placeholder="Username" >
        <!-- <p>Password</p>
        <input type="password" id="fname" name="pwd" placeholder="Password" >
        <p>Repeate Password</p>
        <input type="password" id="lname" name="pwdrepeat" placeholder="Repeat Password" >
        <br> -->
        <a href="" class="details-btn">Change Details</a>
        <a href="login.php" class="logout-btn">Log Out</a>

    </div>

</section>
</body>
</html>