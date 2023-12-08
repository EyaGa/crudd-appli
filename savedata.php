<?php
 $stu_name = $_POST['sname'];
 $stu_address = $_POST['saddress'];
 $stu_class = $_POST['class'];
 $stu_phone = $_POST['sphone'];

$conn = mysqli_connect("AZURE_MYSQL_HOST = phpmyadmin.mysql.database.azure.com","AZURE_MYSQL_USERNAME = xukfmicjwi","AZURE_MYSQL_PASSWORD = J7C1IY4H0F8TWH06$","AZURE_MYSQL_DBNAME = crud") or die("Connection Failed");

$sql = "INSERT INTO student(sname,saddress,sclass,sphone) VALUES ('{$stu_name}','{$stu_address}','{$stu_class}','{$stu_phone}')";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location: http://52.146.10.37:80/crud/index.php");

mysqli_close($conn);

?>
