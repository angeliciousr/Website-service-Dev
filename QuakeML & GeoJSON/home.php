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
<title>Earthquake</title>
<style>
.card-img-top{
height: 290px;
}
.carousel-inner img
{
    height:500px;
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
</style>

</head>
<body>

<?php
include 'navbar.php'
?>

<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel"> 
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="11Parmuk2-zwkc-superJumbo.jpg"class="d-block w-100" alt="...">
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
    <h2>Earthquake Notification Service </h2>
</div>
<div class="full">
        <p class="large">The Earthquake Notification Service (ENS) is a free service that can send you automated 
          notification emails when earthquakes happen in your area.New accounts default to receiving notifications 
          about earthquakes with magnitude 6.0 or greater however you can customize ENS to only deliver messages for 
          certain areas, at specified times, and to multiple addresses. For most carriers, ENS can also send text 
          notifications to your cell phone. Note to inactive users: Some ENS account holders have no method on file to 
          send notifications. We have no way to contact you! To keep your ENS account, please log in and add your email 
          or SMS information. Accounts with no contact information by August 9th, 2023 will be removed.
        </p>
        </br></br>
      </div>
    </div>
</div>
</br>
</br>
<div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <div class="card h-100">
        <a href="quakexml.php" title="QuakeML table view ">
          <img src="earth-and-earth-quake-lines.jpg" style="max-width: 100%; overflow-x: hidden;" class="card-img-to"> </a>
      <div class="card-body">
        <a href="quakexml.php" style="color:black;"><h5 class="card-title">QuakeML</h5></a>
        <p class="card-text">The Quake Markup Language is a flexible, extensible and modular 
          XML representation of seismological data (e.g. epicenter, hypocenter, magnitude) 
          which is intended to cover a broad range of fields of application in modern seismology.
        The flexible approach of QuakeML allows further extensions of the standard in order to 
        represent waveform data, macroseismic information, probability density functions, slip distributions, 
        shake maps, and others. QuakeML is an open standard and is developed by a distributed team in a transparent collaborative manner. </p>
      </div>
        <div class="card-footer">
          <a href="quakexml.php" class="btn btn-info">View XML</a> 
        </div>
      </div>
    </div>
<div class="col">
    <div class="card h-100">
      <a href="quakexml.php" title="QuakeML table view ">
        <img src="istockphoto-626681804-612x612.jpg" style="max-width: 100%; overflow-x: hidden;"  class="card-img-top"></a>
    <div class="card-body">
      <h5 class="card-title">GeoJSON</h5>
        <p class="card-text">GeoJSON is an open standard format designed for representing simple geographical features, 
          along with their non-spatial attributes. It is based on the JSON format.The features include points (therefore addresses and locations), 
          line strings (therefore streets, highways and boundaries), polygons (countries, provinces, tracts of land), and multi-part collections of 
          these types. GeoJSON features need not represent entities of the physical world only; mobile routing and navigation apps, for example, might 
          describe their service coverage using GeoJSON. </p>
    </div>
    <div class="card-footer">
      <a href="geojson.php" class="btn btn-info">View JSON</a>
    </div>
  </div>
</div>
<div class="col">
    <div class="card h-100">
      <a href="newmap.php" title="view map with earthquake ">
        <img src="pin-location-crack-earthquake-symbol-vector.jpg" style="max-width: 100%; overflow-x: hidden;" class="card-im"></a>
          <div class="card-body">
            <h5 class="card-title"> JSON Map</h5>
            <p class="card-text">Real-Time Interactive Earthquake Map. Explore our real-time map showing all the place that earthquakes are located. </p>
          </div>
              <div class="card-footer">
              <a href="newmap.php" class="btn btn-info">Show Map</a> 
              </div>
          </div>
        </div>
      </div>
    </section>
</br>

</br>
 <footer class="text-center text-white" style="background-color: #9dabc4 ;"> 
 <div class="container pt-4">
 <section class="">
              <div class="container text-center text-md-start mt-5">
                <div class="row mt-2">
                  <div class="col-md-2 col-lg-4 col-xl-3 mx-auto mb-4">
                  <h6 class="text-uppercase fw-bold mb-4">
                      Earthquake
                    </h6>

                    <p>
                      <a href="quakexml.php" class="text-reset">QuakeXML</a>
                    </p>
                    <p>
                      <a href="geojson.php" class="text-reset">GeoJSON</a>
                    </p>
                  </div>
    
                  <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="text-uppercase fw-bold mb-4">
                      Useful links
                    </h6>

                    <p>
                      <a href="#!" class="text-reset">Disaster risks</a>
                    </p>
                    <p>
                      <a href="#!" class="text-reset">Latest additions</a>
                    </p>
                    <p>
                      <a href="#!" class="text-reset">Settings</a>
                    </p>
                    <p>
                      <a href="#!" class="text-reset">Help</a>
                    </p>
                  </div>
                  <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="text-uppercase fw-bold mb-4">
                      Others
                    </h6>
                    <p>
                      <a href="women.aspx" class="text-reset">Share your content</a>
                    </p>
                    <p>
                      <a href="men.aspx" class="text-reset">Blog</a>
                    </p>
                   
                    <p>
                      <a href="#!" class="text-reset">What's New</a>
                    </p>
                  </div>
                </div>
              </div>
            </section>  
<section class="mb-4">
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
