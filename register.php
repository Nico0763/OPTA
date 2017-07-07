<?php
$active = "register";
 require_once("_inc/header.php"); ?>

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Register
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active">Register</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
            <ul class="nav nav-tabs">
              <li role="presentation" class="active"><a href="#">I'm a student !</a></li>
              <li role="presentation"><a href="register_company.php">I'm a compagny !</a></li>
            </ul>
            <br/>

        <!-- Content Row -->
        <div class="row">

            <!-- Contact Details Column -->

              
          <div class="col-md-6">
                <div class="form-group">
                  <label for="name">Gender</label>
                  <input type="radio" name="optionsRadios" id="sexeM" value="M" checked>
                    Male
                    <input type="radio" name="optionsRadios" id="sexeF" value="F">
                    Female
                </div>
                  <div class="input-group form-group">
                    <span class="input-group-addon" id="basic-addon1">Name*</span>
                    <input type="text" class="form-control" id="name" placeholder="Your name">
                  </div>
                  <div class="input-group form-group">
                      <span class="input-group-addon" id="basic-addon1">Lastname*</span>
                    <input type="text" class="form-control" id="lastname" placeholder="Your lastname">
                  </div>
                  <div class="input-group form-group">
                    <span class="input-group-addon" id="basic-addon1">Address*</span>
                    <input type="text" class="form-control" id="address" placeholder="Your address">
                  </div>
                  <div class="input-group form-group">
                      <span class="input-group-addon" id="basic-addon1">PC*</span>
                    <input type="text" class="form-control" id="pc" placeholder="Your postal code">
                  </div>
                  <div class="input-group form-group">
                    <span class="input-group-addon" id="basic-addon1">City*</span>
                    <input type="text" class="form-control" id="city" placeholder="Your city">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="input-group form-group">
                      <span class="input-group-addon" id="basic-addon1">Mail*</span>
                    <input type="email" class="form-control" id="mail" placeholder="Your mail">
                  </div>
                  <div class="input-group form-group">
                      <span class="input-group-addon" id="basic-addon1">Confirmation*</span>
                    <input type="email" class="form-control" id="mail_confirmation" placeholder="Confirm your mail">
                  </div>
                  <div class="input-group form-group">
                      <span class="input-group-addon" id="basic-addon1">Password*</span>
                    <input type="password" class="form-control" id="password" placeholder="Your password">
                  </div>
                  <div class="input-group form-group">
                      <span class="input-group-addon" id="basic-addon1">Confirmation*</span>
                    <input type="password" class="form-control" id="password_confirmation" placeholder="Confirm your password">
                  </div>
                  <div class="checkbox">
                    <label>
                      <input id="driver" type="checkbox"> I'm a driver !
                    </label>
                  </div>
                  <button onclick="add_student()" class="btn btn-primary">Send</button>
                
            </div>
        </div>
        <!-- /.row -->

        <script>
          function add_student(){
            if(document.getElementById('sexeM').checked == true){
              var sexe = 'M';
            }else if(document.getElementById('sexeF').checked == true){
              var sexe = 'F';
            }else{
              var sexe = 'M';
            }
            var name = document.getElementById('name').value;
            var lastname = document.getElementById('lastname').value;
            var address = document.getElementById('address').value;
            var pc = document.getElementById('pc').value;
            var city = document.getElementById('city').value;
            var mail = document.getElementById('mail').value;
            var mail_confirmation = document.getElementById('mail_confirmation').value;
            var password = document.getElementById('password').value;
            var password_confirmation = document.getElementById('password_confirmation').value;
            if(document.getElementById('driver').checked == true){
              var driver = "1";
            }else{
              var driver = "0";
            }
            
            
            if(name == "" || lastname == "" || address == "" || pc == "" || city == "" || mail == "" || mail_confirmation == "" || password == "" || password_confirmation == "") {
              alert("Please complete all fields");
            }else if(mail != mail_confirmation){
              alert("The field 'mail' is different from the field 'mail confirmation'.");
            }else if(password != password_confirmation){
              alert("The field 'password' is different from the field 'password confirmation'.");
            }else{
              var variables = "name="+name+"&lastname="+lastname+"&address="+address+"&pc="+pc+"&city="+city+"&mail="+mail+"&mail_confirmation="+mail_confirmation+"&password="+password+"&password_confirmation="+password_confirmation+"&driver="+driver+"&sexe="+sexe;
              var xmlhttp = new XMLHttpRequest();
              xmlhttp.onreadystatechange = function() {
                  if (this.readyState == 4 && this.status == 200) {
                      alert(this.responseText); 
                      if(this.responseText == "Student added !"){
                        setTimeout(function (){ window.location.replace("connection.php"); }, 500);
                      }                                    
                  }
              };
              xmlhttp.open("POST", "saveregister.php", true);
              xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
              xmlhttp.send(variables);
            }
          }

        </script>

        <?php require_once("_inc/footer.php"); ?>
