<?php
$active = "createride";
require_once("_inc/header.php"); ?>
        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Create a group of students
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a>
                    </li>
                    <li class="active">Create a group of students</li>
                </ol>
            </div>
        </div>

        <!-- Content Row -->
        <div class="row">
            <!-- Contact Details Column -->
            <form>
                <div class="col-md-6">
                    <div class="input-group form-group">
                        <label for="arrival">Name</label>
                        <input type="text" class="form-control" id="namegroup" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label for="departure">Select a driver</label>
                        <select class="form-control">
                            <option>Driver 1</option>
                            <option>Driver 2</option>
                            <option>Driver 3</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="arrival">Select 4 students maximum</label>
                        <select class="form-control">
                            <option></option>
                            <option>Student 1</option>
                            <option>Student 2</option>
                            <option>Student 3</option>
                        </select>
                        <br/>
                        <select class="form-control">
                            <option></option>
                            <option>Student 1</option>
                            <option>Student 2</option>
                            <option>Student 3</option>
                        </select>
                        <br/>
                        <select class="form-control">
                            <option></option>
                            <option>Student 1</option>
                            <option>Student 2</option>
                            <option>Student 3</option>
                        </select>
                        <br/>
                        <select class="form-control">
                            <option></option>
                            <option>Student 1</option>
                            <option>Student 2</option>
                            <option>Student 3</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-5"></div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
                <div class="col-md-5"></div>
            </form>
        </div>
        <br>
        <hr>
        <br>
        <div class="row">
            <div class="col-md-12">
                <label>Groups of students</label>
                <table class="table table-hover">
                    <thead>
                        <th>Name</th>
                        <th>Driver</th>
                        <th>Student 1</th>
                        <th>Student 2</th>
                        <th>Student 3</th>
                        <th>Student 4</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Group 1</td>
                            <td>N. Arsene</td>
                            <td>C. Blanchard</td>
                            <td>K. Barbet</td>
                            <td>N. Patrikeff</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Group 2</td>
                            <td>C. Blanchard</td>
                            <td>N. Arsene</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.row -->

    <?php require_once("_inc/footer.php"); ?>
