<?php
	//拿到数据库连接
	require ('conn.php');
	//require ('connSchool.php'); //连接学校数据库
	require ('Core.class.php');
	require ('Filter.class.php');  //对过滤并且拿到数据数据

	$schoolnum = $_POST["number"];
	$name = $_POST["name"];
	$tel = $_POST['tel'];
	$class = $_POST["class"];

	$filter = new Filter();
	$filter->registerFilter($schoolnum,$name,$tel,$class);
	

	$core = new Core();
	$result = $core->getUserBySchoolNumber($conn,$schoolnum);
	echo $result->num_rows;
	echo "<br>";
	if($result->num_rows == 1){
		
		echo "<script language='javascript'>alert('该学号已存在与报名系统');</script>";
		echo "<script language='javascript'>  window.history.back(-1);</script>"; 
		exit();
	}
	  
	// 	//教务处接口

	// $resutlFromSchool = $core->judgeShcoolnumExist($connFromSchool,$schoolnum);
	// if($resutlFromSchool->num_rows != 0){
	// 	echo "<script language='javascript' type='text/javascript'>alert('该学号不存在教务系统');</script>;
	// 	echo "<script language='javascript' type='text/javascript'>window.location.href='register.html';</script>"; 
	// }
		
	// $resutlFromSchool = $core->judgePasswordExist($connFromSchool,$password);
	// if($resutlFromSchool->num_rows != 0){
	// 	echo <script language='javascript' type='text/javascript'>alert("密码错误");</script>;
	// 	echo "<script language='javascript' type='text/javascript'>window.location.href='register.html';</script>"; 
	// }
	



	//所有过滤和判断完成后调用插入方法
	$core->addUsers($conn,$name,$schoolnum,$tel,$class); 
	
	//插入成功之后alert成功
	echo "<script>alert('恭喜你报名成功，请保持手机通畅，以便接收面试通知!')</script>";
	echo "<script language='javascript' type='text/javascript'>window.location.href='index.html';</script>"; 
?>