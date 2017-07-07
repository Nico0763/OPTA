<?php
$active = "createride";
require_once("_inc/header.php"); ?>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
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
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active">Create a ride</li>
                </ol>
            </div>
        </div>

        <!-- Content Row -->
        <div class="row">
            <!-- Contact Details Column -->

                <div class="col-md-6">
                    <div class="input-group form-group">
                        <span class="input-group-addon" id="basic-addon1">Departure</span>
                        <!--<input type="text" class="form-control" id="departure" placeholder="Departure">-->
                        <input id="departure" class="form-control" type="text" placeholder="Enter a location">
                    </div>
                    <div class="input-group form-group">
                        <span class="input-group-addon" id="basic-addon1">Destination</span>
                        <!--<input type="text" class="form-control" id="departure" placeholder="Departure">-->
                        <input id="destination" class="form-control" type="text" placeholder="Enter a location">
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
                        <select id="groupstudents" class="form-control">
                            <option>Group 1</option>
                            <option>Group 2</option>
                            <option>Group 3</option>
                        </select>
                    </div>
                    <button  onclick="save_ride();" class="btn btn-primary">Save</button>
                </div>
                <div class="col-md-6">
                <label>Destination</label>
                <div id="map"></div>
                    <script>
                        function save_ride(){
                            var departure = document.getElementById("departure").value;
                            var destination = document.getElementById('destination').value;
                            var departuretime = document.getElementById('departuretime').value;
                            var timeride = document.getElementById('timeride').value;
                            var groupstudents = document.getElementById('groupstudents').value;

                            if(departure == ""){
                                alert('Please select a departure.');
                            }else if(destination == ""){
                                alert('Please select a destination');
                            }else if(departuretime == ""){
                                alert('Please complete the departure time');
                            }else if(timeride == ""){
                                alert('Please complete the time ride');
                            }else if(groupstudents == ""){
                                alert('Please select a group of students');
                            }else{

                                var variables = "departure="+departure+"&destination="+destination+"&departuretime="+departuretime+"&timeride="+timeride+"&groupstudents="+groupstudents;
                                alert(variables);
                                var xmlhttp = new XMLHttpRequest();
                                xmlhttp.onreadystatechange = function() {
                                    if (this.readyState == 4 && this.status == 200) {
                                        alert(this.responseText);
                                    }
                                };
                                xmlhttp.open("POST", "saveride.php", true);
                                xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                                xmlhttp.send(variables);
                            }

                        }

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

                            var input = document.getElementById('departure');
                            var autocomplete = new google.maps.places.Autocomplete(input);
                            autocomplete.bindTo('bounds', map);
                            var inputdestination = document.getElementById('destination');
                            var autocomplete = new google.maps.places.Autocomplete(inputdestination);
                            autocomplete.bindTo('bounds', map);

                            var infowindow = new google.maps.InfoWindow();
                            var marker = new google.maps.Marker({
                                map: map,
                                anchorPoint: new google.maps.Point(0, -29)
                            });

                            autocomplete.addListener('place_changed', function() {
                                infowindow.close();
                                marker.setVisible(false);
                                var place = autocomplete.getPlace();
                                if (!place.geometry) {
                                    window.alert("Autocomplete's returned place contains no geometry");
                                    return;
                                }

                                // If the place has a geometry, then present it on a map.
                                if (place.geometry.viewport) {
                                    map.fitBounds(place.geometry.viewport);
                                } else {
                                    map.setCenter(place.geometry.location);
                                    map.setZoom(17);
                                }
                                marker.setIcon(({
                                    url: place.icon,
                                    size: new google.maps.Size(71, 71),
                                    origin: new google.maps.Point(0, 0),
                                    anchor: new google.maps.Point(17, 34),
                                    scaledSize: new google.maps.Size(35, 35)
                                }));
                                marker.setPosition(place.geometry.location);
                                marker.setVisible(true);

                                var address = '';
                                if (place.address_components) {
                                    address = [
                                      (place.address_components[0] && place.address_components[0].short_name || ''),
                                      (place.address_components[1] && place.address_components[1].short_name || ''),
                                      (place.address_components[2] && place.address_components[2].short_name || '')
                                    ].join(' ');
                                }

                                infowindow.setContent('<div><strong>' + place.name + '</strong><br>' + address);
                                infowindow.open(map, marker);
                            });
                         }
                    </script>
                    <script async defer
                        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBvZFcrGyYZT8nzENpiPKuemDOB3e4Cr60&libraries=places&callback=initMap">
                    </script>
                </div>

        </div>
        <!-- /.row -->

    <?php require_once("_inc/footer.php"); ?>
