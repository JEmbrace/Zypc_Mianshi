<?php
	//拿到数据库连接
	require ("sessionCheck.php");
	require ('conn.php');
	require ('Core.class.php');
	require ('init.php');
	
	
	$func = new Core();
	$result = $func->getAllUsers($conn);
	
	$userArray = array();
	while( $result_row = mysqli_fetch_assoc($result) ){
		array_push($userArray, $result_row);
	}
	$smarty->assign("userArray",$userArray);
	$smarty->display('userList.html');
	
?>