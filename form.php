<?php
// object-oriendted apporach

// 1. step import the data in php file.
$name = $_POST["name"];
$email = $_POST["email"];
$mobile = $_POST["mobile"];
$username = $_POST["username"];
$Password = $_POST["password"];
$confirmPassword = $_POST["confirmPassword"];

// echo $name;
// echo "<br>";
// echo $email;
// echo "<br>";
// echo $mobile;

// conneted to database

// mysqli is a function it require 3 parameter(1.localhost- local network, 2.default server- name root, 3.password is blank. 4.last me databse name.)
//cooncation string== mysqli_connect
$conn = mysqli_connect("localhost", "root", "","record");
//check the connectation, if it  filed print msg.
if($conn->connect_error)
{
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
}

 else 
 {
    //sqli query --> inset into table name(schema) value(php variable name);
    $stmt = $conn->prepare("insert into std2_record(name,email,mobile,username,password,confirmPassword) values(?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssisss", $name, $email, $mobile,$username,$Password,$confirmPassword);
    $execval = $stmt->execute();
    echo $execval;
    echo "<br>";
    echo "Registration successfully...";
    $stmt->close();
    $conn->close();
 }
//  we can create a database, and table also in php code.
// advantage to databse create in code is we can execute any machine without database error.
?>
