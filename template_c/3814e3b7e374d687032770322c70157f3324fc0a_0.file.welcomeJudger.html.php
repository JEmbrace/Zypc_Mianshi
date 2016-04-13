<?php /* Smarty version 3.1.27, created on 2016-04-09 11:17:22
         compiled from "tpl\welcomeJudger.html" */ ?>
<?php
/*%%SmartyHeaderCode:26483570874423b2c25_67067876%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3814e3b7e374d687032770322c70157f3324fc0a' => 
    array (
      0 => 'tpl\\welcomeJudger.html',
      1 => 1460171834,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26483570874423b2c25_67067876',
  'variables' => 
  array (
    'judgerName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57087442466755_33898609',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57087442466755_33898609')) {
function content_57087442466755_33898609 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '26483570874423b2c25_67067876';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<?php echo '<script'; ?>
 src="js/jquery-2.1.4.js"><?php echo '</script'; ?>
>
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="css/buttons.css" rel="stylesheet" media="screen">
	<?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
	</head>
	
	<body >
		<?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span12">
					<div class="hero-unit">
						<h1>
							欢迎<?php echo $_smarty_tpl->tpl_vars['judgerName']->value;?>
面试官
						</h1>
							<p>
							欢迎进入智邮普创工作室2016纳新面试系统，作为面试官，我们应该对每一个报名面试的同学做出认真评价。
							</p>
							<br><br>
							<p>
							<a class="btn btn-primary btn-large" href="userList.php">查看报名列表</a>
							<a class="btn btn-primary btn-large" href="userJudge.php">开始面试评价</a>
							</p>
					</div>
				</div>
			</div>
		</div>
</body>
</html><?php }
}
?>