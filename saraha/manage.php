<?php
session_start();
if(!isset($_SESSION['email']))
{
    header("location: login.php");
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
        .settings,.thedata{
            background-color:#FFF;
            float:left;
            border-radius:3px;
        }
        .settings{
            width:30%;
            height:auto;
            margin-right:2%;
            
        }
        .thedata{
            width:60%;
            padding-bottom:30px;
        }
        .settings .settings-title{
            padding:10px 0px 0px 10px;
        }
        .settings ul{
            list-style:none;
           padding-left:0px;
        }
        .settings ul li,.settings ul a{
            text-decoration:none;
            border-top:1px solid #DDD;
            padding:12px;
            color:#9c9cf4;
            
        }
        .settings ul a{
          padding:0px;  
            border-top:0px;
        }
       
        .settings ul li:hover{
            background-color:#EEE;
            cursor:pointer;
        }
        /*the data*/
        .thedata .person-title{
            padding:10px;
            height:10%;
            font-size:20px;
            font-weight:bold;
            border-bottom:1px solid #DDD;
        }
        .person-thecontent{
            height:60%;
            display:block;
        }
        .person-thecontent table{
            width:100%;
            height:100%;
        }
        
        .person-thecontent table .left-td{
            width:30%;
            text-align:right;
            padding-right:2%;
            font-weight:bold;
        }
        .person-thecontent input[type=text],.person-thecontent input[type=email]{
            padding:10px;
            border:2px solid #DDD;
            border-radius:5px;
            outline:none;
            width:98%;
        }
        .person-thecontent input[type=submit]{
            padding:10px 20px;
            border:2px solid #DDD;
            border-radius:5px;
            margin-bottom:10px;
            outline:none;
            background-color:#FFF;
            margin-bottom:30px;
        }
        .person-thecontent input[type=submit]:hover{
            background-color:#438643;
        }
       
        
        .password-thecontent{
            height:300px;
            display:none;
        }
        .password-thecontent table{
            width:100%;
            height:100%;
        }
        
        .password-thecontent table .left-td{
            width:30%;
            text-align:right;
            padding-right:2%;
            font-weight:bold;
        }
        .password-thecontent input[type=password]{
            padding:10px;
            border:2px solid #DDD;
            border-radius:5px;
            outline:none;
            width:98%;
        }
        .password-thecontent input[type=submit]{
            padding:10px 20px;
            border:2px solid #DDD;
            border-radius:5px;
            margin-bottom:10px;
            outline:none;
            background-color:#FFF;
            
        }
        .password-thecontent input[type=submit]:hover{
            background-color:#438643;
            color:#FFF;
        }
        /*-----------------------------------------*/
        .remove-thecontent{
            padding:10px;
            display:none;
        }
        .remove-thecontent .person-title{
            border-bottom:0px;
        }
        .remove-thecontent .themessage{
            background-color:#d1adad;
            padding:10px;
            border-radius:5px;
            margin-bottom:60px;
        }
        .remove-thecontent input[type=button],
        .remove-thecontent input[type=submit]{
            padding:10px 20px;
            border:2px solid #DDD;
            border-radius:5px;
            margin-bottom:10px;
            outline:none;
            background-color:#FFF;
        }
        .remove-thecontent input[type=button]:hover,
        .remove-thecontent input[type=submit]:hover{
            background-color:#438643;
            color:#FFF;
        }
    </style>
    <script>
        function changeInfo(){
            document.getElementById("person_info").style="display:block";
            document.getElementById("thepassword").style="display:none";
            document.getElementById("remove").style="display:none";
        }
        function changePassword(){
            document.getElementById("person_info").style="display:none";
            document.getElementById("thepassword").style="display:block";
            document.getElementById("remove").style="display:none";
        }
        function removeAccount(){
            document.getElementById("person_info").style="display:none";
            document.getElementById("thepassword").style="display:none";
            document.getElementById("remove").style="display:block";
        }
        
    </script>
</head>
<body>
   <div class="div1"><img src="photos/index.png"><a href="main.php"><?php echo $lang['saraha']?></a></div>
    <div class="div2">
        <a href="messages.php"><?php echo $lang['my_messages']?></a>
        <a href="manage.php"><?php echo $lang['settings']?></a>
        <a href="main.php"><?php echo $lang['logout']?></a>
        <a href="about.php"><?php echo $lang['about']?></a>
        <a href="contact.php"><?php echo $lang['contact']?></a>
    </div>
    <div class="thebody">
        <div class="settings">
            <div class="settings-title"><?php echo $lang['settings']?></div>
            <ul>
                <li onclick="changeInfo();"><?php echo $lang['person_info']?></li>
                <li onclick="changePassword()"><?php echo $lang['password']?></li>
                <li onclick="removeAccount();"><?php echo $lang['remove_account']?></li>
                <li>
                    <a href="messages.php"><?php echo $lang['back_to_messages']?></a>
                </li>
            </ul>
        </div>
        <div class="thedata">
            <form id="form" name="theinfo" method="post" action="personal_info.php">
            <div id="person_info" class="person-thecontent">
                <div class="person-title">Edit Person Information</div>
                <table>
                    <tr>
                        <td class="left-td"><?php echo $lang['name']?></td>
                        <td><input type="text" name="name"></td>
                    </tr>
                    <tr>
                        <td class="left-td"><?php echo $lang['email'];?></td>
                        <td><input type="email" name="email"</td>
                    </tr>
                    <tr>
                        <td class="left-td">Notification</td>
                        <td><input type="checkbox" name="notification"></td>
                    </tr>
                    <tr>
                        <td class="left-td">Appear In Search</td>
                        <td><input type="checkbox" name="appear"></td>
                    </tr>
                    <tr>
                        <td class="left-td">Allow Anonymous People To Post</td>
                        <td><input type="checkbox" name="allow"></td>
                    </tr>
                    <tr>
                        <td class="left-td"></td>
                        <td><input type="submit" name="save" value="<?php echo $lang['save'];?>"></td>
                    </tr>
                </table>
            </div>
            </form>
            <form id="form" name="changethepassword" action="change_password.php" method="post">
            <div id="thepassword" class="password-thecontent">
                <div class="person-title">Change Password</div>
                <table>
                    <tr>
                        <td class="left-td">Current Password</td>
                        <td><input type="password" name="password" min="5"></td>
                    </tr>
                    <tr>
                        <td class="left-td">New Password</td>
                        <td><input type="password" name="new_password" min="5"></td>
                    </tr>
                    <tr>
                        <td class="left-td">New Password Confirmation</td>
                        <td><input type="password" name="con_password" min="5"></td>
                    </tr>
                    <tr>
                        <td class="left-td"></td>
                        <td><input type="submit" name="save" value="Change"></td>
                    </tr>
                </table>
            </div>
            </form>
            
            <div id="remove" class="remove-thecontent">
                <div class="person-title"><?php echo $lang['remove_account']?></div>
                <div class="themessage">
                    <h5>Are you sure that you want to delete your account?</h5>
                    <h5>Deleting the account is irreversible!</h5>
                </div>
                <form id="form" name="remove_account" method="post" action="manage.php">
                    <input type="button" name="cancle" value="<?php echo $lang['cancel'];?>" onclick="location='messages.php';">
                    <input type="submit" name="remove" value="<?php echo $lang['remove'];?>">
                    
                </form>
            </div>

        </div>
            
        </div>
    <div class="thefooter">
        <div class="copyright">sarahah2017&copy;-Privacy-Terms</div>
        <form action="" method="post">
            <input type="submit" name="ar" value="عربى">
            <input type="submit" name="en" value="english">
        </form>
        
    </div>
    <div id="result"></div>
</body>
</html>

<?php
if(isset($_POST['remove'])){
include("connect.php");
session_start();
$theemail=$_SESSION['email'];
$stmt=$db->prepare("select photo, saraha_email from users where email='$theemail';");
$stmt->execute();
$users=$stmt->fetchAll();
foreach($users as $user){
$saraha_email=$user['saraha_email'];
$photo=$user['photo'];
unlink("photos/".$photo);
unlink("profiles/".$saraha_email.".php");
}
$q = "delete from users where email='$theemail';";
$db->exec($q);
$q = "delete from themessages where receiver='$theemail';";
$db->exec($q);

include("logout.php");
}
?>

