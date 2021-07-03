<?php
 include 'header.php';
 include 'config.php';

 if (isset($_POST['deletebtn'])) {
 	$std_id = $_POST['sid'];
	 	
	$sql = "DELETE FROM student WHERE sid = {$std_id}";

	mysqli_query($conn,$sql) or die("Connection Unsuccesfully.");

	header("Location: index.php");
	mysqli_close($conn);
 }



 ?>


<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>
</div>
</div>
</body>
</html>
