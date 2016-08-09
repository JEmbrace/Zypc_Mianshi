<?php
	//拿到数据库连接
	require ('../common/conn.php');
	require ('../common/Core.class.php');
	require ('../common/Filter.class.php');  //对过滤并且拿到数据数据

	$schoolnum = $_POST["number"];
	$name = $_POST["name"];
	$tel = $_POST['tel'];
	$class = $_POST["class"];
	$psw = $_POST["password"];


	if(is_numeric($schoolnum) && is_numeric($tel)){

		$core = new Core();
		$result = $core->getUserBySchoolNumber($conn,$schoolnum);
		if($result != null){
			echo "<script language='javascript'>alert('该学号已存在与报名系统');</script>";
			echo "<script language='javascript'>  window.history.back(-1);</script>"; 
			exit();
		}
	  
		//查询学号是否存在

		$resutlFromSchool = $core->judgeSchoolnumExist($conn,$schoolnum);
		if($resutlFromSchool == null){
			//学号不存在于教务系统
			echo "<script language='javascript' type='text/javascript'>alert('该学号不存在教务系统');</script>";
			echo "<script language='javascript' type='text/javascript'>window.location.href='register.html';</script>"; 
			exit();
		}else{
			//学号存在于教务系统，判断密码是否正确
			if(substr($resutlFromSchool,12,17)!= $psw ){
				//密码不正确
				echo "<script language='javascript' type='text/javascript'>alert('密码不正确，请重新输入!');</script>";
				echo "<script language='javascript' type='text/javascript'>window.location.href='register.html';</script>"; 
				exit();
			}else{
				//密码正确
				$rs = $core->addUsers($conn,$name,$schoolnum,$tel,$class); 
				if($rs == true ){
					//插入成功之后alert成功
					echo "<script>alert('恭喜你报名成功，请保持手机通畅，以便接收面试通知!')</script>";
					echo "<script language='javascript' type='text/javascript'>window.location.href='http://smartxupt.com/';</script>"; 

				}
			}


		}

	}else{
		echo "<script>alert('请输入正确的信息!')</script>";
		echo "<script language='javascript' type='text/javascript'>window.location.href='http://smartxupt.com/';</script>"; 
		exit();
	}
			
	
?>