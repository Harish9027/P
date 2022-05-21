<?php
// conection of DB
$conn=mysqli_connect("localhost","root","","login&signup") or die("DB not connected");
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    
    <div class="signup">
    
   <form action="" method="POST">
        <h2>Login into your account</h2>
        <i class="fa fa-user-circle"><input type="email" name="email" placeholder="Email" required=""></i>
        <i class="fa fa-key"><input type="password" name="password" placeholder="password" required=""></i>
        <input type="submit" name="login_btn" value="Login">
   </form>
   </div>
   <?php
   if(isset($_POST['login_btn']))
   {
      $email=$_POST["email"];
      $password=$_POST["password"];

      $select = "SELECT * FROM user WHERE email='$email'&& password='$password'";
      $query=mysqli_query($conn,$select);
      $row = mysqli_num_rows($query);
    //   Fetch the data from the databse
      $fetch = mysqli_fetch_array($query);
      echo $fetch;

      if($row==1)
      {    
         $username = $fetch['username'];
          session_start();
         $_SESSION['username']=$username;
         header('location:frist.php');
      }
      else{
         ?>
        <script type="text/javascript">
        alert("Invalid Authentication!");
          </script>
        <?php
         }

   }
   
   ?>
   
</body>
</html> 