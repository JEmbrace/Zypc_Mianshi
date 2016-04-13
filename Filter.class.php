<?php
	class Filter{

			function daddslashes($string, $force = 1) {
				if (is_array($string)) {
					$keys = array_keys($string);
					foreach ($keys as $key) {
						$val = $string[$key];
						unset($string[$key]);
						$string[addslashes($key)] = $this->daddslashes($val, $force);
					}
				} else {
					$string = htmlspecialchars(addslashes(trim($string)));
				}
				return $string;
			}

			function registerFilter($pschoolnum,$pname,$ptel,$pclass){
				$_GET = $this->daddslashes($_GET);
				$_POST =$this-> daddslashes($_POST);
				$_REQUEST = $this->daddslashes($_REQUEST);
				$_COOKIE = $this->daddslashes($_COOKIE);

				preg_match("/\d+/", $pschoolnum, $t);
				$schoolnum = $t[0];

				preg_match("/[\x{4e00}-\x{9fa5}]+/u", $pname, $t);
				$name = $t[0];

				preg_match("/\d+/", $ptel, $t);
				$tel = $t[0];

				preg_match("/[\x{4e00}-\x{9fa5}]+/u", $pclass, $t1);
				$class = $t1[0];
				preg_match("/\d+/", $pclass, $t2);
				$class .= $t2[0];

				$password = $_POST["password"];

				if(	strlen($name) == 0 || strlen($schoolnum) == 0 || strlen($tel) == 0 || strlen($class) == 0 || strlen($password) == 0){
						echo "<script language='javascript' type='text/javascript'>alert('请正确填写所有信息');</script>";
						echo "<script language='javascript' type='text/javascript'>window.location.href='register.html';</script>"; 		
				}
					
				if(strlen($schoolnum) != 8){
						echo "<script language='javascript' type='text/javascript'>alert('学号必须为8位');</script>";
						echo "<script language='javascript' type='text/javascript'>window.location.href='register.html';</script>"; 
				}

				if(strlen($password) != 6){
						echo "<script language='javascript' type='text/javascript'>alert('密码必须为6位');</script>";
						echo "<script language='javascript' type='text/javascript'>window.location.href='register.html';</script>"; 
				}

				if(strlen($tel)!= 11){
						echo "<script language='javascript' type='text/javascript'>alert('电话必须为11位');</script>";
						echo "<script language='javascript' type='text/javascript'>window.location.href='register.html';</script>"; 
				}


	
			}

			function queryFilter($schoolnum){
				
				if(!empty($schoolnum)){
					preg_match("/\d+/", $_POST["schoolnum"], $t);
					$aterMatchSchoolnum = $t[0];
					if(strlen($schoolnum) !=  strlen($aterMatchSchoolnum)){
						echo "<script>alert('输入学号非法!')</script>";
						echo "<script language='javascript'>  window.history.back(-1);</script>"; 
						exit();
					}
				}

				if(empty($schoolnum)){
					echo "<script>alert('学号不能为空!')</script>";
					echo "<script language='javascript'>  window.history.back(-1);</script>"; 
					exit();
				}


				if(strlen($schoolnum) != 8){
					echo "<script>alert('学号必须为8位!')</script>";
					echo "<script language='javascript'>  window.history.back(-1);</script>"; 
					exit();
				}
			}

			function addMessageFilter($schoolnum,$datail){
				$this->queryFilter($schoolnum);
				//过滤具体留言信息

				$str=preg_replace("/<\!–.*?–>/si","",$datail);

				if(strlen($datail) != strlen($str) ){
					echo "<script>alert('有非字符输入!')</script>";
					echo "<script language='javascript'>  window.history.back(-1);</script>"; 
					exit();
				}
				


			}



		}


?>
