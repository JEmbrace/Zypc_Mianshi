<?php
	//拿到数据库连接
	require ("sessionCheck.php");
	require ('conn.php');
	require ('Core.class.php');
	require ('init.php');
	
	
	$func = new Core();
	$result = $func->getNotpassUser($conn);
	
	$notpassUser = array();
	while( $result_row = mysqli_fetch_assoc($result) ){
		array_push($notpassUser, $result_row);
	}
	$smarty->assign("notpassUser",$notpassUser);
	$smarty->display('notpass.html');
	
?>