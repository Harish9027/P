<?php
$conn=mysqli_connect("localhost","root","","login&signup") or die("DB not connected");

?>

<!DOCTYPE html>
<?php
if(isset($_POST['signup_btn']))
{
    $username=mysqli_real_escape_string($conn,$_POST['username']);
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $password=mysqli_real_escape_string($conn,$_POST['password']);
    $confirmPassword=mysqli_real_escape_string($conn,$_POST['confirmPassword']);
   if(empty($username))
   {
       $error="username is empty";
   }
   elseif(empty($email))
   {
       $error="email is empty";
   }
   elseif(empty($password))
   {
       $error="Password is empty";
   }
   elseif($password != $confirmPassword)
   {
       $error="Password not match";
   }
   elseif(strlen($username)<3 || strlen($username)>25)
   {
          $error= "username between 3 to 25 characters";
   }
   elseif(strlen($password)<=6)
   {
          $error= "password must be atleast 6 characters.";
   }
  else{
      $check_email="SELECT * FROM user WHERE email='$email'";
      $data=mysqli_query($conn,$check_email);
      $result=mysqli_fetch_array($data);
      if($result>0)
      {
         $error="email already exist";
      }
      else{
          $pass=md5($password);
          $insert="INSERT INTO user(username,email,password) Values('$username','$email','$pass')";
          $query=mysqli_query($conn,$insert);
          if($query)
             {
            ?>
             <script  type="text/javascript">
             alert("SignUp SUccessfully! Please Login Your Account.");
            //  below line redicrect after signup to home page put url of home page.
             window.open("index.php","_self");
            </script>
            <?php
            
             } 
        
          }
     }

}
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="signup.css">
</head>
<body>
    <div class="signup">
        
        <form action="" method="POST">
        <p style="color:red">
            <?php
            if(isset($error))
            {
                echo $error;
            }
            ?>
        </p>
        <p>

        </p>
        <h3>Create Your Account </h3>
             <i class="fa fa-user-o" aria-hidden="true"><input type="text" name="username" placeholder="Username" value="<?php if(isset($error)){echo $username;}?>"></i>
            
             <i class="fa fa-envelope-o" aria-hidden="true"><input type="email" name="email" placeholder="Email" value="<?php if(isset($error)){echo $email;}?>"></i>
    
             <i class="fa fa-key" aria-hidden="true"><input type="password" name="password" placeholder="Password"></i>

             <i class="fa fa-key" aria-hidden="true"> <input type="password" name="confirmPassword" placeholder="ConfirmPassword"></i>
        
            <input type="submit" name="signup_btn" value="SignUp Your Account.">

        </form>
    </div>
</body>
</html>