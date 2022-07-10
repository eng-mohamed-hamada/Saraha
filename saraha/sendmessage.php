<?php
session_start();
include("connect.php");
$themessage=$_REQUEST['themessage'];
$email=$_SESSION['email'];
$q = "insert into themessages (receiver,message) values('$email','$themessage')";
    $db->exec($q);
?>