<?php
	require ("../includes/includes.php");

	$core = new Core();
	

	$schoolnum = $_GET['schoolnum'];
	$submit1 = $_GET['submit1'];

	$submit0 = $_GET['submit0'];

	$submit2 = $_GET['submit2'];

	$submit3 = $_GET['submit3'];

	

	if($submit1 == '不通过'){
		$status = 'D';  //通过面试
	} 
	if($submit0 == '通过'){
		$status = 'C';  //没有通过面试
	} 

	if($submit2 == '该同学已经通过面试' ){
		echo "<script language='javascript' type='text/javascript'>window.location.href='welcomeJudger.php';</script>";
		exit();
	} 
	if($submit3 == '该同学未通过面试'){
		echo "<script language='javascript' type='text/javascript'>window.location.href='welcomeJudger.php';</script>";
		exit();
	} 
	if($submit0 == null && $submit1 == null ){
		echo "<script language='javascript' type='text/javascript'>window.location.href='welcomeJudger.php';</script>";
	}
	
	

	$core->updateUserStatus($conn,$schoolnum,$status);

	echo "<script>alert('决策成功);</script>";
	echo "<script>window.location.href='welcomeJudger.php';</script>";
	


?>