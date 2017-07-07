<?php
$active = "login";
require_once("_inc/header.php"); ?>

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Login
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active">Connection</li>
                </ol>
            </div>
        </div>

        <div id="alert">



        </div>

        <!-- Formulaire de connection -->
        <div class="row">
            <div class="col-md-8">
                <h3>In order to connect to the website, please enter your username and your password : </h3>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Mail:</label>
                            <input type="text" class="form-control" id="mail" required data-validation-required-message="Please enter your username.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Password:</label>
                            <input type="password" class="form-control" id="password" required data-validation-required-message="Please enter your password.">
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button onclick="connection();" class="btn btn-primary">Log in</button>
               
            </div>

        <script>
            function setError(text)
            {
                document.getElementById("alert").innerHTML = "<div class='alert alert-danger fade in'><a href='#' class='close' data-dismiss='alert'>&times;</a><strong>Error! </strong>" +  text +"</div>";
            }
            function setSuccess(text)
            {
                document.getElementById("alert").innerHTML = "<div class='alert alert-success fade in'><a href='#' class='close' data-dismiss='alert'>&times;</a><strong></strong>" +  text +"</div>";
            }

          function connection(){
            var mail = document.getElementById('mail').value;
            var password = document.getElementById('password').value;
            
            if(mail == "" || password == "") {
              setError("Please complete the fields mail and password");
            }else{
              var variables = "mail="+mail+"&password="+password;
              var xmlhttp = new XMLHttpRequest();
              xmlhttp.onreadystatechange = function() {
                  if (this.readyState == 4 && this.status == 200) {
                      if(this.responseText == "Successful connection !"){
                        setSuccess(this.responseText);
                        setTimeout(function (){ window.location.replace("index.php"); }, 500);
                      }else{
                        setError(this.responseText);
                      }                                    
                  }
              };
              xmlhttp.open("POST", "ajax/verifyconnection.php", true);
              xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
              xmlhttp.send(variables);
            }
          }

        </script>
        <?php require_once("_inc/footer.php"); ?>
