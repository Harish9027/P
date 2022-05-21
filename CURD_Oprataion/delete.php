<?php
include("conntation.php");
$id=$_GET['id'];
$delete = "DELETE FROM std_record WHERE id='$id' ";
$data = mysqli_query($connection,$delete);
if($data)
{
?>
<script type="text/javascript">
    alert("DATA Deleted Succefully!");
    window.open("http://localhost/php_learn/CURD_Oprataion/display.php", "_self");
</script>
<?php
}
else
{
?>
<script type="text/javascript">
    alert("DATA not Deleted,try again!");
</script>
<?php

}
?>