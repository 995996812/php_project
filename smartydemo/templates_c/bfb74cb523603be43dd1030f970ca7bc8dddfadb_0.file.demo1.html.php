<?php
/* Smarty version 3.1.32, created on 2018-06-12 14:33:44
  from '/Users/admin/Sites/php_project/smartydemo/templates/demo1.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b1f69481b49c3_32679251',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bfb74cb523603be43dd1030f970ca7bc8dddfadb' => 
    array (
      0 => '/Users/admin/Sites/php_project/smartydemo/templates/demo1.html',
      1 => 1528785223,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b1f69481b49c3_32679251 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TODO supply a title</title>
</head>
<body>
	<?php echo $_smarty_tpl->tpl_vars['name']->value;?>

	<!-- 获取php中定义的一个会话 -->
	<?php echo $_SESSION['country'];?>

	<?php echo $_COOKIE['school'];?>

</body>
</html><?php }
}
