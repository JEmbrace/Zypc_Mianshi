<?php /* Smarty version 3.1.27, created on 2016-04-12 10:26:24
         compiled from "tpl\messageResult.html" */ ?>
<?php
/*%%SmartyHeaderCode:28395570c5cd0104498_93387057%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a7f26e7ffe38d574529deb62acc67776c0ba0104' => 
    array (
      0 => 'tpl\\messageResult.html',
      1 => 1460427980,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28395570c5cd0104498_93387057',
  'variables' => 
  array (
    'messageArray' => 0,
    'val' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_570c5cd01bfcc8_99490687',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_570c5cd01bfcc8_99490687')) {
function content_570c5cd01bfcc8_99490687 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '28395570c5cd0104498_93387057';
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
	<link href="css/test.css" rel="stylesheet" media="screen">
	<link href="css/list.css" rel="stylesheet" media="screen">
	</head>
	<body background="img/bg.jpg" style="background-size:cover;" >
		<?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

		<div  style="width:500px;height:380px;position:absolute;left:50%;margin-left:-250px;top:50%;margin-top:-190px;">
			<table class="table table-hover table-bordered" contenteditable="true">
				<tr>
					<th>编号</th>
					<th>学号</th>
					<th>留言信息</th>
					<th>留言时间</th>
				</tr>
			
				<?php
$_from = $_smarty_tpl->tpl_vars['messageArray']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['val'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['val']->_loop = false;
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
$foreach_val_Sav = $_smarty_tpl->tpl_vars['val'];
?>
					<tr >
						<td><?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['val']->value['schoolnum'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['val']->value['detail'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['val']->value['time'];?>
</td>
						
					</tr>
			
				<?php
$_smarty_tpl->tpl_vars['val'] = $foreach_val_Sav;
}
?>
		
		</table>
		<br>
		</div>
	</body>
</html><?php }
}
?>