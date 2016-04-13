<?php
	//拿到数据库连接
	require ('conn.php');
	require ('Core.class.php');
	require ('init.php');

	$core = new Core();
	$result = $core->getALLJudgers($conn);
	
	$judgerArray = array();
	while( $result_row = mysqli_fetch_assoc($result) ){
		array_push($judgerArray, $result_row);
	}
	$smarty->assign("judgerArray",$judgerArray);
	$smarty->display('judgerList.html');
?>