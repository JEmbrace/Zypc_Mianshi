<?php
	//拿到数据库连接
	require ("../includes/includes.php");

	$core = new Core();
	$result = $core->getMessage($conn);
	
	if($result->num_rows == 0){
		echo "<script>alert('暂时没有留言信息!')</script>";
		echo "<script>window.location.href='welcomeJudger.php';</script>";
		exit();
	
	}
	
	$messageArray = array();
	while( $result_row = mysqli_fetch_assoc($result) ){
		array_push($messageArray, $result_row);
	}
	$smarty->assign("messageArray",$messageArray);
	$smarty->display('messageResult.html');


?>