<?php
 $stu_name = $_POST['sname'];
 $stu_address = $_POST['saddress'];
 $stu_class = $_POST['class'];
 $stu_phone = $_POST['sphone'];

  error_reporting(E_ALL);
  ini_set('display_errors', 1);
$conn = mysqli_connect('127.0.0.1', 'nadia', 'eYa2096.', 'crud', 3307) or die("Connection Failed");
mysqli_close($conn);

$sql = "INSERT INTO student(sname,saddress,sclass,sphone) VALUES ('{$stu_name}','{$stu_address}','{$stu_class}','{$stu_phone}')";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location: http://20.119.16.24:80/cruddy/index.php");

mysqli_close($conn);

?>
