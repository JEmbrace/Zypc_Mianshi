<?php

	/* 定义服务器的绝对路径 */
	define('WEB_ROOT',str_replace('\\','/',realpath(dirname(__FILE__))).'/');
	/* 定义Smarty目录的绝对路径 */
	define('SMARTY_PATH','smarty/');


	require WEB_ROOT.SMARTY_PATH.'Smarty.class.php';

	//echo WEB_ROOT;
	$smarty = new Smarty();
	
	$smarty->left_delimiter="{";
	$smarty->right_delimiter="}";
	$smarty->template_dir=WEB_ROOT."tpl";
	$smarty->compile_dir=WEB_ROOT."template_c";
	$smarty->cache_dir=WEB_ROOT."cache";
	
?>