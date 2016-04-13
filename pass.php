<?php
	//拿到数据库连接
	require ("sessionCheck.php");
	require ('conn.php');
	require ('Core.class.php');
	require ('init.php');
	
	
	$func = new Core();
	$result = $func->getPassUser($conn);
	
	$passUser = array();
	while( $result_row = mysqli_fetch_assoc($result) ){
		array_push($passUser, $result_row);
	}
	$smarty->assign("passUser",$passUser);
	$smarty->display('pass.html');
	
?>