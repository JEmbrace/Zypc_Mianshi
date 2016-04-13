<?php
	require ("init.php");
	$_SESSION['jname'] = null;
	@session_start();
	$judgerName = $_SESSION['jname'];
	
	if($judgerName == null ){	
		echo "<script>alert('进入面试系统前请先登录！')</script>";
		echo "<script>location.href=\"judgerLogin.html\"</script>";
	}

	$smarty->display("userJudge.html");
?>