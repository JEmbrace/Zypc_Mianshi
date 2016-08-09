<?php
	//拿到数据库连接
	require ("../includes/includes.php");
	
	
	$func = new Core();
	$result = $func->getAllUsers($conn);
	
	if($result->num_rows == 0){
		echo "<script>alert('暂时没有报名记录!')</script>";
		echo "<script>window.location.href='welcomeJudger.php';</script>";
		exit();
	
	}
	
	$userArray = array();
	while( $result_row = mysqli_fetch_assoc($result) ){
		array_push($userArray, $result_row);
	}
	$smarty->assign("userArray",$userArray);
	$smarty->display('userList.html');
	
?>