<?php
/* Smarty version 3.1.32, created on 2018-06-13 17:29:35
  from '/Users/admin/Sites/php_project/smartydemo/layout/temp1.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b20e3ff603f28_10053429',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '416adadec8fb9fadc792a53370dc0458df06f68d' => 
    array (
      0 => '/Users/admin/Sites/php_project/smartydemo/layout/temp1.html',
      1 => 1528882174,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b20e3ff603f28_10053429 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		h1,h3{
			text-align: center;
		}
		strong{
			text-align: center;
		}
	</style>
</head>
<body>
	<h1>这是头</h1>
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15839329585b20e3ff603487_21375833', 'main');
?>

	<h3>这是脚</h3>
</body>
</html><?php }
/* {block 'main'} */
class Block_15839329585b20e3ff603487_21375833 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_15839329585b20e3ff603487_21375833',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'main'} */
}
