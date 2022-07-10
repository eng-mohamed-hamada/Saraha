<?php
include("connect.php");
session_start();
if(isset($_SESSION['email'])){
    $thereceiver=$_SESSION['email'];
$stmt=$db->prepare("select message from themessages where receiver='$thereceiver';");

$stmt->execute();
$users=$stmt->fetchAll();

      foreach($users as $user)
      {
         echo '<div class="message">'.$user['message'].'</div>'; 
      }
}
?>