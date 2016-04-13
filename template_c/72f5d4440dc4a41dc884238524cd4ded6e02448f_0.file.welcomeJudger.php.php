<?php /* Smarty version 3.1.27, created on 2016-04-06 15:32:55
         compiled from "E:\Apache24\htdocs\ZYPC2016\welcomeJudger.php" */ ?>
<?php
/*%%SmartyHeaderCode:141625704bba78bc018_53439733%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '72f5d4440dc4a41dc884238524cd4ded6e02448f' => 
    array (
      0 => 'E:\\Apache24\\htdocs\\ZYPC2016\\welcomeJudger.php',
      1 => 1459927910,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '141625704bba78bc018_53439733',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5704bba7db19c6_61457803',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5704bba7db19c6_61457803')) {
function content_5704bba7db19c6_61457803 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '141625704bba78bc018_53439733';
echo '<?php
	';?>require ('init.php');
	require ('sessionCheck.php');
	

	$smarty->assign('judgerName',$judgerName);
	$smarty->display("welcomeJudger.html");
		
	


<?php echo '?>';
}
}
?>