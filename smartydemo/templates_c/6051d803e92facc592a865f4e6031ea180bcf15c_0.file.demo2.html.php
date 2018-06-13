<?php
/* Smarty version 3.1.32, created on 2018-06-13 14:56:06
  from '/Users/admin/Sites/php_project/smartydemo/templates/demo2.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b20c006a40e57_75116962',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6051d803e92facc592a865f4e6031ea180bcf15c' => 
    array (
      0 => '/Users/admin/Sites/php_project/smartydemo/templates/demo2.html',
      1 => 1528872964,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b20c006a40e57_75116962 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>foreach</title>
	<style>
		.first{
			background-color: red;
		}
		.last{
			background-color: green;
		}
		.even{
			background-color: blue;
		}
	</style>
</head>
<body>
	<!-- 数组取值 -->
	<!-- <?php echo $_smarty_tpl->tpl_vars['stu']->value[1];?>
 -->
	<!-- forech的使用 -->
	<table width="500" border="1" bordercolor="#000000" align="center">
		<tr>
			<th>是否是第一个元素</th>
			<th>编号</th>
			<th>索引</th>
			<th>键</th>
			<th>值</th>
			<th>是否是最后一个元素</th>
		</tr>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['stu']->value, 'v', true, 'k');
$_smarty_tpl->tpl_vars['v']->show = ($_smarty_tpl->tpl_vars['v']->total > 0);
$_smarty_tpl->tpl_vars['v']->iteration = 0;
$_smarty_tpl->tpl_vars['v']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->iteration++;
$_smarty_tpl->tpl_vars['v']->index++;
$_smarty_tpl->tpl_vars['v']->first = !$_smarty_tpl->tpl_vars['v']->index;
$_smarty_tpl->tpl_vars['v']->last = $_smarty_tpl->tpl_vars['v']->iteration === $_smarty_tpl->tpl_vars['v']->total;
$__foreach_v_0_saved = $_smarty_tpl->tpl_vars['v'];
?>
		<?php if ($_smarty_tpl->tpl_vars['v']->first) {?>
			<tr class="first">
		<?php } elseif ($_smarty_tpl->tpl_vars['v']->last) {?>
			<tr class="last">
		<?php } elseif ($_smarty_tpl->tpl_vars['v']->iteration%2 == 0) {?>
			<tr class="even">
		<?php } else { ?>
			<tr>
		<?php }?>
			<td><?php echo $_smarty_tpl->tpl_vars['v']->first;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['v']->iteration;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['v']->index;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['v']->last;?>
</td>
		</tr>
		<?php
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_0_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</table>
	一共有<?php echo $_smarty_tpl->tpl_vars['v']->total;?>
条数据 <br>
	<?php echo $_smarty_tpl->tpl_vars['v']->show;?>
 <br>
	<!-- foreach中的关键字 
		@iteration 编号从1开始
		@index 索引从0开始
		@first 是否是第一个元素 是返回1 不是返回空
		@last 是否是最好一个元素 是返回1 不是返回空
		@total 一共有多少数据
		@show 数组是否为空  不为空返回1 为空返回空
	-->

	您的成绩是<?php echo $_smarty_tpl->tpl_vars['score']->value;?>
 <br>
	<?php if ($_smarty_tpl->tpl_vars['score']->value >= 90) {?>
		优<br>
	<?php } elseif ($_smarty_tpl->tpl_vars['score']->value >= 60) {?>
		中<br>
	<?php } else { ?>
		差<br>
	<?php }?>

	<!-- section循环 -->
<!--  
	<?php
$__section_one_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['onearray']->value) ? count($_loop) : max(0, (int) $_loop));
$_smarty_tpl->tpl_vars['__smarty_section_one'] = new Smarty_Variable(array('total' => $__section_one_0_loop));
if ($_smarty_tpl->tpl_vars['__smarty_section_one']->value['total'] !== 0) {
for ($_smarty_tpl->tpl_vars['__smarty_section_one']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_one']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_one']->value['iteration'] <= $_smarty_tpl->tpl_vars['__smarty_section_one']->value['total']; $_smarty_tpl->tpl_vars['__smarty_section_one']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_one']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_one']->value['index_prev'] = $_smarty_tpl->tpl_vars['__smarty_section_one']->value['index'] - 1;
$_smarty_tpl->tpl_vars['__smarty_section_one']->value['index_next'] = $_smarty_tpl->tpl_vars['__smarty_section_one']->value['index'] + 1;
$_smarty_tpl->tpl_vars['__smarty_section_one']->value['first'] = ($_smarty_tpl->tpl_vars['__smarty_section_one']->value['iteration'] === 1);
$_smarty_tpl->tpl_vars['__smarty_section_one']->value['last'] = ($_smarty_tpl->tpl_vars['__smarty_section_one']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_section_one']->value['total']);
?>  
 	index=<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_one']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_one']->value['index'] : null);?>
,  
 	index_prev=<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_one']->value['index_prev']) ? $_smarty_tpl->tpl_vars['__smarty_section_one']->value['index_prev'] : null);?>
,  
 	index_next=<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_one']->value['index_next']) ? $_smarty_tpl->tpl_vars['__smarty_section_one']->value['index_next'] : null);?>
,  
 	first=<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_one']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_section_one']->value['first'] : null);?>
,  
 	last=<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_one']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_section_one']->value['last'] : null);?>
,  
 	iteration =<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_one']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_one']->value['iteration'] : null);?>
,  
 	total=<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_one']->value['total']) ? $_smarty_tpl->tpl_vars['__smarty_section_one']->value['total'] : null);?>
,  
 	value=<?php echo $_smarty_tpl->tpl_vars['onearray']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_one']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_one']->value['index'] : null)];?>
<br />  
	<?php
}
}
?>  -->

	<!-- for循环 -->
	<?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 10+1 - (1) : 1-(10)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
		<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
 :11111 <br>
	<?php }
}
?>

	<!-- while循环 -->
	<?php $_smarty_tpl->_assignInScope('i', 1);?>
	<?php
 while (10 > $_smarty_tpl->tpl_vars['i']->value) {?>
		<?php echo $_smarty_tpl->tpl_vars['i']->value++;?>
:22222 <br>
	<?php }?>

</body>
</html><?php }
}
