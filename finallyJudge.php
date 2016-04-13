<?php
	require ('init.php');
	require ('sessionCheck.php');
	require ('Core.class.php');
	require ('conn.php');

	$core = new Core();
	

	$schoolnum = $_GET['schoolnum'];
	$submit1 = $_GET['submit1'];

	$submit0 = $_GET['submit0'];

	echo $submit0;
	echo $submit1;

	if($submit1 == '通过'){
		$status = 'C';  //通过面试
	} 
	if($submit0 == '不通过'){
		$status = 'D';  //没有通过面试
	} 

	if($submit0 == null && $submit1 == null ){
		//echo "<script language='javascript' type='text/javascript'>window.location.href='alreadyJudge.php';</script>";
	}
	
	

	$core->updateUserStatus($conn,$schoolnum,$status);

	//echo "<script language='javascript' type='text/javascript'>alert('评价成功'');</script>";
	//echo "<script language='javascript' type='text/javascript'>window.location.href='alreadyJudge.php';</script>";
	


?>