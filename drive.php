<?php
$active = "drive";
require_once("_inc/header.php"); ?>

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Drive !
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active">Drive ! </li>
                </ol>
            </div>
        </div>
        <!-- /.row -->


        <!-- Content Row -->
        <div class="row">
          <div class="col-md-8">

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
              var passenger1 = {lat: 49.028031, lng: 1.145022};
              var passenger2 = {lat: 48.748034, lng: 1.352390};
              var passenger3 = {lat: 48.261357, lng: 1.130156};
              var passenger4 = {lat: 47.975837, lng: 0.317662};
              var driverPosition = {
                url: 'img/myposition.png',
                size: new google.maps.Size(71, 71),
                origin: new google.maps.Point(0, 0),
                anchor: new google.maps.Point(10, 10),
                scaledSize: new google.maps.Size(20, 20)
              };

              var peoplePosition = {
                url: 'img/people.png',
                size: new google.maps.Size(71, 71),
                origin: new google.maps.Point(0, 0),
                anchor: new google.maps.Point(17, 20),
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
              markerBounds.extend(passenger1);
              markerBounds.extend(passenger2);
              markerBounds.extend(passenger3);
              markerBounds.extend(passenger4);





              var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 4,
                center: tours
              });
              var markerTours = new google.maps.Marker({
                position: tours,
                map: map
              });
              var markerPassenger1 = new google.maps.Marker({
                position: passenger1,
                map: map,
                icon:peoplePosition
              });
              var markerPassenger2 = new google.maps.Marker({
                position: passenger2,
                map: map,
                icon:peoplePosition
              });
              var markerPassenger3 = new google.maps.Marker({
                position: passenger3,
                map: map,
                icon:peoplePosition
              });
              var markerPassenger4 = new google.maps.Marker({
                position: passenger4,
                map: map,
                icon:peoplePosition
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
            <!-- Contact Details Column -->
                <div class="col-md-4">
                  <!-- On rows -->
                  <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                      <h4 class="panel-title">Next student</h4>
                    </div>
                    <div class="collapse panel-collapse in" role="tabpanel" id="collapseOne" aria-labelledby="headingOne">
                      <div class="panel-body">
                        <p><b>Name : </b> Cédric Blanchard</p>
                        <p><b>Address : </b> 22 Rue du Champ des oiseaux, 76000 Rouen</p>
                        <p><b>Hour : </b> 10:22</p>
                       </div>
                     </div>
                   </div>
                   <button type="button" style="width:100%" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                    Send a message to the passenger
                   </button>

                   <div style="margin-top:15px" class="row">
                      <div class="col col-md-8">
                        <div class="input-group form-group">
                          <span class="input-group-addon" id="basic-addon1">Delay</span>
                          <input type="text" style="width:100%" class="form-control" />
                        </div>
                      </div>
                      <div class="col col-md-4">
                        <button type="button" style="width:100%" class="btn btn-danger">Notify</button>
                      </div>
                   </div>

                   <div style="margin-top:15px" class="row">
                      <div class="col col-md-6">
                          <button type="button" style="width:100%" class="btn btn-danger">Not present</button>

                      </div>
                      <div class="col col-md-6">
                        <button type="button" style="width:100%" class="btn btn-success">Is present</button>
                      </div>
                   </div>
                </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Send a message to the passenger</h4>
        </div>
        <div class="modal-body">
          <textarea class="form-control"></textarea>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-primary">Send</button>
        </div>
      </div>
    </div>
  </div>



        <!-- /.row -->



        <?php require_once("_inc/footer.php"); ?>
