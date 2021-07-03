<?php

include "config.php";

$std_id = $_GET['id'];

$sql = "DELETE FROM student WHERE sid = {$std_id}";

mysqli_query($conn,$sql) or die("Connection Unsuccesfully.");

header("Location: index.php");
mysqli_close($conn);

?>