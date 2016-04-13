<?php
	$conn = new mysqli("localhost:3306","root","000000","zypc2016");
	if(mysqli_connect_errno()){
		echo "据库连接失败";
		exit();
	}
?>