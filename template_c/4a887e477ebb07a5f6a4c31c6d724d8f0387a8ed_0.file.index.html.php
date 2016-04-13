<?php /* Smarty version 3.1.27, created on 2016-04-07 21:11:11
         compiled from "E:\Apache24\htdocs\ZYPC2016\index.html" */ ?>
<?php
/*%%SmartyHeaderCode:1693657065c6f6c4d60_53988353%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a887e477ebb07a5f6a4c31c6d724d8f0387a8ed' => 
    array (
      0 => 'E:\\Apache24\\htdocs\\ZYPC2016\\index.html',
      1 => 1460030719,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1693657065c6f6c4d60_53988353',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57065c6f74d907_27687618',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57065c6f74d907_27687618')) {
function content_57065c6f74d907_27687618 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1693657065c6f6c4d60_53988353';
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>选择</title>
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body background="img/bg2.jpg" style="background-size:cover;">

		<section id="pricePlans">
			
			<ul id="plans">
				
				

				<li class="plan">
					<ul class="planContainer">
						<li class="title"><h2 class="bestPlanTitle">我要报名</h2></li>
						
						<li class="button"><a class="bestPlanButton" href="register1.html">开始报名</a></li>
					</ul>
				</li>	
				

				<li class="plan">
					<ul class="planContainer">
						<li class="title"><h2>了解我们</h2></li>		
						<li class="button"><a href="#">进入官网</a></li>
					</ul>
				</li>

				<li class="plan">
					<ul class="planContainer">
						<li class="title"><h2 class="bestPlanTitle">查询状态</h2></li>
						
						<li class="button"><a class="bestPlanButton" href="queryRegisterStatus.html">开始查询</a></li>
					</ul>
				</li>


				<li class="plan">
					<ul class="planContainer">
						<li class="title"><h2>留言系统</h2></li>		
						<li class="button"><a href="message.html">开始</a></li>
					</ul>
				</li>



				</div>
			</ul> <!-- End ul#plans -->
		</section>
	</body>
</html><?php }
}
?>