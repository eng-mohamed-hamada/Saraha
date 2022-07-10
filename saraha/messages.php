<?php 
session_start();
if(!isset($_SESSION['email'])){
    header('location: login.php');
    exit();
}
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
    <title>sarahah-Register</title>
    <style>
        body{
            margin:0px;
            padding:0px;
            background-color:#EEE;
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
            padding-top:80px;
            padding-bottom:30px;
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
        .thebody .about{
            width:60%;
            background-color:#fff;
            margin-left:20%;
            padding-top:20px;
            padding-bottom:20px;
            text-align:center;
            border-radius:5px;
        }
        .thebody .about img{
            width:15%;
            border-radius:50%;
            
        }
        .thebody .about a{
            text-decoration:none;
            font-weight:bold;
            color:#000;
            opacity:0.5;
            cursor:pointer;
        }
        .thebody .about a:hover{
            opacity:1;
        }
        .thebody .confirm-email{
            width:58%;
            margin-left:20%;
            background-color:#d1adad;
            padding:1%;
            border:2px solid #af9797;
            border-radius:5px;
            margin-top:20px;
            margin-bottom:20px;
        }
        .thebody .confirm-email h5{
            color:#2a8b2a;
        }
        .thebody .confirm-email span{
            font-weight:600;
        }
        .thebody .confirm-email .theemail-title{
            color:#4c8d4c;
            font-weight:normal;
        }
        .thebody .confirm-email a{
            text-decoration:none;
            opacity:0.5;
            color:#000;
        }
        .thebody .confirm-email a:hover{
            opacity:1;
        }
        .thebody .themessages-body{
            width:60%;
            background-color:#fff;
            margin-left:20%;
            padding-top:20px;
            padding-bottom:20px;
            text-align:center;
            margin-bottom:0px;
            border-top-left-radius:5px;
            border-top-right-radius:5px;
        }
         .received{
            width:56%;
            background-color:#FFF;
             float:left;
            padding:2%;
            text-align:center;
            margin-bottom:30px;
             margin-left:20%;
            border-bottom-left-radius:5px;
             border-bottom-right-radius:5px;
        }
        .received h4{
            background-color:#3a893a;
            color:#FFF;
            padding-top:5px;
            padding-bottom:5px;
        }
        .received .received_messages{
            width:100%;
        }
        .received .received_messages .message{
            width:100%;
            overflow:auto;
            background-color:#5151c3;
            color:#FFF;
            padding:10px 0px;
            font-size:25px;
            border-radius:5px;
            margin-bottom:10px;
        }
    </style>
        <script>
        function thereceived_messages(){
            var myrequest;
            if(window.XMLHttpRequest){
                //chrome+safari+ie 7+firefox
                myrequest=new XMLHttpRequest();
            }else{
                myrequest= new ActiveXObject("Microsoft.XMLHTTP");
            }
            myrequest.onreadystatechange=function(){
               if(myrequest.readyState==4 && myrequest.status==200)
                    {
                        document.getElementById("received_messages").innerHTML=myrequest.responseText;
                    }
            }
            myrequest.open('GET','phpreceivedmessages.php', true);
            myrequest.send();
        }
            
    
            function saraha_email(){
            var myrequest;
            if(window.XMLHttpRequest){
                //chrome+safari+ie 7+firefox
                myrequest=new XMLHttpRequest();
            }else{
                myrequest= new ActiveXObject("Microsoft.XMLHTTP");
            }
            myrequest.onreadystatechange=function(){
               if(myrequest.readyState==4 && myrequest.status==200)
                    {
                        document.getElementById("theemail").innerHTML=myrequest.responseText;
                    }
            }
            myrequest.open('GET','getsarahaemail.php', true);
            myrequest.send();
        }
            setInterval(thereceived_messages,1000);
            saraha_email();
    </script>
</head>
<body>
   <div class="div1"><img src="photos/index.png"><a href="main.php"><?php echo $lang['saraha'];?></a></div>
    <div class="div2">
        <a href="register.php"><?php echo $lang['register'];?></a>
        <a href="logout.php"><?php echo $lang['logout'];?></a>
        <a href="about.php"><?php echo $lang['about'];?></a>
        <a href="contact.php"><?php echo $lang['contact'];?></a>
    </div>
    <div class="thebody">
        <div class="about">
            <?php
            
            echo '<img src="photos/'.$_SESSION["photo"].'">';
             echo "<h2>".$_SESSION['username']."</h2>";?>
            <span id="theemail">
                <a href="email@Saraha.com.php">email@Saraha.com</a>
            </span>
                
        </div>
        <div class="confirm-email">
            <h5>Confirm email address</h5>
            <span class="theemail-title">Your email is: </span>
            <?php
                echo '<span>'.$_SESSION['email'].'</span><br>';
             ?>
            <a href="manage.php">Change email</a> |
            <a href="#">The email is correct</a>
        </div>
            <h3 class="themessages-body">Messages</h3>
                <div class="received">
                <h4>Received</h4>
                <div id="received_messages" class="received_messages">
                    
                    the received messages will be appear here.
                </div>
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