<?php require_once("_inc/header.php"); ?>

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

        <!-- Content Row -->
        <div class="row">

            <!-- Contact Details Column -->

              <form>
  <div class="col-md-6">
                <div class="form-group">
                  <label for="name">Gender</label>
                  <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                    Male
                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">
                    Female
                </div>
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Your name">
                  </div>
                  <div class="form-group">
                    <label for="surname">Lastname</label>
                    <input type="text" class="form-control" id="lastname" placeholder="Your lastname">
                  </div>
                  <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" placeholder="Your address">
                  </div>
                  <div class="form-group">
                    <label for="pc">Postal Code</label>
                    <input type="text" class="form-control" id="pc" placeholder="Your postal code">
                  </div>
                  <div class="form-group">
                    <label for="city">City</label>
                    <input type="text" class="form-control" id="city" placeholder="Your city">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="mail">Mail</label>
                    <input type="email" class="form-control" id="mail" placeholder="Your mail">
                  </div>
                  <div class="form-group">
                    <label for="mail">Confirmation</label>
                    <input type="email" class="form-control" id="mail_confirmation" placeholder="Confirm your mail">
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Your password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Confirmation</label>
                    <input type="password" class="form-control" id="password_confirmation" placeholder="Confirm your password">
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox"> I'm a driver !
                    </label>
                  </div>
                  <button type="submit" class="btn btn-primary">Send</button>
                </form>
            </div>
        </div>
        <!-- /.row -->



        <?php require_once("_inc/footer.php"); ?>
