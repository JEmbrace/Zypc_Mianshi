<?php
	require ('init.php');
	require ('sessionCheck.php');
	require ('Core.class.php');
	require ('conn.php');

	$core = new Core();
	

	$jname = $_POST['jname'];

	//如果输入为空直接提交
	if(empty($jname)){
		echo "<script>alert('面试官姓名不能为空!')</script>";
		echo "<script language='javascript'>  window.history.back(-1);</script>"; 
		exit();
	}

	//输入不为空
	$rs =  $core->getJudgerByName($conn,$jname);

	//面试官姓名不存在于系统
	if(($rs->num_rows) == 0){
		echo "<script>alert('该面试官姓名不存在!')</script>";
		echo "<script language='javascript'>  window.history.back(-1);</script>"; 
		exit();
	}
	
	//获取记录
	$result = $core->getRecordByJname($conn,$jname);
	$recordsArray = array();
	while(($result_row = mysqli_fetch_assoc($result))){
		array_push($recordsArray,$result_row);
	}

	$smarty->assign("recordsArray",$recordsArray);
	$smarty->display("judgeRecordResult.html");

?>