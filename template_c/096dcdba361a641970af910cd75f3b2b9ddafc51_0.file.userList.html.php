<?php /* Smarty version 3.1.27, created on 2016-04-12 10:29:00
         compiled from "tpl\userList.html" */ ?>
<?php
/*%%SmartyHeaderCode:6841570c5d6c30b8c6_59272577%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '096dcdba361a641970af910cd75f3b2b9ddafc51' => 
    array (
      0 => 'tpl\\userList.html',
      1 => 1460428137,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6841570c5d6c30b8c6_59272577',
  'variables' => 
  array (
    'userArray' => 0,
    'val' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_570c5d6c3f2070_46198960',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_570c5d6c3f2070_46198960')) {
function content_570c5d6c3f2070_46198960 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '6841570c5d6c30b8c6_59272577';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
	
	<title></title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<?php echo '<script'; ?>
 src="../js/jquery-2.1.4.js"><?php echo '</script'; ?>
>
	<link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="../css/buttons.css" rel="stylesheet" media="screen">
	<?php echo '<script'; ?>
 src="../js/bootstrap.min.js"><?php echo '</script'; ?>
>
	</head>
	<body >
		<?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

		
		<table class="table table-hover table-bordered" contenteditable="true">
				<thead>
				<tr>
					<th>编号</th>
					<th>姓名</th>
					<th>学号</th>
					<th>电话</th>
					<th>班级</th>
					<th>状态</th>
					<th>报名时间</th>
					
				</tr>
			</thead>
			<?php
$_from = $_smarty_tpl->tpl_vars['userArray']->value;
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
				<tbody>
					<tr class="info">
						<td><?php echo $_smarty_tpl->tpl_vars['val']->value['userid'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['val']->value['schoolnum'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['val']->value['tel'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['val']->value['class'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['val']->value['status'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['val']->value['regtime'];?>
</td>
					</tr>
				</tbody>
			<?php
$_smarty_tpl->tpl_vars['val'] = $foreach_val_Sav;
}
?>
		</table>


		

</body>
</html><?php }
}
?>