<?php
$active = "createride";
require_once("_inc/header.php"); ?>
         <style>
           #map {
            height: 400px;
            width: 100%;
           }
        </style>
        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Create a ride
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a>
                    </li>
                    <li class="active">Create a ride</li>
                </ol>
            </div>
        </div>

        <!-- Content Row -->
        <div class="row">
            <!-- Contact Details Column -->
            <form>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="departure">Departure</label>
                        <select class="form-control">
                            <option>Rouen</option>
                            <option>Le Havre</option>
                            <option>Dieppe</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="arrival">Arrival</label>
                        <select class="form-control">
                            <option>Rouen</option>
                            <option>Le Havre</option>
                            <option>Dieppe</option>
                        </select>
                    </div>
                    <div class="input-group form-group">
                        <span class="input-group-addon" id="basic-addon1">Departure time</span>
                        <input type="text" class="form-control" id="departuretime" placeholder="00:00:00">
                    </div>
                    <div class="input-group form-group">
                        <span class="input-group-addon" id="basic-addon1">Time of ride</span>
                        <input type="text" class="form-control" id="timeride" placeholder="00:00">
                    </div>
                    <div class="form-group">
                        <label for="group_students">Select a group of students</label>
                        <select class="form-control">
                            <option>Group 1</option>
                            <option>Group 2</option>
                            <option>Group 3</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
                <div class="col-md-6">
                <div id="map"></div>
                    <script>
                      function initMap() {
                        var paris = {lat: 48.858, lng: 2.357};
                        var map = new google.maps.Map(document.getElementById('map'), {
                          zoom: 4,
                          center: paris
                        });
                        var marker = new google.maps.Marker({
                          position: paris,
                          map: map
                        });
                      }
                    </script>
                    <script async defer
                        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBvZFcrGyYZT8nzENpiPKuemDOB3e4Cr60&callback=initMap">
                    </script>
                </div>
            </form>
        </div>
        <!-- /.row -->

    <?php require_once("_inc/footer.php"); ?>
