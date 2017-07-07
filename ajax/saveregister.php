<?php
$name =  $_POST['name'];
$lastname = $_POST['lastname'];
$address = $_POST['address'];
$pc = $_POST['pc'];
$city = $_POST['city'];
$mail = $_POST['mail'];
$password_student = $_POST['password'];
$driver = $_POST['driver'];
$sexe = $_POST['sexe'];


$name = str_replace("'", "''", $name);
$lastname = str_replace("'", "''", $lastname);
$address = str_replace("'", "''", $address);
$pc = str_replace("'", "''", $pc);
$city = str_replace("'", "''", $city);
$mail = str_replace("'", "''", $mail);
$password_student = str_replace("'", "''", $password_student);

$servername = "localhost";
$username = "root";
$password = "";

try
{
    $conn = new PDO("mysql:host=$servername;dbname=OPTA", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO student(s_name, s_firstname, s_birthdate, s_sex, s_mail, s_phone, s_password, s_street, s_postalcode, s_city, s_driver) VALUES ('".$lastname."', '".$name."', '', '".$sexe."', '".$mail."', '', '".$password_student."', '".$address."', '".$pc."', '".$city."', '".$driver."')";
    // use exec() because no results are returned
    $conn->exec($sql);
    $conn = null;
    echo "Student added !";
}
catch(PDOException $e)
{
     echo $sql . "<br>" . $e->getMessage();
}

?>