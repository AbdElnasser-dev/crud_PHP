<?php
include "config.php";
$std_id = $_POST['sid'];
$std_name = $_POST['sname'];
$std_address = $_POST['saddress'];
$std_class = $_POST['sclass'];
$std_phone = $_POST['sphone'];


$sql = "UPDATE student SET sname = '{$std_name}',
		 			 saddress = '{$std_address}',
		 			 sclass='{$std_class}',
	 				 sphone = '{$std_phone}'
	  	WHERE 
					  sid ={$std_id}";
mysqli_query($conn,$sql) or die("Query UnSuccsfully...");

header("Location:index.php");

mysqli_close($conn);
?>