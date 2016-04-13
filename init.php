<?php
	require ('smarty/Smarty.class.php');
	$smarty = new Smarty();
	
	$smarty->left_delimiter="{";
	$smarty->right_delimiter="}";
	$smarty->template_dir="tpl";
	$smarty->compile_dir="template_c";
	$smarty->cache_dir="cache";
	
?>