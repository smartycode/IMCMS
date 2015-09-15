<?php
header ( 'Content-type: text/html; charset=utf-8' );
try{
	$db=new PDO("mysql:host=10.10.10.131;dbname=smart;charset=utf8","smartcode","wlzx20150910");
} catch (Exception $e) {
	echo "数据库连接错误，错误原因：".$e->getMessage();
}

?>