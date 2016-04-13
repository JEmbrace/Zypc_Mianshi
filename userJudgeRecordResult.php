<?php
	require ('init.php');
	require ('sessionCheck.php');
	require ('Core.class.php');
	require ('conn.php');

	$core = new Core();
	

	$schoolnum = $_GET['schoolnum'];

	//如果输入为空直接提交
	if(empty($schoolnum)){
		echo "<script>alert('学号不能为空!')</script>";
		echo "<script language='javascript'>  window.history.back(-1);</script>"; 
		exit();
	}

	//输入不为空
	$rs =  $core->getUserBySchoolNumber($conn,$schoolnum);

	//学号不存在于系统
	if(($rs->num_rows) == 0){
		echo "<script>alert('该学号不存在!')</script>";
		echo "<script language='javascript'>  window.history.back(-1);</script>"; 
		exit();
	}
	
	//获取记录
	$result = $core->getRecordBySchoolNumber($conn,$schoolnum);
	$recordsArray = array();
	while(($result_row = mysqli_fetch_assoc($result))){
		array_push($recordsArray,$result_row);
	}

	$smarty->assign("recordsArray",$recordsArray);
	$smarty->assign("schoolnum",$schoolnum);
	$smarty->display("userJudgeRecordResult.html");

?>