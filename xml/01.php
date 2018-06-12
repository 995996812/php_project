<?php 

$array = array(
	array('name'=>'PHP','type'=>'脚本语言'),
	array('name'=>'XML','type'=>'标记语言'),
	array('name'=>'C#','type'=>'高级语言')
);

$doc = new DOMDocument('1.0','utf-8');//设置版本号和字符编码

$doc->formatOutput=true; //设置格式化输出

$books = $doc->createElement('books');//创建一个元素节点

foreach ($array as $value) {
	
	$book = $doc->createElement('book');
	$books->appendChild($book);//在元素的罪名添加子元素
	$name = $doc->createElement('name',$value['name']);//创建name节点,并赋值
	$book->appendChild($name);

	$book->setAttribute('type',$value['type']);
}
$doc->appendChild($books);

$doc->save('books.xml');

echo "保存成功";
 ?>