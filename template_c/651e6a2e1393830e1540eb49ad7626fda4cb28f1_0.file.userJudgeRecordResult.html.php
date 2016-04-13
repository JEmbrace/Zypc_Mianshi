<?php /* Smarty version 3.1.27, created on 2016-04-12 10:25:36
         compiled from "tpl\userJudgeRecordResult.html" */ ?>
<?php
/*%%SmartyHeaderCode:12523570c5ca03011f3_00654623%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '651e6a2e1393830e1540eb49ad7626fda4cb28f1' => 
    array (
      0 => 'tpl\\userJudgeRecordResult.html',
      1 => 1460427933,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12523570c5ca03011f3_00654623',
  'variables' => 
  array (
    'recordsArray' => 0,
    'val' => 0,
    'schoolnum' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_570c5ca0439a47_79364743',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_570c5ca0439a47_79364743')) {
function content_570c5ca0439a47_79364743 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '12523570c5ca03011f3_00654623';
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
					<th>面试者姓名</th>
					<th>面试者学号</th>
					<th>面试者电话</th>
					<th>面试者班级</th>
					<th>面试者状态</th>
					<th>面试官姓名</th>
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
						<td><?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['schoolnum']->value;?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['val']->value['tel'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['val']->value['class'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['val']->value['status'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['val']->value['jname'];?>
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
						<?php } elseif ($_smarty_tpl->tpl_vars['val']->value['status'] == 'B') {?>
   							<td>B轮面试</td>
   						<?php } elseif ($_smarty_tpl->tpl_vars['val']->value['status'] == 'C') {?>
   							<td>通过面试</td>
   						<?php } else { ?>
   							<td>没有通过面试</td>
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

		<form action="finallyJudge.php" method="get" >

			<table align="center">
				<tr><td><input type="hidden" name="schoolnum" value='<?php echo $_smarty_tpl->tpl_vars['schoolnum']->value;?>
'></td></tr>
				<tr><td><input type="submit" name="submit1" value="通过"></td></tr>
				<tr><td><input type="submit" name="submit0" value="不通过"></td></tr>
			<table>

		</from>
		

</body>
</html><?php }
}
?>