<?php
session_start();
include("connect.php");
$name=$_POST['name'];
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$password=md5($password);
$con_password=$_POST['con_password'];
$bdate=$_POST['bdate'];
$gender=$_POST['gender'];
$country=$_POST['country'];
//$notification=$_REQUEST['notification'];
if(filter_var($email,FILTER_VALIDATE_EMAIL)){
    
    $photo_name=$_FILES['photo']['name'];
    if($photo_name==""){
        $photo_name="default.png";
    }else{
        $photo_location=$_FILES['photo']['tmp_name'];
        $photo_destiation="photos/".$photo_name;
        move_uploaded_file($photo_location, $photo_destiation);
        $thesplit=split("\.",$photo_name);
        foreach($thesplit as $one){
            $thetype=$one;
        }
        $thecount=0;
        $stmt=$db->prepare("select max(id) from users;");
        $stmt->execute();
        $users=$stmt->fetchAll();
        foreach($users as $user){
            $thecount=$user['max(id)']+1;
        }
        $thename=$thecount.".".$thetype;
        rename("photos/".$photo_name,"photos/".$thename);
        $photo_name=$thename;
        
    }
    try{
    $stmt=$db->prepare("select email from users;");
    $stmt->execute();
    $users=$stmt->fetchAll();

    foreach($users as $user)
    {
    if($email==$user['email']){
    echo '<script>alert("you aready have registered!");</script>';
        $_SESSION['photo']=$photo_name;

    header('location: login.php');
        exit();
    }
    }
        $splittes=explode('@',$email );
        $saraha_email="$splittes[0]@saraha.com";
    $q = "insert into users (Name, username, email, password, gender, bdate, country, photo, saraha_email) values ('$name', '$username', '$email', '$password', '$gender', '$bdate', '$country', '$photo_name','$saraha_email')";
        $_SESSION['photo']=$photo_name;
        $_SESSION['username']=$username;
        $_SESSION['email']=$email;

       
    header('location: messages.php');
    $db->exec($q);
    }
    catch(PDOException $e)
    {
    echo 'failed'.$e->getMessage();
    }
    
}
include("createprofile.php");
?>