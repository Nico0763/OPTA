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
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

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
                    <li <?php if(isset($active)) if($active == "createride") echo "class='active'"; ?>>
                        <a href="create_ride.php">Create a ride</a>
                    </li>
                    <li <?php if(isset($active)) if($active == "myrides") echo "class='active'"; ?>>
                        <a href="rides.php">My rides</a>
                    </li>
                    <li <?php if(isset($active)) if($active == "groupsofstudents") echo "class='active'"; ?>>
                        <a href="create_group_students.php">Groups of students</a>
                    </li>
                    <li <?php if(isset($active)) if($active == "refunddriver") echo "class='active'"; ?>>
                        <a href="refund_driver.php">Refund a driver</a>
                    </li>
                    <li <?php if(isset($active)) if($active == "login") echo "class='active'"; ?>>
                        <a href="connection.php">Login</a>
                    </li>
                    <li <?php if(isset($active)) if($active == "register") echo "class='active'"; ?> >
                        <a href="register.php">Register</a>
                    </li>
                    <li <?php if(isset($active)) if($active == "drive") echo "class='active'"; ?> >
                        <a href="drive.php">Drive    ! </a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">
