<?php
include("conntation.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
           <table>
            <div id="container">
                <h2>Registration Form</h2>
                <!-- for connect to php page ny using action="php file name" method="post" -->
                <form action="" method="post">
                    <tr>
                        <td>
                            <label for="name">Name:
                                <input type="text" name="name" placeholder="enter your name" required>
                            </label>
                          <tr>
                        <td>
                            <label for="mobile">Phone:
                                <input type="text" placeholder="enter your no." name="mobile" required>
                            </label>
                            <br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                         <br>
                            <label for="submit">
                                <input type="submit" value="submit" name="submit_btn">
    
                                <input type="reset" value="reset">
                                <button type="button"><a href="display.php">display</a></button>
                            </label>
                        </td>
                    </tr>
                </form>
            </div>
        </table>
    
    
</body>
</html>



<?php
if(isset($_POST['submit_btn']))
{
$name = $_POST["name"];
$mobile = $_POST["mobile"];


//insertion data

$insert_data = "INSERT INTO std_record(`name`,`mobile`) VALUES('$name','$mobile')";



if(mysqli_query($connection,$insert_data))
{
  ?>
  <script type="text/javascript">
  alert("data saved succefully!");
</script>
<?php
}
else{
  ?>
  <script type="text/javascript">
  alert("try again!");
</script>
<?php
}
}

?>