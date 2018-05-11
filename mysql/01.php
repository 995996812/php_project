<?php 

// $username = "root";
// $password = "123";

// echo "2222";

// $array = ["xiao","da","zhong","x","xxx"];

// foreach ($array as $key => $value) {
// 	# code...
// 	echo "<br />";
// 	echo "key值为".$key."value值为".$value;
// }
//二分查找算法
/*
前提：
	1.针对的是索引数组
	2.针对的是已经排好序的数组
*/
	//页面显示报错信息
	ini_set('display_errors', true); 
	error_reporting(E_ALL);
	$a = array( 1, 3, 11, 18, 19, 22, 25, 33, 34, 38, 44, 55, 56, 58, 60, 61, 66, 70, 77, 88, 90, 91, 93, 95, 98);

	$search = 133; //要找的数据

	$len = count($a); //数量，自然，最大的下标是len -1 

	function binary_search($arr, $s, $begin, $end){
		echo "开始值".$begin;
		echo "end值".$end;
		echo "<br />";
		if ($end < $begin) {
			# code...
			return false;
		}

		$mid = floor(($begin + $end) / 2);//定位中间的位置
		$mid_value = $arr[$mid]; //取得中间项的值

		if ($mid_value == $s) {
			return true;
		}else if($mid_value > $s){
			// if ($begin > $mid-1) {//如果结束为比开始的位置大了，表示肯定找不到了
			// 	return false;
			// }
			//中间项比查询值大，就去左边找
			$result = binary_search($arr, $s, $begin, $mid-1);
		}else if($mid_value < $s){
			// if ($mid+1 > $end) {//如果结束为比开始的位置大了，表示肯定找不到了
			// 	return false;
			// }
			//中间项比查询值小，就去右边找
			$result = binary_search($arr, $s, $mid+1, $end);
		}
		return $result;
	}
	//使用binary_search()函数从$a中的0到len-1位置找$search
	$v1 = binary_search($a, $search, 0, $len-1);

	echo "结果为：";var_dump($v1);

 ?>