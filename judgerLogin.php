<?php
	
	require ('init.php');
	require ('Core.class.php');
	require ('conn.php');
	

	
	$jname = $_POST['jname'];
	$jpassword = $_POST['jpassword'];


	//作过滤
	
	
	$core = new Core();
	$result = $core->getJudgerByName($conn,$jname);

	$row = $result->num_rows;
	echo $row;
	if($row == 0){
		echo "<script>alert('对不起,您不属于面试官!')</script>";
		echo "<script language='javascript'>  window.history.back(-1);</script>"; 
	}

	if($row != 0){

		$_SESSION['jname'] = $_SESSION['jtel'] = null;

		$judger = mysqli_fetch_object($result);
		$judgerPassword = $judger->jtel;

		if($judgerPassword != $jpassword  ){
			echo "<script>alert('密码错误,请重新输入!')</script>";
			echo "<script language='javascript'>  window.history.back(-1);</script>"; 
		}else{
			@session_start();
			$_SESSION['jname']= $jname;
			 echo "<script>location.href=\"welcomeJudger.php\"</script>";
		}
	}

?>