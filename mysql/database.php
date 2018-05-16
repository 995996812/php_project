<?php 


$servername = '127.0.0.1';

$username = 'root'; 

$password = '123';

$link = mysqli_connect($servername,$username,$password);

mysqli_select_db($link,'utf8');//设置字符集

$sql = "show databases";

$result = mysqli_query($link,$sql);

while ($rec = mysqli_fetch_array($result)) {

	echo "<br />".$rec[0];
	echo " <a href='tables.php?db={$rec[0]}'>查看表<a>";
}

 ?>