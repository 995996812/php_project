<?php
/* Smarty version 3.1.32, created on 2018-06-13 15:42:29
  from '/Users/admin/Sites/php_project/smartydemo/templates/demo3.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b20cae583ff91_59034813',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b067640512c07aae046060f020e8947fba49c987' => 
    array (
      0 => '/Users/admin/Sites/php_project/smartydemo/templates/demo3.html',
      1 => 1528875747,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b20cae583ff91_59034813 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Users/admin/Sites/php_project/smartydemo/Smarty/plugins/function.html_checkboxes.php','function'=>'smarty_function_html_checkboxes',),1=>array('file'=>'/Users/admin/Sites/php_project/smartydemo/Smarty/plugins/function.html_options.php','function'=>'smarty_function_html_options',),));
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<!-- 爱好:<?php echo smarty_function_html_checkboxes(array('output'=>$_smarty_tpl->tpl_vars['output']->value,'values'=>$_smarty_tpl->tpl_vars['values']->value,'selected'=>$_smarty_tpl->tpl_vars['selected']->value,'name'=>'hobby','separator'=>'<br>'),$_smarty_tpl);?>
 -->

	爱好:<br> <?php echo smarty_function_html_checkboxes(array('options'=>$_smarty_tpl->tpl_vars['options']->value,'selected'=>$_smarty_tpl->tpl_vars['selected']->value,'name'=>'hobby','separator'=>'<br>'),$_smarty_tpl);?>

	<hr>
	<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['options']->value,'selected'=>$_smarty_tpl->tpl_vars['selected']->value,'name'=>'hobby'),$_smarty_tpl);?>

</body>
</html><?php }
}
