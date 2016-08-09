<?php
	//拿到数据库连接
	require ("../includes/includes.php");
	
	$func = new Core();
	$result = $func->getNotpassUser($conn);
	if($result->num_rows == 0){
		echo "<script>alert('暂时没有没通过面试的同学!')</script>";
		echo "<script>window.location.href='welcomeJudger.php';</script>";
		exit();
	
	}
	
	$notpassUser = array();
	while( $result_row = mysqli_fetch_assoc($result) ){
		array_push($notpassUser, $result_row);
	}
	$smarty->assign("notpassUser",$notpassUser);
	$smarty->display('notpass.html');
	
?>