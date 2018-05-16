<?php 
/**
 * 显示数据结构
 * @param  [type] $result 数据结果
 * @return [type]         [description]
 */
function showTable($result){

	if ($result === false) {
		echo "执行失败,请参考".mysqli_error();
	}else{
		echo "执行成功! 数据如下:";

		echo "<table border='1'>";

		$filed_count = mysqli_num_fields($result);//获取列数

		echo "<tr>";
		for ($i=0; $i < $filed_count; ++$i) { 
			$field_name = mysqli_fetch_field_direct($result,$i);//这个方法是替换mysql_field_name() 获取文件具体信息的方法
			echo "<th>".$field_name->name. "</th>"; //$field_name->name 获取文件名字
		}
		echo "</tr>";
		while ($rec = mysqli_fetch_array($result)) {
			echo "<tr>";
			for ($i=0; $i < $filed_count; ++$i) { 
				$field_info = mysqli_fetch_field_direct($result,$i);
            	echo "<td>". $rec[$field_info->name] . "</td>";
			}
			echo "</tr>";
		}

		echo "</table>";
	}
}

 ?>