<?php
session_start();
if(!isset($_SESSION['email'])){
    header("location: login.php");
}
include("connect.php");
$email=$_SESSION['email'];
$password=md5($_POST['password']);
$con_password=md5($_POST['con_password']);
$new_password=md5($_POST['new_password']);
if($new_password!=$con_password){
    echo '<h1>the new password not equal to the confirm password</h1>';
    echo $password;
    echo "<br>".$con_password;
    echo "<br>".$new_password;
}else{
$stmt=$db->prepare("select password from users where email='$email'");
$stmt->execute();
$users=$stmt->fetchAll();

      foreach($users as $user)
      {
          
              if($password==$user['password']){
              $q = "update users set password='$new_password' where email='$email';";
              $db->exec($q);
                  echo '<h1>the password changed.</h1>';
              }else{
                  echo "<h1>the odd password isn't correct";
              }
              
      }
}
?>