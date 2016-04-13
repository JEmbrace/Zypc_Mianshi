<?php /* Smarty version 3.1.27, created on 2016-04-12 10:22:04
         compiled from "tpl\pass.html" */ ?>
<?php
/*%%SmartyHeaderCode:27058570c5bcc794931_88641244%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2247b62c0e9ff8961012d8170fbf83849eb898cf' => 
    array (
      0 => 'tpl\\pass.html',
      1 => 1460427720,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27058570c5bcc794931_88641244',
  'variables' => 
  array (
    'passUser' => 0,
    'val' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_570c5bcc8639e1_70525153',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_570c5bcc8639e1_70525153')) {
function content_570c5bcc8639e1_70525153 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '27058570c5bcc794931_88641244';
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
	<link href="./css/list.css" rel="stylesheet" media="screen">
	<?php echo '<script'; ?>
 src="./js/bootstrap.min.js"><?php echo '</script'; ?>
>
	</head>
	<body >
		<?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

		<center><img src="img/user1.png" style='max-height:160px;max-width:160px;' /></center>
		<div style="width:500px;height:380px;position:absolute;left:50%;margin-left:-250px;top:50%;margin-top:auto;">
			<table class="gridtable" >
					<thead>
					<tr>
						<th>编号</th>
						<th>姓名</th>
						<th>学号</th>
						<th>电话</th>
						<th>班级</th>
						<th>面试记录</th>
					</tr>
				</thead>
				<?php
$_from = $_smarty_tpl->tpl_vars['passUser']->value;
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
						<tr>
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
							<td><a href="userJudgeRecordResult.php?schoolnum=<?php echo $_smarty_tpl->tpl_vars['val']->value['schoolnum'];?>
">点此查看面试记录</a></td>
							
						</tr>
					</tbody>
				<?php
$_smarty_tpl->tpl_vars['val'] = $foreach_val_Sav;
}
?>
			</table>
		</div>

</body>
</html><?php }
}
?>