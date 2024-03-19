<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type = "text/css" href = "css/jquery.dataTables.min.css"/>
    <link rel="stylesheet" type = "text/css" href ="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"> </script>
    <link href="https://cdn.datatables.net/v/dt/dt-1.13.8/datatables.min.css" rel="stylesheet">
    <script src="https://cdn.datatables.net/v/dt/dt-1.13.8/datatables.min.js"></script>
    <link href="DataTables/datatables.min.css" rel="stylesheet">
    <script src="DataTables/datatables.min.js"></script>
 
<title>QUAKEML</title>

<style>
.carousel-inner img {
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

hr.new1 {
    border-top: 2px solid black;
}

table#table{
}
td{
    background-color: WhiteSmoke;
}
thead{
    background-color: lightgrey;
}


.tbl{
    margin-left:150px;
    margin-bottom: 50px;
    margin-top: 50px;
    width:1350px;
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
            <img src="11Parmuk2-zwkc-superJumbo.jpg" class="d-block w-100" alt="...">
        </div>
    </div>
</div>


<div class="tbl">
<div class = "col-md-10"></div>
    <div class = "col-md-10">
        <h3 class= "text-dark">EarthQuake Lists by XML </h3> 
        <form target="_blank">
<div id="position">
<p><b>Search by Magnitude type:</b></p>
        <input type="checkbox" name="pos" value="ml">ML 
        <input type="checkbox" name="pos" value="md">MD 
        <input type="checkbox" name="pos" value="mww">MWW 
        <input type="checkbox" name="pos" value="mb">MB
    </div>
</br>

    <div id="evaluation">
    <p><b>Search by Evaluation Mode:</b></p>
        <input type="checkbox" name="eval" value="automatic">Automatic 
        <input type="checkbox" name="eval" value="manual">Manual 
    </div>
</form>

<hr style="border-top: 1px dotted #000;" /> 
    <table id= "table" class="table table-bordered" border=1 > 
        <thead>
        <tr>
            <th>Location</th>
            <th>Time</th>
            <th>Magnitude Value</th>
            <th>Type</th>
            <th>Horizontal Uncertainty</th>
            <th>Used Phase Count</th>
            <th>Evaluation Mode</th>
            <th>Agency ID</th>
        </tr>
        </thead>


<tbody>
<?php
    $xmlDoc = simplexml_load_file("all_month.quakeml");
        foreach($xmlDoc -> eventParameters ->event as $events){
            echo '
            <tr>
                <td>'.$events->description ->text.'</td>
                <td>'.$events->origin -> time -> value.'</td>
                <td>'.$events->magnitude -> mag -> value.'</td>
                <td>'.$events->magnitude-> type. '</td>
                <td>'.$events->origin -> originUncertainty -> horizontalUncertainty. '</td>
                <td>'.$events->origin -> quality -> usedPhaseCount. '</td>
                <td>'.$events->origin -> evaluationMode .'</td>
                <td>'.$events->origin -> creationInfo -> agencyID. '</td>
            </tr>
            ';
        }
    ?>
        </tbody>
    </table>
</div>

    </div>



<footer class="text-center text-white" style="background-color: #9dabc4 ;"> 
 <div class="container pt-4">
 <section class="">
              <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-2">
                  <!-- Grid column -->
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
                  <!-- Grid column -->
    
                  <!-- Grid column -->
                  <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
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
                  <!-- Grid column -->
                     <!-- Grid column -->
                  <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
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
                  <!-- Grid column -->
                  <!-- Grid column -->
                  
                  <!-- Grid column -->
                </div>
                <!-- Grid row -->
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
<script src= "js/jquery-3.2.1.js"></script> 
<script src= "js/jquery.dataTables.js"></script>
<script type ="text/javaScript">
    $(document).ready(function(){
        $('#table').DataTable();
    });
</script>
<Script>
    $(document).ready(function(){
        $.fn.dataTable.ext.search.push(
            function(settings, searchData, index,rowData,counter){
                var positions = $('input:checkbox[name="pos"]:checked').map(function(){
                    return this.value;
                }).get();
                if(positions.length=== 0){
                    return true;
                }
                if (positions.indexOf(searchData[3])!== -1){
                    return true;
                }
                return false;
            }
        );
        $.fn.dataTable.ext.search.push(
            function(settings, searchData, index,rowData,counter){
                var mode = $('input:checkbox[name="eval"]:checked').map(function(){
                    return this.value;
                }).get();
                if (mode.length===0){
                    return true;
                }
                if(mode.indexOf(searchData[6])!== -1){
                    return true;
                }
                return false;
            }
        );
        var table=$('#table').DataTable();
        $('input:checkbox').on('change', function(){
            table.draw();
        });
    });
    </script>
</html>