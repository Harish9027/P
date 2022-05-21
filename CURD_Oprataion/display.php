<?php
include("conntation.php");
?>
<a href="insert.php">Home</a>

<table border="1px" cellpadding="10px" cellspacing="0px">
    <tr>
        <th>Name</th>
        <th>Moblie no.</th>
        <th colspan="2">Action</th>
    </tr>

    <?php
 $query = "SELECT * FROM std_record";
 $data =mysqli_query($connection,$query);

 $result=mysqli_num_rows($data);
 if($result)
 {
   while($row=mysqli_fetch_array($data)){
     ?>
     <tr>
         <td><?php echo $row['name']; ?></td>
         <td><?php echo $row['mobile']; ?></td>
         <td>
         <a href="update.php?id=<?php echo $row['id'];
         ?>">Edit
         </a>
        </td>
        <td>
         <a onclick="return confirm('Are you sure to delete!')" href="delete.php?id=<?php echo $row['id'];
         ?>">Delete
         </a>
        </td>
     </tr>
     <?php  

   }
 }
 else{
    ?>
    <tr>
        <td>No record found</td>
    </tr>
    <?php
 }

?>

</table>





