<?php
	
	require ('conn.php');
	require ('Core.class.php');
	require ('init.php');	
	require ('Filter.class.php');

	$schoolnum = $_POST['schoolnum'];
	$datail = $_POST['datail'];
	$email = $_POST['email'];
	

	
	
	$schoolnum = $_POST['schoolnum'];

	$filter = new Filter();
	$filter->addMessageFilter($schoolnum,$datail,$email);


	$core = new Core();
	$result = $core->getUserBySchoolNumber($conn,$schoolnum);

	if(($result->num_rows) == 0){
		echo "<script>alert('该学号不在于面试系统!')</script>";
		echo "<script language='javascript'> top.location='message.html';</script>"; 
		exit();
	}
	
	$core->addMessage($conn,$schoolnum,$datail,$email);

	echo "<script>alert('留言成功!')</script>";
	echo "<script language='javascript'> top.location='index.html';</script>"; 
	
?>