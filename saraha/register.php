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
    <title>sarahah-Register</title>
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
            text-align:center;
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
        .thebody .thetitle{
            width:100%;
            height:200px;
            line-height:200px;
            font-size:20px;
            font-weight:bold;
        }
        .thebody .thecontent{
            width:60%;
            background-color:#fff;
            margin-left:20%;
            padding-top:20px;
            border-radius:5px;S
        }
        .thecontent table{
            width:100%;
            height:100%;
        }
        
        .thecontent table .left-td,.thecontent span{
            width:30%;
            text-align:right;
            padding-right:2%;
            font-weight:bold;
        }
        .thecontent input[type=text],.thecontent input[type=password],
        .thecontent input[type=date],
        .thecontent select,
        .thecontent .thephoto,
        .thecontent input[type=email]{
            padding:10px;
            border:2px solid #DDD;
            border-radius:5px;
            outline:none;
            width:98%;
        }
        .thecontent .thephoto{
            width:94%;
        }
        .thecontent file{
            padding:10px;
            border:2px solid #DDD;
            border-radius:5px;
            outline:none;
            width:98%;
        }
        .thecontent input[type=button]{
            padding:10px 20px;
            border:2px solid #dbb4b4;
            border-radius:5px;
            margin-bottom:10px;
            outline:none;
            color:#4b4bd0;
            background-color:#FFF;
            margin-bottom:30px;
        }
        .thecontent input[type=button]:hover{
            background-color:#438643;
            cursor:pointer;
            color:#FFF;
        }
        .thecontent .terms{
            color:#6c6cc1;
        }
        
    </style>
    <script>
        function check(){
            var name=registerform.name.value;
            var username=registerform.username.value;
            var email=registerform.email.value;
            var password=registerform.password.value;
            var con_password=registerform.con_password.value;
            var gender=registerform.gender.value;
            var country=registerform.country.value;
            var bdate=registerform.bdate.value;
            if(email=="" )
                alert("please enter the email");
            else if(!email.match(/^\w(\w*)@gmail.com/))
                alert("please enter correct email address");
            else if(password=="")
                alert("please enter the password.");
            else if(password.length<5)
                alert("the passwor min lenth 5.");
            else if(password!=con_password)
                alert("the password not equal to the confirm password.");
            else if(username=="")
                alert("please enter the username.");
            else if(name=="")
                alert("please enter the name.");
            else if(name.match(/([^a-zA-Z]+)(^\s)([^a-zA-Z]*)/))
                alert("the name not match.");
            else if(bdate=="")
                alert("please enter the birth date");
            else if(bdate>"1997")
                alert("the date must be less than 1997");
            else if(gender=="")
                alert("please choose the gender.");
            else if(country=="")
                alert("please choose the country.");
            else{
                var thebutton=registerform.register_button;
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
        <div class="thetitle"><?php echo $lang['register'];?></div>
        <div class="thecontent">
            <form id="form" name="registerform" action="phpregister.php" method="post" enctype="multipart/form-data">
           <table>
                    <tr>
                        <td class="left-td"><?php echo $lang['email'];?></td>
                        <td><input type="email" name="email" placeholder="Example@gmail.com"></td>
                    </tr>
                    <tr>
                        <td class="left-td"><?php echo $lang['password'];?></td>
                        <td><input type="password" name="password" placeholder="min length 5 character"></td>
                    </tr>
                    
                    <tr>
                        <td class="left-td"><?php echo $lang['password_confirmation'];?></td>
                        <td><input type="Password" name="con_password"></td>
                    </tr>
                    <tr>
                        <td class="left-td"><?php echo $lang['username'];?></td>
                        <td><input type="text" name="username"></td>
                    </tr>
                    <tr>
                        <td class="left-td"><?php echo $lang['name'];?></td>
                        <td><input type="text" name="name"></td>
                    </tr>
                    <tr>
                        <td class="left-td"><?php echo $lang['birth_date'];?></td>
                        <td><input type="date" name="bdate"></td>
                    </tr>
                    <tr>
                        <td class="left-td"><?php echo $lang['gender'];?></td>
                        <td>
                            <select name="gender">
                                <option><?php echo $lang['male'];?></option>
                                <option><?php echo $lang['female'];?></option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="left-td"><?php echo $lang['country'];?></td>
                        <td>
                             <select name="country">
                                <option><?php echo $lang['egypt'];?></option>
                                <option><?php echo $lang['libia'];?></option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="left-td"><?php echo $lang['photo'];?></td>
                        <td><div class="thephoto"><input type="file" name="photo"></div></td>
                    </tr>
                    <tr>
                        <td class="left-td"></td>
                        <td><input type="checkbox" name="notification"><span> <?php echo $lang['notification'];?></span></td>
                    </tr>
                    <tr>
                        <td class="left-td"></td>
                        <td>
                            <input type="checkbox" name="accept">
                            <span> I have read and accept the </span>
                            <lable class="terms">Terms and Conditions</lable>
                        </td>
                    </tr>
                    <tr>
                        <td class="left-td"></td>
                        <td><input type="button" name="register_button" value="<?php echo $lang['register'];?>" onclick="check();"></td>
                    </tr>
                </table>
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

