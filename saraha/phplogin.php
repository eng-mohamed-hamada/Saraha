<?php
include("connect.php");
session_start();
$email=$_POST['email'];
$password=$_POST['password'];
$password=md5($password);

$stmt=$db->prepare("select email, password,photo,username from users where email='$email' and password='$password'");
$stmt->execute();
$users=$stmt->fetchAll();

      foreach($users as $user)
      {
          if($email==$user['email'] && $password==$user['password']){
              $_SESSION['photo']=$user['photo'];
              $_SESSION['username']=$user['username'];
              $_SESSION['email']=$user['email'];
              header('location: messages.php');
         }else{
            break;
           }
      }
echo '<h3  style="color: #CC0000; font-family: "Times New Roman", Times, serif; font-weight: bold;">User Name Or Password Error...!</h3>';
?>