<?php
$connection =  mysqli_connect("localhost", "root", "","record");

if(!$connection)
{
    // die is a functaion which contain 2 parameter.
    die("Connection Failed : ".connect_error());
    // connect_error-->give the reason of the error to connect database.
}
// else{
//     echo " Connecation Successfull!";
// }

?>