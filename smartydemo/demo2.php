<?php 
require './Smarty/Smarty.class.php';

$smarty = new Smarty();

//定义数组
$smarty->assign('stu',array('S002'=>'李白','S012'=>'杜甫','S013'=>'白居易','S009'=>'李清照','S021'=>'辛弃疾','S007'=>'李商隐'));


$smarty->assign('score','80');

$onearray = array (  
   "0" => 'home',  
   '1' => 'who',  
   '2'=> 'tank',  
   '3'=> 'what'  
  );  

$smarty->assign("onearray", $onearray); 

$smarty->display("demo2.html");

 ?>