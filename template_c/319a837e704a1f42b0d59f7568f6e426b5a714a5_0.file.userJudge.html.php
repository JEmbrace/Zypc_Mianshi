<?php /* Smarty version 3.1.27, created on 2016-04-12 09:24:53
         compiled from "tpl\userJudge.html" */ ?>
<?php
/*%%SmartyHeaderCode:21711570c4e656b10e7_91868689%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '319a837e704a1f42b0d59f7568f6e426b5a714a5' => 
    array (
      0 => 'tpl\\userJudge.html',
      1 => 1460424273,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21711570c4e656b10e7_91868689',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_570c4e65780194_77247007',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_570c4e65780194_77247007')) {
function content_570c4e65780194_77247007 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '21711570c4e656b10e7_91868689';
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
						<form class="form-search" action="userJudgeDeal.php" method="get">
							<input class="input-medium search-query" name="schoolnum" type="text" placeholder="请输入面试者的学号"/> 
							<br><br>
							<button type="submit" class="btn">开始评价</button>
							
						</form>
					</center>
				</div>
			</div>
		</div>

</body>
</html><?php }
}
?>