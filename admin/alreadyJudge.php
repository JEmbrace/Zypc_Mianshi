<?php
	require ("../includes/includes.php");
	
	$core = new Core();
	$result = $core->getAlreadyJudger($conn);
	if($result->num_rows == 0){
		echo "<script>alert('暂时没有已经面试的记录!')</script>";
		echo "<script>window.location.href='welcomeJudger.php';</script>";
		exit();
	
	}
	$userArray = array();
	while($row_rs = mysqli_fetch_assoc($result)){
		array_push($userArray, $row_rs);
	}
	
	$smarty->assign("userArray",$userArray);
	$smarty->display('alreadyJudge.html');


?>