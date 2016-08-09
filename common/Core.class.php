<?php
	
	class Core{

		public function __construct(){}

		public function addUsers($conn,$name,$schoolnum,$tel,$class){
			$mysqltime=date('Y-m-d H:i:s',time('YYYY-MM-DD HH:MM:SS'));
			$sql = "insert into user (schoolnum,name,tel,class,status,regtime) values (?,?,?,?,?,?);";
			$stmt = $conn->prepare($sql);
			$status = '0';
			$stmt->bind_param("ssssis",$schoolnum,$name,$tel,$class,$status,$mysqltime);
			$res = $stmt->execute();
			
			if(!$res){
				return false;
			}else{
				return true;
			}


		}		




		public function getAllUsers($conn){
			$sql = "select * from user";
			$result = $conn->query($sql); 

			return $result;
		}



		public function getUserBySchoolNumber($conn,$schoolnum){
			$sql = "select userid,schoolnum,name,tel,class,status,regtime from user where schoolnum = ?";
		
			$stmt = $conn->prepare($sql);
			$stmt->bind_param("s",$schoolnum);
			$stmt->execute();
			$stmt->bind_result($rs_userid,$rs_schoolnum,$rs_name,$rs_tel,$rs_class,$rs_status,$rs_regtime);
			
			$returnRs = $stmt->fetch();			
			if(!$returnRs){
				return false;
			}else{
				$result = array(
                'userid'=>$rs_userid,
                'schoolnum'=>$rs_schoolnum,
                'name'=>$rs_name,
                'tel'=>$rs_tel,
                 'class'=>$rs_class,
                'status'=>$rs_status,
                 'regtime'=>$rs_regtime);
                return $result;

			}

		

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
			$sql = "update user set status = ? where  schoolnum = ?";

			$stmt = $conn->prepare($sql);
			$stmt->bind_param("ss",$status,$schoolnum);
			$returnRs = $stmt->execute();
			
			if(!$returnRs){
				return false;
			}else{
                return true;

			}
			
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
			
			$result = $conn->query($sql);	
			return $result;

		}


		public function addRecordBind($conn,$userid,$juderid,$status){
			$mysqltime=date('Y-m-d H:i:s',time('YYYY-MM-DD HH:MM:SS'));
			$sql = "insert into record (userid,judgerid,status,time)
					 values (".$userid.","
					 			.$juderid.",'"
					 			.$status."','"
					 			.$mysqltime."')";
			
		
			$result = $conn->query($sql);	
			return $result;

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
			return $result;

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

			$sql = "select jid,jname,jtel from judgers where jname = ?";
			$stmt = $conn->prepare($sql);
			$stmt->bind_param("s",$jname);
			$stmt->execute();
			$stmt->bind_result($rs_jid,$rs_jname,$rs_jtel);
			
			$returnRs = $stmt->fetch();			
			if(!$returnRs){
				return false;
			}else{
				$result = array(
				'jid'=>$rs_jid,	
                'jname'=>$rs_jname,
                'jtel'=>$rs_jtel);

                return $result;

			}

		}

		public function  addJudger($conn,$name,$tel){

			$sql = "insert into judgers (jname,jtel) values (?,?)";

			$stmt = $conn->prepare($sql);

			$stmt->bind_param("ss",$name,$tel);

			$res = $stmt->execute();
			
			if(!$res){
				return false;
			}else{
				return true;
			}

		}


		public function  addMessage($conn,$schoolnum,$detail,$email){

			$mysqltime=date('Y-m-d H:i:s',time('YYYY-MM-DD HH:MM:SS'));

			$sql = "insert into message (schoolnum,detail,time,email) values (?,?,?,?)";

			$stmt = $conn->prepare($sql);
			$stmt->bind_param("sss",$schoolnum,$detail,$mysqltime,$email);
			$res = $stmt->execute();
			
			if(!$res){
				return false;
			}else{
				return true;
			}
			
			
		}

		public function  getMessage($conn){

			$sql = "select * from message";

			$result = $conn->query($sql);

			return $result;
		}

		public function  judgeSchoolnumExist($conn,$schoolnum){

			$sql ="select password from user_school_info where uid = ?";

			$stmt = $conn->prepare($sql);
			$stmt->bind_param("s",$schoolnum);
			$stmt->execute();
			$stmt->bind_result($rs_password);
			$returnRs = $stmt->fetch();
			
			if(!$returnRs){
				return false;
			}else{
                return $rs_password;

			}
		}

		public function  addSession($conn,$schoolnum,$judgername){
			$sql = "insert into session (judgername,schoolnum) values ('".$judgername."','".$schoolnum."')";
			$result = $conn->query($sql);
			return $result;
			
		}

		public function  getSessionBySchoolnum($conn,$schoolnum){
			$sql = "select * from session where schoolnum = '".$schoolnum."'";
			$result = $conn->query($sql);
			return $result;
			
		}

		public function  deleteSessionBySchoolnum($conn,$schoolnum){
			$sql = "delete from session where schoolnum = '".$schoolnum."'";
			$result = $conn->query($sql);
			return $result;
			
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