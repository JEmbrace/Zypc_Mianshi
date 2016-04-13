<?php /* Smarty version 3.1.27, created on 2016-04-08 10:01:54
         compiled from "tpl\rootChoice.html" */ ?>
<?php
/*%%SmartyHeaderCode:153045707111276b7f5_01653940%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd9e6deb5883d757485501d1a2a84e14dd406f8a' => 
    array (
      0 => 'tpl\\rootChoice.html',
      1 => 1460080907,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '153045707111276b7f5_01653940',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5707111280f924_09685740',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5707111280f924_09685740')) {
function content_5707111280f924_09685740 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '153045707111276b7f5_01653940';
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

	<body background="./img/bg.jpg" style="background-size:cover;" >
		<div style="width:500px;height:380px;position:absolute;left:50%;margin-left:-250px;top:50%;margin-top:-190px;">
 		<center>
 		 <a href="tpl/addJudger.html" class="button button-raised button-primary button-pill">添加面试官</a>
 		 <a href="./judgerList.php" class="button button-raised button-primary button-pill">面试官列表</a>
 		 <a href="./getMessage.php" class="button button-raised button-primary button-pill">添加面试官</a>
		</center>
		</div>
	</body>

</html><?php }
}
?>