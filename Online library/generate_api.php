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

.container {
    width: 35%;
    margin: 50px auto;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
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
      <img src="background.jpg"class="d-block w-100" alt="...">
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
<?php
include 'connectp.php';
// Counter for generated API keys
$generatedKeys = 0;
// Generate a unique API key
function generateApiKey() {
    global $generatedKeys;
    // Check if the maximum number of keys has been reached
    if ($generatedKeys >= 50) {
        return "Maximum number of API keys generated";
    }
    // Generate the API key
    $apiKey = bin2hex(random_bytes(16));
    // Increment the counter
    $generatedKeys++;
    return $apiKey;
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate form data
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    // Generate API key
    $apiKey = generateApiKey();

    if ($apiKey === "Maximum number of API keys generated") {
        echo "Maximum number of API keys generated. Cannot register at this time.";
    } else {
        $sql = "INSERT INTO programmer(name, email, password, api_key) VALUES ('$username', '$email', '$password', '$apiKey')";
        if ($conn->query($sql) === TRUE) {
            echo "Thank you for registering, $username!<br>";
            echo "Your API Key: $apiKey";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

$conn->close();
?>

<br>
<br>
</section>
<footer class="text-center text-white" style="background-color: #9dabc4 ;"> 
 <div class="tainer pt-4">
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

