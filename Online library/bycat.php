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
    height:700px;
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

table {
    border-collapse: collapse;
    width: 100%;
}

tr {
    height: 50px; /* Adjust this value to set the desired height */
}

td {
    border: 1px solid black;
    padding: 8px;
}
.scroll-box {
        height: 60px; /* Adjust height as needed */
        overflow-y: scroll;
        border: 1px solid #ccc;
        padding: 10px;
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
      <img src="bg6.jpg"class="d-block w-100" alt="...">
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
    <h2>BookStore</h2>
</div>
<br>
<div>
<form  method="get">
  <input type="text" name="search" placeholder="Search by Category..">
  <input class="btn btn-dark btn-sm" type="submit" name="submit" value="Search">
</form>
<div class="container my-5">
  <table class="table">
    <?php
        include 'connect.php';
    if(isset($_GET['submit'])){
      $search =$_GET['search'];
      $sql="Select * from books where category='$search'"; 
      $result=mysqli_query($con,$sql);
      
      if($result){
          if(mysqli_num_rows($result)>0){
            echo '<thead>
            <tr>
            <th>Cover photo</th>
            <th>ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>Year</th>
            <th>Description</th>
            <th>Language</th>
            <th>ISBN</th>
            <th>Reviews</th>
            <th>Bestseller</th>
            <th>Category</th>
            </tr>
            </head>';
            $row=mysqli_fetch_assoc($result);
            echo '<tbody>
            <tr>
            <td><img src='.$row['coverphoto'].' ></td>
            <td>'.$row['id'].'</td>
            <td>'.$row['title'].'</td>
            <td>'.$row['authors'].'</td>
            <td>'.$row['pubyear'].'</td>
            <td>'.$row['description'].'</td>
            <td>'.$row['language'].'</td>
            <td>'.$row['isbn'].'</td>
            <td>'.$row['reviews'].'</td>
            <td>'.$row['bestseller'].'</td>
            <td>'.$row['category'].'</td>
            </tr>
            </tbody>';
          }else{
            echo '<h2 class=text-danger> Data not found </h2>';
          }
         
      }
    }
    
    ?>
</table>
</div>
</div>
</br>
<div class="scroll-box">
<?php
include("BookFunctions.php");

if(!empty($_GET['search'])){
	$Book = getByCat($_GET['search']);
	
	if(empty($Book)){
	   deliver_response('200', 'No Book Found', null);
	}else{
	   deliver_response('200', 'Book found', $Book);
	}
}else{
	deliver_response('400', 'Bad Request', null);

}



function deliver_response($status, $statusMessage, $data){
  $response['status']=$status;
  $response['status_message']=$statusMessage;
  $response['data']=$data;

  $json_response=json_encode($response, JSON_UNESCAPED_SLASHES);
  echo $json_response;
  
}




?>
</div>
<br>
<h5>XML Format</h5>
<div class="scroll-box">
<?php
include("function.php");

if (!empty($_GET['search'])) {
    $Book = Cat($_GET['search']);

    if (empty($Book)) {
        response('200', 'No Book Found', null);
    } else {
        response('200', 'Book found', $Book);
    }
} else {
    response('400', 'Bad Request', null);
}

function response($status, $statusMessage, $data = null)
{

  $xml_response = "<?xml version='1.0' encoding='UTF-8'?><book><status>$status</status><status_message>$statusMessage</status_message>";
  if ($data !== null) {
      foreach ($data as $key => $value) {
          $xml_response .= "<$key>$value</$key>";
        }
        $xml_response .= "</data>";
    }

    $xml_response .= "</book>";
    echo $xml_response;
}
?>

</div>

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
