<?php


	require ("../includes/includes.php");


	$core = new Core();
	//根据面试官的名字拿到面试官的id
 	$result = $core->getJudgerByName($conn,$judgerName);
 	$judger = mysqli_fetch_object($result);
 	$judgerid = $judger->jid;

 	//在record中获取这个面试官面过的所有记录
	$result = $core->getRecordByJid($conn,$judgerid);

	//把这些记录放到数组里
	$recordsArray = array();
	while( $result_row = mysqli_fetch_assoc($result) ){
		array_push($recordsArray, $result_row);
	}

	//根据record表里的uid拿到关于这个人的信息，
	//到时候页面显示不仅要显示面试者的信息 还要显示面试官的信息

	$recordsAndUserArray = array();
	foreach ($recordsArray as $key => $value) {
		$uid = $value->uid;
		$result = $core->getUserByUid($conn,$uid);
		$user = mysqli_fetch_object($result);
		
	}

	//把页面要显示的一条记录所需要的字段全部放到一个数组里传递给judgerEvalRecords.html
	$smarty->assign("recordsAndUserArray",$recordsAndUserArray);
	$smarty->display('judgerEvalRecords.html');

?>