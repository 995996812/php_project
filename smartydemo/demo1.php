<?php 
require './Smarty/Smarty.class.php';


$smarty = new Smarty();
//变量的使用
$smarty->assign("name","Jess");
//定义会话
$_SESSION['country']='中国';
//定义cookie
setcookie('school','河质大');
//定义数组
$smarty->assign('stu',array('tom','berry','ketty'));
$smarty->assign('emp',array('name'=>'李白','sex'=>'男'));

$smarty->display("demo1.html");


 ?>