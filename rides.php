<?php
$active = "myrides";
require_once("_inc/header.php"); ?>

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">My rides
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active">My rides</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->


        <!-- Content Row -->
        <div class="row">
          <div class="alert alert-info alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <strong>New ride!</strong> The compagny CESI create a new ride !
        </div>
            <!-- Contact Details Column -->

                <div class="col-md-6">
                  <!-- On rows -->
                  <table class="table">
                    <thead>
                      <tr>
                            <th>Date</th>
                            <th>Hour</th>
                            <th>Destination</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">10/07/2017</th>
                        <td>17:00</td>
                        <td>Rouen</td>
                      </tr>
                      <tr>
                        <th scope="row">11/07/2017</th>
                        <td>10:00</td>
                        <td>Bordeau</td>
                      </tr>
                      <tr>
                        <th scope="row">12/07/2017</th>
                        <td>15:00</td>
                        <td>Rome</td>
                      </tr>
                      <tr>
                        <th scope="row">13/07/2017</th>
                        <td>14:00</td>
                        <td>Paris</td>
                      </tr>
                      <tr class="info">
                        <th scope="row">14/07/2017</th>
                        <td>13:00</td>
                        <td>Tours</td>
                      </tr>
                      <tr>
                        <th scope="row">15/07/2017</th>
                        <td>09:00</td>
                        <td>Lyon</td>
                      </tr>
                      <tr>
                        <th scope="row">16/07/2017</th>
                        <td>16:00</td>
                        <td>Nice</td>
                      </tr>
                      <tr>
                        <th scope="row">17/07/2017</th>
                         <td>22:00</td>
                          <td>Marseille</td>
                         </tr>
                         <tr>
                           <th scope="row">18/07/2017</th>
                           <td>21:00</td>
                           <td>Toulouse</td>
                         </tr>
                       </tbody>
                     </table>
                </div>
                <div class="col-md-6">

  <style>
     #map {
      height: 400px;
      width: 100%;
     }
  </style>
  <div id="map"></div>
  <script>
    function initMap() {
      var tours = {lat: 47.390290, lng: 0.688408};
      var rouen = {lat: 49.476612, lng: 1.092606};
      var evreux = {lat: 49.028031, lng: 1.145022};
      var driverPosition = {
    url: 'img/driver.png',
    size: new google.maps.Size(71, 71),
    origin: new google.maps.Point(0, 0),
    anchor: new google.maps.Point(17, 40),
    scaledSize: new google.maps.Size(35, 40)
  };

  var homePosition = {
url: 'img/home.png',
size: new google.maps.Size(71, 71),
origin: new google.maps.Point(0, 0),
anchor: new google.maps.Point(12, 30),
scaledSize: new google.maps.Size(25, 30)
};




   var markerBounds = new google.maps.LatLngBounds();
   markerBounds.extend(tours);
   markerBounds.extend(rouen);
    markerBounds.extend(evreux);





      var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 4,
        center: tours
      });
      var markerTours = new google.maps.Marker({
        position: tours,
        map: map
      });
      var markerEvreux = new google.maps.Marker({
        position: evreux,
        map: map,
        icon:homePosition
      });
      var markerRouen = new google.maps.Marker({
        position: rouen,
        map: map,
        icon:driverPosition
      });
      map.fitBounds(markerBounds);

    }
  </script>
  <script async defer
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBvZFcrGyYZT8nzENpiPKuemDOB3e4Cr60&callback=initMap">
  </script>


                </div>
        </div>
        <!-- /.row -->



        <?php require_once("_inc/footer.php"); ?>
