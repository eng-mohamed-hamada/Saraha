
<html>
<head>
<meta charset="utf-8">
    <title>sarahah-Login</title>
    <link rel="icon" href="../photos/index.png">
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
            height:80%;
            padding-top:10%;
            background-color:#EEE;
            text-align:center;
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
        .thefooter lable{
            
            opacity:0.7;
        }
        .thefooter lable:hover{
            cursor:pointer;
            opacity:1;
        }
        fieldset{
            width:80%;
            margin-left:10%;
            background-color:#FFF;
            text-align: center;
            border:none;
            border-radius:5px;
        }
        fieldset legend{
            width:20%;
            margin-left:40%;
        }
        fieldset legend img{
            width:50%;
        }
        fieldset textarea{
            border:2px solid #bf8a8a;
            border-radius:10px;
            width:80%;
            background-color:#EEE;
            height:130px;
            font-size:20px;
        }
        fieldset input{
            background-color:#FFF;
            border:2px solid #bf8a8a;
            border-radius:5px;
            color:#8b7ec4;
            width:100px;
            padding:10px 20px;
            font-size:20px;
        }
        fieldset input:hover{
            background-color:#389638;
            color:#FFF;
            
        }
    </style>
    <script>
        function get_profiledata(){
            var thepath=location.pathname;
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
                        document.getElementById("theuser").innerHTML=myrequest.responseText;
                    }
            }
            myrequest.open("POST","../getprofiledata.php",true);
            myrequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
            myrequest.send("thepath="+thepath);

        }
        get_profiledata();
        
        
        function send_message(){
            var themessage=sendform.message.value;
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
                        document.getElementById("result").innerHTML=myrequest.responseText;
                    }
            }
            myrequest.open("POST","../sendmessage.php",false);
            myrequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
            //فى حاله استخدام الpost وارسال بيانات
            myrequest.send("themessage="+themessage);
            alert("the message send.");
        }
    </script>
</head>
<body>
   <div class="div1"><img src="../photos/index.png"><a href="main.html">sarahah</a></div>
    <div class="div2">
        <a href="../register.html">Register</a>
        <a href="../login.php">Login</a>
        <a href="../about.html">About Us</a>
        <a href="../contact.html">Contact Us</a>
    </div>
    <div class="thebody">
        <fieldset>
            <div id="theuser">
            <legend><img src="default.png"></legend>
            <h3>Username</h3>
            </div>
            <p>Leave a constructive message:)</p>
            <form name="sendform" action="send_message.php" method="post">
            <textarea name="message"></textarea><br><br>
            <input type="button" name="send" value="Send" onclick="send_message();">
            </form>
        </fieldset>
    </div>
    <div class="thefooter">
        <lable>العربيه</lable>
        <lable>English</lable>
    </div>
    <div id="result"></div>
</body>
</html>









