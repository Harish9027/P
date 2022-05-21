<?php

include("conntation.php");
$id=$_GET['id'];
$select = "SELECT * FROM std_record WHERE id='$id'";
$data = mysqli_query($connection,$select);
$row=mysqli_fetch_array($data);
?>
<div id="container">
                <h2>Update Data</h2>
                <form action="" method="post">
                    <tr>
                        <td>
                            <label for="name">Name:
                                <input value="<?php echo $row['name'] ?>"type="text" name="name" placeholder="enter your name" required>
                            </label>
                        <td>
                            <br>
                            <br>

                        <td>
                            <label for="mobile">Phone:
                                <input value="<?php echo $row['mobile'] ?>"type="text" placeholder="enter your no." name="mobile" required>
                            </label>
                            <br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                         <br>
                            <label for="submit">
                                <input type="submit" value="update" name="update_btn">
                                <input type="reset" value="reset">
                            </label>
                        </td>
                    </tr>
                </form>
            </div>

<?php
if(isset($_POST['update_btn']))
{
$name = $_POST["name"];
$mobile = $_POST["mobile"];


//insertion data

$update= "UPDATE std_record SET  name ='$name', mobile = '$mobile' WHERE id = '$id' ";



if(mysqli_query($connection,$update))
{
  ?>
  <script type="text/javascript">
  alert("data update succefully!");
  window.open("http://localhost/php_learn/CURD_Oprataion/display.php", "_self");
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