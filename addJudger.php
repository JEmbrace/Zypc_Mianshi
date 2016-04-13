<?php
	
	require ("conn.php");
	require ("Core.class.php");
	$name = $_POST['name'];
	$tel = $_POST['tel'];

	//对两个值进行过滤和验证

	$core = new Core();
	$core->addJudger($conn,$name,$tel);
	echo "<script>alert('面试官信息录入成功!')</script>";
	echo "<script language='javascript'> top.location='tpl/rootChoice.html';</script>"; 

?>