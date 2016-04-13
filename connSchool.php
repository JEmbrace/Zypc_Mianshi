<?php
	$connFromSchool = new mysqli("学校数据库IP","数据库用户名","数据库密码","数据库名");
	if(mysqli_connect_errno()){
		echo "据库连接失败";
		exit();
	}else{
		echo  "连接成功";
	}

	
?>