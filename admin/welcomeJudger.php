<?php
	require ('../init.php');
	require ('../common/sessionCheck.php');
	$smarty->assign('judgerName',$judgerName);
	$smarty->display("welcomeJudger.html");
		
	


?>