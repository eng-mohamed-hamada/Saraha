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
    <link rel="icon" href="index.png">
    <title>sarahah-Forget Password</title>
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
            background-color:#EEE;
            height:600px;
            text-align:center;
        }
        .thefooter{
            clear:both;
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
            border:0px;
            opacity:0.7;
        }
        .thefooter input[type=submit]:hover{
            cursor:pointer;
            opacity:1;
        }
        .thebody .thetitle{
            width:100%;
            height:200px;
            line-height:200px;
            font-size:20px;
            font-weight:bold;
        }
        .thebody .thecontent{
            width:80%;
            height:200px;
            background-color:#fff;
            margin-left:10%;
            padding-top:20px;
            
        }
        .thebody .thecontent input[type=email]{
            width:60%;
            padding:10px;
            border:1px solid #DDD;
            border-radius:5px;
            margin:20px 0 20px 0;
        }
        .thebody .thecontent input[type=submit]{
            width:60px;
            padding:10px;
            color:#6868cc;
            border:1px solid #6868cc;
            cursor:pointer;
            border-radius:5px;
            background-color:#FFF;
            margin:20px 0 20px 0;
        }
         .thebody .thecontent input[type=submit]:hover{
            background-color:#509d50;
             color:#FFF;
        }
    </style>
</head>
<body>
   <div class="div1"><img src="photos/index.png"><a href="main.php"><?php echo $lang['saraha']?></a></div>
    <div class="div2">
        <a href="register.php"><?php echo $lang['register']?></a>
        <a href="login.php"><?php echo $lang['login']?></a>
        <a href="about.php"><?php echo $lang['about']?></a>
        <a href="contact.php"><?php echo $lang['contact']?></a>
    </div>
    <div class="thebody">
        <div class="thetitle"><?php echo $lang['forget']?></div>
        <div class="thecontent">
            <lable><?php echo $lang['enter_email']?></lable>
            <form name="get_email" method="post" action="php_get_password.php">
                <input type="email" name="email"><br>
                <input type="submit" name="send" value="<?php echo $lang['send']?>">
            </form>
        </div>
    </div>
    <div class="thefooter">
        <form action="" method="post">
            <input type="submit" name="ar" value="عربى">
            <input type="submit" name="en" value="english">
        </form>
    </div>
</body>
</html>