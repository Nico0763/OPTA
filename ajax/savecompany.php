<?php
$name =  $_POST['name'];
$address = $_POST['address'];
$pc = $_POST['pc'];
$city = $_POST['city'];
$mail = $_POST['mail'];
$password_company = $_POST['password'];


$name = str_replace("'", "''", $name);
$address = str_replace("'", "''", $address);
$pc = str_replace("'", "''", $pc);
$city = str_replace("'", "''", $city);
$mail = str_replace("'", "''", $mail);
$password_company = str_replace("'", "''", $password_company);

$servername = "localhost";
$username = "root";
$password = "";

try
{
    $conn = new PDO("mysql:host=$servername;dbname=OPTA", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO company(c_name, c_street, c_postalcode, c_city, c_login, c_password) VALUES ('".$name."', '".$address."', '".$pc."', '".$city."', '".$mail."', '".$password_company."')";
    // use exec() because no results are returned
    $conn->exec($sql);
    $conn = null;
    echo "Company added !";
}
catch(PDOException $e)
{
     echo $sql . "<br>" . $e->getMessage();
}

?>