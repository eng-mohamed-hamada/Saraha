<?php
session_start();
include("connect.php");
$thepath=$_REQUEST['thepath'];

$splettes=explode('/',$thepath);
$saraha_email="";
foreach($splettes as $one){
    $saraha_email=ereg_replace(".php","",$one);
}
    
$stmt=$db->prepare("select username,photo,email from users where saraha_email='$saraha_email';");

$stmt->execute();
$users=$stmt->fetchAll();

      foreach($users as $user)
      {
          echo '<legend><img src="../photos/'.$user['photo'].'"></legend>';
            echo '<h3>'.$user['username'].'</h3>';
          $_SESSION['email']=$user['email'];
      }

?>