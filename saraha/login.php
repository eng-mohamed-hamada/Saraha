<?php
session_start();
function setlangsession(){
    if(!isset($_SESSION['lang']))
        $_SESSION['lang']="arabic";
    if(isset($_POST['ar']))
        $_SESSION['lang']="arabic";
    if(isset($_POST['en']))
        $_SESSION['lang']="english";
    
    return dirname(__FILE__)."/languages/".$_SESSION['lang'].".php";
     //$thepath;
    
}
$thefile=setlangsession();
include($thefile);
?>
<html>
<head>
<meta charset="utf-8">
    <title><?php echo $lang["title"];?></title>
    <link rel="icon" href="photos/index.png">
    <style>
        body{
            margin:0px;
            padding:0px;
        }
        .div1,.div2{
            height:50px;
            line-height:50px;
            float:left;
            background-color:#6ab96a;
        }
        .div1{
            width:26%;
            padding-left:4%;
            font-size:30px;
            color:#FFF;
            font-weight:bold;
        }
        .div1 a{
            cursor:pointer;
            color:#FFF;
            text-decoration:none;
        }
        .div2{
            width:66%;
            text-align:right;
            padding-right:4%;
        }
        .div2 a{
            padding-right:2%;
            padding-left:2%;
            color:#FFF;
            text-decoration:none;
            font-size:17px;
            cursor:pointer;
            font-weight:bold;
        }
        .thebody{
            width:100%;
            height:100%;
            background-color:#EEE;
            text-align:center;
        }
        .register{
            width:40%;
            height:250px;
            position:absolute;
            top:25%;
            left:30%;
            border-radius:5px;
            background-color:#FFF;
            padding-top:20px;
        }
        .register input[type=email],.register input[type=password]{
            margin-bottom:20px;
            padding:10px;
            width:50%;
            border-radius:5px;
            border:2px solid #EEE;
        }
        .register input[type=button],.register input[type=submit]{
            margin-bottom:20px;
            padding:10px;
            width:25%;
            background-color:#6ab96a;
            color:#FFF;
            font-weight:bold;
            border-radius:5px;
            outline:none;
        }
        .rem{
            font-weight:bold;
        }
        .log{
            width:100%;
            height:200px;
            line-height:100px;
            font-weight:bold;
        }
        .thefooter{
            width:100%;
            background-color:#dbcaca;
            height:40px;
            text-align:center;
            word-spacing:20px;
            line-height:40px;
            opacity:0.7;
        }
        .thefooter input[type=submit]{
            background-color:#dbcaca;
            opacity:0.7;
            border:0px;
            font-weight:bold;
        }
        .thefooter input[type=submit]:hover{
            cursor:pointer;
            opacity:1;
        }
    </style>
        <script>
            function thelogin(){
                var email=myform.email.value;
                var password=myform.password.value;
                if(email=="")
                    alert("please enter the email.");
                else if(password=="")
                    alert("please enter the password");
                else{
                    var thebutton=myform.login;
                    thebutton.type="submit";
                }
            }
        </script>
        
    
</head>
<body>
   <div class="div1"><img src="photos/index.png"><a href="main.php"><?php echo $lang['saraha'];?></a></div>
    <div class="div2">
        <a href="register.php"><?php echo $lang['register'];?></a>
        <a href="login.php"><?php echo $lang['login'];?></a>
        <a href="about.php"><?php echo $lang['about'];?></a>
        <a href="contact.php"><?php echo $lang['contact'];?></a>
    </div>
    <div class="thebody">
        <div class="log"><?php echo $lang['login'];?></div>
        <div class="register">
            <form id="form" name="myform"  action="phplogin.php" method="post">
                <input name="email" type="email" placeholder="<?php echo $lang['email'];?>"><br>
                <input name="password" type="password" placeholder="<?php echo $lang['password'];?>"><br>
                <input name="remember" type="checkbox"><lable class="rem"><?php echo $lang['remember'];?></lable>
                <input type="button" value="<?php echo $lang['login'];?>" name="login" onclick="thelogin();"><br>
                <a href="ForgetPassword.php"><?php echo $lang['forget'];?></a>
            </form> 
        </div>
    </div>
    <div class="thefooter">
        <form action="" method="post">
            <input type="submit" name="ar" value="عربى">
            <input type="submit" name="en" value="english">
        </form>
    </div>
    <div id="result"></div>
</body>
</html>