<?php
	//拿到数据库连接
	require ("sessionCheck.php");
	require ('conn.php');
	require ('Core.class.php');
	require ('init.php');
	
	
	$func = new Core();
	$result = $func->getNotJudger($conn);
	
	$notJudgeArray = array();
	while( $result_row = mysqli_fetch_assoc($result) ){
		array_push($notJudgeArray, $result_row);
	}
	$smarty->assign("notJudgeArray",$notJudgeArray);
	$smarty->display('notJudge.html');
	
?>