<?php
$email=$_POST['email'];
$password="";
if(!preg_match("/^\w(\w*)@gmail.com/",$email))
{
    ?>
<script>
alert("please enter correct email address.");
window.location.replace("ForgetPassword.php");
</script>
<?php
}else{
    include("connect.php");
    
    $stmt=$db->prepare("select password from users where email='$email';");

    $stmt->execute();
    $users=$stmt->fetchAll();

      foreach($users as $user)
      {
          $password=$user['password'];
      }
    
    
    $to = '$email';
    $subject = 'recovering the password.';
    $message = 'your password are: '.$password;
    $headers = "From: www.saraha.com\r\n";
    if (mail($to, $subject, $message, $headers)) {
       ?>
        <script>

        alert("the password send to your email");
        window.location.replace("login.php");
        </script>
       <?php
    } else {
       echo "ERROR";
    }
}
?>