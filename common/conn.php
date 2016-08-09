<?php
	$conn = new mysqli("数据库IP地址","用户名","密码","数据库名");
	if(mysqli_connect_errno()){
		echo "数据库连接失败";
		exit();
	}
?>