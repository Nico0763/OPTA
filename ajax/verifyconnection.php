<?php
session_start();
$mail = $_POST['mail'];
$password_login = $_POST['password'];

$mail = str_replace("'", "''", $mail);
$password_login = str_replace("'", "''", $password_login);

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

    $sql = "SELECT id_company as id FROM company WHERE c_login = '".$mail."' AND c_password = '".$password_login."' 
    		UNION 
    		SELECT id_student as id FROM student WHERE s_mail = '".$mail."' AND s_password = '".$password_login."'";
    // use exec() because no results are returned
    $result = $conn->query($sql);
    $conn->close();

    $id_user = 0;
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $id_user = $row["id"];
        }
    }
    if($id_user != 0){
    	$_SESSION['mail_user'] = $mail;
    }    
    echo "Successful connection !";
}
catch(PDOException $e)
{
     echo $sql . "<br>" . $e->getMessage();
}

?>