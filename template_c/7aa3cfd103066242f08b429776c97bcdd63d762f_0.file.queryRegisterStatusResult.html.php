<?php /* Smarty version 3.1.27, created on 2016-04-12 09:48:33
         compiled from "tpl\queryRegisterStatusResult.html" */ ?>
<?php
/*%%SmartyHeaderCode:27114570c53f1980b32_73838189%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7aa3cfd103066242f08b429776c97bcdd63d762f' => 
    array (
      0 => 'tpl\\queryRegisterStatusResult.html',
      1 => 1460425707,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27114570c53f1980b32_73838189',
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_570c53f1a4bd68_07546198',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_570c53f1a4bd68_07546198')) {
function content_570c53f1a4bd68_07546198 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '27114570c53f1980b32_73838189';
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
	<body background="img/bg2.jpg" style="background-size:cover;" >
		
		<div class="elegant-aero" style="width:500px;height:380px;position:absolute;left:50%;margin-left:-250px;top:50%;margin-top:-190px;">

			<form action="queryRegisterStatus.php" method="post">
				<h1><b>查询结果</b></h1>
				<label>
					<span>编号:</span>
					<input type="text"  name="schoolnum" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['userid'];?>
" disabled="disabled" />
				</label>

				
				<label>
					<span>姓名:</span>
					<input type="text"  name="schoolnum" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
" disabled="disabled" />
				</label>


				<label>
					<span>班级:</span>
					<input type="text"  name="schoolnum" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['class'];?>
" disabled="disabled" />
				</label>


				<label>
					<span>电话:</span>
					<input type="text"  name="schoolnum" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['tel'];?>
" disabled="disabled" />
				</label>

				<label>
					<span>状态:</span>
					
						<?php if ($_smarty_tpl->tpl_vars['user']->value['status'] == '0') {?>
							
							<td><input type="text"  name="schoolnum" value="报名成功,请保持手机通畅,等待我们的通知" disabled="disabled" /></td>
						<?php } elseif ($_smarty_tpl->tpl_vars['user']->value['status'] == '-1') {?>
							<td><input type="text"  name="schoolnum" value="A轮面试中" disabled="disabled" /></td>
						<?php } elseif ($_smarty_tpl->tpl_vars['user']->value['status'] == 'A') {?>
							<td><input type="text"  name="schoolnum" value="等待B轮面试" disabled="disabled"/></td>
							<td></td>
						<?php } elseif ($_smarty_tpl->tpl_vars['user']->value['status'] == '-2') {?>
						<td><input type="text"  name="schoolnum" value="等待B轮面试" disabled="disabled" /></td>
							<td>B轮面试中</td>
   						<?php } elseif ($_smarty_tpl->tpl_vars['user']->value['status'] == 'C') {?>
   							<td><input type="text"  name="schoolnum" value="恭喜你,通过面试" disabled="disabled" /></td>
   							<td></td>
   						<?php } elseif ($_smarty_tpl->tpl_vars['user']->value['status'] == 'D') {?>	
   							<td><input type="text"  name="schoolnum" value="很遗憾，你通过面试,如果对我们工作室特别喜欢，可联系我们" disabled="disabled" /></td>
   							<td></td>	
						<?php } elseif ($_smarty_tpl->tpl_vars['user']->value['status'] == 'B') {?>
							<td><input type="text"  name="schoolnum" value="等待面试结果" disabled="disabled"/></td>
							 <td></td>
						<?php }?>

				</label>


			</form>

			 <a href="index.html" class="button button-raised button-primary button-pill">信息正确，返回主页</a>&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="message.html" class="button button-raised button-primary button-pill">信息错误，进入留言系统</a>
			
			
		</div>

	</body>
</html><?php }
}
?>