<?php /* Smarty version 3.1.27, created on 2016-04-10 21:03:40
         compiled from "tpl\judgeRecordResult.html" */ ?>
<?php
/*%%SmartyHeaderCode:5458570a4f2ce32384_67506175%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b26ca5a973d31cba21ca3774db78c3a8bbb6cd11' => 
    array (
      0 => 'tpl\\judgeRecordResult.html',
      1 => 1460254275,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5458570a4f2ce32384_67506175',
  'variables' => 
  array (
    'recordsArray' => 0,
    'val' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_570a4f2d188121_91267430',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_570a4f2d188121_91267430')) {
function content_570a4f2d188121_91267430 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '5458570a4f2ce32384_67506175';
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

		<center><img src="img/user1.png" style='max-height:160px;max-width:160px;' /></center>
		<table class="table table-hover table-bordered" contenteditable="true">
				<thead>
				<tr>
					<th>面试官姓名</th>
					<th>面试者姓名</th>
					<th>基本技能</th>
					<th>加分技能</th>
					<th>总体评价</th>
					<th>等级评价</th>
					<th>状态</th>
					<th>评价时间</th>
				</tr>
			</thead>
			<?php
$_from = $_smarty_tpl->tpl_vars['recordsArray']->value;
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
						<td><?php echo $_smarty_tpl->tpl_vars['val']->value['jname'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['val']->value['basic'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['val']->value['advance'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['val']->value['general'];?>
</td>
						<?php if ($_smarty_tpl->tpl_vars['val']->value['grade'] == '1') {?>
    						<td>A</td>
						<?php } elseif ($_smarty_tpl->tpl_vars['val']->value['grade'] == '2') {?>
   							<td>B</td>
   						<?php } elseif ($_smarty_tpl->tpl_vars['val']->value['grade'] == '3') {?>
   								<td>C</td>
   						<?php } elseif ($_smarty_tpl->tpl_vars['val']->value['grade'] == '4') {?>
   								<td>D</td>
						<?php }?>

						<?php if ($_smarty_tpl->tpl_vars['val']->value['status'] == 'A') {?>
							 <td>A轮面试</td>
							<?php } else { ?>
   							<td>B轮面试</td>
						<?php }?>	
						<td><?php echo $_smarty_tpl->tpl_vars['val']->value['time'];?>
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