<?php
$active = "login";
require_once("_inc/header.php"); ?>

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Refund a driver
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a>
                    </li>
                    <li class="active">Refund a driver</li>
                </ol>
            </div>
        </div>

        <!-- Content Row -->
        <div class="row">
            <!-- Contact Details Column -->
            <form>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Select a driver</label>
                        <select class="form-control">
                            <option>Driver 1</option>
                            <option>Driver 2</option>
                            <option>Driver 3</option>
                        </select>
                    </div>
                    <div class="input-group form-group">
                        <label>Amount of refund</label>
                        <input type="text" class="form-control" id="amount" placeholder="Amount">
                    </div>
                    <button type="submit" class="btn btn-primary">Refund</button>
                </div>
            </form>
        </div>
        <!-- /.row -->

        <?php require_once("_inc/footer.php"); ?>
