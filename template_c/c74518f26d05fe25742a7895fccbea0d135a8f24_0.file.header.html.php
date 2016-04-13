<?php /* Smarty version 3.1.27, created on 2016-04-12 08:35:14
         compiled from "tpl\header.html" */ ?>
<?php
/*%%SmartyHeaderCode:32560570c42c20910a0_98454196%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c74518f26d05fe25742a7895fccbea0d135a8f24' => 
    array (
      0 => 'tpl\\header.html',
      1 => 1460421309,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32560570c42c20910a0_98454196',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_570c42c210a239_86250033',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_570c42c210a239_86250033')) {
function content_570c42c210a239_86250033 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '32560570c42c20910a0_98454196';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
	
	<title></title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<?php echo '<script'; ?>
 src="js/jquery-2.1.4.js"><?php echo '</script'; ?>
>
	
	<?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>

	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	
	<link href="css/buttons.css" rel="stylesheet" media="screen">

	</head>

	<body background="img/bg1.jpg" style="background-size:cover;" >
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span12">
					<div class="navbar">
						<div class="navbar-inner">
							<div class="container-fluid">
								 <a data-target=".navbar-responsive-collapse" data-toggle="collapse" class="btn btn-navbar"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a> <a href="welcomeJudger.php" class="brand">智邮普创工作室面试系统</a>
								<div class="nav-collapse collapse navbar-responsive-collapse">
									<ul class="nav">
										<li>
											<a href="userList.php">报名列表</a>
										</li>
										<li>
											<a href="userJudge.php">面试评价</a>
										</li>
										<li>
											<a href="judgeRecord.php">面试官评价记录</a>
										</li>
										<li>
											<a href="userJudgeRecord.php">面试者评价结果</a>
										</li>

										<li>
											<a href="getMessage.php">查看留言列表</a>
										</li>

										<li>
											<a href="alreadyJudge.php">查看已面情况(进行决策)</a>
										</li>

										<li>
											<a href="notJudger.php">查看未面情况</a>
										</li>
										
										<li>
											<a href="pass.php">通过情况</a>
										</li>

										<li>
											<a href="notpass.php">未通过情况</a>
										</li>
										
									</ul>	
								</div>
								
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>



	</body>

</html><?php }
}
?>