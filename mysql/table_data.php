<?php 
require_once "./function.php";
$servername = '127.0.0.1';

$username = 'root'; 

$password = '123';

if (!empty($_GET['db'])) {
	$db = $_GET['db'];
}else{
	die('非法请求');
}

if (!empty($_GET['tab'])) {
	$tab = $_GET['tab'];
}else{
	die('非法请求');
}
$link = mysqli_connect($servername,$username,$password,$db);

mysqli_select_db($link,'utf8');//设置字符集

$sql = "select *from $tab";

$result = mysqli_query($link,$sql);

showTable($result);

 ?>