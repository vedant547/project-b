<?php include_once('connection.php');?>
<?php
     $test="book selling system";
	 $conn=mysqli_connect("localhost","username","password","DBName");
	 if(!$conn)
	 {
	   die("error:",mysqli_connect_error);
	 }
	 ?>