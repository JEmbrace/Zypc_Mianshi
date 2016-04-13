<?php
	require ('init.php');
	require ('Core.class.php');
	require ('conn.php');
	require ('Filter.class.php');

	
	
	$schoolnum = $_POST['schoolnum'];
	
	$filter = new Filter();

	$filter->queryFilter($schoolnum);
	

	$core = new Core();
	//输入不为空
	$result =  $core->getUserBySchoolNumber($conn,$schoolnum);

	//学号不存在于系统
	if(($result->num_rows) == 0){
		echo "<script>alert('该学号不存在!')</script>";
		echo "<script language='javascript'>  window.history.back(-1);</script>"; 
		exit();
	}
	
	
	$user = mysqli_fetch_assoc($result);
	$smarty->assign("user",$user);
	$smarty->display("queryRegisterStatusResult.html");


?>