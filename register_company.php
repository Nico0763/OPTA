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
              <li role="presentation"><a href="register.php">I'm a student !</a></li>
              <li role="presentation" class="active"><a href="#">I'm a company !</a></li>
            </ul>
            <br/>

        <!-- Content Row -->
        <div class="row">

            <!-- Contact Details Column -->
              <form>
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

                  <button type="submit" class="btn btn-primary">Send</button>
                </form>
            </div>
        </div>
        <!-- /.row -->



        <?php require_once("_inc/footer.php"); ?>
