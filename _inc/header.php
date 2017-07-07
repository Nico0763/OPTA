<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>OPTA</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- jQuery -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>

</head>

<body>
    <?php
    $user = "";
    if(isset($_SESSION['mail_user'])){
        if($_SESSION['mail_user'] != ""){
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "OPTA";

            try
            {
                $conn = new mysqli($servername, $username, $password, $dbname);

                // Check connection

                if ($conn->connect_error) {

                    die("Connection failed: " . $conn->connect_error);

                }

                $sql = "SELECT id_company as id FROM company WHERE c_login = '".$_SESSION['mail_user']."' ";
                        
                $sql2 = "SELECT id_student as id FROM student WHERE s_mail = '".$_SESSION['mail_user']."'";
                // use exec() because no results are returned
                $result = $conn->query($sql);
                $result2 = $conn->query($sql2);
                $conn->close();

                $id_company = 0;
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        $id_company = $row["id"];
                    }
                }
                $id_student = 0;
                if ($result2->num_rows > 0) {
                    // output data of each row
                    while($row = $result2->fetch_assoc()) {
                        $id_student = $row["id"];
                    }
                }


                if($id_company != 0 || $id_student != 0){
                    if($id_company != 0){
                        $user = "company";
                    }else{
                        $user = "student";
                    }

                }
            }
            catch(PDOException $e)
            {
                 echo $sql . "<br>" . $e->getMessage();
                 echo $sql2 . "<br>" . $e->getMessage();
            }
        }
    }
    ?>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">OPTA</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <?php
                    if($user == "company"){
                        ?>
                        <li <?php if(isset($active)) if($active == "createride") echo "class='active'"; ?>>
                            <a href="create_ride.php">Create a ride</a>
                        </li>
                        <?php
                    }
                    if($user == "student"){
                        ?>
                        <li <?php if(isset($active)) if($active == "myrides") echo "class='active'"; ?>>
                            <a href="rides.php">My rides</a>
                        </li>
                        <?php
                    }
                    if($user == "company"){
                        ?>
                        <li <?php if(isset($active)) if($active == "groupsofstudents") echo "class='active'"; ?>>
                            <a href="create_group_students.php">Groups of students</a>
                        </li>
                        <?php
                    }
                    if($user == "company"){
                        ?>
                        <li <?php if(isset($active)) if($active == "refunddriver") echo "class='active'"; ?>>
                            <a href="refund_driver.php">Refund a driver</a>
                        </li>
                        <?php
                    }
                    if(!isset($_SESSION['mail_user']) || $_SESSION['mail_user'] == ""){
                        ?>
                        <li <?php if(isset($active)) if($active == "login") echo "class='active'"; ?>>
                            <a href="connection.php">Login</a>
                        </li>
                        <?php
                    }
                    if(!isset($_SESSION['mail_user']) || $_SESSION['mail_user'] == ""){
                        ?>
                        <li <?php if(isset($active)) if($active == "register") echo "class='active'"; ?> >
                            <a href="register.php">Register</a>
                        </li>
                        <?php
                    }
                    if($user == "student"){
                        ?>
                        <li <?php if(isset($active)) if($active == "drive") echo "class='active'"; ?> >
                            <a href="drive.php">Drive    ! </a>
                        </li>
                        <?php
                    }
                    if(isset($_SESSION['mail_user'])){
                        if($_SESSION['mail_user'] != ""){
                            ?>
                            <li>
                                <a href="logout.php">Log out</a>
                            </li>
                            <?php
                        }
                    }
                    ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <img src="img/banniere.png" style="width:100%" />
    <!-- Page Content -->
    <div class="container">
