<?php
session_start();
$_SESSION['mail_user']="";
session_destroy();
header('Location: index.php');
?>