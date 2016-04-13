<?php
	require ('conn.php');
	require ('init.php');
	require ('sessionCheck.php');
	require ('Core.class.php');
	$core = new Core();
	$result = $core->getAlreadyJudger($conn);
	$userArray = array();
	while($row_rs = mysqli_fetch_assoc($result)){
		array_push($userArray, $row_rs);
	}
	
	$smarty->assign("userArray",$userArray);
	$smarty->display('alreadyJudge.html');


?>