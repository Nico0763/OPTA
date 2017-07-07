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
        <div id="alert">



        </div>
        <!-- /.row -->
            <ul class="nav nav-tabs">
              <li role="presentation"><a href="register.php">I'm a student !</a></li>
              <li role="presentation" class="active"><a href="#">I'm a company !</a></li>
            </ul>
            <br/>

        <!-- Content Row -->
        <div class="row">

            <!-- Contact Details Column -->
            
  <div class="col-md-6">

                  <div class="input-group form-group">
                    <span class="input-group-addon" id="basic-addon1">Name*</span>
                    <input type="text" class="form-control" id="name" placeholder="Your name">
                  </div>

                  <div class="input-group form-group">
                    <span class="input-group-addon" id="basic-addon1">Address</span>
                    <input type="text" class="form-control" id="address" placeholder="Your address">
                  </div>
                  <div class="input-group form-group">
                      <span class="input-group-addon" id="basic-addon1">PC</span>
                    <input type="text" class="form-control" id="pc" placeholder="Your postal code">
                  </div>
                  <div class="input-group form-group">
                    <span class="input-group-addon" id="basic-addon1">City</span>
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

                  <button onclick="add_company();" class="btn btn-primary">Send</button>
                
            </div>
        </div>
        <!-- /.row -->

        <script>
          function setError(text)
          {
            document.getElementById("alert").innerHTML = "<div class='alert alert-danger fade in'><a href='#' class='close' data-dismiss='alert'>&times;</a><strong>Error! </strong>" +  text +"</div>";
          }
          function setSuccess(text)
          {
            document.getElementById("alert").innerHTML = "<div class='alert alert-success fade in'><a href='#' class='close' data-dismiss='alert'>&times;</a><strong></strong>" +  text +"</div>";
          }

          function add_company(){
            var name = document.getElementById('name').value;
            var address = document.getElementById('address').value;
            var pc = document.getElementById('pc').value;
            var city = document.getElementById('city').value;
            var mail = document.getElementById('mail').value;
            var mail_confirmation = document.getElementById('mail_confirmation').value;
            var password = document.getElementById('password').value;
            var password_confirmation = document.getElementById('password_confirmation').value;
            
            if(name == "" || address == "" || pc == "" || city == "" || mail == "" || mail_confirmation == "" || password == "" || password_confirmation == "") {
              setError("Please complete all fields");
            }else if(mail != mail_confirmation){
              setError("The field 'mail' is different from the field 'mail confirmation'.");
            }else if(password != password_confirmation){
              setError("The field 'password' is different from the field 'password confirmation'.");
            }else{
              var variables = "name="+name+"&address="+address+"&pc="+pc+"&city="+city+"&mail="+mail+"&password="+password;
              var xmlhttp = new XMLHttpRequest();
              xmlhttp.onreadystatechange = function() {
                  if (this.readyState == 4 && this.status == 200) {
                      if(this.responseText == "Company added !"){
                        setSuccess(this.responseText); 
                        setTimeout(function (){ window.location.replace("connection.php"); }, 500);
                      }else{
                        setError(this.responseText); 
                      }                                    
                  }
              };
              xmlhttp.open("POST", "ajax/savecompany.php", true);
              xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
              xmlhttp.send(variables);
            }
          }

        </script>

        <?php require_once("_inc/footer.php"); ?>
