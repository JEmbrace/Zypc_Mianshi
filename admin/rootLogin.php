<?php
	
	require ("../init.php");	
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	if(empty($password) && empty($password)){
		echo "<script>alert('录入面试官信息前请先登录!')</script>";
		echo "<script>location.href=\"rootLogin.html\"</script>";
	}
	if($username == "zypc@2016" && $password == "zypc@2016" ){
		@session_start();
		$_SESSION['username']= $username;
		$smarty->display("rootChoice.html");

	}else{
		echo "<script>alert('管理员用户名或密码错误!')</script>";
		echo "<script language='javascript'>location.href=\"rootLogin.html\";</script>"; 

	}

?>