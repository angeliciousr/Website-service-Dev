<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registration Form</title>
<style>
.card-img-top{
height: 290px;
}
.carousel-inner img
{
    height:600px;
}
footer {
text-align: center;
padding: 3px;
background-color: #4a4a4a;
position: relative;
left: 0;
bottom: 0;
width: 100%;
color:white;
}

.tainer {
    width: 35%;
    margin: 50px auto;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}

h2 {
    text-align: center;
    color: #333;
}

label {
    display: block;
    margin-bottom: 5px;
    floa
    color: #666;
}

input[type="text"],
input[type="email"],
input[type="password"],
input[type="submit"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #45a049;
}

/* Book theme styles */
.container {
    padding: 40px;
}

label {
    font-size: 18px;
}

input[type="text"],
input[type="email"],
input[type="password"],
input[type="submit"] {
    font-size: 16px;
}

input[type="submit"] {
    background-color: #5e8dbf;
    border: none;
}



input[type="submit"]:hover {
    background-color: #437ba0;
}


</style>
</head>
<body>
<?php
include 'navbar.php'
?>

<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel"> 
  <div class="carousel-inner">
    <div class="carousel-item active">
    </div>

  </div>
</div>
<section class="layout_padding section">
  <div class="tainer">
    <div class="row">
      <div class="col-lg-12 text_align_center">
      <div class="full heading s1">
        <div class="full heading_s1">
</br>
</br>
</div>
<br>
<h2>Registration Form</h2>
<div>
<form action="generate_api.php" method="post">
  <label for="username">Username:</label><br>
  <input type="text" id="username" name="username" required><br>
  <label for="email">Email:</label><br>
  <input type="email" id="email" name="email" required><br>
  <label for="email">Password:</label><br>
  <input type="password" id="password" name="password" required><br>
  <br>
  <input type="submit" value="Register">
</form>
</div>
<br>
<br>
</section>
<footer class="text-center text-white" style="background-color: #9dabc4 ;"> 
 <div class="container pt-4">
<a
class="btn btn-link btn-floating btn-lg text-light m-1" 
href="https://www.facebook.com/"
role="button"
data-mdb-ripple-color="dark"
><i class="fa fa-facebook-f"></i
></a>
<a
class="btn btn-link btn-floating btn-lg text-light m-1"
href="https://twitter.com/home?lang=en"
role="button"
data-mdb-ripple-color="dark"
><i class="fa fa-twitter"></i
></a>
<a
class="btn btn-link btn-floating btn-lg text-light m-1" 
href="https://www.google.com/"
role="button"
data-mdb-ripple-color="dark"
><i class="fa fa-google"></i
></a>
<a
class="btn btn-link btn-floating btn-lg text-light m-1" 
href="https://www.instagram.com/"
role="button"
data-mdb-ripple-color="dark"
><i class="fa fa-instagram"></i
></a>
<a
class="btn btn-link btn-floating btn-lg text-light m-1" 
href="https://www.linkedin.com/"
role="button"
data-mdb-ripple-color="dark"
><i class="fa fa-linkedin"></i
></a>

<a
class="btn btn-link btn-floating btn-lg text-light m-1"
href="https://github.com/"
role="button"
data-mdb-ripple-color="dark"
><i class="fa fa-github"></i
></a> 
</section>
</div>
<div class="text-center text-light p-3" style="background-color: rgba(0, 0, 0, 0.2);"> 
© 2021 Copyright:
<a class="text-light" href="https://www.google.com/">Ramen Angela</a> 
</div>
</footer>
</body>
</html>

