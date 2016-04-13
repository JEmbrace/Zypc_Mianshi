<?php /* Smarty version 3.1.27, created on 2016-04-07 10:10:14
         compiled from "tpl\judgeRecord.html" */ ?>
<?php
/*%%SmartyHeaderCode:142775705c186e4eb08_58501793%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3b32470454df15fb26d73734c1fb1df10acd5f2' => 
    array (
      0 => 'tpl\\judgeRecord.html',
      1 => 1459995011,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '142775705c186e4eb08_58501793',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5705c186ee3222_51980489',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5705c186ee3222_51980489')) {
function content_5705c186ee3222_51980489 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '142775705c186e4eb08_58501793';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
	
	<title></title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<?php echo '<script'; ?>
 src="./js/jquery-2.1.4.js"><?php echo '</script'; ?>
>
	<link href="./css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="./css/buttons.css" rel="stylesheet" media="screen">
	<?php echo '<script'; ?>
 src="./js/bootstrap.min.js"><?php echo '</script'; ?>
>
	</head>
	<body >
		<?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

		
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span12">
					<center>
						<form class="form-search" action="judgeRecordResult.php" method="post">
							<input class="input-medium search-query" name="jname" type="text" placeholder="请输入面试的官的姓名"/> 
							<br><br>
							<button type="submit" class="btn">开始查询</button>
							
						</form>
					</center>
				</div>
			</div>
		</div>

</body>
</html><?php }
}
?>