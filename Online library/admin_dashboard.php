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

    table {
        width: 100%;
        border-collapse: collapse;
    }
    th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }
    th {
        background-color: #f2f2f2;
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
<?php
      include 'connectp.php';
    // Query to fetch data from the database
    $sql = "SELECT * FROM programmers";
    $result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Dashboard</title>
</head>
<body>
    <h2>Admin Dashboard</h2>

    <br>
    <table>  
    <?php
include 'connectp.php'; // Assuming this file contains your database connection details
$sql = "SELECT * FROM programmer"; 
$result = mysqli_query($conn, $sql);
if ($result && mysqli_num_rows($result) > 0) {
    echo '<thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>API key</th>
            </tr>
        </thead>
        <tbody>'; // Moved tbody outside of the while loop
    // Output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<form action='approved.php' method='post'>";    
        echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["name"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "<td>" . $row["api_key"] . "</td>";
                echo "</tr>";
                echo "</form>";
            }
                echo '</tbody>';
        } else {
    echo "<tr><td colspan='5'>No data available</td></tr>"; // Colspan changed to 5 to match the number of columns
}
mysqli_close($conn); // Close the database connection
?>
    </table>
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
