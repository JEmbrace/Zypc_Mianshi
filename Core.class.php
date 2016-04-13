<?php
	
	class Core{

		public function __construct(){}

		public function addUsers($conn,$name,$schoolnum,$tel,$class){
	//出现的问题是：1.在这个文件中引入conn.php 但是$conn这个变量是不能使用的 因此改为传值
	//				2.为什么没有任何错误 但是数据库中的记录却没有插入进去

		$mysqltime=date('Y-m-d H:i:s',time('YYYY-MM-DD HH:MM:SS'));
		$sql = "insert into user (schoolnum,name,tel,class,status,regtime) values ('".$schoolnum."','"
					 			.$name."','"
					 			.$tel."','"
					 			.$class."','"
					 			."0"."','"
					 			.$mysqltime ."')";
			$result = $conn->query($sql);

		}		




		public function getAllUsers($conn){
			$sql = "select * from user";
			$result = $conn->query($sql); 

			return $result;
		}



		public function getUserBySchoolNumber($conn,$schoolnum){
			$sql = "select * from user where schoolnum = '" .$schoolnum."'";
		
			$result = $conn->query($sql);
			return $result;

		}

		public function getUserByUid($conn,$schoolnum){
			$sql = "select * from user where schoolnum = '" .$schoolnum."'";
			$result = $conn->query($sql);
			return $result;

		}

		public function getPassUser($conn){
			$sql ="select * from user where status = 'C'";
			$result = $conn->query($sql);
			return $result;

		}

		public function getNotpassUser($conn){
			$sql ="select * from user where status = 'D' ";
			$result = $conn->query($sql);
			return $result;

		}


		public function getUserByUid1($conn,$uid){
			$sql = "select userid,schoolnum,name,tel,class from user where userid = '" .$uid."'";
		
			$result = $conn->query($sql);
			return $result;

		}



		public function updateUserStatus($conn,$schoolnum,$status){
			$sql = "update user set status = '".$status."' where  schoolnum = '".$schoolnum."'";
			echo $sql;
			$result = $conn->query($sql);
			
		}



		public function addRecord($conn,$userid,$basic,$advance,$general,$grade,$judgerid,$status){
			$mysqltime=date('Y-m-d H:i:s',time('YYYY-MM-DD HH:MM:SS'));
			$sql = "insert into record (userid,basic,advance,general,grade,time,judgerid,status)
					 values (".$userid.",'"
					 			.$basic."','"
					 			.$advance."','"
					 			.$general."','"
					 			.$grade."','"
					 			.$mysqltime."',"
					 			.$judgerid.",'"
					 			.$status."')";
			//echo $sql;
			$result = $conn->query($sql);			

		}


		public function addRecordBind($conn,$userid,$juderid,$status){
			$mysqltime=date('Y-m-d H:i:s',time('YYYY-MM-DD HH:MM:SS'));
			$sql = "insert into record (userid,judgerid,status,time)
					 values (".$userid.","
					 			.$juderid.",'"
					 			.$status."','"
					 			.$mysqltime."')";
			echo $sql;
		
			$result = $conn->query($sql);			

		}


		public function updateRecordByUid($conn,$userid,$basic,$advance,$general,$grade,$status){
			$mysqltime=date('Y-m-d H:i:s',time('YYYY-MM-DD HH:MM:SS'));
			
			$sql = "update record set basic = '".$basic.
									"',advance = '".$advance.
									"',general='".$general.
									"',grade = '".$grade.
									"',time = '".$mysqltime.
									"',status = '".$status.
									" where uid = '".$userid."'";
			$result = $conn->query($sql);			

		}


		public function getAllRecords(){
			$sql = "select * from record";
			$result = $conn->query($sql);
			return $result;
		}

		public function getRecordBySchoolNumber($conn,$schoolnum){

			$sql ="select judgers.jname, 
						  user.name,
						  user.tel,
						  user.class,
						  user.status,
						  record.basic, record.advance, record.general,record.grade,record.status,record.time
						  from record,user,judgers 
						  where record.judgerid = judgers.jid 
						  and record.userid = user.userid and user.schoolnum = '".$schoolnum."'";

			$result = $conn->query($sql);

			return $result;
		}

		public function getRecordBySchoolNumberOrderBy($conn,$schoolnum){

			$sql ="select judgers.jname, 
						  user.name,
						  user.tel,
						  user.class,
						  user.status,
						  record.basic, record.advance, record.general,record.grade,record.status,record.time
						  from record,user,judgers 
						  where record.judgerid = judgers.jid 
						  and record.userid = user.userid and user.schoolnum = '".$schoolnum."' order by record.time desc";

			$result = $conn->query($sql);

			return $result;
		}
		
		


		public function getRecordByJname($conn,$jname){
			//select judgers.jname, user.name, record.basic, record.advance, record.general,record.grade,record.status,record.time from record,user,judgers where record.judgerid = judgers.jid and record.userid = user.userid and judgers.jname = 'AAAA';

			$sql ="select judgers.jname, 
						  user.name,
						  record.basic, record.advance, record.general,record.grade,record.status,record.time
						  from record,user,judgers 
						  where record.judgerid = judgers.jid 
						  and record.userid = user.userid and judgers.jname = '".$jname."'";

			$result = $conn->query($sql);

			return $result;
		}


		public function getALLJudgers($conn){

			$sql = "select * from judgers ";

			$result = $conn->query($sql);

			return $result;

		}

		public function getJudgerByName($conn,$jname){

			$sql = "select * from judgers where jname =  '".$jname."'";

			$result = $conn->query($sql);

			return $result;

		}

		public function  addJudger($conn,$name,$tel){

			$sql = "insert into judgers (jname,jtel) values ('".$name."','"
															.$tel."')";

			$result = $conn->query($sql);
		}


		public function  addMessage($conn,$schoolnum,$detail,$email){

			$mysqltime=date('Y-m-d H:i:s',time('YYYY-MM-DD HH:MM:SS'));
			$sql = "insert into message (schoolnum,detail,time,email) values ('".$schoolnum."','"
															.$detail."','"
															.$mysqltime."','"
															.$email."')";
			echo $sql;
			
			$result = $conn->query($sql);
		}

		public function  getMessage($conn){

			$sql = "select * from message";

			$result = $conn->query($sql);

			return $result;
		}

		public function  judgeShcoolnumExist($connFromSchool,$schoolnum){

			$sql ="查询语句学号是否存在";

			$result = $connFromSchool->query($sql);

			return $result;
		}

		public function  judgePasswordExist($connFromSchool,$password){

			$sql ="查询身份证后六位是否正确";
			
			$result = $connFromSchool->query($sql);

			return $result;
		}


		public function  addSession($conn,$schoolnum,$judgername){
			$sql = "insert into session (judgername,schoolnum) values ('".$judgername."','".$schoolnum."')";
			
			$conn->query($sql);
			
		}

		public function  getSessionBySchoolnum($conn,$schoolnum){
			$sql = "select * from session where schoolnum = '".$schoolnum."'";
			
			$result = $conn->query($sql);
			return $result;
			
		}

		public function  deleteSessionBySchoolnum($conn,$schoolnum){
			$sql = "delete from session where schoolnum = '".$schoolnum."'";
			
			$conn->query($sql);
			
		}




		public function  getAlreadyJudger($conn){

			//拿到的是记录里有的学生的信息
			$sql = "select distinct  user.userid,user.schoolnum,user.name,user.tel,user.class
					from user,record 
					where user.userid = record.userid and user.status = 'A' or user.status = 'B'";
						
			$result = $conn->query($sql);

			return $result;
			
		}

		public function  getNotJudger($conn){

			//拿到的是记录里有的学生的信息
			$sql = "select user.userid ,user.name,user.tel,user.class ,user.schoolnum from user
					where not exists
                    (select record.userid 
						from record
                        where user.userid =   record.userid
                        ) ";
						
			$result = $conn->query($sql);

			return $result;
			
		}

		


	}

?>