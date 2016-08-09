<?php
	//拿到数据库连接
	require ("../includes/includes.php");

	@session_start();
	$rootName = $_SESSION['username'];

	if($rootName == null ){	
		echo "<script>alert('进入面试系统前请先登录！')</script>";
		echo "<script>location.href=\"rootLogin.html\"</script>";
	}
	

	$core = new Core();
	$result = $core->getALLJudgers($conn);
	if($result->num_rows == 0){
		echo "<script>alert('暂时没有面试官!')</script>";
		echo "<script language='javascript'> window.history.back(-1);</script>"; 
	
	}
	
	$judgerArray = array();
	while( $result_row = mysqli_fetch_assoc($result) ){
		array_push($judgerArray, $result_row);
	}
	$smarty->assign("judgerArray",$judgerArray);
	$smarty->display('judgerList.html');
?>