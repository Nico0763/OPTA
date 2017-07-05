<?php require_once("_inc/header.php"); ?>

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Login
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a>
                    </li>
                    <li class="active">Connection</li>
                </ol>
            </div>
        </div>

        <!-- Formulaire de connection -->
        <div class="row">
            <div class="col-md-8">
                <h3>In order to connect to the website, please enter your username and your password : </h3>
                <form name="sentMessage" id="connection" novalidate>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Username:</label>
                            <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your username.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Password:</label>
                            <input type="text" class="form-control" id="password" required data-validation-required-message="Please enter your password.">
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>

        <?php require_once("_inc/footer.php"); ?>
