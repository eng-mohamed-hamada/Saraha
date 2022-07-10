<?php
include("connect.php");
session_start();
if(isset($_SESSION['email'])){
    $theemail=$_SESSION['email'];
$stmt=$db->prepare("select saraha_email from users where email='$theemail';");

$stmt->execute();
$users=$stmt->fetchAll();
        $saraha_email="";
      foreach($users as $user)
      {
          $saraha_email=ereg_replace(".php","",$user['saraha_email']);
          
         echo '<a href="profiles/'.$saraha_email.'.php">'.$saraha_email.'</a>'; 
      }
    
}
?>

