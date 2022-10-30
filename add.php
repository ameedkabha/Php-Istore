<?php
include "dbcon.php";

// $id  = $_POST['txtid'];
$txtname  = $_POST['txtname'];
$clientTtype  = $_POST['clientTtype'];
$txtphone  = $_POST['txtphone'];
$txtemail =  $_POST['txtemail'];
$txtaddress =  $_POST['txtaddress'];
$txtgender =  $_POST['txtgender'];
$txtpic =  $_POST['txtpic'];
$txtproducts =  $_POST['txtproducts'];


if ($txtname==''){
 echo "<p class='btn btn-info' align='center'>Please Insert client name</p>";
}else{ 
 $sql = "INSERT INTO client (client_type,name, Phone,email,address,client_gender,client_pic,favorite_products)
 VALUES ('".$txtname."','".$clientTtype."','".$txtphone."','".$txtemail."','".$txtaddress."'
 ,'".$txtgender."','".$txtpic."','".$txtproducts."')";
 if ($conn->query($sql) === TRUE) {
 echo "<p class='btn btn-info' align='center'>New record created successfully</p>";
 } else {
 echo "Error: " . $sql . "<br>" . $conn->error."";
 }
 $conn->close();
} 
?>