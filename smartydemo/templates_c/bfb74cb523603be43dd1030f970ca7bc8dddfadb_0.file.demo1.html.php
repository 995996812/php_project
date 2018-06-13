<?php
/* Smarty version 3.1.32, created on 2018-06-12 18:08:30
  from '/Users/admin/Sites/php_project/smartydemo/templates/demo1.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b1f9b9e9c2e76_10641706',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bfb74cb523603be43dd1030f970ca7bc8dddfadb' => 
    array (
      0 => '/Users/admin/Sites/php_project/smartydemo/templates/demo1.html',
      1 => 1528798107,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b1f9b9e9c2e76_10641706 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TODO supply a title</title>
	<!-- 操作配置文件		 -->
	<!-- 导入配置文件 -->
	<?php
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, 'smarty.conf', 'two', 0);
?>

	<style>
		div{ width: <?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'width');?>
;height: <?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'height');?>
;border: <?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'border');?>
;background-color: <?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'backgroundcolor');?>
;}
	</style>
</head>
<body>

	<?php echo $_smarty_tpl->tpl_vars['name']->value;?>

	<!-- 获取php中定义的一个会话 -->
	<?php echo $_SESSION['country'];?>

	<!-- 获取php中定义的cookie -->
	<?php echo $_COOKIE['school'];?>
<br>	

	<?php echo $_smarty_tpl->tpl_vars['stu']->value[0];?>
<br>
	<?php echo $_smarty_tpl->tpl_vars['stu']->value[0];?>

	<hr>
	<?php echo $_smarty_tpl->tpl_vars['emp']->value['name'];?>
<br>
	<?php echo $_smarty_tpl->tpl_vars['emp']->value['name'];?>

	<hr>

	<!-- 读取配置文件 -->
	<!-- 取值 -->
	<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'host');?>
<br>
	<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'username');?>
<br>
	<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'pwd');?>
<br>
	<div></div>
</body>
</html><?php }
}
