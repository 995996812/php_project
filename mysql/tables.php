<?php 

$servername = '127.0.0.1';

$username = 'root'; 

$password = '123';

var_dump($_GET['db']);

if (!empty($_GET['db'])) {
	$db = $_GET['db'];
}else{
	die('非法请求');
}

$link = mysqli_connect($servername,$username,$password,$db);

mysqli_select_db($link,'utf8');//设置字符集

$sql = "show tables";
$result = mysqli_query($link,$sql);

while ($rec = mysqli_fetch_array($result)) {

	echo "<br />".$rec[0];
	echo " <a href='table_struct.php?db=$db&tab={$rec[0]}'>查看结构<a>";
	echo " <a href='table_data.php?db=$db&tab={$rec[0]}'>查看数据<a>";
}
 ?>