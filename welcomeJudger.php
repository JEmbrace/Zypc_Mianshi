<?php
	require ('init.php');
	require ('sessionCheck.php');
	

	$smarty->assign('judgerName',$judgerName);
	$smarty->display("welcomeJudger.html");
		
	


?>