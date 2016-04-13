<?php
	//拿到数据库连接
	require ('sessionCheck.php');
	require ('conn.php');
	require ('Core.class.php');
	require ('init.php');

	$core = new Core();
	$result = $core->getMessage($conn);
	
	$messageArray = array();
	while( $result_row = mysqli_fetch_assoc($result) ){
		array_push($messageArray, $result_row);
	}
	$smarty->assign("messageArray",$messageArray);
	$smarty->display('messageResult.html');


?>