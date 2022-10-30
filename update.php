<?php
include"dbcon.php"; 
$string  = $_POST['string'];
$txtname  = $_POST['txtname'];
$txtdepartment  = $_POST['txtdepartment'];
$txtphone  = $_POST['txtphone'];
if ($txtname==''){
 echo "<p class='btn btn-info' align='center'>Please Insert YOUr name</p>";
}else{
 $sql = "UPDATE client SET name='$txtname', Department='$txtdepartment', Phone='$txtphone' WHERE id = '$string' ";
 if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
 } else {
  echo "Error updating record: " . $conn->error;
 } 
}
?>