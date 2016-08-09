<?php
	
	require ("../includes/includes.php");

	@session_start();
	$judgerName = $_SESSION['jname'];

	$schoolnum = $_GET['schoolnum'];
	
	if(empty($schoolnum) || !is_numeric($schoolnum) || strlen($schoolnum) != 8){
		echo "<script>alert('请输入正确的学号!')</script>";
		echo "<script language='javascript'>  window.history.back(-1);</script>"; 
		exit();
	}

	$core = new Core();


	$result = $core->getUserBySchoolNumber($conn,$schoolnum);
	if(empty($result)){
			echo "<script>alert('学号输入错误或学号不存在于报名系统!')</script>";
			echo "<script language='javascript'>  window.history.back(-1);</script>"; 
			exit();
	}

	$userStatus = $result['status'];
	$userid = $result['userid'];
	//如果状态为0  前台显示报名成功 等待A轮面试
		//后台将其修改为 -1 意思是处于A轮面试中 其他人还要对其进行评价 就提示此人正处于面试中
		//提交内容之后将其修改为A  意思是A轮结束 等待b轮面试


		if($userStatus == '-1'){
			$sessionRs = $core->getSessionBySchoolnum($conn,$schoolnum);
			if($sessionRs->num_rows != 0){ //证明有面试官在绑定这个user
				//查看当前面试官是否是数据库里绑定的那个面试官
				$sessionJudgername = mysqli_fetch_object($sessionRs)->judgername;
				if($sessionJudgername != $judgerName){
					echo "<script>alert('该同学正处于A轮面试中!')</script>";
					echo "<script>location.href=\"welcomeJudger.php\"</script>"; 
					exit();
				}
			}
			
		}
		if($userStatus == '-2'){
			$sessionRs = $core->getSessionBySchoolnum($conn,$schoolnum);
			if($sessionRs->num_rows != 0){ //证明有面试官在绑定这个user
				//查看当前面试官是否是数据库里绑定的那个面试官
				$sessionJudgername = mysqli_fetch_object($sessionRs)->judgername;
				if($sessionJudgername != $judgerName){
					echo "<script>alert('该同学正处于B轮面试中!')</script>";
					echo "<script>location.href=\"welcomeJudger.php\"</script>"; 
					exit();
				}
			}
		}
		
		if($userStatus == '0'){
			$userStatus = '-1'; //A轮面试中
			$core->addSession($conn,$schoolnum,$judgerName);
		}
		//如果状态为A 前台显示A轮面试结束 等待B轮面试
		//后台将修改为-2 意思是处于B轮面试中 其他人还要对其进行评价 就提示此人正处于面试中
		//提交内容将其修改为 B 意思是B轮结束 等待面试结果
		if($userStatus == 'A'){
			$userStatus = '-2'; //B轮面试中
			$core->addSession($conn,$schoolnum,$judgerName);
		}
		if($userStatus == 'B'){ //等待面试结果
			echo "<script>alert('该同学已面试完毕,正在等待面试结果!')</script>";
			echo "<script>location.href=\"welcomeJudger.php\"</script>"; 
		}
		if($userStatus == 'C'){ //面试通过
			echo "<script>alert('该同学已通过面试!')</script>";
			echo "<script>location.href=\"welcomeJudger.php\"</script>"; 
		}
		if($userStatus == 'D'){ //面试未通过
			echo "<script>alert('该同学未通过面试!')</script>";
			echo "<script>location.href=\"welcomeJudger.php\"</script>"; 
		}

		
		$rs = $core->updateUserStatus($conn,$schoolnum,$userStatus);


		$recordResult = $core->getRecordBySchoolNumber($conn,$schoolnum);
		$rRRows = $recordResult->num_rows;
		$recordArray = array();
		while( $result_row = mysqli_fetch_assoc($recordResult) ){
		array_push($recordArray, $result_row);
		}
		//print_r($recordArray);
		
		$smarty->assign("user",$result);

		$smarty->assign("userStatus",$userStatus);
		$smarty->assign("rRRows",$rRRows);
		$smarty->assign("recordArray",$recordArray);

		$smarty->assign("schoolnum",$schoolnum);
		$smarty->display('startJudgeUser.html');
	
	

	
?>
