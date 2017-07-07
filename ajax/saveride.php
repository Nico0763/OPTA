<?php
session_start();
$departure =  $_POST['departure'];
$destination = $_POST['destination'];
$departuretime = $_POST['departuretime'];
$timeride = $_POST['timeride'];
$id_groupstudents = $_POST['groupstudents'];


$servername = "localhost";
$username = "root";
$password = "";

try
{
    $conn = new PDO("mysql:host=$servername;dbname=OPTA", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $datetime = strtotime($departuretime);
	  $datetime = date('Y-m-d H:i:s',$datetime);
    $sql = "INSERT INTO ride (r_departure, r_destination, r_timeride, r_departuretime, r_started, r_driverrefunded, r_amount, id_group, id_company)
    VALUES ('".$departure."', '".$destination."', '".$timeride."', '".$datetime."', 0, 0, 0, ".$id_groupstudents.", 1)";
    // use exec() because no results are returned
    $conn->exec($sql);
    $conn = null;
    echo "Ride saved !";
}
catch(PDOException $e)
{
     echo $sql . "<br>" . $e->getMessage();
}

?>
