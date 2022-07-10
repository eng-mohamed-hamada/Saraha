<?php
session_start();
if(!isset($_SESSION['email']))
{
    header("location: login.php");
}
$name=$_POST['name'];
$new_email=$_POST['email'];
$splittes=explode('@',$new_email );
$saraha_email="$splittes[0]@saraha.com";
$odd_email=$_SESSION['email'];
include("connect.php");
if($name=="")
    echo "<h1>please enter the name.</h1>";
else if(!preg_match("/^\w(\w*)@gmail.com/", $new_email))
    echo "<h1>please enter correct email</h1>";
else{
    $stmt=$db->prepare("select email from users;");
    $stmt->execute();
    $users=$stmt->fetchAll();
    foreach($users as $user)
    {
        if($new_email==$user['email']){
            echo "<h1>please enter another email address.</h1>";
        exit();
        }
    }
    $stmt=$db->prepare("select saraha_email from users where email='$odd_email';");
    $stmt->execute();
    $users=$stmt->fetchAll();
    foreach($users as $user){
        unlink("profiles/".$user['saraha_email'].".php");
    }
    $q = "update users set name='$name', email='$new_email', saraha_email='$saraha_email' where email='$odd_email';";
    $db->exec($q);
    $q = "update themessages set receiver='$new_email' where receiver='$odd_email';";
    $db->exec($q);
    echo "<h1>your information has been updated.<h1>";
    $_SESSION['email']=$new_email;
    include("change_profile.php");
}
?>