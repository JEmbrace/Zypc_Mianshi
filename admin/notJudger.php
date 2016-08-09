<?php
	//拿到数据库连接
	require ("../includes/includes.php");
	
	$func = new Core();
	$result = $func->getNotJudger($conn);
	if($result->num_rows == 0){
		echo "<script>alert('暂时没有没评价的同学!')</script>";
		echo "<script>window.location.href='welcomeJudger.php';</script>";
		exit();
	
	}
	
	$notJudgeArray = array();
	while( $result_row = mysqli_fetch_assoc($result) ){
		array_push($notJudgeArray, $result_row);
	}
	$smarty->assign("notJudgeArray",$notJudgeArray);
	$smarty->display('notJudge.html');
	
?>