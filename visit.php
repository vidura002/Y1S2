<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wild Safari In SL</title>
    <link rel="stylesheet" href="visit.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <!-- --------------------------------nav bar------------------------------ -->
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
                <li><a href="singup.php">Register</a></li>
            </ul>
        </div>
    </nav>
    <div class="text-box">
        <h1>You Can Visit More Places In Srilanka</h1>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        <br> Corrupti voluptates similique officia amet accusantium magnam, deleniti odio deserunt minima natus animi dolores, ad, <br> error quisquam in provident maiores officiis fugiat!</p>
        <a href="" class="hero-btn">Visit Us To Know More</a>
    </div>
</section>

<!-- --------------------------------------------------sliders--------------------------------------------------- -->

<section class="Visit">

<h2>Visiting Places:</h2>
<hr>

<p>Essential Sri Lanka:</p>
<div class="slideshow-container">
  <div class="place1">
    <img src="img\sri lanka 5-L.jpg" style="width:100%">
  </div>

  <div class="place1">
    <img src="img\vishwa2.jpg" style="width:100%">
  </div>

  <div class="place1">
    <img src="img\e1.webp" style="width:100%">
  </div>

  <div class="place1">
    <img src="img\e3.gif" style="width:100%">
  </div>

  <div class="place1">
    <img src="img\e5.jpg" style="width:100%">
  </div>

  <div class="place1">
    <img src="img\e8.jpg" style="width:100%">
  </div>

  <div class="place1">
    <img src="img\e9.jpg" style="width:100%">
  </div>

  <div class="place1">
    <img src="img\e7.jpg" style="width:100%">
  </div>

  <div class="place1">
    <img src="img\e10.jpg" style="width:100%">
  </div>

  <a class="prev" onclick="nextSlides(-1, 0)">&#10094;</a>
  <a class="next" onclick="nextSlides(1, 0)">&#10095;</a>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, molestiae? In omnis voluptate rerum doloremque.</p>
</div>

</section>
<!-- --------------------------------------------------footer--------------------------------------------------- -->
<section>
    <div class="footer">
        <div class="footer-container">
            <img src="img\logo.png.jpg" alt="footerlogo">
            <div class="footer-links">
            <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
            </footer-links>
            <h3>Loream</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, tempore culpa! Magnam animi maiores eaque.</p>
        </footer-container>
    </div>
</section>


<script>
let slideIndex = [1,1];
let slideId = ["place1"]
showSlides(1, 0);
showSlides(1, 1);

function nextSlides(n, no) {
  showSlides(slideIndex[no] += n, no);
}

function showSlides(n, no) {
  let i;
  let x = document.getElementsByClassName(slideId[no]);
  if (n > x.length) {slideIndex[no] = 1}    
  if (n < 1) {slideIndex[no] = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex[no]-1].style.display = "block";  
}
</script>

</body>
</html> 

</body>
</html>
