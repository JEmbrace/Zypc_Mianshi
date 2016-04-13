function validate_required(filed,value){
			if(value == null || value ==""){
				alert(filed+"不能为空!");
				return false;
			}
			return true;
		}

		function validate_name(name){
			var rs = validate_required("姓名",name);
			if(!rs){
				return false;
			}
			if(name.length > 10){
				alert("姓名超过长度");
			}
			return true;
		}

		function validate_password(password){
			var rs = validate_required("密码",password);

			if(!rs){
				return false;
			}

			if(password.length != 6){
				alert("密码长度必须为6位");
				return fasle;
			}
			return true;
		}


		function validate_schoolnum(schoolnum){

			var rs = validate_required("学号",schoolnum);

			if(!rs){
				return false;
			}
			if(schoolnum.length != 8 ){
				alert("学号长度必须为8位");
				return false;
			}
			return true;
		}


		function validate_tel(tel){
			var rs = validate_required("电话",tel);

			if(!rs){
				return false;
			}
			if(tel.length != 11){
				alert("电话必须为11位");
				return false;
			}
			return true;
		}

		function validate_class(classes){
			var rs = validate_required("班级",classes);

			if(!rs){
				return false;
			}
			return true;
		}
