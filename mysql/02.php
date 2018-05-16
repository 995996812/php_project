<?php 

$servername = '127.0.0.1';

$username = 'root'; 

$password = '123';

$dateBase = 'db1';

//1.链接数据库

$link = mysqli_connect($servername,$username,$password,$dateBase);

if (!$link) {

	echo "数据库链接失败,错误代码:".mysqli_connect_errno().'错误信息'.mysqli_connect_error();

}else{
	echo "数据库连接成功";
}

$result = mysqli_query($link,"use php514");

echo $result;


 ?>