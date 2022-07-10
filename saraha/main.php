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
    <link rel="icon" href="photos/index.png">
    <title>sarahah</title>
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
        
        
        .thefooter{
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
        .copyright{
            float:left;
            margin-left:10%;
            position:absolute;
        }
        .thebody{
            width:90%;
            height:590px;
            background-color:#EEE;
            padding-left:10%;
            padding-top:5%;
        }
        .theleft,.theright{
            float:left;
            height:300px;
            width:40%;
        }
        .theright{
            width:60%;
            padding-top:50px;
        }
        .theleft a{
            text-decoration:none;
            color:#000;
            padding:5px;
            font-weight:bold;
            opacity:0.4;
        }
        .theleft a:hover{
            opacity:1;
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
        <div class="theleft">
           <p>Get honest feedback from your coworkers and friends</p>
            <h2>At work</h2>
            <ul>
                <li>Enhance your Areas of Strength</li>
                <li>Strengthen Areas for Improvement</li>
            </ul>
        <a href="register.php"><?php echo $lang['register']?></a>|
        <a href="login.php"><?php echo $lang['login']?></a>
        </div>
        <div class="theright">
         <h2>With Your Friends</h2>
            <ul>
                <li>Improve your friendship by discovering your strengths and areas for improvement</li>
                <li>Let your friends be honest with you</li>
            </ul>
        </div>
            
        </div>
    <div class="thefooter">
        <div class="copyright">sarahah2017&copy;-Privacy-Terms</div>
        <form action="" method="post">
            <input type="submit" name="ar" value="عربى">
            <input type="submit" name="en" value="english">
            
        </form>
        
    </div>
</body>
</html>