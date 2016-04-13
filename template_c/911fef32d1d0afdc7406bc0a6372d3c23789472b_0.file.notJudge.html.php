<?php /* Smarty version 3.1.27, created on 2016-04-12 10:22:13
         compiled from "tpl\notJudge.html" */ ?>
<?php
/*%%SmartyHeaderCode:1152570c5bd5d2c5b5_32545429%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '911fef32d1d0afdc7406bc0a6372d3c23789472b' => 
    array (
      0 => 'tpl\\notJudge.html',
      1 => 1460427685,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1152570c5bd5d2c5b5_32545429',
  'variables' => 
  array (
    'notJudgeArray' => 0,
    'val' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_570c5bd5e03362_64049509',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_570c5bd5e03362_64049509')) {
function content_570c5bd5e03362_64049509 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1152570c5bd5d2c5b5_32545429';
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
	<link href="./css/list.css" rel="stylesheet" media="screen">
	<?php echo '<script'; ?>
 src="../js/bootstrap.min.js"><?php echo '</script'; ?>
>
	</head>
	<body >
		<?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

		<center><img src="img/user1.png" style='max-height:160px;max-width:160px;' /></center>
		
		<div style="width:500px;height:380px;position:absolute;left:50%;margin-left:-250px;top:50%;margin-top:auto;">
			<table class="gridtable" >
				
					<tr>
						<th>编号</th>
						<th>姓名</th>
						<th>学号</th>
						<th>电话</th>
						<th>班级</th>
						<th>开始面试</th>
						
					</tr>
				
				<?php
$_from = $_smarty_tpl->tpl_vars['notJudgeArray']->value;
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
							<td><a href="./userJudgeDeal.php?schoolnum=<?php echo $_smarty_tpl->tpl_vars['val']->value['schoolnum'];?>
">点此开始面试</a></td>
							
						</tr>
					
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