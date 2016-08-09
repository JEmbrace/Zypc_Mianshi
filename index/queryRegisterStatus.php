<?php
	require ('../init.php');
	require ('../common/Core.class.php');
	require ('../common/conn.php');
	require ('../common/Filter.class.php');

	
	$schoolnum = $_POST['schoolnum'];
	if(is_numeric($schoolnum)){
		$core = new Core();
		//输入不为空
		$result =  $core->getUserBySchoolNumber($conn,$schoolnum);


		//学号不存在于系统
	 	if( $result== null){
			echo "<script>alert('该学号不存在!')</script>";
			echo "<script language='javascript'>  window.history.back(-1);</script>"; 
			exit();
	 	}
		$smarty->assign("user",$result);
		$smarty->display("queryRegisterStatusResult.html");
	}else{
		echo "<script>alert('请输入正确的学号!')</script>";
		echo "<script language='javascript'>  window.history.back(-1);</script>"; 
		exit();
	}

	


?>