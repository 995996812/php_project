<?php 

class A{

	function __call($methondName,$argument){

		echo "__call被调用了";
		echo "<br />";
	}

}

$obj = new A();

$obj->f1();

/*
目标; 设计一个类,这个类的实例,可以实现如下需求:
调用方法f1:
1. 传入1个参数,就返回其本身.
2. 传入2个参数,就返回平方和;
3. 传入3个参数,就返回立方和;
4. 其他参数形式错误
 */
/*
利用PHP的重载,实现的方法
 */
class B
{
	function __call($Func_name,$argument){
		if ($Func_name == 'f1') {
			$len = count($argument); //获取实参的数量
			if ($len<1 || $len >3) {
				trigger_error("illegal use",E_USER_ERROR);
			}else if($len == 1){
				return $argument[0];
			}else if ($len == 2) {
				return $argument[0] * $argument[0] + $argument[1] * $argument[1];
			}else if ($len == 3) {
				$v1 = $argument[0];
				$v2 = $argument[1];
				$v3 = $argument[2];
				return $v1*$v1*$v1 + pow($v2, 3) + pow($v3, 3);
			}
		}
	}
}

$obj2 = new B();

$v1 = $obj2->f1(1);
$v2 = $obj2->f1(1,2);
$v3 = $obj2->f1(1,2,3);

echo "v1 = $v1, v2 = $v2,  v3 = $v3";

 ?>