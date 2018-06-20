<?php 
require './Smarty/Smarty.class.php';

$smarty = new Smarty();

// $smarty->assign('output',array('爬山','读书','游泳','看报'));
// $smarty->assign('values',array('a','b','c','d'));

$smarty->assign('options',array('a'=>'爬山','b'=>'读书','c'=>'游泳','d'=>'看报'));

$smarty->assign('selected',array('a','c'));
$smarty->display('demo3.html');

 ?>