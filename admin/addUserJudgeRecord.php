<?php
	
	require ("../includes/includes.php");

	@session_start();
	$judgerName = $_SESSION['jname'];


	$userid = null;
	$judgerid = null;

	$status = $_POST['status'];
	$basic = $_POST['basic'];
	$advance = $_POST['advance'];
	$general = $_POST['general'];
	$grade = $_POST['grade'];
	$schoolnum = $_POST['schoolnum'];

	
	//对数据进行过滤


	//根据schoolnum得到uid

	$core = new Core();
	$result = $core->getUserBySchoolNumber($conn,$schoolnum);

	$userid = $result["userid"];
	
	$core = new Core();	
	
	//1 更新user的状态
	$core->updateUserStatus($conn,$schoolnum,$status);

	//2 根据session得到jname 在根据jname得到 judgerid
	$result= $core->getJudgerByName($conn,$judgerName);
	if($result == true){
		$judgerid = $result['jid'];
		
	}
	

	$core->addRecord($conn,$userid,$basic,$advance,$general,$grade,$judgerid,$status);

	//3 评价完毕之后把session里解除用户和面试官的绑定 即删除学号为当前评价user学号的那条记录
	$core->deleteSessionBySchoolnum($conn,$schoolnum);


	echo "<script>alert('评价成功')</script>";
	$smarty->assign('judgerName',$judgerName);
	$smarty->display("welcomeJudger.html");
	
?>