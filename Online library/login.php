<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<title>BookStore</title>
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
        width: 30%;
        margin: 100px auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #f9f9f9;
    }
    input[type="text"],
    input[type="password"],
    input[type="submit"] {
        width: 100%;
        padding: 10px;
        margin: 5px 0 15px;
        border: 1px solid #ccc;
        border-radius: 3px;
        box-sizing: border-box;
    }
    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        border: none;
        cursor: pointer;
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
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text_align_center">
      <div class="full heading s1">
        <div class="full heading_s1">
</br>
</br>
</div>
<br>
<div class="tainer">
    <h2>Login</h2>
    <form method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <input type="submit" value="Login">
    </form>
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   include 'connecta.php';
   
    // Get username and password from form submission
    $username = $_POST["username"];
    $password = $_POST["password"];

    // SQL query to check if username and password exist in the database
    $sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    // If a matching record is found, redirect to a dashboard page
    if ($result->num_rows > 0) {
        // Redirect to dashboard page or perform other actions
        echo "<script>window.location.href = 'admin_dashboard.php';</script>";
        exit();
    } else {
        // If no matching record is found, display error message
        echo "<p style='color:red'>Invalid username or password. Please try again.</p>";
    }

    // Close connection
    $conn->close();
}
?>
</div>

</br>
</br>



    </section>
</br>

</br>
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

</body>
</html>