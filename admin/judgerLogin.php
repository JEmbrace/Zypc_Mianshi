<?php
	
		require ("../init.php");
		require ("../common/Core.class.php");
		require ("../common/conn.php");
		
		$jname = $_POST['jname'];
		$jpassword = $_POST['jpassword'];

		if(empty($jname) || empty($jpassword)  ){
			echo "<script>alert('请正确填写所有信息!')</script>";
			echo "<script>location.href=\"judgerLogin.html\"</script>";
			exit();
		}
		
		
		
		$core = new Core();
		$result = $core->getJudgerByName($conn,$jname);

		
		if(empty($result)){
			echo "<script>alert('对不起,您不属于面试官!')</script>";
			echo "<script language='javascript'>  window.history.back(-1);</script>"; 
			exit();
		}
		$_SESSION['jname'] = $_SESSION['jtel'] = null;

		
		$judgerPassword = $result['jtel'];

		if($judgerPassword != $jpassword  ){
			echo "<script>alert('密码错误,请重新输入!')</script>";
			echo "<script language='javascript'>  window.history.back(-1);</script>"; 
		}else{
			@session_start();
			$_SESSION['jname']= $jname;
			 echo "<script>location.href=\"welcomeJudger.php\"</script>";
		}
	

?>